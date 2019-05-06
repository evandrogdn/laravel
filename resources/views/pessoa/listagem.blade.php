@extends("principal")

@section("conteudo")
    <a href="/pessoas/formulario" class="btn btn-primary">
        Cadastrar Nova Pessoa
    </a>
    <hr>
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($pessoas as $p)
        <tr>
            <td>{{$p->NomeCompanhia}}</td>
            <td>
                <a href="/pessoas/alterar/formulario/{{$p->IDCliente}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/pessoas/deletar/{{$p->IDCliente}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop