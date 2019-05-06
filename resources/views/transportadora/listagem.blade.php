@extends("principal")

@section("conteudo")
    <a href="transportadoras/formulario" class="btn btn-primary">
        Cadastrar Nova Transportadora
    </a>
    <hr>
    <h1>Listagem de Transportadoras</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($transportadora as $p)
        <tr>
            <td>{{$p->NomeConpanhia}}</td>
            <td>
                <a href="/transportadoras/alterar/formulario/{{$p->IDTransportadora}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/produtos/deletar/{{$p->IDTransportadora}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop