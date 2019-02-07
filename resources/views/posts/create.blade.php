@extends('layouts.app')

@section('content')

	<h1>Add Posts</h1>
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

	<div class="form-group">
		{{ Form::label('title', 'Post Title') }}
		{{ Form::text('title', '', ['class' => 'form-control','placeholder' => 'Title'] ) }}
	</div>

	<div class="form-group">
		{{ Form::label('body', 'Post Body') }}
		{{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'] ) }}
	</div>
	<div class='form-group'>
		{{Form::file('cover_image')}}
	</div>	
	{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}

@endsection