@extends('layout.app')
@section('Css')
<!-- PAGE LEVEL STYLES-->
<link href="assets/css/error.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container">
        
    <div class="row text-center">
          
           <div class="col-md-12 set-pad" >
                      
                       <strong class="error-txt">ERROR ! 404</strong>
                      <p class="p-err">Lorem ipsum dolor sit amet posuere lectus et, fringilla augue.</p>
               <a href="index.html" class="btn btn-danger" ><i class="fa fa-mail-reply"></i>&nbsp;PLEASE GO BACK</a>
                   </div>
           
           
   </div>
</div>
<div class="c-err">
   <div class="container">
   <!--Search Section Start-->
   <div class="row ">
       <div class="form-group input-group col-md-6 col-md-offset-3">
           <input type="text" class="form-control" placeholder="Enter Keywords" />
           <span class="input-group-btn">
               <a class="btn btn-primary" href="index.html">
                   <i class="fa fa-gear fa-spin"></i>&nbsp;&nbsp;SEARCH HERE
               </a>
           </span>
       </div>
       <br />

   </div>
   <!--Search Section end-->


</div>
</div>
<div class="container">
   <div class="row text-center">
       <div class="col-md-12">
             <br />
<br />
          <a class="btn btn-success" href="index.html">
                   PLEASE GO BACK TO WEBSITE ! NOTHING HERE
               </a>
             <br />
<br />
       </div>

   </div>

</div>


<hr />
<div class="container">
   <div class="row text-center">
       <div class="col-md-12">
           
           All Rights Reserved | &copy Yourdomain.com
       </div>

   </div>

</div>



   @endsection