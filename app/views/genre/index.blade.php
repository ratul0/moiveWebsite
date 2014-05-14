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

				</tr>
			</thead>
			<tbody>
				@foreach($genres as $genre)
					<tr>

						<td>{{ $genre->genre}}</td>



					</tr>
				@endforeach
			</tbody>
		</table>

	</div>
@stop
