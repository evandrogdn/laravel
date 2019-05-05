@extends("principal")

@section("conteudo")
    <a href="/public/pessoa/formulario" class="btn btn-primary">
        Cadastrar Nova Pessoa
    </a>
    <hr>
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($pessoa as $p)
        <tr>
            <td>{{$p->nome}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td>
                <a href="/public/pessoa/alterar/formulario/{{$p->id}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/pessoa/deletar/{{$p->id}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop