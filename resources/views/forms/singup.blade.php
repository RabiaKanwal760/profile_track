@extends('layout.app')
@section('content')

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row ">
            <div class="col-md-12 ">
                <h1 class="page-head-line">Basic Forms</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
           
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        SINGUP FORM
                    </div>
                    <div class="panel-body">
                        <form role="form">

                            <div class="form-group">
                                <label>Enter Email</label>
                                <input class="form-control" type="text">
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Enter Password</label>
                                <input class="form-control" type="password">
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Re Type Password </label>
                                <input class="form-control" type="password">
                                <p class="help-block">Help text here.</p>
                            </div>

                            <button type="submit" class="btn btn-danger">Register Now </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    <!-- /. PAGE INNER  -->
</div>
        @endsection