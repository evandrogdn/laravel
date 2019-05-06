@extends("principal")

@section("conteudo")
    <a href="produtos/formulario" class="btn btn-primary">
        Cadastrar Novo Produto
    </a>
    <hr>
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($produtos as $p)
        <tr>
            <td>{{$p->NomeProduto}}</td>
            <td>{{$p->PrecoUnitario}}</td>
            <td>{{$p->UnidadesEmEstoque}}</td>
            <td>
                <a href="/produtos/alterar/formulario/{{$p->IDProduto}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/produtos/deletar/{{$p->IDProduto}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop