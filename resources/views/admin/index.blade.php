

    @extends('admin.layouts.master')

    @section('title',"الإحصائيات")


    @isset(session()->get('user')->Role)

            <script>
                window.localStorage.setItem('role', "{{session()->get('user')->Role}}");
            </script>
    @endisset

    @section('content')
    <script src="/includes/custom/js/home.js"></script>

    @endsection