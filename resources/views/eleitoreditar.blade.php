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
        <h1>Ajuda</h1>
    
           <label >NOME</label>
				<input type="text" readonly="readonly" id="nome" name="nome" placeholder="Nome Eleitor..." required value="{{old('nome', $Eleitor['nome'])}}">
                
	
           <label>SEXO</label>
           <select id="sexo" name="sexo">
          <option value="masculino">Masculino</option>
          <option value="feminino">Feminino</option>         
          </select>

        <label>TELEFONE</label>
        <input type="text" id="telefone" name="telefone" placeholder="(XX)XXXXX-XXXX" required value="{{old('telefone', $Eleitor['telefone'])}}">

        <label>DATA DE NASCIMENTO</label> </br>
        <input type="date" id="DataNascimento" name="DataNascimento" required value="{{old('DataNascimento', $Eleitor['DataNascimento'])}}"> </br></br> 

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
        <input type="text" id="tituloeleitor" name="tituloeleitor" required value="{{old('tituloeleitor', $Eleitor['tituloeleitor'])}}">

        <label> ZONA</label>
        <input type="text" id="zona" name="zona" required value="{{old('zona', $Eleitor['zona'])}}">

        <label>SESSÃO</label>
        <input type="text" id="sessao"  name="sessao" required value="{{old('sessao', $Eleitor['sessao'])}}">

        <label>CPF</label>
        <input type="text" id="cpf" name="cpf" required value="{{old('cpf', $Eleitor['cpf'])}}">

        <label>CEP</label>
        <input type="text" id="cep" name="cep" required value="{{old('cep', $Eleitor['cep'])}}">

        <label>BAIRRO</label>
        <input type="text" id="bairro" name="bairro" required value="{{old('bairro', $Eleitor['bairro'])}}">

        <label>CIDADE</label>
        <input type="text" id="cidade" name="cidade" required value="{{old('cidade', $Eleitor['cidade'])}}">

        <label>UF</label>
        <input type="text" id="uf" name="uf" required value="{{old('uf', $Eleitor['uf'])}}">

        <label>NUMERO</label>
        <input type="text" id="numero" name="numero" required value="{{old('numero', $Eleitor['numero'])}}">

        <label>COMPLEMENTO</label>
        <input type="text" placeholder="" name="complemento">

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
		
@endsection
