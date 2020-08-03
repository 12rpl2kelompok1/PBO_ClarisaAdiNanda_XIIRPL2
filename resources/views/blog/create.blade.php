@extends('layouts.master')

@section('title', 'Blog sekolah')

@section('content')

<h1>create blog</h1>

<form action="/blog" method="post">
<input type="text" name="tittle" value="{{ old('tittle') }}"><br>

@if($errors->has('tittle'))
<p> {{$errors->first('tittle')}} </p>
@endif

<textarea name="description" rows="8" cols="40">{{ old('description') }}</textarea><br>

@if($errors->has('description'))
<p> {{$errors->first('description')}} </p>
@endif

	<input type="submit" name="submit" value="Create">
	{{ csrf_field() }}
	
</form>

@endsection