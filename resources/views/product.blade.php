@extends('common.layouts_app')

@section('pagehead')
@section('title', '製品紹介')  

@endsection
@section('content')

<style>






.fixed-area{
    width:100px;
    height:100px;
    position:fixed;
    right:0;
    bottom:0;
    /* background-color: rgba(241, 182, 225, 0.3); */
    background-color:none;
    color:white;
}







.scroll-box {
    display: flex;
    white-space: nowrap;
    overflow-x: hidden;
    /* height: 45vh; */
}


.product-photo-area{    
    height: 45vh;
    padding: 1vh;
    max-width: 100%;
    min-width: 100%;
}

.product-photo{    
    /* width: 85%;     */
    height: 60%;
}







.product-change-btn {
    color: #fff;
    background-color: #eb6100;
    margin: 0 2vh;
    border-bottom: 5px solid #b84c00;
    -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
    box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
}

.product-change-btn:hover {
  margin-top: 3px;
  color: #fff;
  background: #f56500;
  border-bottom: 2px solid #b84c00;
}




#base_area{
    height: 100vh;
}



</style>

<div id="main" class="mt-3 text-center container">


    {{-- <div class="fixed-area row">            

        <button class='' data-bs-toggle='modal' data-bs-target='#info_modal'> 
            <i class="fas fa-shopping-cart"></i>
        </button>
        
    </div> --}}



    <div class="row">            

       
        
            
            
        
    </div>

    @php
        $index = 0;
    @endphp



    @php
        $index = $index + 1;
        $photo_name_array = array("栽培中のマンゴー", "箱詰めされたマンゴー", "おいそうなマンゴー");
    @endphp

    <div id="product{{$index}}" class="product-area row" data-selectkinds='1'>
        
        <div class="product-name-area col-12 m-0 p-0 text-center">
            <h3 class="product-name">
                アップルマンゴー
            </h3>         
        </div>    
    

        <div class="info-box col-12 col-xl-6 m-0 ">           

            <div class="scroll-box">

                <div class="product-photo-area kinds-1"
                data-leftbtn=''
                data-rightbtn='{{$photo_name_array[1]}}'
                >
                    {{-- <h2>{{ $photo_name_array[0] }}</h2> --}}
                    <img src="{{ asset('img/product/applemango/0001.jpg') }}" class="product-photo" alt="{{ $photo_name_array[0] }}"> 
                </div>

                <div class="product-photo-area kinds-2"
                data-leftbtn='{{$photo_name_array[0]}}'
                data-rightbtn='{{$photo_name_array[2]}}'
                >
                    {{-- <h2>{{ $photo_name_array[1] }}</h2> --}}
                    <img src="{{ asset('img/product/applemango/0002.jpg') }}" class="product-photo" alt="{{ $photo_name_array[1] }}"> 
                </div>       

                <div class="product-photo-area kinds-3"
                data-leftbtn='{{$photo_name_array[1]}}'
                data-rightbtn=''
                >
                    {{-- <h2>{{ $photo_name_array[2] }}</h2> --}}
                    <img src="{{ asset('img/product/applemango/0003.jpg') }}" class="product-photo" alt="{{ $photo_name_array[2] }}"> 
                </div>       

            </div>       

            <div class="row p-0 m-0">

                <div class="col-6 p-0 m-0 text-start">                 
                    <a class="btn product-change-btn product-change-left d-none"
                    data-targetproduct='{{$index}}'                                
                    >
                        <span class="product-change-left-btn"></span>
                    </a>
                </div>

                <div class="col-6 p-0 m-0 text-end" >
                    <a class="btn product-change-btn product-change-right"
                    data-targetproduct='{{$index}}'
                    >
                        <span class="product-change-right-btn">
                            {{ $photo_name_array[1] }}
                        </span>
                    </a>                    
                </div>


            </div>

            
        </div>
    

        <div class="product-explanation-area info-box col-12 col-xl-6 m-0">
            <p class="product-explanation">
                アップルマンゴーとは、熟すと果皮がリンゴのように真っ赤になるマンゴーを総称して「アップルマンゴー」と呼びます。 
                そして、アップルマンゴーの代表的な品種が「アーウィン種」で、
                果皮が赤くなるマンゴーの種類もいろいろあります。
                日本国内の栽培は、96.5%がアーウィン種と言われているほど日本でポピュラーな品種です。
            </p>
        </div>

    </div>






    @php
        $index = $index + 1;
        $photo_name_array = array("箱詰めキーツマンゴー", "おいしそうなキーツマンゴー");
    @endphp

    <div id="product{{$index}}" class="product-area row" data-selectkinds='1'>
        
        <div class="product-name-area col-12 m-0 p-0 text-center">
            <h3 class="product-name">
                キーツマンゴー
            </h3>         
        </div>    
    

        <div class="info-box col-12 col-xl-6 m-0 ">           

            <div class="scroll-box">

                <div class="product-photo-area kinds-1"
                data-leftbtn=''
                data-rightbtn='{{$photo_name_array[1]}}'
                >
                    {{-- <h2>{{ $photo_name_array[0] }}</h2> --}}
                    <img src="{{ asset('img/product/keatsmango/0001.jpg') }}" class="product-photo" alt="{{ $photo_name_array[0] }}"> 
                </div>               

                <div class="product-photo-area kinds-2"
                data-leftbtn='{{$photo_name_array[0]}}'
                data-rightbtn=''
                >
                    {{-- <h2>{{ $photo_name_array[1] }}</h2> --}}
                    <img src="{{ asset('img/product/keatsmango/0002.jpg') }}" class="product-photo" alt="{{ $photo_name_array[1] }}"> 
                </div>       

            </div>       

            <div class="row p-0 m-0">

                <div class="col-6 p-0 m-0 text-start">                 
                    <a class="btn product-change-btn product-change-left d-none"
                    data-targetproduct='{{$index}}'                                
                    >
                        <span class="product-change-left-btn"></span>
                    </a>
                </div>

                <div class="col-6 p-0 m-0 text-end" >
                    <a class="btn product-change-btn product-change-right"
                    data-targetproduct='{{$index}}'
                    >
                        <span class="product-change-right-btn">
                            {{ $photo_name_array[1] }}
                        </span>
                    </a>                    
                </div>


            </div>

            
        </div>
    

        <div class="product-explanation-area info-box col-12 col-xl-6 m-0">
            <p class="product-explanation">
                キーツマンゴーとは、マンゴーの品種のなかのひとつで、
                収穫量が少なく市場にあまり出回らないことから「幻のマンゴー」や「マンゴーの王様」と呼ばれている。 
                アップルマンゴーよりも糖度が高くなることもある幻のマンゴー。 夏の贅沢として一度は食べてほしい。            
                
            </p>
        </div>

    </div>











    <div id="base_area" class="row m-0 p-0">

        <iframe 
            src="{{ env('base_url')}}"
        ></iframe>


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

