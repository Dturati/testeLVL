@extends('layout.site')
@section('titulo','detalhes')
@section('conteudo')
    <span style="text-align: center">
         <h6 style="text-align: center">Delahes do produto</h6>
        <ul>
            <li>
                <h6>Nome:{{$produto->name}}</h6>
            </li>
        </ul>
        <ul>
            <li>
                <h6>Descrição:{{$produto->descricao}}</h6>
            </li>
        </ul>
         <ul>
            <li>
                <h6>Valor:{{$produto->valor}}</h6>
            </li>
        </ul>
         <ul>
            <li>
                <h6>Quantidade:{{$produto->quantidade}}</h6>
            </li>
        </ul>
    </span>
@endsection