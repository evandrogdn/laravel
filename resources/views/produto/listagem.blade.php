@extends("principal")

@section("conteudo")
    <a href="/public/produtos/formulario" class="btn btn-primary">
        Cadastrar Novo Produto
    </a>
    <hr>
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($produtos as $p)
        <tr>
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td>
                <a href="/public/produtos/alterar/formulario/{{$p->id}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/produtos/deletar/{{$p->id}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop