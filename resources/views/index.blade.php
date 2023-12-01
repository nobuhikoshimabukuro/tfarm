@extends('common.layouts_app')

@section('pagehead')
@section('title', 'たかすじファーム')  

@endsection
@section('content')

<style>


.contents{
  margin: 1vh 0;
}

.top-page-phot-area {
  position: relative;  
  width: 100%;    
}

.image {
  top:0;
  left: 0;
  position: absolute;  
  width: 100%;
  height: 100%;
  opacity: 0;
  animation: change-img-anim 30s infinite;
}

.image:nth-of-type(1) {
  animation-delay: 0s;
}
.image:nth-of-type(2) {
  animation-delay: 10s;
}
.image:nth-of-type(3) {
  animation-delay: 20s;
}

@keyframes change-img-anim {
  0%{ opacity: 0;}
  10%{ opacity: 1;}
  90%{ opacity: 1;}
  100%{ opacity: 0;}
}



.vertical {
  writing-mode: vertical-rl;  
  background-color: rgba(245, 195, 230, 0.4);
  color: rgb(39, 30, 7);
  font-weight: 600;
}

.text-1 {
  position: absolute;    
}

.text-2 {
  position: absolute; 
}

.text-3 {
  position: absolute;  
}

/* PC用 */
@media (min-width: 768px) {

  .top-page-phot-area { 
    height: 70vh;
  }

  .vertical {    
    font-size: 40px;      
  }

  .text-1 {    
    top: 20px;
    right: 90px;
  }

  .text-2 {    
    top: 80px;
    right: 160px;
  }

  .text-3 {    
    top: 140px;
    right: 230px;
  }


  .greeting p{  
    font-size: 20px;  
    font-weight: 500;
  }


}

/* モバイル用 */
@media (max-width: 768px) {

  .top-page-phot-area {
    height: 50vh;
  }

  .vertical {    
    font-size: 25px;
  }

  .text-1 {    
    top: 10px;
    right: 10px;
  }

  .text-2 {    
    top: 50px;
    right: 50px;
  }

  .text-3 {    
    top: 90px;
    right: 90px;
  }

  .greeting p{  
    font-size: 18px;  
  }

}


/* .title{
  border-top: 1px solid #333;
  border-bottom: 1px solid #333;
} */

.contents h4{
  margin: 0 5px;
}


.greeting{
  padding: 1vh;
  background-color: rgba(250, 247, 249, 0.7);
  height: 100%;
}

.greeting p{  
  font-size: 20px;
  color: #250f12;
  /* font-family:"ヒラギノ丸ゴ Pro W4","ヒラギノ丸ゴ Pro","Hiragino Maru Gothic Pro","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro","HG丸ｺﾞｼｯｸM-PRO","HGMaruGothicMPRO"; */
}


.title{
  padding-top: 1px;
  padding-bottom: 1px;
  font-weight: bold;
  font-size: 16px;
  position: relative;
  text-align: left;
}
.title::before{
  content: '';
  position: absolute;
  bottom: -3px;
  width: 100%;
  height: 3px;
  background: linear-gradient(
    to right, 
    #f98469 0%, #f98469 25%, /*ピンク*/
    #ffd12a 25%, #ffd12a 50%, /*黄色*/
    #a4de32 50%, #a4de32 75%, /*緑*/
    #91c0f1 75%, #91c0f1 100% /*青*/
  );
}

.underline{
  border-bottom: dotted 2px blue;
}


</style>

  {{-- スマホ --}}
  {{-- <div class="d-block d-md-none w-100">
    <div class="row p-0 m-0">
      <img src="{{ asset('img/top/0001.jpg') }}" class="p-0 m-0">
    </div>   
  </div>    --}}

  {{-- PC --}}
  {{-- <div class="d-none d-md-block w-100">
    <div class="row p-0 m-0">
      <img src="{{ asset('img/top/0001.jpg') }}" class="p-0 m-0">
    </div>   
  </div>    --}}



  

  

    



<div class="mt-3 text-center container">

  <div class="contents row p-0">

    <div class="col-12 m-0 p-0">
      
      <div class="top-page-phot-area">

        {{-- PC --}}
        <div class="wide d-none d-md-block w-100">

        </div> 

        {{-- スマホ --}}
        <div class="d-block d-md-none w-100">

        </div> 
        <img class="image" src="{{ asset('img/top/0001.jpg') }}">        
        <img class="image" src="{{ asset('img/top/0003.jpg') }}">
        <img class="image" src="{{ asset('img/top/0002.jpg') }}">


        <div class="text-area text-1">
          {{-- <p class="vertical">沖縄の自然の恵みから生まれた最高のマンゴー</p>       --}}
          <p class="vertical">沖縄の自然の</p>          
        </div> 

        <div class="text-area text-2">
          <p class="vertical">恵みから生まれた</p>
        </div> 

        <div class="text-area text-3">
          <p class="vertical">最高のマンゴー</p>
        </div> 
        
     
        
      </div>  

    </div>  


  </div> 

  
  <div class="contents row p-0">
    {{-- <img src="{{ asset('img/top/1000.jpg') }}" class="p-0 m-0"> --}}

    <div id="" class="col-12 col-md-6 m-0 p-0">

      <div id="" class="title">
        <h4 class="p-0 text-start">ご挨拶</h4>
      </div> 

      <div id="" class="greeting">

        <p class="text-start">
          こんにちは!!沖縄県宜野座村でマンゴー農家を営んでいるたかすじファームと申します。
          沖縄の自然の力を借り、1つ1つ大切に栽培しております。
          お客様にご満足いただける、安心で美味しいマンゴーをお届けいたします。
          <br>
          栽培しているマンゴーは<a href="{{ route('product') }}" class="underline">製品紹介ページ</a>でご覧ください。
          <br>
          <br>
          皆様に直接購入して頂けるよう<a href="{{env('base_url') }}" class="underline" target="_blank">インターネット販売（BASE）</a>を行っております。
          <br>          
          <span class="emphasis item-flash">2023年の収穫分は多くのお客様からのご好評によりは完売致しました。
          <br>
          誠にありがとうございました。</span>
          <br>
          また来年の夏にお客様を笑顔にできるようご準備致しますので、
          どうぞ宜しくお願い致します。
          <br>
          公式LINEで販売開始等のお知らせを行っております。ご興味がありましたらお友達になってください。
          <br>
          また不定期ではございますが各SNSで沖縄や農園情報を発信しております。
        </p>


      </div>

    </div> 


    <div id="" class="col-12 col-md-6 m-0 p-0">
      <div id="" class="title">
        <h4 class="p-0 text-start">SNS</h4>
      </div> 

      <div id="" class="m-0 p-0">
        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CvuNg5mSYc0/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CvuNg5mSYc0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">この投稿をInstagramで見る</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CvuNg5mSYc0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">うちなーマンゴー屋(@mangofarm.masato.u)がシェアした投稿</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>                       
      </div>

    </div>

  </div> 

    

  


</div>









@endsection

@section('pagejs')

<script type="text/javascript">

</script>


@endsection

