@extends('tela-em-comum')
@section('comum');

    <div class="container">

        <h3>Eleitores</h3> </br>

        <form method="get" action="">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar" name="pesquisar">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Titulo</th>
                    <th width="30%">Opções</th>
                </tr>
            </thead>

            <!-- DADOS -->

            <tbody>
                @foreach($Eleitor as $Eleito)

                <tr class="trItens">
                    <td class="tex">{{$Eleito['nome']}}</td>
                    <td class="tex">{{$Eleito['telefone']}}</td>
                    <td class="tex">{{$Eleito['tituloeleitor']}}</td>
    
                    <td>
                        <a href="{{route('EleitorVisualisar', ['id' => $Eleito['id']])}}" class="btn btn-primary">Visualizar</a>
                        <a href="{{route('EleitorEditar', ['id' => $Eleito['id']])}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('EleitorExcluir', ['id' => $Eleito['id']])}}" class="btn btn-danger">Excluir</a>
                    </td>
                   
                </tr>
                @endforeach	 
            </tbody>
            <!-- DADOS [FIM] -->
        </table>
        {{$paginacao}}
    </div>
    
</div>
   
    <script type="text/javascript">
        $(function(){
            $("#txtBusca").keyup(function(){
                var texto = $(this).val();
                
                $("#trItens tex").css("display", "block");
                $("#trItens tex").each(function(){
                    if($(this).text().indexOf(texto) < 0)
                       $(this).css("display", "none");
                });
            });
        });
    </script>
    @endsection