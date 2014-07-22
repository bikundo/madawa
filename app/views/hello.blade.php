@extends('frontend.layouts.default')
@section('content')
   <style >
   .informations {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  height: 200px;
  margin: -100px 0 0 -100px;
}
.fa-5x{
font-size: 20em;
}
</style>
   <div class="informations text-center" style="color:red">
       <i class="fa fa-medkit fa-5x" ></i>
   </div>

@stop