@extends('tela-em-comum')
@section('comum');

    <div class="container">

        <h3>Ajudas</h3> </br>

        
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar" name="search">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome do Eleitor</th>
                    <th>Adesivo</th>
                    <th>Adesivo Veicular</th>
                    <th>Valor Ajuda</th>
                    <th width="30%">Opções</th>
                </tr>
            </thead>

            <!-- DADOS -->

            <tbody>
                @foreach($Ajudas as $Ajuda)

                <tr class="trItens">
                    <td class="tex">{{$Ajuda['nome_e']}}</td>
                    <td class="tex">{{$Ajuda['adesivo']}}</td>
                    <td class="tex">{{$Ajuda['adesivoveicular']}}</td>
                    <td class="tex">{{$Ajuda['valor']}}</td>
    
                    <td>
                        <a href="{{route('AjudaVisualisar', ['id' => $Ajuda['id']])}}" class="btn btn-primary">Visualizar</a>
                        <a href="{{route('AjudaEditar', ['id' => $Ajuda['id']])}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('AjudaExcluir', ['id' => $Ajuda['id']])}}" class="btn btn-danger">Excluir</a>
                    </td>
                   
                </tr>
                @endforeach	 
            </tbody>
            <!-- DADOS [FIM] -->
        </table>
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