$('.product-change-left').click(function () {

    //商品のindex取得
    var target_product = $(this).data('targetproduct');

    //商品のid
    var target_product_area = "#product" + target_product;    

    //商品のidから現在選択されている写真Noを取得
    var select_kinds = $(target_product_area).data('selectkinds');

    var next_kinds = select_kinds - 1;

    var next_kinds_info = target_product_area + " .kinds-" + next_kinds;

    var left_btn = $(next_kinds_info).data('leftbtn');
    var right_btn = $(next_kinds_info).data('rightbtn');

    $(target_product_area + " .product-change-left-btn").html(left_btn);
    $(target_product_area + " .product-change-right-btn").html(right_btn);

    //商品下部のボタンの可視化
    $(target_product_area + " .product-change-btn").removeClass("d-none");

    if(left_btn == ""){
        $(target_product_area + " .product-change-left").addClass("d-none");   
    }

    if(right_btn == ""){
        $(target_product_area + " .product-change-right").addClass("d-none");
    }

    $(target_product_area).data('selectkinds', next_kinds);    

    

    var target_scroll_box_area = target_product_area + ' .scroll-box';

    var scroll_width = $(target_scroll_box_area).width();    

    $(target_scroll_box_area).animate({
        scrollLeft: $(target_scroll_box_area).scrollLeft() - scroll_width //〇〇px左にスクロールする
    }, 300); //スクロールにかかる時間

});


$('.product-change-right').click(function () {

    //商品のindex取得
    var target_product = $(this).data('targetproduct');

    //商品のid
    var target_product_area = "#product" + target_product;    

    //商品のidから現在選択されている写真Noを取得
    var select_kinds = $(target_product_area).data('selectkinds');

    var next_kinds = select_kinds + 1;

    var next_kinds_info = target_product_area + " .kinds-" + next_kinds;

    var left_btn = $(next_kinds_info).data('leftbtn');
    var right_btn = $(next_kinds_info).data('rightbtn');

    $(target_product_area + " .product-change-left-btn").html(left_btn);
    $(target_product_area + " .product-change-right-btn").html(right_btn);

    //商品下部のボタンの可視化
    $(target_product_area + " .product-change-btn").removeClass("d-none");

    if(left_btn == ""){
        $(target_product_area + " .product-change-left").addClass("d-none");   
    }

    if(right_btn == ""){
        $(target_product_area + " .product-change-right").addClass("d-none");
    }

    $(target_product_area).data('selectkinds', next_kinds);    

    
    var target_scroll_box_area = target_product_area + ' .scroll-box';

    var scroll_width = $(target_scroll_box_area).width();
     

    $(target_scroll_box_area).animate({
        scrollLeft: $(target_scroll_box_area).scrollLeft() + scroll_width //〇〇px右にスクロールする
    }, 300); //スクロールにかかる時間

});

</script>


@endsection

