@extends('admin.layouts.master')

@section('title',"إدارة المجموعات")


@section('content')

    <form action="/admin/groups" method="post">
      @method("POST")
        @csrf
      <div class="group-data d-flex flex-column align-items-center justify-content-center mt-4" style="min-height: calc(100vh - 180px);">
        <div class="group-info w-50 d-flex flex-column justify-content-center align-items-center">
          <div class="data-text w-100 text-center mb-3">
            <label class="text-warning fs-4 mb-2">إسم المجموعة</label>
            <input id="name" class="form-control w-50 text-center mx-auto" name="GroupName" type="text" placeholder="إسم المجموعة">
          </div>
         
          <div class="data-text w-100 text-center mb-3">
            <label class="text-warning fs-4 mb-2">اليوم</label>
            <select class="w-50 text-center form-control mx-auto"  name="Day" id="">
              <option value="السبت">السبت</option>
              <option value="الأحد">الأحد</option>
              <option value="الإثنين">الإثنين</option>
              <option value="الثلاثاء">الثلاثاء</option>
              <option value="الأربعاء">الأربعاء</option>
              <option value="الخميس">الخميس</option>
              <option value="الجمعة">الجمعة</option>
            </select>
          </div>
          <div class="data-text w-100 text-center mb-3">
            <label class="text-warning fs-4 mb-2">الساعة</label>
            <input class="form-control w-50 text-center mx-auto" type="time" name="Time" value="12:00">
          </div>
          <div class="data-text w-100 text-center mb-3">
            <label class="text-warning fs-4 mb-2">الفرع</label>
            <select class="w-50 text-center form-control mx-auto" name="BranchName" name="" id="">
              @isset($Branches)
              @foreach ($Branches as $Branch)
                <option value="{{$Branch->BranchName}}">{{$Branch->BranchName}}</option>
              @endforeach
            @endisset  
            </select>
          </div>
    
         
        </div>
    
        <button  type="submit" class="btn add-group btn-warning text-dark mt-4  w-25 mx-auto d-block">تسجيل المجموعة</button>
       
      </div>


    

</form>

<section class="table-area mt-5 mx-auto w-75 d-flex justify-content-center align-items-center">

  <table class="table  table-dark w-100 text-center">
    <thead>
      <td>التعديلات</td>
      <td>الوقت</td>
      <td>اليوم</td>
      <td>إسم المجموعة</td>
    </thead>
    <tbody>
      @isset($Groups)
        @foreach ($Groups as $Group)
        <tr>
          <td>
            <form action="/admin/groups/{{$Group->id}}" method="POST" class="d-inline">
              @csrf
              {{ csrf_field() }}
              {{ method_field('DELETE') }} 
                <button type="submit" data-c='{{$Group->id}}' class="btn btn-danger my-2">حذف</button>
            </form>
            <button class="btn btn-success"><a class="text-light" style='text-decoration: none' href="/admin/groups/{{$Group->id}}/edit">تعديل</a></button>
          </td>
          <td class="text-center align-middle">{{$Group->Time}}</td>
          <td class="text-center align-middle">{{$Group->Day}}</td>
          <td class="text-center align-middle">{{$Group->GroupName}}</td>
        </tr>
        @endforeach
      @endisset  
    </tbody>
  </table>
 </section>
  
<script src="{{asset('includes/custom/js/newgroup.js')}}"></script>
    
@endsection