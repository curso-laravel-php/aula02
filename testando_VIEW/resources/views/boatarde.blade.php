@extends('layouts.app')

@section('title', 'Boa tarde')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h1>Bem vindo ao curso</h1>
@endsection