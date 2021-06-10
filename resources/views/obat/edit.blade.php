@extends('layout.master')

@section('header')
    @parent
@endsection

@section('content')
<!-- Page Content -->
<div class="page-heading">
      <div class="container">
      </div>
    </div>
    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Input Data Obat</h2>
            </div>
          </div>

          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="{{ route('obat.update', $obat->id) }}" method="POST">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    @csrf
                    @method('PUT')
                    <fieldset>
                      <input name="nama" type="text" class="form-control" value="{{ $obat->nama }}">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="harga" type="text" class="form-control" value="{{ $obat->harga }}">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="keterangan" rows="6" class="form-control" value="{{ $obat->keterangan }}">{{ $obat->keterangan }}</textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Update Data</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection