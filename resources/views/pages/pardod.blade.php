@extends('master')

@section('content')



<div class="col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Pārdod: X sludinājumi</h3>
            <div class="pull-right">
                <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                    <i class="glyphicon glyphicon-filter"></i>
                </span>
            </div>
        </div>
        <div class="panel-body">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
        </div>
        <table class="table table-hover" id="dev-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nosaukums</th>
                    <th>Autors</th>
                    <th>Cena</th>
                </tr>
            </thead>
            <tbody>
     @foreach ($items_for_sale as $item_for_sale)
                <tr>
                    <td>1</td>
                    <td><a href="/pardod/{{ $item_for_sale->id}}">{{ $item_for_sale->product }}</a></td>
                    <td>Autors</td>
                    <td>eur {{ $item_for_sale->price }}</td>
                </tr>
    @endforeach
              
  
            </tbody>
        </table>
    </div>
</div>










@stop