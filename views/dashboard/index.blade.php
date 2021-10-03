@extends('layout.main')

@section('container')
      <div class="head">
            <h1>Dashboard</h1>
      </div>
      <div class="row justify-content-center">
            <div class="col-2  mb-3">
                  <div class="card text-center">
                        <h4 class="card-header">Data Supplier</h1>
                        <img src="{{url('/img/1.jpg')}}" class="card-img-bottom" alt="Try1">
                  </div>
            </div>
            <div class="col-2  mb-3">
                  <div class="card text-center">
                        <h4 class="card-header">Data Karyawan</h1>
                        <img src="{{url('/img/2.jpg')}}" class="card-img-bottom" alt="Try2">
                  </div>
            </div>
            <div class="col-2  mb-3">
                  <div class="card text-center">
                        <h4 class="card-header">Data Tanaman</h1>
                        <img src="{{url('/img/3.jpg')}}" class="card-img-bottom" alt="Try3">
                  </div>
            </div>
      </div>
      <div class="row justify-content-center">
            <div class="col-2  mb-3">
                  <div class="card text-center">
                        <h4 class="card-header">Data Transaksi</h1>
                        <img src="{{url('/img/4.jpg')}}" class="card-img-bottom" alt="Try4">
                  </div>
            </div>
            <div class="col-2  mb-3">
                  <div class="card text-center">
                        <h4 class="card-header">Data Quality Check</h1>
                        <img src="{{url('/img/5.jpg')}}" class="card-img-bottom" alt="Try5">
                  </div>
            </div>

@endsection
