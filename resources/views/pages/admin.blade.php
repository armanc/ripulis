@extends('master')

@section('content')

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                    <h1>Administrācijas panelis</h1>
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">Lietotājvārds</label>
                            <input type="text" name="username" id="email" class="form-control" placeholder="lietotājvārds">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Parole</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="parole">
                        </div>
          
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


@stop