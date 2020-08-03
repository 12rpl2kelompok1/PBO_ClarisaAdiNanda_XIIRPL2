@extends('layouts.master')

@section('title', 'Blog sekolah')

@section('content')
<h1>Edit yoooo</h1>

<form action="/blog/{{$blog->id}}" method="post">
<input type="text" name="tittle" value="{{ $blog->tittle }}"><br>
<textarea name="description" rows="8" cols="40">{{ $blog->tittle }}</textarea><br>


	<input type="submit" name="submit" value="edit">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	
</form>

@endsection