
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	@yield('title')
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Forum Mahasiswa STT Duta Bangsa" />
	<meta name="keywords" content="forums, social media, social network, social networking" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/line-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/line-awesome-font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/slick/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>


<body oncontextmenu="return false;">
	<div class="wrapper">

        @include('layouts.header')	
        
        @yield('content')

        @include('layouts.footer')

	</div><!--theme-layout end-->



<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.mCustomScrollbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/lib/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

<!-- Tambahan file js -->
@yield('js')

</body>
</html>