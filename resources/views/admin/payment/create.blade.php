@extends('admin.layouts.master')


@section('title',"تسجيل إشتراك")
    


@section('css')
    



@endsection


@section('content')
    
    {{-- {{dd($Player)}} --}}

    <section class="form-create  d-flex flex-column justify-content-center align-items-center" style="min-height: 500px">

    <form action="/admin/payments" method="POST" class="w-100 d-block">

        @method('post')
        @csrf

        <input type="text" hidden class="form-control w-25 mx-auto text-center" readonly name="PlayerCode" value="{{$Player->id}}">
        
       <section class="data-input my-2 w-100">
        <h2 class="text-center text-warning mb-3">إسم اللاعب</h2>
        <input type="text" class="form-control w-25 mx-auto text-center" readonly name="PlayerName" value="{{$Player->PlayerName}}">
       </section>
        
       <section class="data-input my-2 w-100">
        <h2 class="text-center text-warning mb-3">القيمة</h2>
        <input type="text" class="form-control w-25 mx-auto text-center" name="Amount" placeholder="قيمة الإشتراك">
       </section>
        
       <section class="data-input my-2 w-100">
        <h2 class="text-center text-warning mb-3">المجموعة</h2>
        <input type="text" class="form-control w-25 mx-auto text-center" readonly name="GroupName" value="{{$Player->GroupName}}">
       </section>

       <section class="data-input my-2 w-100">
        <h2 class="text-center text-warning mb-3">الفرع</h2>
        <input type="text" class="form-control w-25 mx-auto text-center" readonly name="BranchName" value="{{$Player->BranchName}}">
       </section>
       <button id="btn" type="submit" class="btn btn-warning w-25 my-3 d-block mx-auto">دفع إشتراك</button>
       <a id="btn" href="/admin/players" class="btn btn-danger text-light w-25 d-block mx-auto">إلغاء</a>
       </section> 
    </form>
    


@endsection




@section('script')
    
@endsection