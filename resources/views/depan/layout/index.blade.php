<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/index/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/index/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/index/css/style.css')}}">
    <script type="text/javascript" src="{{asset('assets/index/js/script.js')}}" ></script>
    <title>Ez-Net</title>
    <style type="text/css">
        li{
            font-size:17px;
        }
    </style>
</head>
<body>
<!-- div used to make the body blur -->
    <div class="overlay" id="overlay" onclick="closeNav()"></div>

    <section class="head index-part-1">
        <div class="head-bar">
            <div class="container">
                <nav class="navbar navbar-default navbar-static-top" style="background-color:white; border-bottom:none">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" style="margin-top:0px" href="{{ url('/') }}">
                                <img class="pull-left" style="width:50px; height:50px; position:relative; bottom:10px" src="{{ asset('assets/gambar/logo.png') }}">
                                <span> EZ NET</span>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="app-navbar-collapse" style="padding-right:30px">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ url('/pengguna/login') }}">Login</a></li>
                                <li><a href="{{ url('/pengguna/register') }}">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
              <hr>
          </div>
          </div>
          <div class="wow">
          <div class="container">
            <div class="row">
               <div class="wow-logo">
                  <img class="img-responsive img-logo" src="{{asset('assets/gambar/logo.png')}}">
               </div> 
               <div class="font-1 helmet text-center">
                 <p>Speed your connection <strong>Fast</strong> with EZ-Net</p>
               </div>
               <div class="wow-btn text-center">
                     <a class="btn btn-default wow-button" href="{{url('/pengguna/register')}}">DAFTAR SEKARANG</a>
               </div>
            </div>
          </div>
        </div>
    </section>
 
    <section class="index-part-2">
         <div class="container">

            <div class="row">
               <div class="text-center">
                 <h2>Features</h2>
               </div>
               <hr class="hr-mid">
               <div class="sub-text text-center">
                     <p class="font-1">
                        Sed varius suspendisse dictum leo ipsum amet pellentesque
                        fusce ac hendrerit consectetur tempor lorem ipsum
                     </p>
               </div>
           </div>

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
    </section>

    <section class="index-part-3">
        <div class="container">
                <div class="row why-div">
                  <div class="text-center">
                         <h2>Why wow</h2>
                  </div>
                       <hr class="hr-mid">
                       <div class="sub-text text-center">
                             <p class="font-1">
                                Sed varius suspendisse dictum leo ipsum amet pellentesque
                                fusce ac hendrerit consectetur tempor lorem ipsum
                             </p>
                       </div>
                </div>

                <div class="row">
                    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12">
                     <div class="holder-para">
                      <h3>Comfortable stap holder</h3>
                      <hr class="hr-short">
                      <p class="font-2">
                            The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed 
                            is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother’s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I 
                      </p>
                     </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-3">
                            <div class="holder-img">
                              <img class="round-img img-responsive center-block" src="assets/img/2.jpg">
                            </div>
                    </div>
                </div>

                <hr class="line-full">
                
                <div class="row"> 
                    <div class="col-lg-9 col-xs-12 col-sm-12 col-md-9 col-md-push-3">
                     <div class="holder-para">
                      <h3>Tracking with controler</h3>
                      <hr class="hr-short">
                      <p class="font-2">
                        The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed 
                        is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother’s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I 
                      </p>
                     </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-3 col-md-pull-9">
                            <div class="holder-img">
                              <img class="round-img img-responsive center-block" src="assets/img/3.jpg">
                            </div>
                    </div> 
                </div>

                <hr class="line-full">
                
                <div class="row">
                    <div class="col-lg-9 col-xs-12 col-sm-12 col-md-9">
                     <div class="holder-para">
                      <h3>Foam cushing</h3>
                      <hr class="hr-short">
                      <p class="font-2">
                            The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed 
                            is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother’s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I  
                      </p>
                     </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-3">
                            <div class="holder-img">
                              <img class="round-img img-responsive center-block" src="assets/img/2.jpg">
                            </div>
                    </div>
                </div>
        </div>
    </section>
                
    <section class="index-part-4">
         <div class="container">
                
                <div class="row">
                       <div class="text-center">
                         <h2>Step in wow</h2>
                       </div>
                       <hr class="hr-mid">
                       <div class="sub-text text-center">
                             <p class="font-1">
                                Sed varius suspendisse dictum leo ipsum amet pellentesque
                                fusce ac hendrerit consectetur tempor lorem ipsum
                             </p>
                       </div>
                </div>

                <div class="row text-center">
                     <a class="btn btn-default wow-button" href="#">BUY WOW NOW</a>
                </div>
          </div>
    </section>

    <section class="social">
      <ul>
        <li><a href="#" class="fa fa-pinterest fa-2x" aria-hidden="true"></a></li>
        <li><a href="#" class="fa fa-twitter fa-2x" aria-hidden="true"></a></li>
        <li><a href="#" class="fa fa-linkedin fa-2x" aria-hidden="true"></a></li>
        <li><a href="#" class="fa fa-stumbleupon fa-2x" aria-hidden="true"></a></li>  
      </ul>
    </section>

    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
            <div class="footer-p1">
                    <p class="font-2">Copy right 2016 by wow technology</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img class="img-responsive foot-img" style="width:100px; height:100px" src="{{asset('assets/gambar/logo.png')}}">
          </div>
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
            <div class="footer-p2" >
                     <p class="font-2">Made with  <i class="fa fa-heart" aria-hidden="true" ></i> by <a href="https://themewagon.com/themes/" target="_blank">themewagon</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
 
</body>
</html>


