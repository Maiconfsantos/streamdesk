<link rel="stylesheet" type="text/css" href="<?=css_url()?>custom/form.css">
<script type="text/javascript" src="<?=js_url()?>login.js"></script>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-sm-12 col-lg-6">
			<h1> Preencha a sua ficha cadastral</h1>
		</div>
	</div>

	<form method="POST" action="<?php base_url()?>/Moneyplus/Email/cadastro">
		<div class="row ">
			<div class="col-sm-12 col-lg-6">
				<label for="nome">Dados Pessoais</label>
			</div>
		</div>

		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-lg-6">
   				 <input type="text" class="form-control" id="nome" name='nome' aria-describedby="Nome Completo" placeholder="Nome Completo *" required="true">
			</div>

			<div class="col-sm-12 col-lg-6">
   				 <input type="email" name='email' class="form-control" id="nome" aria-describedby="Nome Completo" placeholder="Endereço de e-mail *" required="true">
			</div>
		</div>

		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-3">
   				 <input type="text" class="form-control cpf" id="cpf" aria-describedby="Nome Completo" name='cpf' placeholder="CPF *" required="true">
			</div>

			<div class="col-sm-12 col-lg-3">
   				 <input type="text" class="form-control" id="nome" aria-describedby="Nome Completo" placeholder="RG *" required="true">
			</div>

			<div class="col-sm-12 col-lg-6">
   				 <input type="text" class="form-control" id="nome" aria-describedby="Nome Completo" placeholder="Nome Completo da mãe">
			</div>
		</div>


		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-3">
   				  <select id="estadocivil" name='estadocivil' class="form-control" required="true">
			        <option selected value=''>Estado Cívil *</option>
			        <option value='Casado'>Casado</option>
			        <option value='Solteiro'>solteiro</option>
			      </select>
			</div>

			<div class="col-sm-12 col-lg-3">
   				  <select id="sexo" name='sexo' class="form-control" required="true">
			        <option selected value=''>Sexo *</option>
			        <option value='Masculino'>Masculino</option>
			        <option value='Feminino'>Feminino</option>
			      </select>
			</div>

			<div class="col-sm-12 col-lg-6">
   				 <input type="text" class="form-control" id="endereco" aria-describedby="Nome Completo" name='endereco' placeholder="Endereço*" required="true">
			</div>	
		</div>

		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-3">
   				  <input type="text" class="form-control" id="bairro" aria-describedby="bairro" name='bairro' placeholder="Bairro*" required="true">
			</div>
			<div class="col-sm-12 col-lg-3">
   				  <input type="text" class="form-control" id="cidade" aria-describedby="cidade" name='cidade' placeholder="Cidade*" required="true">
			</div>
			<div class="col-sm-12 col-lg-3">
   				  <input type="text" class="form-control" id="uf" aria-describedby="uf" name='uf' placeholder="UF*" required="true">
			</div>
			<div class="col-sm-12 col-lg-3">
   				  <input type="text" class="form-control" id="CEP" aria-describedby="CEP" name='CEP' placeholder="CEP*" required="true">
			</div>
		</div>

		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-6">
				<input type="text" class="form-control" id="telefone1" aria-describedby="telefone1" name='telefone1' placeholder="T. Residêncial*" required="true">
			</div>
			<div class="col-sm-12 col-lg-6">
				<input type="text" class="form-control" id="telefone2" aria-describedby="telefone2" name='telefone2' placeholder="T. Celular*" required="true">
			</div>
		</div>

		<div class="row ">
			<div class="col-sm-12 col-lg-6">
				<label class="secondarylabel" for="nome">Dados Profissionais</label>
			</div>
		</div>

		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-6">
				<input type="text" class="form-control" id="empresa" aria-describedby="empresa" name='empresa' placeholder="Empresa que trabalha">
			</div>
			<div class="col-sm-12 col-lg-6">
				<input type="text" class="form-control" id="cargo" aria-describedby="cargo" name='cargo' placeholder="Cargo/Ocupação">
			</div>
		</div>

		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-6">
				<input type="text" class="form-control" id="rendimento" aria-describedby="rendimento" name='rendimento' placeholder="Rendimento Mensal">
			</div>
			<div class="col-sm-12 col-lg-6">
				<input type="text" class="form-control" id="telefone3" aria-describedby="telefone3" name='telefone3' placeholder="T. Residêncial">
			</div>
		</div>

		<div class="row ">
			<div class="col-sm-12 col-lg-6">
				<label class="secondarylabel" for="nome">Dados do Cônjugue</label>
			</div>
		</div>

		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-6">
				<input type="text" class="form-control" id="nomeconjugue" aria-describedby="nomeconjugue" name='nomeconjugue' placeholder="Nome do Cônjugue*" required="true">
			</div>
			<div class="col-sm-12 col-lg-6">
				<input type="text" class="form-control cpf" id="cpfconjugue" aria-describedby="cpfconjugue" name='cpfconjugue' placeholder="CPF*" required="true">
			</div>
		</div>

		<div class="row ">
			<div class="col-sm-12 col-lg-6">
				<label class="secondarylabel">Anexar comprovantes 
				</label>
			</div>
		</div>

		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-4">
				 <input type="file" class="custom-file-input" id="imgcpf" name="imgcpf"
			      aria-describedby="imgcpf" required="true">
			    <label class="custom-file-label" for="imgcpf">CPF<br><img src="<?=asset_url()?>/imgs/doc-verso.png" class='imglabel'></img>
			    </label>
			</div>
			<div class="col-sm-12 col-lg-4">
				 <input type="file" class="custom-file-input" id="imgrg" name="imgrg"
			      aria-describedby="imgrg" required="true">
			    <label class="custom-file-label" for="imgrg">RG<br><img src="<?=asset_url()?>/imgs/doc-verso.png" class='imglabel'></img>
			    </label>
			</div>
			<div class="col-sm-12 col-lg-4">
				 <input type="file" class="custom-file-input" id="imgcomprovante" name="imgcomprovante"
			      aria-describedby="imgcomprovante" required="true">
			    <label class="custom-file-label" for="imgcomprovante">Comprovante de Residência<br><img src="<?=asset_url()?>/imgs/doc-verso.png" class='imglabel'></img>
			    </label>
			</div>	
		</div>

		<div class="row ">
			<div class="col-sm-12 col-lg-6">
				<label class="secondarylabel">Referências Pessoais 
				</label>
			</div>
		</div>

		<div class="row ">
			<div class="col-sm-12 col-lg-6">
				<label class="sublabel">Referência 1 
				</label>
			</div>
		</div>

		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-4">
				<input type="text" class="form-control" id="nomereferencia1" aria-describedby="nomereferencia1" name='nomereferencia1' placeholder="Nome">
			</div>
			<div class="col-sm-12 col-lg-4">
				<input type="text" class="form-control" id="grauparentesco1" aria-describedby="grauparentesco1" name='grauparentesco1' placeholder="Grau de Parentesco*" required="true">
			</div>
			<div class="col-sm-12 col-lg-4">
				<input type="text" class="form-control" id="celularreferencia1" aria-describedby="celularreferencia1" name='celularreferencia1' placeholder="T. Celular*" required="true">
			</div>
		</div>

		<div class="row ">
			<div class="col-sm-12 col-lg-6">
				<label class="sublabel2">Referência 2 
				</label>
			</div>
		</div>

		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-4">
				<input type="text" class="form-control" id="nomereferencia2" aria-describedby="nomereferencia2" name='nomereferencia2' placeholder="Nome">
			</div>
			<div class="col-sm-12 col-lg-4">
				<input type="text" class="form-control" id="grauparentesco2" aria-describedby="grauparentesco2" name='grauparentesco2' placeholder="Grau de Parentesco*" required="true">
			</div>
			<div class="col-sm-12 col-lg-4">
				<input type="text" class="form-control" id="celularreferencia2" aria-describedby="celularreferencia2" name='celularreferencia1' placeholder="T. Celular*" required="true">
			</div>
		</div>

		<div class="row justify-content-md-center space">
			<div class="col-sm-12 col-lg-12" id='button'>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</div>



	</form>
</div>


<script type="text/javascript">

    $(document).ready(function(){

        $('input[type="file"]').change(function(e){

            var label = $('label[for="' + $(this).attr('id') + '"]');

            label.addClass('uploded');

        });

    });

</script>