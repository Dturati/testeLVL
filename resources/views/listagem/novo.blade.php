@extends('layout.site')
@section('conteudo')
    <div class="row">
        <form class="col s12" method="post" action="/produto/novo">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="row">
                <div class="input-field col s6">
                    <input  id="name" name="name" type="text" class="validate">
                    <label for="name">Nome</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input  id="descricao" name="descricao" type="text" class="validate">
                    <label for="descricao">Descricao</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input  id="valor" name="valor" type="text" class="validate">
                    <label for="valor">Valor</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input  id="quantidade" name="quantidade" type="text" class="validate">
                    <label for="quantidade">Quantidade</label>
                </div>
            </div>

            <button type="submit">Salvar</button>
        </form>
    </div>
@endsection