@extends('master')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='ads-panel col-xs-12 col-sm-12 col-md-6 col-lg-6'>
                <b><a href="/pardod">PAARDOD</a></b>
       
<!--                    <form class="navbar-form navbar-right"  role="search">
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                    </div>
                    </form>-->
       
                <div class="table-responsive">
                    
<!--                    <button class='block-view-btn'>BLOCK</button>
                    <button class='list-view-btn'>LIST</button>-->
<a class='block-view-btn active'></a>
<a class='list-view-btn'></a>
                
                     <table class="table hover table-list-search pardod-table block-view" id="pardod-table">
                    <thead>
                                <tr>
                                    <th class="col-xs-6">Apraksts</th>
                                    <th class="col-xs-2">Cena</th>
                                    <th class="col-xs-2">Datums</th>
                                    <th class="col-xs-2">Tips</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                </tr><tr class="product">
                                    <td class="apraksts">Apraksts</td>
                                    <td class="cena">Cena</td>
                                    <td class="datums">Datums</td>
                                    <td class="tips">Tips</td>
                                </tr>
                                
                            </tbody>
                
                    </table>
                  </div>


            </div>     
 
            
            
            <div class='ads-panel col-xs-12 col-sm-12 col-md-6 col-lg-6'>
                <b><b><a href="/perk">PEERK</a></b></b>
                
<a class='perk-block-view-btn active'></a>
<a class='perk-list-view-btn'></a>

                <div class="table-responsive">
                    <table class="table hover table-list-search perk-table" id="perk-table">
                  
                          <thead>
                                <tr>
                                    <th class="col-xs-6">Apraksts</th>
                                    <th class="col-xs-2">Cena</th>
                                    <th class="col-xs-2">Datums</th>
                                    <th class="col-xs-2">Tips</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Introducing</td>
                                    <td>jQuery</td>
                                    <td>Searchable</td>
                                    <td>Searchable</td>
                                </tr>
                                <tr>
                                    <td>Lorem</td>
                                    <td>Ipsum</td>
                                    <td>Ipsum</td>
                                    <td>Dolor</td>
                                </tr>
                                <tr>
                                    <td>Some</td>
                                    <td>More</td>
                                    <td>Data</td>
                                    <td>Data</td>
                                </tr>
                            </tbody>
                
                    </table>
                  </div>
                
                
                </div>
                
                
            </div>     
        </div>
    </div>
    

@stop