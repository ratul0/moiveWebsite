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

				</tr>
			</thead>
			<tbody>
				@foreach($movies as $movie)
					<tr>

						<td>{{ Genre::where('id','=',$movie->genre_id)->first()->genre}}</td>
						<td>{{ $movie->moive_name}}</td>
						<td>{{ str_limit($movie->description, $limit = 50, $end = '...') }}</td>
						<td>{{$movie->movie_url}}</td>
						<td>{{$movie->age}}</td>



					</tr>
				@endforeach
			</tbody>
		</table>

	</div>
@stop
