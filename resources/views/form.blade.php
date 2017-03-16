<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/app.css">
		<link rel="stylesheet" href="/css/global.css">
        <title>Laravel</title>
    </head>
    <body>

	@include('includes.menu') 

	<div class="container">
		{!! Form::open(['url' => '/', 'class'=>'form-horizontal', 'id'=>'myform']) !!}
		
		<div class="form-group">
			{!! Form::label('email', 'Email', ['class'=>'col-sm-2 control-label'] ); !!}
			<div class="col-sm-10">
				{!! Form::email('text', null, ['type'=>'email', 'class'=>'form-control', 'id'=>'inputEmail3', 'placeholder'=>'Email'] ); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('tel', 'Telephone', ['class'=>'col-sm-2 control-label'] ); !!}
			<div class="col-sm-10">
				{!! Form::tel('tel', null, ['type'=>'tel', 'class'=>'form-control', 'id'=>'inputTelephone3', 'placeholder'=>'Telephone', 'pattern'=>'2[0-9]{3}-[0-9]{3}'] ); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password', ['class'=>'col-sm-2 control-label'] ); !!}
			<div class="col-sm-10">
				{!! Form::password('password',  ['type'=>'password', 'class'=>'form-control', 'id'=>'pwd', 'placeholder'=>'Password'] ); !!}
			</div>
		</div>
		
		
		
		{!! Form::textarea('area', null, ['type'=>'text', 'class'=>'form-control', 'id'=>'formuserName'] ); !!}
		{!! Form::close() !!}
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="/js/bootstrap.min.js"></script>
    </body>
</html>
