@extends("principal")

@section("conteudo")
    <a href="/fornecedores/formulario" class="btn btn-primary">
        Cadastrar Novo Fornecedor
    </a>
    <hr>
    <h1>Listagem dos Fornecedores</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($fornecedoress as $p)
        <tr>
            <td>{{$p->NomeCompanhia}}</td>
            <td>{{$p->NomeContato}}</td>
            <td>{{$p->Telefone}}</td>
            <td>
                <a href="/fornecedores/alterar/formulario/{{$p->IDFornecedor}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/fornecedores/deletar/{{$p->IDFornecedor}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop