@extends('layout.master')

@section('header')
    @parent
@endsection

@section('content')
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Rekomendasi Dokter</h2>
            </div>
          </div>
          @foreach($dokter as $dtr)
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/team_01.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                  <ul class="social-icons">
                  <a href="{{ route('dokter.edit', $dtr->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a> &emsp;
                      <form action="{{ route('dokter.destroy', $dtr->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"></i>Delete</a>
                      </form></i></a>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>{{ $dtr->nama }}</h4>
                <span>{{ $dtr->spesialis }}</span>
                <p>{{ $dtr->no_telp }}</p>
              </div>
            </div>
          </div>
          
          @endforeach
        </div>
        <a class="btn btn-success column5" href="{{ route('kesehatan.index') }}">Kembali</a> &emsp;
        <a class="btn btn-success column5" href="{{ route('dokter.create') }}">Input Data</a>
      </div>
    </div>
@endsection