@extends("principal")

@section("conteudo")
    <a href="/public/produtos/formulario" class="btn btn-primary">
        Cadastrar Novo Produto
    </a>
    <hr>
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($regiao as $r)
        <tr>
            <td>{{$r->DescricaoRegiao}}</td>
            <td>
                <a href="produtos/alterar/formulario/{{$r->IDRegiao}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="produtos/deletar/{{$p->IDRegiao}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop   