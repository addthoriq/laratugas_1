@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>My name is {{{$nama}}}</p>
    @if ($jkl==1)
        <p>Laki-laki</p>
        @else
        <p>
            Perempuan
        </p>
    @endif

    {{--
    <h4>ini coment</h4>
    --}}

    
@endsection
