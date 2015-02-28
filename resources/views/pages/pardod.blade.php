@extends('master')

@section('content')


<h2>PARDOD: KOPA {{ $sludinajumi_skaits }} SLUDINAJUMI</h2>
<div class="col-md-12 col-lg-12">
    
    <div>
       @foreach ($sludinajumi as $sludinajums)
       <li><a href='/pardod/{{ $sludinajums->id }}'>{{ $sludinajums->title }}</a></li>
       @endforeach

    </div>
</div>










@stop