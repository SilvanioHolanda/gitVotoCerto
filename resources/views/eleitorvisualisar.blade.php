@extends('tela-em-comum')
@section('comum')
      
      <form action= "{{ route('EleitorListar') }}" style="border:#ccc">
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
    
           <label>NOME</label>
				<input type="text" readonly="readonly"  id="nome" name="nome" placeholder="Nome Eleitor..." required value="{{old('nome', $Eleitor['nome'])}}">
			
           <label>SEXO</label>
        <select id="sexo">        
          <option value="masculino" @if(old('sexo',$Eleitor['sexo']) == "masculino") selected @endif>Masculino</option>
          <option value="feminino" @if(old('sexo',$Eleitor['sexo']) == "feminino") selected @endif>Feminino</option>         
        </select>

        <label>TELEFONE</label>
        <input type="text" readonly="readonly" id="telefone" name="telefone" placeholder="(XX)XXXXX-XXXX" required value="{{old('telefone', $Eleitor['telefone'])}}">

        <label>DATA DE NASCIMENTO</label> </br>
        <input type="date" readonly="readonly" id="DataNascimento" name="DataNascimento" required value="{{old('DataNascimento', $Eleitor['DataNascimento'])}}"> </br></br> 

        <label>E-MAIL</label>
				<input type="text" readonly="readonly" id="email" name="email" required value="{{old('email', $Eleitor['email'])}}">
				
        <label>ESTADO CIVIL</label>
        <select id="estadocivil" name="estadocivil">
          <option value="casado" @if(old('estadocivil',$Eleitor['estadocivil']) == "casado") selected @endif>Casado</option>
          <option value="solteiro" @if(old('estadocivil',$Eleitor['estadocivil']) == "solteiro") selected @endif>Solteiro</option>
          <option value="viuvo" @if(old('estadocivil',$Eleitor['estadocivil']) == "viuvo") selected @endif>Solteiro</option>
          <option value="divorciado" @if(old('estadocivil',$Eleitor['estadocivil']) == "divorciado") selected @endif>Solteiro</option>
        </select>

        <label>TITULO DE ELEITOR</label>
        <input type="text" readonly="readonly"  id="tituloeleitor" name="tituloeleitor" required value="{{old('tituloeleitor', $Eleitor['tituloeleitor'])}}">

        <label> ZONA</label>
        <input type="text" readonly="readonly"  id="zona" name="zona" required value="{{old('zona', $Eleitor['zona'])}}">

        <label>SESSÃO</label>
        <input type="text" readonly="readonly"  id="sessao"  name="sessao" required value="{{old('sessao', $Eleitor['sessao'])}}">

        <label>CPF</label>
        <input type="text" readonly="readonly"  id="cpf" name="cpf" required value="{{old('cpf', $Eleitor['cpf'])}}">

        <label>CEP</label>
        <input type="text" readonly="readonly"  id="cep" name="cep" required value="{{old('cep', $Eleitor['cep'])}}">

        <label>BAIRRO</label>
        <input type="text" readonly="readonly"  id="bairro" name="bairro" required value="{{old('bairro', $Eleitor['bairro'])}}">

        <label>CIDADE</label>
        <input type="text" readonly="readonly"  id="cidade" name="cidade" required value="{{old('cidade', $Eleitor['cidade'])}}">

        <label>UF</label>
        <input type="text" readonly="readonly"  id="uf" name="uf" required value="{{old('uf', $Eleitor['uf'])}}">

        <label>NUMERO</label>
        <input type="text" readonly="readonly"  id="numero" name="numero" required value="{{old('numero', $Eleitor['numero'])}}">

        <label>COMPLEMENTO</label>
        <input type="text" readonly="readonly"  id="complemento" name="complemento" required value="{{old('complemento', $Eleitor['complemento'])}}">

                <label>PROFISSÃO</label>
        <input type="text"  readonly="readonly" id="profissao" name="profissao" required value="{{old('profissao', $Eleitor['profissao'])}}">

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
        <input type="text" readonly="readonly"  id="religiao" name="religiao" required value="{{old('religiao', $Eleitor['religiao'])}}">



    
                    
    
                    <input type="submit" value="Voltar">          
    </div>  
		</form>     
		
@endsection
