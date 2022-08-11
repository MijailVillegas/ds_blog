<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    @include('front.layout.head')
</head>
<body>
    <style>
        /* Esta parte fuerza al scroll  */
        ::-webkit-scrollbar {
    width: 0.6em;
}

::-webkit-scrollbar-track {
    background: white;
}

::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background: gray;
}

::-webkit-scrollbar-thumb:hover {
    background: rgb(60, 141, 188);
}
    </style>
@include('front.layout.header')
@include('front.layout.header-fluid')

@yield('body')
{{-- @include('front.layout.single') --}}
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="{{asset('front/js/jquery.waypoints.min.js')}} js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="{{asset('front/js/main.js')}}js/main.js"></script>

</body>
</html>