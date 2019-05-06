@extends("principal")

@section("conteudo")
<form method="POST" action="/fornecedores/alterar/{{$fornecedores->IDFornecedor}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$fornecedores->NomeCompanhia}}">

    <input class="btn btn-success" type="submit" name="gravar">
</form>
@stop