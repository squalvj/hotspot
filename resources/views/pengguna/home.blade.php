@extends('pengguna.layout.auth')
<link rel="stylesheet" type="text/css" href="{{asset('assets/index/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/index/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/index/css/style.css')}}">
<script type="text/javascript" src="{{asset('assets/index/js/script.js')}}" ></script>
@section('content')
<div class="container">
   <div class="row">

                <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 col-block">
                      <div class="block text-center block-first">
                                 <div class="icon">
                                    <i class="fa fa-diamond fa-2x"></i>
                                 </div>  
                                   <h4>Supreme comfort</h4>
                                   <p class="font-2">Lorem ipsum dolor sit amet, consectetur
                                   adipisicing elit, sed do eiusmod tempor
                                   incididunt ut labore et.</p>
                        </div>   
                </div>
                <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 col-block">
                      <div class="block text-center block-second">
                             <div class="icon">
                                  <i class="fa fa-camera fa-2x"></i>
                             </div>  
                              <h4>Immersive experince</h4>
                              <p class="font-2">Lorem ipsum dolor sit amet, consectetur
                                  adipisicing elit, sed do eiusmod tempor
                                  incididunt ut labore et.</p>                                       
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 col-block">
                    <div class="block text-center block-third">
                                 <div class="icon">
                                     <i class="fa fa-eye fa-2x"></i>
                                 </div>  
                                   <h4>complete focus</h4>
                                   <p class="font-2">Lorem ipsum dolor sit amet, consectetur
                                   adipisicing elit, sed do eiusmod tempor
                                   incididunt ut labore et.</p>
                    </div>   
                </div>
                <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 col-block">
                    <div class="block text-center block-last">
                            <div class="icon">
                                 <i class="fa fa-sliders fa-2x"></i>
                            </div>  
                            <h4>Convenient control</h4>
                            <p class="font-2">Lorem ipsum dolor sit amet, consectetur
                                  adipisicing elit, sed do eiusmod tempor
                                  incididunt ut labore et.</p>                                        
                      </div>
                    </div>
                </div>
            </div>
</div>
@endsection
