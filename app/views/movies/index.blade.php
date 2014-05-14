@extends('layouts.fullWidth')

@section('content')
	<div class="col-md-12">
		<div class="page-header">
			<h3>
				{{ $title }}

			</h3>
		</div>
		@include('includes.alert')
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Genre</th>
					<th>Name</th>
					<th>Description</th>
					<th>Movie Url</th>
					<th>Age</th>
					<th>View</th>

				</tr>
			</thead>
			<tbody>
				@foreach($movies as $movie)
					@if($movie->age > Auth::user()->age)

						@else
						<tr>

						<td>{{ Genre::where('id','=',$movie->genre_id)->first()->genre}}</td>
						<td>{{ $movie->moive_name}}</td>
						<td>{{ str_limit($movie->description, $limit = 50, $end = '...') }}</td>
						<td>{{$movie->movie_url}}</td>
						<td>{{$movie->age}}</td>

						<td>
							<a href="{{ URL::route('movie.show',$movie->id); }}" class='btn btn-success btn-sm'>
					        	<span class="glyphicon glyphicon-zoom-in"></span>
							</a>
						</td>

					</tr>
					@endif
					
				@endforeach
			</tbody>
		</table>

	</div>
@stop
