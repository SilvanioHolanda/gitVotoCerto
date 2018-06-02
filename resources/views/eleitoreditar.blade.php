@extends('tela-em-comum')
@section('comum')

      <form action= "{{ route('EleitorAtualizar',['id' => $Eleitor['id']]) }}" style="border:#ccc">
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
    
           <label >NOME</label>
				<input type="text" readonly="readonly" id="nome" name="nome" placeholder="Nome Eleitor..." required value="{{old('nome', $Eleitor['nome'])}}">
                
	
           <label>SEXO</label>
           <select id="sexo" name="sexo">
          <option value="masculino" @if(old('sexo',$Eleitor['sexo']) == "masculino") selected @endif>Masculino</option>
          <option value="feminino" @if(old('sexo',$Eleitor['sexo']) == "feminino") selected @endif>Feminino</option>         
          </select>

        <label>TELEFONE</label>
        <input type="text" id="telefone" name="telefone" OnKeyPress="formatar('## #####-####', this)" required maxlength="13" value="{{old('telefone', $Eleitor['telefone'])}}">

        <label>DATA DE NASCIMENTO</label> </br>
        <input type="date" id="DataNascimento" name="DataNascimento" required value="{{old('DataNascimento', $Eleitor['DataNascimento'])}}"> </br></br> 

        <label>E-MAIL</label>
				<input type="text" placeholder=""  name="email" value="{{old('email', $Eleitor['email'])}}">
				
        <label>ESTADO CIVIL</label>
        <select id="estadocivil" name="estadocivil">
          <option value="casado" @if(old('estadocivil',$Eleitor['estadocivil']) == "casado") selected @endif>CASADO</option>
          <option value="solteiro" @if(old('estadocivil',$Eleitor['estadocivil']) == "solteiro") selected @endif>SOLTEIRO</option>
          <option value="viuvo" @if(old('estadocivil',$Eleitor['estadocivil']) == "viuvo") selected @endif>VIUVO</option>
          <option value="divorciado" @if(old('estadocivil',$Eleitor['estadocivil']) == "divorciado") selected @endif>DIVORCIADO</option>
        </select>

      
        <label>TITULO DE ELEITOR</label>
        <input type="text" id="tituloeleitor" name="tituloeleitor" OnKeyPress="formatar('########-##', this)" required maxlength="11" value="{{old('tituloeleitor', $Eleitor['tituloeleitor'])}}">

        <label>ZONA</label>
        <input type="text" id="zona" name="zona" maxlength="3" required value="{{old('zona', $Eleitor['zona'])}}">

        <label>SESSÃO</label>
        <input type="text" id="sessao"  name="sessao" maxlength="4" required value="{{old('sessao', $Eleitor['sessao'])}}">

        <label>CPF</label>
        <input type="text" id="cpf" name="cpf" OnKeyPress="formatar('###.###.###-##', this)" required maxlength="14" onblur="validarCPF(this)" value="{{old('cpf', $Eleitor['cpf'])}}">

        <label>CEP</label>
        <input type="text" id="cep" name="cep" required value="{{old('cep', $Eleitor['cep'])}}" maxlength="9" required OnKeyPress="formatar('#####-###', this)" onblur="pesquisacep(this.value);">

        <label>ENDEREÇO</label>
        <input type="text" id="rua" placeholder="" name="complemento" value="{{old('complemento', $Eleitor['complemento'])}}">

        <label>BAIRRO</label>
        <input type="text" id="bairro" name="bairro" required value="{{old('bairro', $Eleitor['bairro'])}}">

        <label>CIDADE</label>
        <input type="text" id="cidade" name="cidade" required value="{{old('cidade', $Eleitor['cidade'])}}">

        <label>UF</label>
        <input type="text" id="uf" name="uf" required value="{{old('uf', $Eleitor['uf'])}}">

        <label>NUMERO</label>
        <input type="text" id="numero" name="numero" required value="{{old('numero', $Eleitor['numero'])}}" maxlength="8">

                <label>PROFISSÃO</label>
        <input type="text" id="profissao" name="profissao" value="{{old('profissao', $Eleitor['profissao'])}}">

        <label>GRAU DE INSTRUÇÃO</label>
        <select id="grauinstrucao" name="grauinstrucao">
          <option value="analfabeto" @if(old('grauinstrucao',$Eleitor['grauinstrucao']) == "analfabeto") selected @endif>ANALFABETO</option>
          <option value="ensinofundamental" @if(old('grauinstrucao',$Eleitor['grauinstrucao']) == "ensinofundamental") selected @endif>ENSINO FUNDAMENTAL INCOMPLETO</option>
          <option value="ensinofundamentalcompleto" @if(old('grauinstrucao',$Eleitor['grauinstrucao']) == "ensinofundamentalcompleto") selected @endif>ENSINO FUNDAMENTAL COMPLETO</option>
          <option value="ensinomedio" @if(old('grauinstrucao',$Eleitor['grauinstrucao']) == "ensinomedio") selected @endif>ENSINO MEDIO INCOMPLETO</option>
          <option value="ensinomediocompleto" @if(old('grauinstrucao',$Eleitor['grauinstrucao']) == "ensinomediocompleto") selected @endif>ENSINO MEDIO COMPLETO</option>
          <option value="superior" @if(old('grauinstrucao',$Eleitor['grauinstrucao']) == "superior") selected @endif>SUPERIOR</option>
          <option value="mestrado" @if(old('grauinstrucao',$Eleitor['grauinstrucao']) == "mestrado") selected @endif>MESTRADO</option>
          <option value="doutorado" @if(old('grauinstrucao',$Eleitor['grauinstrucao']) == "doutorado") selected @endif>DOUTORADO</option>
        </select>

        <label>RELIGIÃO</label>
        <input type="text" id="religiao" name="religiao" value="{{old('religiao', $Eleitor['religiao'])}}">



    
                    
    
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
        
        function _cpf(cpf) {
            cpf = cpf.replace(/[^\d]+/g, '');
            if (cpf == '') return false;
            if (cpf.length != 11 ||
                cpf == "00000000000" ||
                cpf == "11111111111" ||
                cpf == "22222222222" ||
                cpf == "33333333333" ||
                cpf == "44444444444" ||
                cpf == "55555555555" ||
                cpf == "66666666666" ||
                cpf == "77777777777" ||
                cpf == "88888888888" ||
                cpf == "99999999999")
                return false;
            add = 0;
            for (i = 0; i < 9; i++)
                add += parseInt(cpf.charAt(i)) * (10 - i);
            rev = 11 - (add % 11);
            if (rev == 10 || rev == 11)
                rev = 0;
            if (rev != parseInt(cpf.charAt(9)))
                return false;
            add = 0;
            for (i = 0; i < 10; i++)
                add += parseInt(cpf.charAt(i)) * (11 - i);
            rev = 11 - (add % 11);
            if (rev == 10 || rev == 11)
                rev = 0;
            if (rev != parseInt(cpf.charAt(10)))
                return false;
            return true;
        }
        
        function validarCPF(el){
          if( !_cpf(el.value) ){
         
            alert("CPF inv�lido!" + el.value);
         
            // apaga o valor
            el.value = "";
          }
        }

    </script>
		
@endsection