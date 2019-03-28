@extends('layouts.master')
@section('title', 'Luas Kamar')
@section('content')
    <div class="container">
        <div class="row text-center mt-3">
            <div class="col-sm-12" style="margin-bottom: 10px;">
                <button type="submit" class="btn btn-secondary"> << Back to Form </button>
            </div>
            <div class="col-sm-12">
                <h5>Luas Kamar adalah: </h5>
                <h1>{{$hasil}} cm<sup>2</sup> </h1>
            </div>
            <div class="col-sm-12 mx-auto mb-3">
                <div style="border: 1px solid;width:{{$p}}px;height: {{$l}}px;" class="mx-auto">
                    <p>{{$p}}cm</p>
                    <p class="text-left">{{$l}}cm</p>
                    <p class="centered">{{$hasil}}cm<sup>2</sup> </p>
                </div>
            </div>
        </div>
    </div>

@endsection
