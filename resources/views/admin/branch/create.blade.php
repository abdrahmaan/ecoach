
@extends('admin.layouts.master')



@section('title',"فروع الأكاديمية")

@section('content')
    
  <form action="/admin/branches" method="post">

    {{ csrf_field() }}
    @method('POST')
    <div class="branch-data d-flex flex-column align-items-center justify-content-center mt-4" style="min-height: calc(100vh - 180px);">
        <div class="group-info w-50 d-flex flex-column justify-content-center align-items-center">
          <div class="data-text w-100 text-center mb-3">
            <label class="text-warning fs-4 mb-2">إسم الفرع</label>
            <input id="name" class="form-control w-50 text-center mx-auto" name="BranchName" type="text" placeholder="إسم الفرع">
          </div>
         
        </div>
    
        <button type="submit" class="btn add-branch  btn-warning text-dark mt-4  w-25 mx-auto d-block">تسجيل الفرع</button>
    
      </div></form>

@endsection