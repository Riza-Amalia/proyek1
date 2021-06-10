@extends('layout.master')

@section('header')
    @parent
@endsection

@section('content')
<!-- Banner Starts Here -->
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
              <div class="down-content">
                <a href="{{ route('dokter.index') }}"><h4>Konsultasi</h4></a>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
              <div class="down-content">
                <a href="{{ route('kontrol.index') }}"><h4>Kontrol Mandiri</h4></a>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Donor Darah</h4></a>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_02.jpg" alt="">
              <div class="down-content">
                <a href="{{ route('obat.index') }}"><h4>Pembelian Obat</h4></a>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                </a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    @endsection