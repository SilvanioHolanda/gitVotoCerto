<!DOCTYPE html>
<html>
<head>
	<title>Voto Certo</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/home-tela.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="w3-bar w3-black"> <!-- MENU SUPERIOR -->
		<h4 class="w3-bar-item botaoNome">Voto Certo</h4>
		<a class="w3-bar-item w3-button" id="logar" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <i class="fa fa-sign-in"> Logar</i></a>
	</div>
			
		{{session('erro')}}

		<div id="id01" class="modal">
				<form class="modal-content animate" action="{{route('logar')}}" method="post">
					{{ csrf_field() }}
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					</div>
		
					<div class="container-logar"> <!-- Logar -->
						<label for="uname"><b>Nome</b></label>
						<input type="text" placeholder="Enter Username" name="nome" required>
		
						<label for="psw"><b>Senha</b></label>
						<input type="password" placeholder="Enter Password" name="senha" required>
							
						<button type="submit"><a>Login</a></button> 
						<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" href="{{ route('home') }}">Cancel</button>
					</div>
				</form>
		</div>
	
			<script>
			// Get the modal
			var modal = document.getElementById('id01');
	
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
					if (event.target == modal) {
							modal.style.display = "none";
					}
			}
			</script>
	
			<dir class="fundo">
				<img src="https://s3.amazonaws.com/dinder.com.br/wp-content/uploads/sites/125/2015/04/elei%C3%A7%C3%A3o1.jpg">
			</dir>
</body>
</html>