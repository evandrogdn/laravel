@extends("principal")

@section("conteudo")
<form method="POST" action="/pessoas/alterar/{{$pessoa->IDCliente}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$pessoa->nome}}">

    <input type="submit" name="gravar">
</form>
@stop