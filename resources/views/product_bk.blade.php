@extends('common.layouts_app')

@section('pagehead')
@section('title', '製品紹介')  

@endsection
@section('content')

<style>


.scroll-box {
    display: flex;
    white-space: nowrap;
    overflow-x: hidden;        
}



.product-photo-area{    
    height: 50vh;
    padding: 1vh;
    max-width: 100%;
    min-width: 100%;

    display: flex;  /* 画像上下中央ぞろえ */
    justify-content: center;
    align-items: center;

}

.product-photo{    
    width: 90%;    
    height: 90%;    
}




.product-change-btn {
    /* color: #fff;
    background-color: #eb6100;
    margin: 0 2vh;
    border-bottom: 5px solid #b84c00;
    -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
    box-shadow: 0 3px 5px rgba(0, 0, 0, .3); */

    border: none;
    background: transparent;
    margin: 0 7vw;
    padding: 0;
}

.product-change-btn:hover {
 
    
}

.arrow-btn{
    font-size: 20px;
    font-weight: 600;
    color: blue;
}


.arrow-btn-area{
    margin-top: -10px;
}

.product-area{  
  margin-bottom: 1vh;
}

.product-name-area{
  /* background: linear-gradient(70deg, rgb(250, 222, 227), rgb(252, 224, 229)); */
}

.product-name{
  margin: 0;
  margin-top: 5px;
  padding: 0.5vh 0;
  color: #3b2525
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



#base_area{
    height: 100vh;
}

img {
    border-radius: 30px;
}

.product-area{        
    background-color:white;
}

@media (max-width: 768px) {

.product-area{    
    outline: 0.5px solid gray;
    outline-offset: -4px;    
    border-radius: 5px;
}

}

@media (min-width: 768px) {

    .product-area{    
        outline: 1px solid gray;
        outline-offset: -5px;        
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



    @php
        // 初期値
        $product_index = 0;
        $kinds_index = 0;
    @endphp

    @php
        $product_index = $product_index + 1;        
        $photo_name_array = array("1", "2", "3");
    @endphp

    <div id="" class="row m-0 p-0">        
    
        

        <div id="product{{$product_index}}" class="product-area col-12 col-md-6 m-0 p-0" data-selectkinds='1'>
        
                    
            <div class="product-name-area row m-0 p-0 text-center">
                <h3 class="product-name">
                    アップルマンゴー
                </h3>         
            </div>    
                    
            <div class="col-12 m-0 p-0">

                <div class="scroll-box">

                    <div class="product-photo-area kinds-{{++$kinds_index}}">
                        <img src="{{ asset('img/product/applemango/0001.jpg') }}" class="product-photo" alt=""> 
                    </div>

                    <div class="product-photo-area kinds-{{++$kinds_index}}">
                        <img src="{{ asset('img/product/applemango/0002.jpg') }}" class="product-photo" alt=""> 
                    </div>       

                    <div class="product-photo-area kinds-{{++$kinds_index}}">
                        <img src="{{ asset('img/product/applemango/0003.jpg') }}" class="product-photo" alt=""> 
                    </div>       
                 
                </div>       

                <div class="row m-0 p-0 arrow-btn-area">

                    <div class="col-6 m-0 p-0 text-end">                 
                       
                        <button class="product-change-btn direction-1 d-none"
                        data-targetproduct='{{$product_index}}'                    
                        data-direction='1'
                        >
                            <i class="fas fa-angle-double-left arrow-btn"></i>
                        </button>   
                    </div>

                    <div class="col-6 m-0 p-0 text-start" >                      
                        
                        <button class="product-change-btn direction-2"
                        data-targetproduct='{{$product_index}}'                    
                        data-direction='2'
                        >
                            <i class="fas fa-angle-double-right arrow-btn"></i>
                        </button>   
                        
                    </div>


                </div>

                <input type="hidden" id='product{{$product_index}}_kinds_count' value={{$kinds_index}}>
            </div>
        
            <div class="product-explanation-area col-12 m-0">
                <p class="product-explanation">
                    アップルマンゴーとは、熟すと果皮がリンゴのように真っ赤になるマンゴーを総称して「アップルマンゴー」と呼びます。 
                    そして、アップルマンゴーの代表的な品種が「アーウィン種」で、
                    果皮が赤くなるマンゴーの種類もいろいろあります。
                    日本国内の栽培は、96.5%がアーウィン種と言われているほど日本でポピュラーな品種です。
                </p>
            </div>

        
        

    </div>


    

        {{-- 製品紹介を増やす場合は以下をコピー --}}
    
        {{-- コピースタート地点 --}}


        @php
            $product_index = $product_index + 1;
            $kinds_index = 0;
            $photo_name_array = array("1", "2");
        @endphp

        
        <div id="product{{$product_index}}" class="product-area col-12 col-md-6 m-0 p-0" data-selectkinds='1'>
        
            
            <div class="product-name-area row m-0 p-0 text-center">
                <h3 class="product-name">
                    キーツマンゴー
                </h3>         
            </div>    


            <div class="col-12 m-0 p-0">     

                <div class="scroll-box">

                    <div class="product-photo-area kinds-{{++$kinds_index}}">
                        <img src="{{ asset('img/product/keatsmango/0001.jpg') }}" class="product-photo" alt=""> 
                    </div>               

                    <div class="product-photo-area kinds-{{++$kinds_index}}">                    
                        <img src="{{ asset('img/product/keatsmango/0002.jpg') }}" class="product-photo" alt=""> 
                    </div>       

                </div>       

                <div class="row m-0 p-0 arrow-btn-area">

                    <div class="col-6 m-0 p-0 text-end">                 
                       
                        <button class="product-change-btn direction-1 d-none"
                        data-targetproduct='{{$product_index}}'                    
                        data-direction='1'
                        >
                            <i class="fas fa-angle-double-left arrow-btn"></i>
                        </button>   
                    </div>

                    <div class="col-6 m-0 p-0 text-start" >                      
                        
                        <button class="product-change-btn direction-2"
                        data-targetproduct='{{$product_index}}'                    
                        data-direction='2'
                        >
                            <i class="fas fa-angle-double-right arrow-btn"></i>
                        </button>   
                        
                    </div>


                </div>

                <input type="hidden" id='product{{$product_index}}_kinds_count' value={{$kinds_index}}>
            </div>


            
            <div class="product-explanation-area col-12 m-0">
                <p class="product-explanation">
                    キーツマンゴーとは、マンゴーの品種のなかのひとつで、
                    収穫量が少なく市場にあまり出回らないことから「幻のマンゴー」や「マンゴーの王様」と呼ばれている。 
                    アップルマンゴーよりも糖度が高くなることもある幻のマンゴー。 夏の贅沢として一度は食べてほしい。            
                    
                </p>
            </div>

        </div>
    

        {{-- コピーゴール地点 --}}

    </div>




    






    <div class="modal fade" id="info_modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="info_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-fluid">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="info_modal_label"><span id="info_modal_title"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

              
                <div class="modal-body">  

                    <a href="{{ env('base_url')}}" target="_blank">BASEへ</a>
                </div>  

                
                <div class="modal-footer row">  

                    <div class="col-6 m-0 p-0 text-end">
                        <button type="button" id="" class="original_button close_modal_button" data-bs-dismiss="modal">閉じる</button>
                    </div>  
                </div>  

            </div>
        </div>
    </div>

    
</div>









@endsection

@section('pagejs')

<script type="text/javascript">

$('.product-change-btn').click(function () {

    //商品のindex取得
    var target_product = $(this).data('targetproduct');

    //左右の値(左 = 1 :: 右 = 2)
    var direction = $(this).data('direction');

    //商品のid
    var target_product_area = "#product" + target_product;    

    //商品のidから現在選択されている写真Noを取得
    var select_kinds = $(target_product_area).data('selectkinds');

    //次の写真Noをセット
    if(direction == 1){
        var next_select_kinds = select_kinds - 1;
    }else{
        var next_select_kinds = select_kinds + 1;
    }

    //画像総数を取得
    var kinds_count = $(target_product_area + '_kinds_count').val();

    //商品下部の左右ボタンの可視化
    $(target_product_area + " .product-change-btn").removeClass("d-none");


    if(0 >= next_select_kinds - 1){
        //左ボタンを消す
        $(target_product_area + " .direction-1").addClass("d-none");
    }

    if(kinds_count < next_select_kinds + 1){
        //右ボタンを消す
        $(target_product_area + " .direction-2").addClass("d-none");
    }


    $(target_product_area).data('selectkinds', next_select_kinds);    

    var target_scroll_box_area = target_product_area + ' .scroll-box';

    var scroll_width = $(target_scroll_box_area).width();    

    if(direction == 1){

        $(target_scroll_box_area).animate({
            scrollLeft: $(target_scroll_box_area).scrollLeft() - scroll_width //〇〇px左にスクロールする
        }, 300); //スクロールにかかる時間

    }else{

        $(target_scroll_box_area).animate({
            scrollLeft: $(target_scroll_box_area).scrollLeft() + scroll_width //〇〇px右にスクロールする
        }, 300); //スクロールにかかる時間

    }



});

</script>


@endsection

