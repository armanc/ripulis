@extends('master')

@section('content')
<h2>{{ $item_for_sale->product }}</h2>

<h4> {{ $item_for_sale->descr }}</h4>

<i>EUR {{ $item_for_sale->price }}</i>
@stop