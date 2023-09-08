@extends('common.layouts_app')

@section('pagehead')
@section('title', '製品紹介')  

@endsection
@section('content')

<style>

.product-area{  
  margin-bottom: 1vh;
  background-color:white;
}

.product-photo{    
    width: 95%;    
    height: 95%;    
}

.product-name-area{
  /* background: linear-gradient(70deg, rgb(250, 222, 227), rgb(252, 224, 229)); */
}

.product-name{
  margin: 0;
  margin-top: 5px;
  padding: 0.5vh 0;
  color: #3b2525;

  display: inline-block;
}

.test{
    width: 90%;
    /* background-color: red; */
    justify-content: center;     
    margin-left: 5%;
}



.main-photo-area{     
    top: 0;
    left: 0;
    width: 100%;
    height: 50vh;  
}

.photo-select-area{   
   overflow-x:scroll;     
   /* overflow-x:none;     */
}

.photo-select-scroll-area{   
    object-fit: contain;
    display: flex; 
    /* justify-content: center; */
}


.sub-photo-div {  
  min-width:14vh; 
  max-width:14vh; 
  max-height:10vh; 
  min-height:10vh;  
  padding: 1px; 
  
  
}


.photo_button {
    width:100%;    
    height:100%;
    border: none;
    background: transparent;
}

.sub-photo{     
    width:95%;    
    height:95%;
    object-fit: contain;
    
}


.select-border{
    border: 2px solid rgb(207, 114, 243);
}

.none-select-border{
    border: 2px solid rgb(241, 233, 193);
}

.scroll-btn-area{
    /* background-color: crimson; */
}



.scroll-btn{
    height: 100%;
    width: 100%;
    border: none;
    background: transparent;
}

.arrow_logo{
    font-size: 25px;
    font-weight: 600;
    color: rgb(207, 114, 243);
}


.product-explanation-area{
  text-align: left;
  padding: 0 1vh;
}

.product-explanation{
  text-align: left;
  color: #3b2525;
  font-size: 21px;
  padding: 1px;
}


@media (max-width: 768px) {

.product-area{    
    outline: 0.5px solid gray;
    outline-offset: -4px;    
    border-radius: 5px;
}

    .scroll-btn-area{
            display:none;
    }

    .main-photo-area img {
        /* border-radius: 30px; */
    }
}

@media (min-width: 768px) {

    .product-area{    
        outline: 1px solid gray;
        outline-offset: -5px;        
        border-radius: 30px;
    }

    .main-photo-area img {
        border-radius: 30px;
    }

}















</style>

<div id="main" class="mt-3 text-center container">

    <div id="" class="row">

        <div class="col-12 m-0 ">

                {{-- PC --}}
                <div class="d-none d-md-block w-100">
                    <h3>
                        沖縄の自然の恵みから生まれた最高のマンゴー
                    </h3>
                </div>
                
                {{-- スマホ --}}
                <div class="d-block d-md-none w-100">
                    <h3>
                        沖縄の自然の恵みから<br>生まれた最高のマンゴー
                    </h3>
                </div>
                    
            </div>

            <div class="col-12 col-md-6 m-0 "> 
                
            </div>

            <div class="col-12 col-md-6 m-0 "> 

            

            </div>


    </div>



    <div id="" class="row m-0 p-0">        
    
        @foreach($all_product_info_array as $product_info)

            @php
                $product_id = $product_info["product_id"];
                $product_name = $product_info["product_name"];
                $explanation = $product_info["explanation"];
                $product_info_array = $product_info["product_info_array"];
            @endphp




            <div id="product{{$product_id}}" class="product-area col-12 col-md-6 m-0 p-0">
                
                    
                <div class="product-name-area row m-0 p-0 text-center underline">
                    <div class="test">
                        <h3 class="product-name">
                            {{$product_name}}
                        </h3>
                    </div>         
                </div>    


                <div class="col-12 m-0 p-0">     

                    <div class="main-photo-area">                
                        <img src='{{$product_info_array[0]["asset_path"]}}' class="product-photo" alt="{{$product_info_array[0]["file_name"]}}">                                    
                    </div>       

                    
                    <div class="row">

                        <div class="col-1 m-0 p-0">   
                            
                        </div>       
                        
                        <div class="col-1 m-0 p-0 scroll-btn-area">   
                            <button class="scroll-btn"
                            data-direction='1'
                            data-productid="{{$product_id}}" 
                            >
                                    <i class="fas fa-angle-double-left arrow_logo"></i>
                            </button>                      
                        </div>       

                        <div class="photo-select-area col-10 col-md-8 m-0 p-0">

                            <div class="photo-select-scroll-area m-0 p-0">

                                
                                @foreach ($product_info_array as $index => $info)

                                    <div id='' class="sub-photo-div">                                                
                                        <button type="button" id="" class="photo_button m-0 p-0"                         
                                        data-productid="{{$product_id}}" 
                                        data-kinds="{{$index}}" 
                                        data-targetpath="{{ $info["asset_path"] }}" 
                                        data-filename="{{ $info["file_name"] }}" 
                                        >
                                            
                                                <img src="{{ $info["asset_path"] }}" 
                                                @if($index == 0) photo_select 
                                                    class="sub-photo kinds{{$index}} select-border" 
                                                @else
                                                    class="sub-photo kinds{{$index}} none-select-border" 
                                                @endif
                                                
                                                alt="{{ $info["file_name"] }}">
                                            
                                        </button>
                                    </div>

                                @endforeach		
                            

                            </div>                        

                        </div>
                        
                        <div class="col-1 scroll-btn-area m-0 p-0">   
                            <button class="scroll-btn"
                            data-direction='2'
                            data-productid="{{$product_id}}" 
                            >
                                <i class="fas fa-angle-double-right arrow_logo"></i>
                            </button>                      
                        </div>   

                        <div class="col-1 m-0 p-0">   
                            
                        </div>       

                    </div>

                    
                </div>


                
                <div class="product-explanation-area col-12 m-0">
                    <p class="product-explanation">
                        {{$explanation}}                        
                    </p>
                </div>

            </div>
		
		@endforeach		

    </div>

