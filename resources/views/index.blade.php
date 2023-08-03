@extends('common.layouts_app')

@section('pagehead')
@section('title', 'たかすじファーム')  

@endsection
@section('content')

<style>


</style>



  {{-- スマホ --}}
  <div class="d-block d-md-none w-100">
    <div class="row p-0 m-0">
      <img src="{{ asset('img/top/0001.jpg') }}" class="p-0 m-0">
    </div>   
  </div>   

  {{-- PC --}}
  <div class="d-none d-md-block w-100">
    <div class="row p-0 m-0">
      <img src="{{ asset('img/top/0001.jpg') }}" class="p-0 m-0">
    </div>   
  </div>   



  

    



<div class="mt-3 text-center container">

  <div class="row p-0 m-0">
    <img src="{{ asset('img/top/0002.jpg') }}" class="p-0 m-0">
  </div> 

    
</div>









@endsection

@section('pagejs')

<script type="text/javascript">

</script>


@endsection

