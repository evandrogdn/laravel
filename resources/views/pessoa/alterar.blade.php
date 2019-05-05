@extends("principal")

@section("conteudo")
<form method="POST" action="/public/pessoa/alterar/{{$pessoa->id}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$pessoa->nome}}">

    <input type="submit" name="gravar">
</form>
@stop