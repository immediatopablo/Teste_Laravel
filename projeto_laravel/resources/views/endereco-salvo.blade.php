@extends('layouts.app')

@section('title', 'Endereço Salvo')

@section('content')
    <h1>Endereço Salvo com Sucesso!</h1>
    <p>Endereço: {{ $endereco }}</p>
    <a href="/adicionar-endereco">Voltar</a>
@endsection
