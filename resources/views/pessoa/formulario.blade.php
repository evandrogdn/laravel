@extends("principal")

@section("conteudo")
<form method="POST" action="/pessoas/gravar">
    @method('POST')
    @csrf
    <input type="text" name="nome">

    <input type="submit" name="gravar">
</form>
@stop