</div>









@endsection

@section('pagejs')

<script type="text/javascript">

    $(document).ready(function(){
        scroll_btn_change();      
    });

    // 画面幅が変更されたときに実行させたい処理内容
    $(window).resize(function(){ 
        scroll_btn_change();        
    });

    function scroll_btn_change(){

        var i = 1;
        while(true){

            var product_area = "#product" + i;
            //製品情報の表示があるかチェック            
            if(!($(product_area).length)){				
                break;							
            }
           
            //各クラスの宣言
            var photo_select_area_class = product_area + " .photo-select-area";
            var sub_photo_class = product_area + " .sub-photo-div";
            var scroll_btn_class = product_area + " .scroll-btn";

            //写真1枚あたりの横幅取得
            var sub_photo_width = $(sub_photo_class).width();

            //写真数取得
            var photo_count = $(sub_photo_class).length;

            //写真幅*写真数で横幅取得
            var all_width = sub_photo_width * photo_count;

            //スクロール可能エリアの横幅取得
            var select_area_width = $(photo_select_area_class).width();
            

            //スクロールボタンを一度不可視
            $(scroll_btn_class).addClass('d-none');

            if(select_area_width < all_width){
                //スクロール可能エリアより写真総横幅が超えた場合スクロールボタンを可視化
                $(scroll_btn_class).removeClass('d-none');
            }
           
            i++;
        }
  
           
    }


    $(".photo_button").on('click',function(e){
        
        
        var targetpath = $(this).data('targetpath');
        var productid = $(this).data('productid');
        var kinds = $(this).data('kinds');
        var file_name = $(this).data('filename');
        
        

        $('#product'+ productid + ' .sub-photo').removeClass('select-border');
        $('#product'+ productid + ' .sub-photo').removeClass('none-select-border');      


        $('#product'+ productid + ' .sub-photo').addClass('none-select-border');

        $('#product'+ productid + ' .kinds' + kinds).removeClass('none-select-border');      
        $('#product'+ productid + ' .kinds' + kinds).addClass('select-border');  
        
        
        
        $('#product'+ productid + ' .main-photo-area').empty();

        var Element = "";

        Element +="<img id=''class='product-photo' src='" + targetpath + "' alt='" + file_name + "'>";

        
        $('#product'+ productid + ' .main-photo-area').append(Element);           
       

    });




    $('.scroll-btn').click(function () {

        var productid = $(this).data('productid');


        //左右の値(左 = 1 :: 右 = 2)
        var direction = $(this).data('direction');

        var scroll_area = '#product' + productid + ' .photo-select-area';

        var scroll_range = 250;
       

        if(direction == 1){

            $(scroll_area).animate({
                scrollLeft: $(scroll_area).scrollLeft() - scroll_range //〇〇px左にスクロールする
            }, 300); //スクロールにかかる時間

        }else{

            $(scroll_area).animate({
                scrollLeft: $(scroll_area).scrollLeft() + scroll_range //〇〇px右にスクロールする
            }, 300); //スクロールにかかる時間

        }



      


    });


</script>


@endsection

