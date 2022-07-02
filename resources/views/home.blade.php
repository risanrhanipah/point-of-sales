<!DOCTYPE html>
    <html lang="en">
      <link rel="stylesheet" type="text/css" href="{!! asset('../assets/css/login.css') !!}">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
          <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="./css/menu.css" />
      <title>Dashboard</title>
  </head>
<style>
    html, body {
    position: relative;
    /* text-align: center; */
    /* display: flex; */
    justify-content: center;
    align-items: center; 
    /* min-height: 100%; */
    background:url(../assets/css/sss.png) no-repeat;
    background-size: 100%;
}
</style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select a Page Below!') }}</div>

                <div class="card-body">
                    @if (session('status')) 
                        </div>
                    @endif  @if (Auth::user()->id_level == 1)
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="distributors">Distributor</a>
                        <a class="nav-link" href="mereks">Merek</a>
                        <a class="nav-link" href="barangs">Barang</a>
                      </li>
                      <li class="nav-item">
                          {{-- <a class="nav-link" href="file">Upload File</a> --}}
                        </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>
              
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                    </ul>
                  @elseif (Auth::user()->id_level == 2)
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                      </li>
                      <li class="nav-item">
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="transaksis">Transaksi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>
              
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                    </ul>
                    @elseif (Auth::user()->id_level == 3)
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="laporan_transaksi">Detail Transaksi</a>
                        <a class="nav-link" href="laporan_barang">Detail Barang</a>
                        
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>
              
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                    </ul>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
