@extends('layout.site')
@section('titulo','Estoque')

@section('conteudo')
    <table class="table-striped table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Ação</th>
        </thead>

        <tbody>
            @foreach($listagem as $ls)
                <tr>
                    <td>{{$ls->name}}</td>
                    <td>{{$ls->descricao}}</td>
                    <td>{{$ls->valor}}</td>
                    <td><a href="{{route('visualizar',$ls->id)}}"><i class="small material-icons search">search</i></a></td>
                </tr>
            @endforeach

        </tbody>

    </table>

@endsection

