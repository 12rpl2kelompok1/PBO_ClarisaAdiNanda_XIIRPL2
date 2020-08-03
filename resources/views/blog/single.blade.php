@extends('layouts.master')

@section('title', 'Blog sekolah')

@section('content')
<h1>ICAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h1>
<h2>{{ $blog -> tittle }}</h2>
<hr>
<p>
	{{ $blog -> description }}
</p>


@endsection