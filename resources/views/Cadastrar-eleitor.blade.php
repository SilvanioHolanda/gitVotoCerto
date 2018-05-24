@extends('tela-em-comum')
@section('comum')
	<div class="w3-container"> <!--  -->
	  <h2>Cadastrar Eleitor</h2>

	  <div class="w3-row">
	    <a href="javascript:void(0)" onclick="opcoescadastro(event, 'Pessoais');">
	      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Dados Pessoais</div>
	    </a>
	    <a href="javascript:void(0)" onclick="opcoescadastro(event, 'Sociais');">
	      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Dados Sociais</div>
	    </a>
	    <a href="javascript:void(0)" onclick="opcoescadastro(event, 'Dependentes');">
	      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Dependentes</div>
	    </a>
	  </div>

	  <div id="Pessoais" class="w3-container city" 
	   
	  <div class="fomr">
				<h2>Dados Pessoais</h2> 
		  <form action="{{ route('EleitorSalvar') }}" method="get">
			
		    <label >NOME</label>
		    <input type="text" id="nome" name="nome" placeholder="Nome Eleitor..." required>

		    <label>SEXO</label>
		    <select id="sexo" name="sexo">
		      <option value="masculino">Masculino</option>
		      <option value="feminino">Feminino</option>		     
		    </select>

		    <label>TELEFONE</label>
		  	<input type="text" id="telefone" name="telefone" placeholder="(XX)XXXXX-XXXX" required>

		  	<label>DATA DE NASCIMENTO</label> </br>
		  	<input type="date" id="DataNascimento" name="DataNascimento" required> </br></br> 

		  	<label>E-MAIL</label>
		  	<input type="text" id="e-mail" name="email" required>


		  	<label>ESTADO CIVIL</label>
		    <select id="estadocivil" name="estadocivil">
		      <option value="casado">CASADO</option>
		      <option value="solteiro">SOLTEIRO</option>
		      <option value="viuvo">VIUVO</option>
		      <option value="divorciado">DIVORCIADO</option>
		    </select>

		    <label>TITULO DE ELEITOR</label>
		  	<input type="text" id="tituloeleitor" name="tituloeleitor" required>

				<label>	ZONA</label>
		  	<input type="text" id="zona" name="zona" required>

				<label>SESSÃO</label>
		  	<input type="text" id="sessao"  name="sessao" required>

 		  	<label>CPF</label>
		  	<input type="text" id="cpf" name="cpf" required>

		  	<label>CEP</label>
		  	<input type="text" id="cep" name="cep" required>

		  	<label>BAIRRO</label>
		  	<input type="text" id="bairro" name="bairro" required>

		  	<label>CIDADE</label>
		  	<input type="text" id="cidade" name="cidade" required>

		  	<label>UF</label>
		  	<input type="text" id="uf" name="uf" required>

		  	<label>NUMERO</label>
		  	<input type="text" id="numero" name="numero" required>

		  	<label>COMPLEMENTO</label>
		  	<input type="text" id="complemento" name="complemento" required>

	  </div>

	  <div id="Sociais" class="w3-container city" style="display:none" required>
	    <h2>Dados Sociais</h2>

			<label>PROFISSÃO</label>
		  	<input type="text" id="profissao" name="profissao" required>

		  	<label>GRAU DE INSTRUÇÃO</label>
		    <select id="grauinstrucao" name="grauinstrucao">
		      <option value="analfabeto">ANALFABETO</option>
		      <option value="ensinofundamental">ENSINO FUNDAMENTAL INCOMPLETO</option>
		      <option value="ensinofundamentalcompleto">ENSINO FUNDAMENTAL COMPLETO</option>
		      <option value="ensinomedio">ENSINO MEDIO INCOMPLETO</option>
		      <option value="ensinomediocompleto">ENSINO MEDIO COMPLETO</option>
		      <option value="superior">SUPERIOR</option>
		      <option value="mestrado">MESTRADO</option>
		      <option value="doutorado">DOUTORADO</option>
		    </select>

		    <label>RELIGIÃO</label>
		  	<input type="text" id="religiao" name="religiao" required>
	  </div>

	  <div id="Dependentes" class="w3-container city" style="display:none">
	    <h2>Dependentes</h2>
	    	<label>Nome</label>
		  	<input type="text" id="nomedependente" name="nomedependente">

		  	<label>Parentesco</label>
		    <select id="parentesco" name="parentesco">
		      <option value="conjuge">CÔNJUGE</option>		
		      <option value="filho">FILHO(A)</option>
		      <option value="irmão">IRMÃO(A)</option>
		      <option value="neto">NETO(A)</option>
		      <option value="tio">TIO(A)</option>
		      <option value="sobrinho">SOBRINHO(A)</option>
		      <option value="pai">PAI</option>
		      <option value="mae">MÃE</option>
		      <option value="primo">PRIMO</option>
		    </select>


		  	
		  	<input type="button" value="+">
	    	<input type="submit" value="Concluir">
		</div>
		
	</div>
</div>
</form>

	<script>
	function opcoescadastro(evt, cityName) {
	  var i, x, tablinks;
	  x = document.getElementsByClassName("city");
	  for (i = 0; i < x.length; i++) {
	     x[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablink");
	  for (i = 0; i < x.length; i++) {
	     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
	  }
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.firstElementChild.className += " w3-border-red";
	}
	</script>

@endsection