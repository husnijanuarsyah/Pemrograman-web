@extends('layouts.master')

@section('judul','Beranda')

@section('form')

<form method="POST" action="/simpanData">
  @csrf

  @if ($message = Session::get('sukses'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong style="font-size: 14px"> {{$message}}</strong>
  </div>
  @endif
  
    <div class="form-group">
      <label for="exampleInputEmail1">Nama </label>
      <input type="text" class="form-control"  placeholder="Masukan Nama" name="nama">
    @if ($errors->has('nama'))
    <div class="class">
      {{$errors->first('nama')}}
    </div>
    @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">NIS</label>
      <input type="text" class="form-control"  placeholder="Masukan NIS" name="nis">
      @if ($errors->has('nis'))
      <div class="class">
        {{$errors->first('nis')}}
      </div>
      @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Kelas</label>
        <input type="text" class="form-control"  placeholder="Masukan Kelas" name="kelas">
        @if ($errors->has('kelas'))
        <div class="class">
          {{$errors->first('kelas')}}
        </div>
        @endif
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <input type="text" class="form-control"  placeholder="Masukan Alamat" name="alamat">
        @if ($errors->has('alamat'))
        <div class="class">
          {{$errors->first('alamat')}}
        </div>
        @endif
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tanggal lahir</label>
        <input type="date" class="form-control"  placeholder="Masukan Tanggal Lahir" name="tgllhr">
        @if ($errors->has('tgllhr'))
        <div class="class">
          {{$errors->first('tgllhr')}}
        </div>
        @endif
      </div>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign In</button>
  </form>
@endsection