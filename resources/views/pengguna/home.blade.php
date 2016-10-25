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
                          <a data-toggle="modal" data-target="#daftar-paket" href="#">
                            <div class="icon">
                              <i class="fa fa-diamond fa-2x"></i>
                            </div>  
                            <h4>Informasi Paket</h4>
                          </a>
                           <p class="font-2">Lorem ipsum dolor sit amet, consectetur
                           adipisicing elit, sed do eiusmod tempor
                           incididunt ut labore et.</p>
                        </div>   
                </div>
                <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 col-block">
                    <a href="#">
                      <div class="block text-center block-second">
                             <div class="icon">
                                  <i class="fa fa-camera fa-2x"></i>
                             </div>  
                              <h4>Konfirmasi Pembayaran</h4>
                    </a>
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
                                   <h4>Cara Pembelian</h4>
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

<!-- Modal -->
  <div class="modal fade" id="daftar-paket" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Informasi Paket</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Paket</th>
                    <th>Harga</th>
                    <th>Bandwidth</th>
                    <th>Durasi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>EZ01</td>
                    <td>50.000</td>
                    <td>256kbps</td>
                    <td>1 Bulan</td>
                  </tr>
                  <tr>
                    <td>EZ02</td>
                    <td>100.000</td>
                    <td>512kbps</td>
                    <td>1 Bulan</td>
                  </tr>
                  <tr>
                    <td>EZ03</td>
                    <td>150.000</td>
                    <td>1mb</td>
                    <td>1 Bulan</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Informasi Paket</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Paket</th>
                    <th>Harga</th>
                    <th>Bandwidth</th>
                    <th>Durasi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>EZ01</td>
                    <td>50.000</td>
                    <td>256kbps</td>
                    <td>1 Bulan</td>
                  </tr>
                  <tr>
                    <td>EZ02</td>
                    <td>100.000</td>
                    <td>512kbps</td>
                    <td>1 Bulan</td>
                  </tr>
                  <tr>
                    <td>EZ03</td>
                    <td>150.000</td>
                    <td>1mb</td>
                    <td>1 Bulan</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
