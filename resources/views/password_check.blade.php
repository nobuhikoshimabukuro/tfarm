
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="http://127.0.0.1:8000/css/all.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/css/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/css/header.css" rel="stylesheet">    
    
    <link rel="shortcut icon" href="http://127.0.0.1:8000/img/logo/logo.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="http://127.0.0.1:8000/img/logo/logo.png" sizes="180x180">
    <link rel="icon" type="image/png" href="http://127.0.0.1:8000/img/logo/logo.png" sizes="192x192">
    


    <meta name="csrf-token" content="o0am4WfZK6qngjkdGJW6aRRcxmGYJzvDLQdf2ZWP">  
      

    <title>確認画面</title>


</head>

<style>

</style>

<body>
   


<div class="mt-3 text-center container">

    <div class="row justify-content-center">                        
        
        <div class="col-12 mt-5 text-center p-0">
            <h3>
                たかすじファームWEB開発中
            </h3>
        </div>


        <div class="col-11 col-md-8 border rounded" style="padding: 1.25rem">
            
            <form action="{{ route('password_check_process') }}" id='approve_form' method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="login_id" class="col-lg-4 col-form-label text-lg-right">パスワード</label>

                    <div class="col-lg-6">
                        
                        <input type="tel" name="password" id="password" value="" class="form-control text-end">

                    </div>
                </div>

            
                            

                <div class="form-group row">         
                    <div class="col-lg-10 text-right">
                        <button type="button" id='approve_button' class="btn btn-secondary">GO</button>
                    </div>
                    
                </div>

            </form>

        </div>
        
    </div>

</div>









<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script type="text/javascript">

$(function(){

    $(document).ready(function () {        
        $('#password').focus();
    });


    $("#approve_form").keypress(function(e) {

        if(e.which == 13) {            
            // 判定
            if( document.getElementById("approve_button") == document.activeElement ){
                
                LoginProcess();      

            }else if( document.getElementById("password") == document.activeElement ){

                $('#approve_button').focus();
                return false;

            }else{
                return false;
            }            
        }

    });    

    $('#approve_button').click(function () {        
        LoginProcess();
    });


    function LoginProcess(){

        //{{-- メッセージクリア --}}
        $('.ajax-msg').html('');
        $('.is-invalid').removeClass('is-invalid');
        
        var password = $("#password").val();    

        if(password == ""){
            $('#password').focus();        
            $("#password").addClass("is-invalid");            
            return false;
        }

    
        //{{-- マウスカーソルを待機中に --}}         
        document.body.style.cursor = 'wait';

        // ２重送信防止
        // 保存tを押したらdisabled, 10秒後にenable
        $(this).prop("disabled", true);

        // 確認画面へ画面遷移
        $('#approve_form').submit(); 

    }
});

</script>



</body>

</html>