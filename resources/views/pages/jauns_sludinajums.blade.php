@extends('master')

@section('content')
Šeir būs jauna sludinājuma ievietošanas forma

<input name="title"type="text">
<input name="body" type="text">
<input name="submit" type="submit">
@foreach ($actions as $action)
<h2> {{ $action }}</h2>
@endforeach

@stop