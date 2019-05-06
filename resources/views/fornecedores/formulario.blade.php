@extends("principal")

@section("conteudo")
<form method="POST" action="/fornecedores/gravar">
    @method('POST')
    @csrf
    <input type="text" name="nome">

    <button type="button" class="btn btn-success"> Gravar</button>
</div>
@stop