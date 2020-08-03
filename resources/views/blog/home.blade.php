@extends('layouts.master')

@section('tittle', 'Blog sekolah')

@section('content')

<h1>ICAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h1>
<p>
	sekolah coding pokoknya
</p>

<hr>

@foreach($blogs as $blog )

<li>
 <a href="/blog/{{$blog -> id }}"> {{ $blog -> tittle }} </a>

<form action="/blog/{{$blog->id}}" method="post">

	<input type="submit" name="submit" value="delete">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="DELETE">
</form>

</li>

@endforeach

@endsection