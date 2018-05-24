@extends('tela-em-comum')
@section('comum')
	  
    <form action= "{{ route('AjudaAtualizar') }}" style="border:#ccc">
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
					
					<input type="hidden" name="id" value="{{$Ajuda->id}}">
					<input type="text" placeholder="Nome do Eleitor" name="nome_e" id="" required value="{{old('nome_e', $Ajuda['nome_e'])}}">
	
					<label>ADESIVO</label>
					<select id="adesivo" name="adesivo" value="{{old('adesivo',$Ajuda['adesivo'])}}">
					<option value="Sim">SIM</option>
					<option value="Não">NÃO</option>		     
					</select>
	
					<label>ADESIVO VEICULAR</label>
					<select name="adesivoveicular" value="{{old('adesivoveicular',$Ajuda['adesivoveicular'])}}">
					<option value="Sim">SIM</option>
					<option value="Não">NÃO</option>		     
					</select>
	
					<label for=""><b>DESCRIÇÃO</b></label>
					<input type="text" placeholder="" name="descricao" required value="{{old('descricao',$Ajuda['descricao'])}}">
	
					<label for=""><b>PENDENCIA?</b></label>
					<input type="text" placeholder="" name="descricao-p" value="{{old('descricao-p',$Ajuda['descricao-p'])}}">
	
					<label class="container">Gerar Lançamento <!-- botão cheched -->
					<input type="checkbox" checked="checked">
					<span class="checkmark"></span>
					</label>   </br> </br>
	
					<label for=""><b>VALOR LANÇAMENTO</b></label>
					<input type="integer" placeholder="" name="valor" required value="{{old('valor',$Ajuda['valor'])}}">
	
					<input type="submit" value="Confirmar">        	
	</div>	
	</form>  	
@endsection
