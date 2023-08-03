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
    right:1vw;
    bottom:1vh;
    /* background-color: rgba(241, 182, 225, 0.3); */
    background-color:none;
    color:white;
}



</style>

<div id="main" class="mt-3 text-center container">


    <div class="fixed-area row">            

       
        <div class="col-12">

                <button class='' data-bs-toggle='modal' data-bs-target='#info_modal'> 
                        <i class="fas fa-shopping-cart"></i>
                    </button>

                
                
            </div>    
            
            
        
    </div>

    <div class="product-area row">            

        
        <div class="product-name-area col-12 m-0 p-0">
            <h3 class="product-name">
                アップルマンゴー
            </h3>           
        </div>    
    

        <div class="product-photo-area info-box col-12 col-xl-6 m-0">
            <img src="{{ asset('img/product/0001.jpg') }}" class="product-photo" alt="アップルマンゴー"> 
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

    <div class="product-area row">            

        
        <div class="product-name-area col-12 m-0 p-0">
            <h3 class="product-name">
                アップルマンゴー
            </h3>         
        </div>    
    

        <div class="product-photo-area info-box col-12 col-xl-6 m-0">
            <img src="{{ asset('img/product/0001.jpg') }}" class="product-photo" alt=""> 
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


    























    {{-- 登録/更新用モーダル --}}
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

</script>


@endsection

