@extends('layouts.fullWidth')

@section('content')
	<div class="col-md-12">
		<div class="page-header">
			<h2>{{ $title }}</h2>
		</div>
		<h1>Welcome {{ Auth::user()->username }}</h1>
      	
    </div>
@stop