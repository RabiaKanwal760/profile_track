@extends('dashboard.dashboard')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row ">
            <div class="col-md-12 ">
                <h1 class="page-head-line">Employee records</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
           
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        PROFILE TRAKE
                    </div>
                    <div class="panel-body">
<!-- Default form login -->
<form role="form" action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>User Name</label>
        <input class="form-control" name="name" id="name" type="text">
        <p class="help-block">Help text here.</p>
    </div>
    <div class="form-group">
        <label>Enter Email</label>
        <input class="form-control" name="email" id="email" type="text">
        <p class="help-block">Help text here.</p>
    </div>
    <div class="form-group">
        <label>Enter contact</label>
        <input class="form-control" name="contact" id="contact" type="text">
        <p class="help-block">Help text here.</p>
    </div>
    <div class="form-group">
        <label>Enter address</label>
        <textarea class="form-control"  name="address" id="address" rows="3"></textarea>
        <p class="help-block">Help text here.</p>

    </div>


    <button type="submit" class="btn btn-info">Send Message </button>

</form>
<!-- Default form login -->
</div>
</div>
</div>
</div>


</div>
<!-- /. PAGE INNER  -->
</div>
@endsection