@extends('master')

@section('content')
<h2>{{$sludinajumi->title}}</h2>

<p>{{$sludinajumi->product_type}}</p>
<p>{{$sludinajumi->descr}}</p>
<p>{{$sludinajumi->price}} EUR</p>

@stop