<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Gamazon</title>

	<!-- Bootstrap core CSS -->
	<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{asset('css/heroic-features.css')}}" rel="stylesheet">

</head>

<body>
@include('includes.header')
<div class="container">

	<div class="center">

		<h1 id="title">Add a product</h1>
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<section>
			{!! Form::open(array('url'=>'product/add','files' => true))!!}<br>
			{!!Form::label('name','*Name')!!}<br>
			{!!Form::text('name')!!}<br><br>

			{!!Form::label('description','Description')!!}<br>
			{!!Form::textarea('description')!!}<br><br>

			{!!Form::label('category','*Category')!!}<br>
			{!!Form::select('category',
			['Action'=>'Action','Adventure'=>'Adventure','Role-playing'=>'Role-playing','Simulation'=>'Simulation','Strategy'=>'Strategy','Sports'=>'Sports','Other'=>'Other'],'Action')!!}<br><br>

			{!! Form::label('Product image') !!}<br>
			{!! Form::file('image1') !!} (*Thumbnail)<br>
			{!! Form::file('image2') !!}<br>
			{!! Form::file('image3') !!}<br><br>

			{!!Form::label('video','Video')!!}<br>
			{!!Form::text('video')!!}<br><br>

			{!!Form::label('price','*Price')!!}<br>
			{!!Form::text('price')!!}<br><br>

			{!!Form::submit('Submit')!!}
			{!!Form::close()!!}<br>
		</section>

	</div>
</div>

@include('includes.footer')

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>