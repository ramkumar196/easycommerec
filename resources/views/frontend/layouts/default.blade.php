<!DOCTYPE html>
<html>
<head>
	@include('admin.includes.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	@include('admin.includes.header')

	@include('admin.includes.sidebar')

	@yield('content')

	@include('admin.includes.footer')

</div>
</body>
</html>
