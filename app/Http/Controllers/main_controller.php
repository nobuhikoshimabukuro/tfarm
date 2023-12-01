<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryMail;

class main_controller extends Controller
{


    function index(Request $request)
    {       
        
        if(!$this->session_confirmation()){
            $desired_url = route('index');
            session()->flash('desired_url', $desired_url);
            return redirect()->route('password_check');    
        }

        return view('index');
    }


    function product(Request $request)
    {        
        if(!$this->session_confirmation()){
            $desired_url = route('product');
            session()->flash('desired_url', $desired_url);
            return redirect()->route('password_check');    
        }


        $all_product_info_array = array();
                
        $product_id = 1;

        while(true){ 
                    
            $product_info_array = array();
            $files = array();

            $path = public_path('img/product/'. $product_id .'/'.'*.*');
        
            $files = glob($path);

            $explanation = "";
            $product_name = "";

            if(count($files) == 0){

                //繰返しの強制終了
                break; 
            }

            foreach ($files as $file_path){

                $file = pathinfo($file_path);            
                $extension = $file['extension'];
                $base_name = $file['basename'];
                $file_name = $file['filename'];

                if($extension == 'txt'){

                    if($file_name == 'explanation'){
                        
                        $explanation = file_get_contents($file_path);
                        $explanation = mb_convert_encoding($explanation, 'UTF-8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS,SJIS-win');
                    }else{

                        $product_name = file_get_contents($file_path);
                        $product_name = mb_convert_encoding($product_name, 'UTF-8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS,SJIS-win');                        
                    }                    

                }else{

                    $asset_path = asset('img/product/' .$product_id. '/' . $base_name);                    
                    $info = array('asset_path' => $asset_path , 'file_name' => $file_name);
                    array_push($product_info_array, $info);

                }
    
                
            }


            if(count($product_info_array) > 0){
               
                //配列にアップロードファイルパスとファイル名を格納            
                $info_array = array('product_id' => $product_id , 'product_name' => $product_name , 'explanation' => $explanation , 'product_info_array' => $product_info_array);
                array_push($all_product_info_array, $info_array);
            }

            $product_id++;
        }
        
  
        $a = $all_product_info_array;



        

        return view('product', compact('all_product_info_array'));        
    }

    


    function farminfo(Request $request)
    {        
        if(!$this->session_confirmation()){
            $desired_url = route('farminfo');
            session()->flash('desired_url', $desired_url);
            return redirect()->route('password_check');    
        }
        return view('farminfo');
    }

    function forcorporation(Request $request)
    {        
        if(!$this->session_confirmation()){
            $desired_url = route('forcorporation');
            session()->flash('desired_url', $desired_url);
            return redirect()->route('password_check');    
        }
        return view('forcorporation');
    }

    function inquiry(Request $request)
    {        
        if(!$this->session_confirmation()){
            $desired_url = route('inquiry');
            session()->flash('desired_url', $desired_url);
            return redirect()->route('password_check');    
        }
        return view('inquiry');
    }


    function password_check(Request $request)
    {        
        return view('password_check');
    }

    function password_check_process(Request $request)
    {        
        try {


            $desired_url = $request->desired_url;
            $password = $request->password;
          

            $Today = Carbon::today();
            // $correct_password =  $Today->format('Y') . "t" . $Today->format('md'); 
            $correct_password = $Today->format('md'); 

            if($correct_password == $password){

                session()->put('login_flg', "1");

                if(is_Null($desired_url) || $desired_url == ""){
                    return redirect()->route('index');
                }else{
                    return redirect($desired_url); 
                }
                
                

            }else{
                // 認証失敗
                session()->flash('desired_url', $desired_url);
                session()->flash('password_check_nerror', '認証失敗');
                return back();
            }






         

        } catch (Exception $e) {

                
            $ErrorMessage = 'パスワード確認処理エラー';

            $ResultArray = array(
                "Result" => "error",
                "Message" => $ErrorMessage,
            );        

            return response()->json(['ResultArray' => $ResultArray]);

        }
    }

    

    //確認処理        
    function session_confirmation()
    {
        //返却用変数、初期値はfalse
        $Judge = false;

        // 指定キーがセッションに存在するかを調べる
        if ((session()->exists('login_flg'))) {

            $login_flg = session()->get('login_flg');

            //login_flgが'1'はsession確認OK
            if ($login_flg == 1) {
                $Judge = true;
            }
        }

        return $Judge;
    }

    //お問い合わせメール送信
    function send_inquiry_mail_process(Request $request)
    {        

        try {

            $now = Carbon::now();        

            $date_time =  $now->toDateTimeString();

            $inquirer_name = $request->inquirer_name;
            $mailaddress = $request->mailaddress;
            $question = $request->question;        


            // $log_text = "メール送信開始";
            // Log::error($log_text);

            //顧客に返信不要メール送信
            Mail::to($mailaddress)->send(new InquiryMail($inquirer_name , $mailaddress , $question , $date_time, 1));
            //管理者に詳細メール送信
            Mail::to(env('automatic_destination_mailaddress'))->send(new InquiryMail($inquirer_name , $mailaddress , $question , $date_time , 2));

        } catch (Exception $e) {
            
            // $log_text = $e->getMessage();
            // Log::error($log_text);

            $ErrorMessage = 'メール送信処理でエラーが発生しました。';

            $ResultArray = array(
                "Result" => "error",
                "Message" => $ErrorMessage,
            );        

            return response()->json(['ResultArray' => $ResultArray]);

        }


        $ResultArray = array(
            "Result" => "success",
            "Message" => '',
        );

        return response()->json(['ResultArray' => $ResultArray]);





    }


}
