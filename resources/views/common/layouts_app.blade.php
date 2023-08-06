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

/* ページトップへ戻るボタン */
/* .page-top {
  display: none;
  position: fixed;
  right: 0;
  bottom: 0;
  padding: 20px 10px;
  border-radius: 8px;
  background-color: rgba(153, 153, 153, 0.9);
  color: #fff;
  cursor: pointer;
} */

.page-top {
  display: none;/* 非表示 */
  position: fixed;/* ページ右下に固定 */
  right: 0;
  bottom: 0;  
  /*1色パターン：border-rightだけに色指定*/
  border-top: 50px solid transparent;
  border-right: 50px solid #f6da69;
  cursor: pointer;/* カーソルをポインターに */
}
/* activeクラスが付与されたとき */
.page-top.active {
  display: block;
}
/* ホバーしたとき */
.page-top:hover {
  opacity: 0.8;
  transition: 0.3s;
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
    
                        <li>
                            <a href="{{ route('forcorporation') }}">
                                法人用
                            </a>
                        </li>
    
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

                    <li>
                        <a href="{{ route('forcorporation') }}">                            
                            <img id="" src="{{ asset('img/logo/0003.jpg') }}" class="product_logo" alt="tf_logo">
                            法人用
                        </a>
                    </li>

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


    <!-- ページトップへ戻るボタン -->
    {{-- <div class="page-top"> --}}
        <a href="#" class="page-top">            
         </a>
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
    if ($(this).scrollTop() > 500) { //スクロール量が500px以上なら、
        $('.page-top').addClass('active');    //activeクラスを付与し、
    } else {                         //500px未満なら、
        $('.page-top').removeClass('active'); //activeクラスを外します。
    }
  });

</script>
<!--△△jQuery△△-->




@yield('pagejs')

</body>

</html>