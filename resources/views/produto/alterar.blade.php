@extends("principal")

@section("conteudo")
<form method="POST" action="/produtos/alterar/{{$produto->IDProduto}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$produto->NomeProduto}}">

    <input type="submit" name="gravar">
</form>
@stop