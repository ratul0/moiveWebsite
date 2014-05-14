@extends('layouts.fullWidth')

@section('content')
	<div class="col-md-12">
		<div class="page-header">
			<h3>
				{{ $movie->moive_name }}
				<a href="{{ URL::route('movie.index') }}" class='btn btn-primary btn-sm pull-right' style="vertical-align: middle;">
					<span >Back</span> 
				</a>
			</h3>
		</div>
		<div align='center'>
			<iframe src="http://www.youtube.com/embed/{{$embade}}" width="700" height="500">
			</iframe>
		</div>

		<br>
		<br>

		<div style="font-size:1.75em">
			{{ $movie->description }}
		</div>




	</div>
@stop