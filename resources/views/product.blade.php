@extends('common.layouts_app')

@section('pagehead')
@section('title', '製品紹介')  

@endsection
@section('content')

<style>

.product-area{  
  margin-bottom: 1vh;
  padding: 1vh;  
}

.product-inner-area{  
    background-color: rgb(248, 248, 242);
    border: 0.5px solid rgb(248, 248, 215); 
    border-radius: 10px;
    height: 100%;
}

.product-photo{    
    width: 100%;    
    height:  100%;
    object-fit: contain; 
}

.product-name-area{
  /* background: linear-gradient(70deg, rgb(250, 222, 227), rgb(252, 224, 229)); */
}


.product-name{
  margin: 0;  
  padding: 0.5vh 0;
  color: #3b2525;
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
    width: 100%;    
    height:  100%;
    object-fit: contain;   
}


.select-border{
    border: 2px solid rgb(207, 114, 243);
}

.none-select-border{
    border: 2px solid rgb(241, 233, 193);
}

.scroll-btn-area{    
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


.arrow-area{
    display: flex;
    justify-content: center; /*左右中央揃え*/
    align-items: center;     /*上下中央揃え*/
}

/* PC用 */
@media (min-width: 768px) {

    .main-photo-area img {
        border-radius: 10px;
    }

    .landscape_image {
        border-radius: 10px;
    }

    .arrow-area .arrow_logo{
        display:none;
    }

    .sub-photo{     
        opacity: 0.8;    
    }

    .sub-photo:hover{         
        opacity: 1;
}
    
}

/* モバイル用 */
@media (max-width: 768px) {

    .scroll-btn-area{
        display:none;
    }    

    .arrow-area .arrow_logo{
        font-size: 20px;        
        opacity: 0.4;
    }   
}





.test{
    /* background-color: rgba(247, 230, 242, 0.5); */
    text-decoration:underline;
}





</style>

<div id="main" class="mt-3 text-center container">

   
    <div id="" class="row m-0 p-0">   
        
        <div class="col-12 m-0 ">

            <h3 class="test text-start">
                製品紹介
             </h3>
                
        </div>
    
        @foreach($all_product_info_array as $product_info)

            @php
                $product_id = $product_info["product_id"];
                $product_name = $product_info["product_name"];
                $explanation = $product_info["explanation"];
                $product_info_array = $product_info["product_info_array"];
            @endphp




            <div id="product{{$product_id}}" class="product-area col-12 col-md-6 m-0">

                <div id="" class="product-inner-area">
                    
                    
                        
                    <div class="product-name-area row m-0 p-0 text-center">                        
                        <h3 class="product-name">
                            {{$product_name}}
                        </h3>                        
                    </div>    


                    <div class="col-12 m-0 p-0">     

                        <div class="main-photo-area">                
                            <img src='{{$product_info_array[0]["asset_path"]}}' class="product-photo" alt="{{$product_info_array[0]["file_name"]}}">                                    
                        </div>       

                        
                        <div class="row">

                            <div class="col-1 m-0 p-0 arrow-area">   
                                {{-- モバイル用矢印 --}}
                                <i class="fas fa-angle-double-left arrow_logo"></i>                                
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

                            <div class="col-1 m-0 p-0 arrow-area">
                                {{-- モバイル用矢印 --}}
                                <i class="fas fa-angle-double-right arrow_logo"></i>
                            </div>       

                        </div>

                        
                    </div>


                    
                    <div class="product-explanation-area col-12 m-0">
                        <p class="product-explanation">
                            {{$explanation}}                        
                        </p>
                    </div>

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
            var arrow_area_class = product_area + " .arrow-area .arrow_logo";

            //写真1枚あたりの横幅取得
            var sub_photo_width = $(sub_photo_class).width();

            //写真数取得
            var photo_count = $(sub_photo_class).length;

            //写真幅*写真数で横幅取得
            var all_width = sub_photo_width * photo_count;

            //スクロール可能エリアの横幅取得
            var select_area_width = $(photo_select_area_class).width();
            

            //スクロールボタンとモバイル用矢印を一度不可視
            $(scroll_btn_class).addClass('d-none');
            $(arrow_area_class).addClass('d-none');

            if(select_area_width < all_width){
                //スクロール可能エリアより写真総横幅が超えた場合スクロールボタンとモバイル用矢印可視化
                $(scroll_btn_class).removeClass('d-none');
                $(arrow_area_class).removeClass('d-none');
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

