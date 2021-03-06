<!DOCTYPE html>
<html>
<head>
	<title>Voto Certo</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		.w3-bar .w3-bar-item {
			padding: 8px 10px;
		}

		label{
			margin-left: 480px;
			display: inline-block;
			margin-top: 8px;
		}
		#logar{
			float: right;
		}
		.fundo{ 	
		    margin: 0px;
			margin-left: -30px;
			background: url("https://cdn.hipercultura.com/imagens/qual-a-origem-do-ordem-e-progresso-na-bandeira-do-brasil-og.jpg") center no-repeat;
			background-size: cover;
			height: 624px;
		}
	
	</style>
</head>
<body>
	<div class="w3-bar w3-black">
	  <a href="{{ route('TelaInicial') }}" class="w3-bar-item w3-button">Voto Certo</a>
	  <a href="{{ route('CadastrarEleitor') }}" class="w3-bar-item w3-button">Cadastrar Eleitor</a>
	  <a href="{{ route('cadastrarAjuda') }}" class="w3-bar-item w3-button">Cadastrar Ajuda</a>
	  <a href="{{ route('EleitorListar')}}" class="w3-bar-item w3-button">Eleitor</a>
	  <a href="{{ route('AjudaListar')}}" class="w3-bar-item w3-button">Ajudas</a>
	  <a href="{{ route('Graficos') }}" class="w3-bar-item w3-button">Graficos</a>
	  <label> Bem Vindo!! {{session('usuario')}} </label>
	  <a class="w3-bar-item w3-button"  href="{{ route('logout') }}" id="logar" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <i class="fa fa-sign-in"></i>Deslogar</a>
	</div>		
</div>
</div>


<dir class="fundo">
				{{-- <img src="https://cdn.hipercultura.com/imagens/qual-a-origem-do-ordem-e-progresso-na-bandeira-do-brasil-og.jpg"> --}}
</dir>

</body>
</html>