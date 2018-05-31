@extends('tela-em-comum')
@section('comum')
      
      <form action= "{{ route('EleitorSalvar') }}" style="border:#ccc">
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="fomr">
        <h1>Eleitor</h1>
    
           <label>NOME</label>
				<input type="text" id="nome" name="nome" placeholder="Nome Eleitor..." required>
				
           <label>SEXO</label>
        <select id="sexo" name="sexo">
          <option value="masculino">Masculino</option>
          <option value="feminino">Feminino</option>         
        </select>

        <label>TELEFONE</label>
        <input type="text" id="telefone" name="telefone" OnKeyPress="formatar('## #####-####', this)" required maxlength="13">

        <label>DATA DE NASCIMENTO</label> </br>
        <input type="date" id="DataNascimento" name="DataNascimento" required> </br></br> 

        <label>E-MAIL</label>
				<input type="text" placeholder=""  name="email">
				
        <label>ESTADO CIVIL</label>
        <select id="estadocivil" name="estadocivil">
          <option value="casado">CASADO</option>
          <option value="solteiro">SOLTEIRO</option>
          <option value="viuvo">VIUVO</option>
          <option value="divorciado">DIVORCIADO</option>
        </select>

      
        <label>TITULO DE ELEITOR</label>
        <input type="text" id="tituloeleitor" name="tituloeleitor" OnKeyPress="formatar('########-##', this)" required maxlength="11">

        <label> ZONA</label>
        <input type="text" id="zona" name="zona" maxlength="3" required>

        <label>SESSÃO</label>
        <input type="text" id="sessao"  name="sessao" maxlength="4" required>

        <label>CPF</label>
        <input type="text" id="cpf" name="cpf" OnKeyPress="formatar('###.###.###-##', this)" required maxlength="14">

        <label>CEP</label>
        <input type="text" id="cep" name="cep" maxlength="9" required OnKeyPress="formatar('#####-###', this)" onblur="pesquisacep(this.value);" >

        <label>ENDEREÇO</label>
        <input type="text" id="rua" placeholder="" name="complemento">

        <label>BAIRRO</label>
        <input type="text" id="bairro" name="bairro" required>

        <label>CIDADE</label>
        <input type="text" id="cidade" name="cidade" required>

        <label>UF</label>
        <input type="text" id="uf" name="uf" required>

        <label>NUMERO</label>
        <input type="text" id="numero" name="numero" required maxlength="8">

          <label>PROFISSÃO</label>
        <input type="text" id="profissao" name="profissao">

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
        <input type="text" id="religiao" name="religiao">
        
        <input type="submit" value="Concluir">          
    </div>  
    </form>
    <script type="text/javascript" >
    
	    function limpa_formulário_cep() {
	            //Limpa valores do formulário de cep.
	            document.getElementById('rua').value=("");
	            document.getElementById('bairro').value=("");
	            document.getElementById('cidade').value=("");
	            document.getElementById('uf').value=("");
	    }

	    function meu_callback(conteudo) {
	        if (!("erro" in conteudo)) {
	            //Atualiza os campos com os valores.
	            document.getElementById('rua').value=(conteudo.logradouro);
	            document.getElementById('bairro').value=(conteudo.bairro);
	            document.getElementById('cidade').value=(conteudo.localidade);
	            document.getElementById('uf').value=(conteudo.uf);
	        } //end if.
	        else {
	            //CEP não Encontrado.
	            limpa_formulário_cep();
	            alert("CEP não encontrado.");
	        }
	    }
	        
	    function pesquisacep(valor) {

	        //Nova variável "cep" somente com dígitos.
	        var cep = valor.replace(/\D/g, '');

	        //Verifica se campo cep possui valor informado.
	        if (cep != "") {

	            //Expressão regular para validar o CEP.
	            var validacep = /^[0-9]{8}$/;

	            //Valida o formato do CEP.
	            if(validacep.test(cep)) {

	                //Preenche os campos com "..." enquanto consulta webservice.
	                document.getElementById('rua').value="...";
	                document.getElementById('bairro').value="...";
	                document.getElementById('cidade').value="...";
	                document.getElementById('uf').value="...";

	                //Cria um elemento javascript.
	                var script = document.createElement('script');

	                //Sincroniza com o callback.
	                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

	                //Insere script no documento e carrega o conteúdo.
	                document.body.appendChild(script);

	            } //end if.
	            else {
	                //cep é inválido.
	                limpa_formulário_cep();
	                alert("Formato de CEP inválido.");
	            }
	        } //end if.
	        else {
	            //cep sem valor, limpa formulário.
	            limpa_formulário_cep();
	        }
	    };

	    function formatar(mascara, documento){ // Para o CEP
	            var i = documento.value.length;
	            var saida = mascara.substring(0,1);
	            var texto = mascara.substring(i)
	            
	            if (texto.substring(0,1) != saida){
	                        documento.value += texto.substring(0,1);
	            }
	            
	    }

    </script>     
		
@endsection
