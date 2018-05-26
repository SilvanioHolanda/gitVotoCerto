@extends('tela-em-comum')
@section('comum')
	  
	  <form action= "{{ route('AjudaSalvar') }}" style="border:#ccc">
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
	
					<label for=""><b>NOME do ELEITOR</b></label>
					<input type="text" placeholder="Nome do Eleitor" name="nome_e" id="" required value="{{old('nome_e')}}"[[>
	
					<label>ADESIVO</label>
					<select id="adesivo" name="adesivo">
					<option value="Sim">SIM</option>
					<option value="Não">NÃO</option>		     
					</select>
	
					<label>ADESIVO VEICULAR</label>
					<select name="adesivoveicular">
					<option value="Sim">SIM</option>
					<option value="Não">NÃO</option>		     
					</select>
	
					<label for=""><b>DESCRIÇÃO</b></label>
					<input type="text" placeholder="" name="descricao" required>
	
					<label for=""><b>VALOR LANÇAMENTO</b></label>
					<input type="integer" placeholder="" name="valor" required>
	
					<input type="submit" value="Concluir">        	
	</div>	
	</form>  	
@endsection
