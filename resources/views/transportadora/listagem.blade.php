@extends("principal")

@section("conteudo")
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div  class="container">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
        Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li><a href="/fornecedores" class="nav-link"> Listagem  dos Fornecedores </a></li>
          <li><a href="/pessoas" class="nav-link"> Listagem das Pessoas </a></li>
          <li><a href="/produtos" class="nav-link"> Listagem dos Produtos</a></li>
          <li><a href="/regiao" class="nav-link"> Listagem das regioes</a></li>
          <li><a href="/transportadoras" class="nav-link"> Listagem das transportadoras</a></li>
        </ul>
      </div>
    </div>
  </nav>

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
                <a href="/transportadoras/deletar/{{$p->IDTransportadora}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop