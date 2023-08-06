@extends('common.layouts_app')

@section('pagehead')
@section('title', 'お問い合わせ')  

@endsection
@section('content')

<style>
.qa-007 {
    /* max-width: 500px; */
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 4px 4px rgb(0 0 0 / 2%), 0 2px 3px -2px rgba(0 0 0 / 5%);
    background-color: #fff;
}

.qa-007 summary {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    padding: 1em 2em 1em 3em;
    color: #333333;
    font-weight: 600;
    cursor: pointer;
}

.qa-007 summary::before,
.qa-007 p::before {
    position: absolute;
    left: 1em;
    font-weight: 600;
    font-size: 1.3em;
}

.qa-007 summary::before {
    color: #75bbff;
    content: "Q";
}

.qa-007 summary::after {
    transform: translateY(-25%) rotate(45deg);
    width: 7px;
    height: 7px;
    margin-left: 10px;
    border-bottom: 3px solid #333333b3;
    border-right: 3px solid #333333b3;
    content: '';
    transition: transform .5s;
}

.qa-007[open] summary::after {
    transform: rotate(225deg);
}

.qa-007 p {
    position: relative;
    transform: translateY(-10px);
    opacity: 0;
    margin: 0;
    padding: .3em 3em 1.5em;
    color: #333;
    transition: transform .5s, opacity .5s;
}

.qa-007[open] p {
    transform: none;
    opacity: 1;
}

.qa-007 p::before {
    color: #ff8d8d;
    line-height: 1.2;
    content: "A";
}










</style>

<div id="main" class="mt-3 container">




    <details class="qa-007">
        <summary>これはどのようなテンプレートですか？</summary>
        <p>白背景にシャドウを付けた、アコーディオンとして開閉できるQ&Aです。</p>
    </details>
    <details class="qa-007">
        <summary>どのような特徴がありますか？</summary>
        <p>コンパクトに見せられるので、質問の数が多い場合などにおすすめです。</p>
    </details>






    <form action="{{ route('send_inquiry_mail_process') }}" id='send_mail_form' method="post" enctype="multipart/form-data">
        @csrf

        <div class="product-area row">            
        
            <div class="col-12 col-xl-6 m-0">
                ここに説明書き   
            </div>
        

            <div class="col-12 col-xl-6 m-0">
                <table style="min-width: 100%">

                    <tr>
                        <th class="text-start">
                            氏名
                        </th>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" name="inquirer_name" id="inquirer_name" value="" class="form-control text-start">
                        </td>
                    </tr>

                    <tr>
                        <th class="text-start">
                            メールアドレス
                        </th>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" name="mailaddress" id="mailaddress" value="" class="form-control text-start">                                
                        </td>
                    </tr>

                    <tr>
                        <th class="text-start">
                            お問い合わせ
                        </th>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" name="question" id="question" value="" class="form-control text-start">                                
                        </td>
                    </tr>

                    <tr>
                        <td class="text-end">
                            <button type="button" id='send_mail_button' class="btn btn-secondary">問い合わせる</button>                            
                        </td>
                    </tr>

                </table>

                <div id="message_area">
                </div>
                


            </div>

        </div>


    </form>



        
    
    
</div>









@endsection

@section('pagejs')

<script type="text/javascript">


    $(document).on("click", "#send_mail_button", function (e) {
        SendMail();
    });



    function SendMail(){

        var judge = true;

        //{{-- メッセージクリア --}}
        $('#message_area').html('');
        $('.is-invalid').removeClass('is-invalid');

        var question = $("#question").val();        

        if(question == ""){
            $("#question").addClass("is-invalid");   
            $('#question').focus();               
            judge = false;
        }

        var mailaddress = $("#mailaddress").val();        

        if(mailaddress == ""){
            $("#mailaddress").addClass("is-invalid");   
            $('#mailaddress').focus();               
            judge = false;
        }

        var inquirer_name = $("#inquirer_name").val();        

        if(inquirer_name == ""){
            $("#inquirer_name").addClass("is-invalid");   
            $('#inquirer_name').focus();               
            judge = false;
        }
        

        if(judge == false){
            return false;
        }



        var display_html = '';
            display_html = '<div class="text-start">';
            display_html += '<li class="text-start">メール送信中</li>';
            display_html += '</div>';
        $('#message_area').html(display_html);

        let f = $('#send_mail_form');


        $.ajax({
            url: f.prop('action'), // 送信先
            type: f.prop('method'),
            dataType: 'json',
            data: f.serialize(),
        })
            // 送信成功
            .done(function (data, textStatus, jqXHR) {
                
                //{{-- ボタン有効 --}}
                $('#send_mail_button').prop("disabled", false);
                
                var ResultArray = data.ResultArray;

                var Result = ResultArray["Result"];

                

                if(Result=='success'){
                    
                    display_html = '<div class="text-start">';
                    display_html += 'メールを送信しました。';
                    display_html += '</div>';

                    $('#message_area').html(display_html);                   

                    $("html,body").animate({
                        scrollTop: 0
                    }, "300");          


                }else{

                    var ErrorMessage = ResultArray["Message"];

                    
                    
                    display_html = '<div class="alert alert-danger text-start">';
                    display_html += '<li class="text-start">' + ErrorMessage + '</li>';
                    display_html += '</div>';

                        //{{-- アラート --}}
                    $('#message_area').html(display_html);
                    //{{-- 画面上部へ --}}

                    $("html,body").animate({
                        scrollTop: 0
                    }, "300");                 

                }

            
            })

            // 送信失敗
            .fail(function (data, textStatus, errorThrown) {
                
                
                display_html = '<div class="alert alert-danger text-start">';
                display_html += '<li class="text-start">メール送信処理でエラーが発生しました。</li>';
                display_html += '</div>';

                //{{-- アラート --}}
                $('#message_area').html(display_html);
                //{{-- 画面上部へ --}}
                $("html,body").animate({
                    scrollTop: 0
                }, "300");
               

            });


    }

</script>


@endsection

