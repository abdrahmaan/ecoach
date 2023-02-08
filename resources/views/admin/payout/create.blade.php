@extends('admin.layouts.master')


@section('title',"تسجيل مصروف")
    


@section('css')
    

@endsection


@section('content')

      {{-- {{dd($Player)}} --}}

      <section class="form-create  d-flex flex-column justify-content-center align-items-center" style="min-height: 500px">

        <form action="/admin/payouts" method="POST" class="w-100 d-block">
    
            @method('post')
            @csrf
    
            <input type="text" hidden class="form-control w-25 mx-auto text-center" readonly name="PlayerCode" >
            
           <section class="data-input my-2 w-100">
            <h2 class="text-center text-warning mb-3">البيان</h2>
            <textarea class="form-control w-25 mx-auto text-center" name="Desc" value="{{old('Desc')}}" value="" id="" cols="" placeholder="إكتب البيان" rows="5"></textarea>
           </section>
            
           <section class="data-input my-2 w-100">
            <h2 class="text-center text-warning mb-3">النوع</h2>
            <select class="form-control w-25 mx-auto text-center" name="Type" id="">
                <option value="مرتبات">مرتبات</option>
                <option value="نثريات">نثريات</option>
                <option value="صيانة">صيانة</option>
                <option value="أدوات رياضية">أدوات رياضية</option>
            </select>
           </section>

           <section class="data-input my-2 w-100">
            <h2 class="text-center text-warning mb-3">القيمة</h2>
            <input type="text" class="form-control w-25 mx-auto text-center" value="{{old('Amount')}}" name="Amount" placeholder="قيمة المصروف">
           </section>
    
           <section class="data-input my-2 w-100">
            <h2 class="text-center text-warning mb-3">الفرع</h2>
            
            <select class="form-control w-25 mx-auto text-center mb-4" name="Branch" id="">
                @foreach ($Branches as $Branch)
                        <option value="{{$Branch->BranchName}}">{{$Branch->BranchName}}</option>
                @endforeach
            </select>
           </section>
           <button id="btn" type="submit" class="btn btn-warning w-25 my-3 d-block mx-auto">تسجيل مصروف</button>
           <a id="btn" href="/admin/" class="btn btn-danger text-light d-block w-25 d-block mx-auto">إلغاء</a>
           </section> 
        </form>
        
    
    
@endsection




@section('script')
    
@endsection