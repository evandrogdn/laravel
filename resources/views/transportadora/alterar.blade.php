@extends("principal")

@section("conteudo")
<form method="POST" action="/transportadoras/alterar/{{$transportadora->IDTransportadora}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$transportadora->NomeConpanhia}}">

    <input type="submit" name="gravar">
</form>
@stop