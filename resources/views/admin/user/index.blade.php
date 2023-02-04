@extends('admin.layouts.master')


@section('content')

<form action="/admin/newuser" method="post">
    @method("POST")
      @csrf
    <div class="group-data d-flex flex-column align-items-center justify-content-center mt-4" style="min-height: calc(100vh - 180px);">
      <div class="group-info w-50 d-flex flex-column justify-content-center align-items-center">
        <div class="data-text w-100 text-center mb-3">
          <label class="text-warning fs-4 mb-2">الإسم</label>
          <input id="name" class="form-control w-50 text-center mx-auto" name="FullName" type="text" placeholder="إسم صاحب الحساب">
        </div>
       
        <div class="data-text w-100 text-center mb-3">
          <label class="text-warning fs-4 mb-2">Username</label>
          <input id="name" class="form-control w-50 text-center mx-auto" name="Username" type="text" placeholder="Username">

        </div>
        <div class="data-text w-100 text-center mb-3">
          <label class="text-warning fs-4 mb-2">Password</label>
          <input class="form-control w-50 text-center mx-auto" type="password" name="Password" placeholder="Password" >
        </div>
        <div class="data-text w-100 text-center mb-3">
          <label class="text-warning fs-4 mb-2">التحكم</label>
          <select class="w-50 text-center form-control mx-auto" name="Role" name="" id="">
            <option value="Admin">Admin</option>
            <option value="Captin">Captin</option>
            <option value="Accountant">Accountant</option>
          </select>
        </div>
  
       
      </div>
  
      <button  type="submit" class="btn add-group btn-warning text-dark mt-4  w-25 mx-auto d-block">تسجيل الحساب</button>
     
    </div>


  

</form>


<table class="table table-dark w-75 mx-auto table-bordered align-middle text-center">
    <thead>
      <tr>
          <th scope="col">التغييرات</th>
          <th scope="col">الصلاحية</th>
          <th scope="col">إسم المستخدم</th>
        <th scope="col">إسم الحساب</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($Users as $User)
            <tr>
                <td>
                    <form action="/admin/deleteuser/{{$User->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
                <td>{{$User->Role}}</td>
                <td>{{$User->Username}}</td>
                <td>{{$User->FullName}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection

@section('title', "إضافة حساب جديد")
    
