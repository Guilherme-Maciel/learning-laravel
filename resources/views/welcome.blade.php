@extends('layouts.main')

@section('title', 'Guizo - Welcome')

@section('content')


<h1>TESTANDO ENGINE BLADE</h1>
<ul>
@if(10 > 5)
    <li>TESTANDO IFs</li>
@endif
<li>{{ $data }}</li>

@if($var == "")
    <li>Variável vazia</li>
@else 
    <li>Variável contém dados</li>
@endif
<!-- O nome dos dados dinâmicos é a chave do array, e não a variável PHP-->
</li>
</ul>
<h1>USO DE ESTRUTURA DE REPETIÇÃO FOR</h1>
<h2>FOR</h2>
<ul>
    @for($i = 0; $i < count($arr); $i++)
        <li>{{$arr[$i]}}</li>
    @endfor
</ul>
<h2>FOR EACH</h2>
<ul>
    @foreach($nomes as $nome)
        <li>{{$loop->index}} - {{$nome}}</li>
    @endforeach
</ul>
<h1>UTILIZANDO PHP PURO</h1>
@php
    $name = "Exemplo de PHP puro";
    echo $name;
@endphp

{{-- Comentário não aparece na tela --}}
<h1>ARQUIVO ESTÁTICO</h1>
<img src="/img/hachiman.jpg" alt="hachiman" height="100xp" style="border-radius:50%">

@endsection