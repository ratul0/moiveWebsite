@extends('layouts.fullWidth')

@section('content')
	<div class="col-md-5 col-md-offset-3">
		<div class="page-header">
			<h2>{{ $title }}</h2>
		</div>

      	{{Form::open(array('route' => 'movie.create'))}}


      	@include('includes.alert')
	      	<div class="form-group">
		          	{{ Form::label('genre', 'Genre *') }}
		          	
		          	{{Form::select('genre', $genre, array('class' => 'form-control'));}}
		          	{{$errors->first('genre')}}
		    </div>

		    <div class="form-group">
		          	{{ Form::label('movie', 'Movie Name *') }}
		          	{{ Form::text('movie', '', array('class' => 'form-control')) }}
		          	{{$errors->first('movie')}}
		    </div>

		    <div class="form-group">
		          	{{ Form::label('description', 'Description *') }}
		          	{{ Form::text('description', '', array('class' => 'form-control')) }}
		          	{{$errors->first('description')}}
		    </div>

		    <div class="form-group">
		          	{{ Form::label('url', 'Moive Url *') }}
		          	{{ Form::text('url', '', array('class' => 'form-control')) }}
		          	{{$errors->first('url')}}
		    </div>

	     	<div class="form-group">
		          	{{ Form::label('age', 'Age *') }}
		          	{{ Form::text('age', '', array('class' => 'form-control')) }}
		          	{{$errors->first('age')}}
		    </div>


      	{{ Form::submit('Add New Movie',array('class' => 'btn btn-primary btn-lg', 'data-loading-text' => 'Registering User...')) }}

      	{{ Form::close() }}

    </div>
@stop