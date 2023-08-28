@php 
    $VERSION = "?" . env('VERSION');
@endphp

<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/all.css') . $VERSION}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') . $VERSION }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') . $VERSION }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') . $VERSION }}" rel="stylesheet">    
    
    <link rel="shortcut icon" href="{{ asset('img/logo/logo.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/logo/logo.png')}}" sizes="180x180">
    <link rel="icon" type="image/png" href="{{ asset('img/logo/logo.png')}}" sizes="192x192">
    


    <meta name="csrf-token" content="{{ csrf_token() }}">  {{-- CSRFトークン --}}
    @yield('pagehead')
    <title>@yield('title')</title>


</head>

<style>


.pagetop {
    display: none;/* 非表示 */
    height: 50px;
    width: 50px;
    position: fixed;
    right: 1vh;
    bottom: 1vh;
    background-color:rgb(89,240, 250) ;
    opacity: 0.6;
    /* border: solid 1px #000;
    border-radius: 50%; */
    /* display: flex; */
    justify-content: center;
    align-items: center;
    z-index: 2;
}


/* activeクラスが付与されたとき */
.pagetop.active {
    display: flex;
}


.pagetop__arrow {
    height: 10px;
    width: 10px;
    border-top: 3px solid #f5f7f9;
    border-right: 3px solid#f5f7f9;
    transform: translateY(20%) rotate(-45deg);
}
</style>

<body>


    {{-- PC --}}
    <div class="d-none d-md-block w-100">

        <!--ヘッダー-->
        <header class="m-0 p-0">

            
            <!--▽▽ヘッダーロゴ▽▽-->
                <div class="">
                    <a class="" href="{{ route('index') }}">
                        <img id="" src="{{ asset('img/logo/tf_logo.png') }}" class="tf_logo" alt="tf_logo">
                    </a>
                </div>
            
            <!--△△ヘッダーロゴ△△-->


            
                <h3 class="m-0 p-0" style="line-height: 60px;">
                    たかすじファーム
                </h3>              
            

            {{-- <div class="title">                
                <p>
                    沖縄の太陽と風を詰め込んだ<br>絶品のマンゴーをお楽しみください。
                </p>
            </div> --}}


            <!--▽▽ヘッダーリスト▽▽-->
            
                <nav class="pc">  <!--pcクラスを追記-->
                    <ul>
                        <li>
                            <a href="{{ route('product') }}">
                                製品紹介
                            </a>
                        </li>
    
                        {{-- <li>
                            <a href="{{ route('forcorporation') }}">
                                法人用
                            </a>
                        </li> --}}
    
                        <li>
                            <a href="{{ route('inquiry') }}">
                                お問い合わせ
                            </a>
                        </li>
    
                        <li>
                            <a href="{{ route('farminfo') }}">
                                農園情報
                            </a>
                        </li>
                        
                        <li>
                            <a class="" href="{{ env('instagram_url')}}" target="_blank">
                                <img src="{{ asset('img/logo/instagram.png') }}" class="instagram_logo" alt="instagram">
                            </a>
                        </li>  


                        <button class='cart_logo_btn' data-bs-toggle='modal' data-bs-target='#purchase_modal'>
                            <img src="{{ asset('img/logo/cart.png') }}" class='cart_logo' alt="cart_logo">
                        </button>     


                    </ul>
                </nav>
            
            <!--△△ヘッダーリスト△△-->
            
        </header>

    </div>


    {{-- スマホ --}}
    <div class="d-block d-md-none w-100">

        <header class="p-0 m-0">

             <!--▽▽ヘッダーロゴ▽▽-->
             <div class="">
                <a class="p-0 m-0" href="{{ route('index') }}">
                    <img id="" src="{{ asset('img/logo/tf_logo.png') }}" class="tf_logo" alt="tf_logo">
                </a>
            </div>
            <!--△△ヘッダーロゴ△△-->
    
            <!--▽▽カートロゴ▽▽-->
            <button class='cart_logo_btn' data-bs-toggle='modal' data-bs-target='#purchase_modal'>
                <img src="{{ asset('img/logo/cart.png') }}" class='cart_logo' alt="cart_logo">
            </button>     
            <!--△△カートロゴ△△-->
            
            <!--▽▽ハンバーガーメニュー▽▽-->
            <div id="hamburger">                       
                <div class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!--△△ハンバーガーメニュー△△-->
    
    
            <!--▽▽ハンバーガーメニューのリスト▽▽-->
            <nav class="sm">
                <ul>
                    <li>
                        <a href="{{ route('product') }}">
                            <img id="" src="{{ asset('img/logo/0003.jpg') }}" class="product_logo" alt="tf_logo">
                            製品紹介
                        </a>
                    </li>

                    {{-- <li>
                        <a href="{{ route('forcorporation') }}">                            
                            <img id="" src="{{ asset('img/logo/0003.jpg') }}" class="product_logo" alt="tf_logo">
                            法人用
                        </a>
                    </li> --}}

                    <li>
                        <a href="{{ route('inquiry') }}">                            
                            <img id="" src="{{ asset('img/logo/0003.jpg') }}" class="product_logo" alt="tf_logo">
                            お問い合わせ
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('farminfo') }}">                            
                            <img id="" src="{{ asset('img/logo/0003.jpg') }}" class="product_logo" alt="tf_logo">
                            農園情報
                        </a>
                    </li>
                    
                    <li>
                        <a class="" href="{{ env('instagram_url')}}" target="_blank">                            
                            <img src="{{ asset('img/logo/instagram.png') }}" class="instagram_logo" alt="instagram">
                            instagram
                        </a>
                    </li>
                   
                    
                </ul>
            </nav>
            <!--△△ハンバーガーメニューのリスト△△-->

        </header>
        
    </div>

        
    

    <div id="empty_space" class="row p-0 m-0">

      
        
    </div>


    {{-- 購入案内モーダル --}}
    <div class="modal fade" id="purchase_modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="purchase_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="">ご購入を検討頂いている方へ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
               
                <div class="modal-body">
                    BASEからご購入はお願い致します。
                    <br>

                    参考:<a href="https://help.thebase.in/hc/ja/articles/115000085522-BASE" target="_blank">
                        <span style="color: blue">BASEとは
                        </span>
                        </a>
                    <br>
                    たかすじファーム:<a href="{{ env('base_url')}}" target="_blank">
                        <span style="color: blue">購入ページ
                        </span>
                        </a>
                    
                </div>

                <div class="modal-footer">               
                    <button type="button" id="" class="btn" data-bs-dismiss="modal">閉じる</button>
                </div>
            </div>
        </div>
    </div>




    <!-- ページトップへ戻るボタン -->
    {{-- <div id="page_top"><a href="#"></a></div> --}}
    <a class="pagetop" href="#"><div class="pagetop__arrow"></div></a>
    {{-- </div> --}}
  
    

@yield('content')



<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/fontawesome.js') }}"></script>


<!--▽▽jQuery▽▽-->
<script>


  $('#hamburger').on('click', function(){
    $('.icon').toggleClass('close');
    $('.sm').slideToggle();
  });

  $(window).on('scroll', function() {//スクロールしたとき、
    if ($(this).scrollTop() > 100) { //スクロール量が500px以上なら、
        $('.pagetop').addClass('active');    //activeクラスを付与し、
    } else {                         //500px未満なら、
        $('.pagetop').removeClass('active'); //activeクラスを外します。
    }
  });

</script>
<!--△△jQuery△△-->




@yield('pagejs')

</body>

</html>