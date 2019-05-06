@extends("principal")

@section("conteudo")
<form method="POST" action="/transportadoras/gravar">
    @method('POST')
    @csrf
    <input type="text" name="nome">
    
    <input type="submit" name="gravar">
</form>
@stop