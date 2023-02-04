

    @extends('admin.layouts.master')

    @section('title',"الإحصائيات")

@isset($req)
    {{dd($req)}}
    {{-- {{print_r($req)}} --}}
@endisset

    @section('content')
        <h2 class="text-warning">Heloo</h2>
    <script src="/includes/custom/js/home.js"></script>

    @endsection