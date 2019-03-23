@extends('layouts.master')
@section('title', 'Kamar')
@section('content')
    <form method="post" action="{{url('/luas-kamar')}}">
        @csrf
        <div class="row text-center mb-3 mt-3">
            <div class="col-sm-12">
                <h1>Aplikasi penghitung luas kamarnya mas {{$nama}}</h1>
            </div>
            <div class="col-sm-12">
              <label for="exampleInputEmail1">Panjang Kamar (cm)</label><br>
              <input type="text" id="exampleInputEmail1" name="panjang">
            </div>
            <div class="col-sm-12">
              <label for="exampleInputPassword1">Lebar Kamar (cm)</label><br>
              <input type="text" id="exampleInputPassword1" name="lebar">
            </div>
            <div class="col-sm-12 mt-2">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </div>
    </form>
@endsection
