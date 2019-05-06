@extends("principal")

@section("conteudo")
    <a href="/regiao/formulario" class="btn btn-primary">
        Cadastrar Nova Regiao
    </a>
    <hr>
    <h1>Listagem de Regiao</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($regiao as $r)
        <tr>
            <td>{{$r->DescricaoRegiao}}</td>
            <td>
                <a href="regiao/alterar/formulario/{{$r->IDRegiao}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="regiao/deletar/{{$r->IDRegiao}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop   