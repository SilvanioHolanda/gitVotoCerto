<!DOCTYPE html>
<html>
<head>
	<title>Voto Certo</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		input[type=text], select {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=submit] {
		    width: 100%;
		    background-color: #4CAF50;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}

		input[type=submit]:hover {
		    background-color: #45a049;
		}

		.fomr {
		    border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 20px;
		}
		#logar{
			float: right;
		}

	</style>
</head>
<body>
	<div class="w3-bar w3-black"> <!-- Menu -->
	  <a href="{{ route('TelaInicial') }}" class="w3-bar-item w3-button">Voto Certo</a>
	  <a href="{{ route('CadastrarEleitor') }}" class="w3-bar-item w3-button">Cadastrar Eleitor</a>
	  <a href="{{ route('cadastrarAjuda') }}" class="w3-bar-item w3-button">Cadastrar Ajuda</a>
	  <a href="{{ route('EleitorListar')}}" class="w3-bar-item w3-button">Eleitor</a>
	  <a href="{{ route('AjudaListar')}}" class="w3-bar-item w3-button">Ajudas</a>          
	  <a href="{{ route('Graficos') }}" class="w3-bar-item w3-button">Graficos</a>
	  <a class="w3-bar-item w3-button"  href="{{ route('logout') }}" id="logar" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <i class="fa fa-sign-in"></i>Deslogar</a>
  	</div>
	  
    @yield('comum')
	  
</body>


</html>