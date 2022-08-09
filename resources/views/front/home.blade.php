@extends('front.layout.master')
@section('body')
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            @yield('content')
{{--             <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                @include('front.layout.news')
            </div> --}}
        </div>
        @include('front.layout.pagination')
    </div>
</div>
@endsection