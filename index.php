   <html>
	<head>
		<title>IPB</title>
		<link rel="shortcut icon" href="assets/img/favicon.ico">
		<link rel="apple-touch-icon" href="assets/img/favicon.ico">

		<link rel="stylesheet" href="http://relatorioipb.com.br/assets/css/bootstrap.css">
		<!-- <link rel="stylesheet" href="http://relatorioipb.com.br/assets/css/style.css"> -->

		<link rel="stylesheet" href="assets/css/style.css">

		<script type="text/javascript" src="http://relatorioipb.com.br/assets/js/jquery.js"></script>
		<script type="text/javascript" src="http://relatorioipb.com.br/assets/js/bootstrap.js"></script>
		<!-- <script type="text/javascript" src="http://relatorioipb.com.br/assets/js/script.js"></script> -->
		<script type="text/javascript" src="http://relatorioipb.com.br/assets/js/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="http://relatorioipb.com.br/assets/js/jquery.maskMoney.min.js"></script>
	</head>
	<body>

		<div class="wrapper">
			<div class="header_page">
				<!-- <img class="igreja_logo" src="assets/img/igreja_presbiteriana_do_brasil.png"> -->
				<img class="igreja_logo" src="assets/img/ipb_logo.png">
				<h1 class="titulo">Informações referentes ao ano de 2013</h1>
				<button id="botao_voltar" class="btn btn-success" data-value="3" >Voltar para a escolha do Ano</button>
			</div>

			<hr>
			<!-- <form method="post" action="http://relatorioipb.com.br/index.php/Igreja/salvaIgreja"> -->
			<form method="post" action="www.google.com">
				<div class="panel-success padrao col-xs-12">
					<div class="panel-heading">I - Identificação da Igreja / Congregação Presbiterial</div>
					<!-- DIVISÃO EM DUAS COLUNAS -->

					<div class="panel-body">
						
						<!-- PRIMEIRA -->
						<div class="col-md-6 col-sm-12">

							<input value="3" name="ig_id" type="hidden" id="ig_id"  >
							<input value="2013" name="ano" type="hidden" id="ano"  >

							<div class="row">
								<h4 class="col-xs-12 subtitulo">Informações da Igreja:</h4>
							</div>
							

							<div class="row">
								<div class=" col-xs-12">
									<label>Nome da Igreja:</label>
									<input value="Igreja Presbiteriana de São João da Boa Vista" name="ig_nome" class="form-control" type="text" id="ig_nome"  >
								</div>
							</div>

							<div class="row">
								<div class="col-xs-10">
									<label> Endereço </label>
									<input value="Rua Benjamin Constant" class="form-control" name="ig_rua" type="text" id="ig_rua">
								</div>
								<div class="col-xs-2">
									<label>  Numero </label>
									<input value="403" class="form-control numeros" name="ig_numero"  type="text" id="ig_numero">
								</div>
							</div>

							<div class="row">
								<div class="col-xs-6">
									<label> Complemento </label>
									<input value="Centro" class="form-control" name="ig_complemento" type="text"  id="ig_complemento" >
								</div>
								<div class="col-xs-6">
									<label> Bairro </label>
									<input value="São João da Boa Vista" class="form-control" name="ig_bairro"  type="text" id="ig_bairro" >
								</div>	
							</div>

							<div class="row">
								<div class="col-xs-5">
									<label> Cidade </label>
									<input value="Centro" class="form-control" name="ig_cidade"  type="text" id="ig_cidade" >
								</div>
								<div class="col-xs-2">
									<label> UF </label>
									<input value="SP" class="form-control" name="ig_estado"  type="text" id="ig_estado">
								</div>
								<div  class="col-xs-3">
									<label> CEP  </label>
									<input value="13.870-000" class="form-control" name="ig_CEP"  type="text" id="ig_CEP" >
								</div>
								<div  class="col-xs-2">
									<label>  CP </label>
									<input value="0" class="form-control" name="ig_CP" type="text"  id="ig_CP">
								</div>	
							</div>

							<div class="row">
								<div  class="col-xs-3">
									<label>  CEP2 </label>
									<input value="" class="form-control" name="ig_CEP2" type="text"  id="ig_CEP2" size="6" >
								</div>
								<div class="col-xs-2">
									<label>  DDD </label>
									<input value="19" class="form-control" name="ig_ddd"  type="text" id="ig_ddd">
								</div>
								<div class="col-xs-3">
									<label> Telefone </label>
									<input value="3622-2905" class="form-control" name="ig_telefone" type="text"  id="ig_telefone" >
								</div>
								<div  class="col-xs-4">
									<label> Fax </label>
									<input value="3622-2905" class="form-control" name="ig_fax"  type="text" id="ig_fax">
								</div>
							</div>

							<div class="row">
								<div  class="col-xs-8">
									<label> E-Mail </label>
									<input value="" class="form-control" name="ig_email" type="text"  id="ig_email" >
								</div>
								<div   class="col-xs-4">
									<label> Data de organização: </label>
									<input value="1889-03-31" class="form-control" name="ig_data" type="date" id="ig_data" >
								</div>
							</div>
							
							<div class="row">
								<div   class="col-xs-4">
									<label> CNPJ: </label>
									<input value="" class="form-control" name="ig_cnpj" type="text"  id="ig_cnpj" >
								</div>
								<div   class="col-xs-3">
									<label>  Nº de ordem: </label>
									<input value="" class="form-control" name="ig_nordem" type="text"  id="ig_nordem" >
								</div>
								<div   class="col-xs-5">
									<label>  H-Page: </label>
									<input value="" class="form-control" name="ig_site" type="text" id="ig_site" >
								</div>	
							</div>	
						</div>

						
							

						<!-- SEGUNDA COLUNA  -->
						<div class=" col-md-6 col-sm-12">

							<div class="row">
								<h4 class="col-xs-12 subtitulo">Informações do Secretariado:</h4>
							</div>

							<div class="row">
								
								<div class="col-xs-12">
									<label>Nome do Secretario:</label>
									<input class="form-control col-xs-12" value="" name="sec_nome"  type="text" id="sec_nome" size="50" >
								</div>
							</div>

							<div class="row">
							
								<div class="col-xs-10">
									<label>Endereço </label>
									<input class="form-control" value="" name="sec_rua"  type="text" id="sec_rua" >
								</div>
								<div class="col-xs-2">
									<label> Numero </label>
									<input class="form-control numeros" value="" name="sec_num" id="sec_num">
								</div>
							</div>


							<div class="row">
								<div class="col-xs-6">
									<label> Complemento </label>
									<input class="form-control" value="" name="sec_comp" type="text" id="sec_comp"  >
								</div>
								<div class="col-xs-6">
									<label>Bairro </label>
									<input class="form-control" value="" name="sec_bairro" type="text"  id="sec_bairro" >
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-5">
									<label>Cidade </label>
									<input class="form-control" value="" name="sec_cidade" type="text" id="sec_cidade"  >
								</div>
								<div class="col-xs-2">
									<label> UF </label>
									<input class="form-control" value="" name="sec_estado" type="text" id="sec_estado" size="2"  >
								</div>
								<div class="col-xs-3">
									<label>CEP </label>
									<input class="form-control" value="" name="sec_CEP" type="text" id="sec_CEP"  size="6" >
								</div>
								<div class="col-xs-2">
									<label>CP  </label>
									<input class="form-control" value="" name="sec_CP" type="text" id="sec_CP"  size="5">
								</div>
							</div>

							<div class="row">
								<div class="col-xs-3">
									<label>CEP2 </label>
									<input class="form-control" value="" name="sec_CEP2" type="text" id="sec_CEP2" size="6"  >
								</div>
								<div class="col-xs-2">
									<label>DDD </label>
									<input class="form-control" value="" name="sec_ddd" type="text" id="sec_ddd" size="1" maxlength="2" >
								</div>
								<div class="col-xs-3">
									<label>Telefone</label>
									<input class="form-control" value="" name="sec_tel" type="text" id="sec_tel" size="6"  >
								</div>
								<div class="col-xs-4">
									<label>Fax </label>
									<input class="form-control" value="" name="sec_fax" type="text" id="sec_fax" size="6" >
								</div>
									
							</div>

							<div class="row">
								<div class="col-xs-12 ">
									<label>E-Mail </label>
									<input class="form-control" value="" name="sec_email" type="email" id="sec_email" size="28"  >
								</div>	
							</div>
							
						</div>


					</div>
				</div>

				<div class="panel-success padrao col-xs-12">
					<div class="panel-heading">II - Informações do Trabalho</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<label>As informações prestadas abaixo se relacionam a qual o tipo da igreja?</label>
								<div class="radio col-xs-12">
									<label><input type="radio" name="inf" value="1" id="inf_0">Somente a sede</label>
								</div>
								<div class="radio col-xs-12">
									<label><input  type="radio" name="inf" value="2" id="inf_1">Sede e Congregação</label>
								</div>
								<div class="radio col-xs-12">
									<label><input  type="radio" name="inf" value="3" id="inf_2">Congregação</label>
								</div>
							</div>
							<div class="col-md-6 col-xs-12">
								<label>Comentários:</label>
								<textarea name="comentario" class="form-control" rows="4"></textarea>
							</div>	
						</div>
					</div>
				</div>

				<div class="panel-success padrao col-xs-12">
					<div class="panel-heading">III - Estrutura da Comunidade Presbiteriana</div>
					<div class="panel-body">

						<div id="lidFormal" class="col-md-2 col-sm-12 ">
							<div class="col-md-12 ">
								<label >Pastores:</label>
								<input  class="form-control numeros" name="num_past" value="" id="num_past">
							</div>

							<div class="col-md-12">
								<label>  Licenciados:</label>
								<input class="form-control numeros" name="num_licen" value="" id="num_licen">
							</div>
							<div class="col-md-12">
								<label>   Presbíteros:</label>
								<input class="form-control numeros" name="num_presbit" value="" id="num_presbit">
							</div>

							<div class="col-md-12">
								<label>   Diáconos:</label>
								<input class="form-control numeros" name="num_diac" value="" id="num_diac">
							</div>

							<div class="col-md-12">
								<label>   Evangelistas:</label>
								<input class="form-control numeros" name="num_evang" value="" id="num_evang">
							</div>

							<div class="col-md-12">
								<label>  Missionários:</label>
								<input class="form-control numeros" name="num_missi" value="" id="num_missi">
							</div>

							<div class="col-md-12">
								<label>  Candidatos:</label>
								<input class="form-control numeros" name="num_candi" value="" id="num_candi">
							</div>
						</div>

						<div id="estTrab" class="col-md-5 col-sm-12">
							<div id="col1 " class="col-md-6 col-sm-12">
								<div  class="">
									<label>Congregações da Igreja:</label>
									<input class="form-control numeros" name="num_congre" value="" id="num_congre">
								</div>

								<div  class="">
									<label> Pontos de Pregações: </label>
									<input class="form-control numeros" name="num_pont_preg" value="" id="num_pont_preg">
								</div>

								<div  class="">
									<label>Nº de Escolas Dominicais:</label>
									<input class="form-control numeros" name="num_ed" value="" id="num_ed" >
								</div>
								<div  class="">
									<label> Nº de Professores / E.D.:</label>
									<input class="form-control numeros" name="num_prof_ed" value="" id="num_prof_ed" >
								</div>
								<div  class="">
									<label> Nº de Alunos/ED - ano anterior:</label>
									<input class="form-control numeros" value="" onkeyup="variacao(num_aluno_ed_ant, num_alunos_ed_atua, num_var_perc)"  name="num_aluno_ed_ant"  id="num_aluno_ed_ant"  disabled="">
								</div>
								<div  class="">
									<label>Nº de Alunos/ED - ano atual:</label>
									<input class="form-control numeros" name="num_alunos_ed_atua" value="" onkeyup="variacao(num_aluno_ed_ant, num_alunos_ed_atua, num_var_perc)"  id="num_alunos_ed_atua">
								</div>
								<div  class="">
									<label>Variação percentual - ED:</label>
									<input class="form-control numeros" name="num_var_perc"  id="num_var_perc"  disabled="">
								</div>
							</div>

							<div id="col2" class="col-md-6 col-sm-12">
								<div  class="">
									<label>Nº de Educandários:</label>
									<input class="form-control numeros" value="" name="num_educand" id="num_educand">
								</div>
								<div  class="">
									<label> Nº Total de Alunos - Educand.:</label>
									<input class="form-control numeros" value="" name="num_alun_educand" id="num_alun_educand">
								</div>
								<div  class="">
									<label> Nº de Creches</label>
									<input class="form-control numeros" value="" name="num_creche" id="num_creche">
								</div>
								<div  class="">
									<label> Nº Total de Crianças:</label>
									<input class="form-control numeros" value="" name="num_tot_crian" id="num_tot_crian">
								</div>
								<div  class="">
									<label> Nº de Outros*</label>
									<input class="form-control numeros" value="" name="num_outr" id="num_outr">
								</div>
								<div  class="">
									<label>Nº Total:</label>
									<input class="form-control numeros" value="" name="num_total" id="num_total">
								</div>
							</div>
						</div>



						<div id="DepInterno" class="col-md-5 col-sm-12">

							<!-- LINHA DE TITULO -->
							<div class="dep_interno_titulo">

								<div class="col-xs-7">
									<label >Numero de Departamentos:</label>
								</div>
								<div class="col-xs-5">
									<label >Numero de Membros:</label>
								</div>
							</div>

							<!-- COMECO LINHA DE CAMPOS -->
							<div class="dep_interno">

								<div class="col-xs-2">
									<label >UCP:</label>
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="ucp" placeholder="0" id="ucp" oninput="dep(ucp, upa, ump, saf, uph, out, tot_dep)">
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="memb_ucp" placeholder="0"  id="memb_ucp" onKeyUp="dep(memb_ucp, memb_upa, memb_ump, memb_saf, memb_uph, memb_out, memb_tot)">
								</div>
							</div>

							<div class="dep_interno">
								<div class="col-xs-2">
									<label>UPA:</label>
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="upa" placeholder="0"  id="upa" onKeyUp="dep(ucp, upa, ump, saf, uph, out, tot_dep)">
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="memb_upa" placeholder="0"  id="memb_upa" onKeyUp="dep(memb_ucp, memb_upa, memb_ump, memb_saf, memb_uph, memb_out, memb_tot)">
								</div>
							</div>

							<div class="dep_interno">

								<div class="col-xs-2">
									<label>UMP:</label>
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="ump" placeholder="0"  id="ump" onKeyUp="dep(ucp, upa, ump, saf, uph, out, tot_dep)">
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="memb_ump" placeholder="0"  id="memb_ump" onKeyUp="dep(memb_ucp, memb_upa, memb_ump, memb_saf, memb_uph, memb_out, memb_tot)">
								</div>
							</div>

							<div class="dep_interno">

								<div class="col-xs-2">
									<label>SAF:</label>
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="saf" placeholder="0"  id="saf" onKeyUp="dep(ucp, upa, ump, saf, uph, out, tot_dep)">
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="memb_saf" placeholder="0"  id="memb_saf" onKeyUp="dep(memb_ucp, memb_upa, memb_ump, memb_saf, memb_uph, memb_out, memb_tot)">
								</div>
							</div>


							<div class="dep_interno">
								<div class="col-xs-2">
									<label>UPH:</label>
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="uph" placeholder="0"  id="uph" onKeyUp="dep(ucp, upa, ump, saf, uph, out, tot_dep)">
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="memb_uph" placeholder="0"  id="memb_uph" onKeyUp="dep(memb_ucp, memb_upa, memb_ump, memb_saf, memb_uph, memb_out, memb_tot)">
								</div>
							</div>


							<div class="dep_interno">

								<div class="col-xs-2">
									<label>Outras:</label>
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="out" placeholder="0"  id="out" onKeyUp="dep(ucp, upa, ump, saf, uph, out, tot_dep)">
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros"  name="memb_out" placeholder="0"  id="memb_out" onKeyUp="dep(memb_ucp, memb_upa, memb_ump, memb_saf, memb_uph, memb_out, memb_tot)">
								</div>
							</div>


							<div class="dep_interno">

								<div class="col-xs-2">
									<label>Totais:</label>
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros" name="tot_dep" placeholder="" id="tot_dep" disabled="">
								</div>
								<div class="col-xs-5">
									<input class="form-control numeros" name="memb_tot" placeholder="" id="memb_tot" disabled="">
								</div>
							</div>
						</div>
					</div>
				</div>





				<div class="panel-success padrao col-xs-12">
					<div class="panel-heading">IV - Rol de Membros</div>
					<div class="panel-body">
						<div id="comungantes" class="col-md-6 col-sm-12">

							<div class="row">
								<h3 class="subtitulo">Comungantes:</h3>
							</div>

							<div class="row">
								<h4 class="subtitulo">Admitidos:</h4>
							</div>
							<div class="row">
								<div class="col-md-offset-6 col-md-2 col-sm-offset-6 col-sm-2">
									<label>FEM:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>MASC:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>TOTAL:</label>
								</div>
							</div>


							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Profissão de Fé:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_fem" placeholder="0" name="a11"  id="a11" size="2" maxlength="4" onKeyUp="soma(a11, a12, a13)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_masc" placeholder="0" name="a12"  id="a12" size="2" maxlength="4" onKeyUp="soma(a11, a12, a13)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a13"  id="a13" size="2" maxlength="5" disabled="">
								</div>
							</div>


							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Profissão de Fé e Batismo:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_fem" placeholder="0" name="a21"  id="a21" size="2" onKeyUp="soma(a21, a22, a23)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_masc" placeholder="0" name="a22"  id="a22" size="2" onKeyUp="soma(a21, a22, a23)">
								</div>

								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a23"  id="a23" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Transferência:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_fem" placeholder="0" name="a31"  id="a31" size="2" onKeyUp="soma(a31, a32, a33)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_masc" placeholder="0" name="a32"  id="a32" size="2" onKeyUp="soma(a31, a32, a33)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a33"  id="a33" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Jurisdição:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_fem" placeholder="0" name="a41"  id="a41" size="2" onKeyUp="soma(a41, a42, a43)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_masc" placeholder="0" name="a42"  id="a42" size="2" onKeyUp="soma(a41, a42, a43)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a43"  id="a43" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Restauração:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_fem" placeholder="0" name="a51"  id="a51" size="2" onKeyUp="soma(a51, a52, a53)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_masc" placeholder="0" name="a52"  id="a52" size="2" onKeyUp="soma(a51, a52, a53)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a53"  id="a53" size="2" disabled="">
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Designação do Presbitério:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_fem" placeholder="0" name="a61"  id="a61" size="2"  onKeyUp="soma(a61, a62, a63)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_masc" placeholder="0" name="a62"  id="a62" size="2" onKeyUp="soma(a61, a62, a63)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a63"  id="a63" size="2" disabled="">
								</div>
							</div>

							<hr>

							<div class="row">
								<h4 class="subtitulo">Demitidos:</h4>
							</div>

							<div class="row">
								<div class="col-md-offset-6 col-md-2 col-sm-offset-6 col-sm-2">
									<label>FEM:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>MASC:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>TOTAL:</label>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Transferência:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_demitidos_fem" placeholder="0" name="a71"  id="a71" size="2" onKeyUp="soma(a71, a72, a73)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_demitidos_masc" placeholder="0" name="a72"  id="a72" size="2" onKeyUp="soma(a71, a72, a73)" >
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a73"  id="a73" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Falecimento:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_demitidos_fem" placeholder="0" name="a81"  id="a81" size="2" onKeyUp="soma(a81, a82, a83)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_demitidos_masc" placeholder="0" name="a82"  id="a82" size="2" onKeyUp="soma(a81, a82, a83)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a83"  id="a83" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Exclusão:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_demitidos_fem" placeholder="0" name="a91"  id="a91" size="2" onKeyUp="soma(a91, a92, a93)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_demitidos_masc" placeholder="0" name="a92"  id="a92" size="2" onKeyUp="soma(a91, a92, a93)" >
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a93"  id="a93" size="2" disabled="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Ordenação:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_demitidos_fem" placeholder="0" name="a101"  id="a101" size="2" onKeyUp="soma(a101, a102, a103)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_demitidos_masc" placeholder="0" name="a102"  id="a102" size="2" onKeyUp="soma(a101, a102, a103)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a103"  id="a103" size="2" disabled="">
								</div>
							</div>

							<hr>

							<div class="row">
								<h4 class="subtitulo">Geral:</h4>
							</div>

							<div class="row">
								<div class="col-md-offset-6 col-md-2 col-sm-offset-6 col-sm-2">
									<label>FEM:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>MASC:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>TOTAL:</label>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Rol Separado:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a111"  id="a111" size="2" onKeyUp="soma(a111, a112, a113)">  </div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a112"  id="a112" size="2" onKeyUp="soma(a111, a112, a113)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a113"  id="a113" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Admi- Demi:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_fem_total" placeholder="0" name="a121"  id="a121" size="2" disabled="">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros comungantes_admitidos_masc_total" placeholder="0" name="a122"  id="a122" size="2" disabled="">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a123"  id="a123" size="2" disabled="">
								</div>
							</div>


							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Total de Comungantes do Ano anterior:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a131"  id="a131" size="2" disabled="">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0"  name="a132"  id="a132" size="2" disabled="">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0"  name="a133"  id="a133" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Total de Comungantes do Ano atual:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a141"  id="a141" size="2" disabled="">   
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a142"  id="a142" size="2" disabled="">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a143"  id="a143" size="2" disabled="">
								</div>
							</div>
						</div>


						<div id="nao-comungantes" class="col-md-6 col-sm-12">

							<div class="row">
								<h3 class="subtitulo">Não-Comungantes:</h3>
							</div>

							<div class="row">
								<h4 class="subtitulo">Admitidos:</h4>
							</div>
							<div class="row">
								<div class="col-md-offset-6 col-md-2 col-sm-offset-6 col-sm-2">
									<label>FEM:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>MASC:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>TOTAL:</label>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Batismo:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_admitidos_fem" placeholder="0" name="a151"  id="a151" size="2" onKeyUp="soma(a151, a152, a153)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_admitidos_masc" placeholder="0" name="a152"  id="a152" size="2" onKeyUp="soma(a151, a152, a153)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a153"  id="a153" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Transferência:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_admitidos_fem" placeholder="0" name="a161"  id="a161" size="2" onKeyUp="soma(a161, a162, a163)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_admitidos_masc" placeholder="0" name="a162"  id="a162" size="2" onKeyUp="soma(a161, a162, a163)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a163"  id="a163" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Jurisdição  ex-officio:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_admitidos_fem" placeholder="0" name="a171"  id="a171" size="2" onKeyUp="soma(a171, a172, a173)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_admitidos_masc" placeholder="0" name="a172"  id="a172" size="2" onKeyUp="soma(a171, a172, a173)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a173"  id="a173" size="2" disabled="">
								</div>
							</div>

							<hr>

							<div class="row">
								<h4 class="subtitulo">Demitidos:</h4>
							</div>
							<div class="row">
								<div class="col-md-offset-6 col-md-2 col-sm-offset-6 col-sm-2">
									<label>FEM:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>MASC:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>TOTAL:</label>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
								<label>Profissão de Fé:</label>
								</div>
								<div class="col-md-2 col-sm-2">
								<input class="form-control numeros naocomungantes_demitidos_fem" placeholder="0" name="a181"  id="a181" size="2" onKeyUp="soma(a181, a182, a183)">
								</div>
								<div class="col-md-2 col-sm-2">
								<input class="form-control numeros naocomungantes_demitidos_masc" placeholder="0" name="a182"  id="a182" size="2" onKeyUp="soma(a181, a182, a183)">
								</div>
								<div class="col-md-2 col-sm-2">
								<input class="form-control numeros" placeholder="0" name="a183"  id="a183" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Transferência:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_demitidos_fem" placeholder="0" name="a191"  id="a191" size="2" onKeyUp="soma(a191, a192, a193)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_demitidos_masc" placeholder="0" name="a192"  id="a192" size="2" onKeyUp="soma(a191, a192, a193)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a193"  id="a193" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Falecimento:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_demitidos_fem" placeholder="0" name="a201"  id="a201" size="2" onKeyUp="soma(a201, a202, a203)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_demitidos_masc" placeholder="0" name="a202"  id="a202" size="2" onKeyUp="soma(a201, a202, a203)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a203"  id="a203" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Exclusão:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_demitidos_fem" placeholder="0" name="a211"  id="a211" size="2" onKeyUp="soma(a211, a212, a213)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_demitidos_masc" placeholder="0" name="a212"  id="a212" size="2" onKeyUp="soma(a211, a212, a213)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a213"  id="a213" size="2" disabled="">
								</div>
							</div>

							<hr>

							<div class="row">
								<h4 class="subtitulo">Geral:</h4>
							</div>
							<div class="row">
								<div class="col-md-offset-6 col-md-2 col-sm-offset-6 col-sm-2">
									<label>FEM:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>MASC:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<label>TOTAL:</label>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Admi - Demi:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_admitidos_fem_total" placeholder="0"  name="a221"  id="a221" size="2" disabled="" onKeyUp="soma(a221, a222, a223)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros naocomungantes_admitidos_masc_total" placeholder="0" name="a222"  id="a222" size="2" disabled="" onKeyUp="soma(a221, a222, a223)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0"  name="a223"  id="a223" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Total Não-Comungantes Ano anterior:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a231"  id="a231" size="2" disabled="" onKeyUp="soma(a231, a232, a233)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a232"  id="a232" size="2" disabled="" onKeyUp="soma(a231, a232, a233)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a233"  id="a233" size="2" disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<label>Total Não-Comungantes Ano atual:</label>
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a241"  id="a241" size="2" disabled="" onKeyUp="soma(a241, a242, a243)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a242"  id="a242" size="2" disabled="" onKeyUp="soma(a241, a242, a243)">
								</div>
								<div class="col-md-2 col-sm-2">
									<input class="form-control numeros" placeholder="0" name="a243"  id="a243" size="2" disabled="">
								</div>
							</div>
						</div>

					</div>

				</div>

				<div class="panel-success padrao col-xs-12">
					<div class="panel-heading">V - Informações Financeiras</div>
					<div class="panel-body">

						<div id="financeiroAnterior" class="col-md-6 col-sm-12">

							<div class="row">
								<h3 class="subtitulo">MOVIMENTO FINANCEIRO DO ANO ANTERIOR:</h3>
							</div>

							<hr>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Valor total dos bens móveis e imóveis:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" name="ano_ant_val_tot" type="text" id="ano_ant_val_tot" size="10" aria-describedby="basic-addon" onkeyup="somaMoney([ano_ant_val_tot,ano_ant_saldo_ant],ano_ant_saldo_ant)">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Saldo - Ano anterior:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input value="22,73" placeholder="0" class="form-control dinheiro" name="ano_ant_saldo_ant" type="text" id="ano_ant_saldo_ant" size="10" aria-describedby="basic-addon"  disabled="">
								</div>
							</div>

							<hr>

							<div class="row">
								<h4 class="subtitulo">Receitas:</h4>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Dízimos e Ofertas:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" onkeyup="somaMoney([ano_ant_rec_diz,ano_ant_rec_ofe_esp],ano_ant_rec_tot_anu)"  name="ano_ant_rec_diz" type="text" id="ano_ant_rec_diz" size="10" aria-describedby="basic-addon" >
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Ofertas especiais:</label>
								</div>

								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" onkeyup="somaMoney([ano_ant_rec_diz,ano_ant_rec_ofe_esp],ano_ant_rec_tot_anu)" name="ano_ant_rec_ofe_esp" type="text" id="ano_ant_rec_ofe_esp" size="10" aria-describedby="basic-addon" >
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Total da Receita Ano Anterior:</label>
								</div>

								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" value=""   name="ano_ant_rec_tot_anu" type="text" id="ano_ant_rec_tot_anu" size="10" aria-describedby="basic-addon"  disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Total da Receita Ano Anterior + Saldo - Ano Anterior:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0"  name="ano_ant_rec_grand_tot" type="text" id="ano_ant_rec_grand_tot" size="10" aria-describedby="basic-addon"  disabled="">
								</div>
							</div>
							<hr>
							<div class="row">
								<h4 class="subtitulo">Despesas:</h4>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Património:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" name="ano_ant_des_patr" type="text" id="ano_ant_des_patr" size="10" aria-describedby="basic-addon" onkeyup="somaMoney([ano_ant_des_patr,ano_ant_des_cau_loc, ano_ant_des_sus_past, ano_ant_des_veb_presb, ano_ant_des_diz_sup],ano_ant_des_tot_desp)">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Causas Locais:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0"  name="ano_ant_des_cau_loc" type="text" id="ano_ant_des_cau_loc" size="10" aria-describedby="basic-addon" onkeyup="somaMoney([ano_ant_des_patr,ano_ant_des_cau_loc, ano_ant_des_sus_past, ano_ant_des_veb_presb, ano_ant_des_diz_sup],ano_ant_des_tot_desp)">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Sustento Pastoral:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" name="ano_ant_des_sus_past" type="text" id="ano_ant_des_sus_past" size="10" aria-describedby="basic-addon" onkeyup="somaMoney([ano_ant_des_patr,ano_ant_des_cau_loc, ano_ant_des_sus_past, ano_ant_des_veb_presb, ano_ant_des_diz_sup],ano_ant_des_tot_desp)">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Verba Presbiterial:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" name="ano_ant_des_veb_presb" type="text" id="ano_ant_des_veb_presb" size="10" aria-describedby="basic-addon" onkeyup="somaMoney([ano_ant_des_patr,ano_ant_des_cau_loc, ano_ant_des_sus_past, ano_ant_des_veb_presb, ano_ant_des_diz_sup],ano_ant_des_tot_desp)">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Dízimo ao Supremo Concílio:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0"  name="ano_ant_des_diz_sup" type="text" id="ano_ant_des_diz_sup" size="10" aria-describedby="basic-addon" onkeyup="somaMoney([ano_ant_des_patr,ano_ant_des_cau_loc, ano_ant_des_sus_past, ano_ant_des_veb_presb, ano_ant_des_diz_sup],ano_ant_des_tot_desp)">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Total da Despesa Anual:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" value=""   name="ano_ant_des_tot_desp" type="text" id="ano_ant_des_tot_desp" size="10" aria-describedby="basic-addon"  disabled="">
								</div>
							</div>

							<hr>

							<div class="row">
								<h4 class="subtitulo">Totais:</h4>
							</div>

							
							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Saldo - Ano seguinte:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" value=""  name="ano_ant_des_sald_ano_seg" type="text" id="ano_ant_des_sald_ano_seg" size="10" aria-describedby="basic-addon"  disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Grande Total:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" value="" name="ano_ant_des_grand_tot" type="text" id="ano_ant_des_grand_tot" size="10" aria-describedby="basic-addon" >
								</div>
							</div>
						</div>


						<div id="financeiroAnterior" class="col-md-6 col-sm-12">

							<div class="row">
								<h3 class="subtitulo">PREVISSÃO FINANCEIRA DO PROXIMO ANO:</h3>
							</div>

							<hr>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Saldo - Ano anterior:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" onchange="aRecGranTotal(ano_seg_rec_tot_rec, ano_seg_sald_ano_ant, ano_seg_rec_grand_tot)" name="ano_seg_sald_ano_ant" type="text" id="ano_seg_sald_ano_ant" size="10" aria-describedby="basic-addon"  disabled="">
								</div>
							</div>

							<hr>

							<div class="row">
								<h4 class="subtitulo">Receitas:</h4>
							</div>


							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Dízimos e Ofertas:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" onchange="aTotRec(ano_seg_rec_diz_of, ano_seg_rec_ofe_esp, ano_seg_rec_tot_rec)" name="ano_seg_rec_diz_of" type="text" id="ano_seg_rec_diz_of" size="10" aria-describedby="basic-addon" >
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Ofertas especiais:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" onchange="aTotRec(ano_seg_rec_diz_of, ano_seg_rec_ofe_esp, ano_seg_rec_tot_rec)" name="ano_seg_rec_ofe_esp" type="text" id="ano_seg_rec_ofe_esp" size="10" aria-describedby="basic-addon" >
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Total da Receita Anual:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" value="" onchange="aRecGranTotal(ano_seg_rec_tot_rec, ano_seg_sald_ano_ant, ano_seg_rec_grand_tot)" name="ano_seg_rec_tot_rec" type="text" id="ano_seg_rec_tot_rec" size="10" aria-describedby="basic-addon"  disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Grande Total:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" name="ano_seg_rec_grand_tot" type="text" id="ano_seg_rec_grand_tot" size="10" aria-describedby="basic-addon" >
								</div>
							</div>

							<hr>

							<div class="row">
								<h4 class="subtitulo">Despesas:</h4>
							</div>


							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Patrimônio:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" onchange="aTotDespA(ano_seg_des_patr, ano_seg_des_caus_loc, ano_seg_des_sust_past, ano_seg_des_verb_presb, ano_seg_des_diz_sup, ano_seg_des_tot_anu)" name="ano_seg_des_patr" type="text" id="ano_seg_des_patr" size="10" aria-describedby="basic-addon" >
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Causas Locais:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" onchange="aTotDespA(ano_seg_des_patr, ano_seg_des_caus_loc, ano_seg_des_sust_past, ano_seg_des_verb_presb, ano_seg_des_diz_sup, ano_seg_des_tot_anu)" name="ano_seg_des_caus_loc" type="text" id="ano_seg_des_caus_loc" size="10" aria-describedby="basic-addon" >
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Sustento Pastoral:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" onchange="aTotDespA(ano_seg_des_patr, ano_seg_des_caus_loc, ano_seg_des_sust_past, ano_seg_des_verb_presb, ano_seg_des_diz_sup, ano_seg_des_tot_anu)" name="ano_seg_des_sust_past" type="text" id="ano_seg_des_sust_past" size="10" aria-describedby="basic-addon" >
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Verba Presbiterial:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" onchange="aTotDespA(ano_seg_des_patr, ano_seg_des_caus_loc, ano_seg_des_sust_past, ano_seg_des_verb_presb, ano_seg_des_diz_sup, ano_seg_des_tot_anu)" name="ano_seg_des_verb_presb" type="text" id="ano_seg_des_verb_presb" size="10" aria-describedby="basic-addon" >
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Dízimo ao Supremo Concílio:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" onchange="aTotDespA(ano_seg_des_patr, ano_seg_des_caus_loc, ano_seg_des_sust_past, ano_seg_des_verb_presb, ano_seg_des_diz_sup, ano_seg_des_tot_anu)" name="ano_seg_des_diz_sup" type="text" id="ano_seg_des_diz_sup" size="10" aria-describedby="basic-addon" >
								</div>
							</div>

			               	<hr>

							<div class="row">
								<h4 class="subtitulo">Totais:</h4>
							</div>


							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Total da Despesa Anual:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" value="" onchange="aDespGradTot(ano_seg_des_tot_anu, ano_seg_des_sald_ano_seg, ano_seg_des_gran_tot)"  name="ano_seg_des_tot_anu" type="text" id="ano_seg_des_tot_anu" size="10" aria-describedby="basic-addon"  disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Saldo - Ano seguinte:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" value="" name="ano_seg_des_sald_ano_seg"  onchange="aDespGradTot(ano_seg_des_tot_anu, ano_seg_des_sald_ano_seg, ano_seg_des_gran_tot)" type="text" id="ano_seg_des_sald_ano_seg" size="10" aria-describedby="basic-addon"  disabled="">
								</div>
							</div>

							<div class="row">
								<div class="col-md-7 col-sm-6">
									<label>Grande Total:</label>
								</div>
								<div class="col-md-5 col-sm-6 input-group">
									<span class="input-group-addon" id="basic-addon">R$</span>
									<input  class="form-control dinheiro" placeholder="0" name="ano_seg_des_gran_tot" type="text" id="ano_seg_des_gran_tot" size="10" aria-describedby="basic-addon" >
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="col-xs-12 botoes">
				<div class="col-md-4 col-sm-6">
					<button id="botao_imprimir" class="btn btn-primary btn-lg btn-block">Imprimir</button>
				</div>
				<div class="col-md-offset-4 col-md-4 col-sm-6 ">
					<button id="botao_salvar" class="btn btn-success btn-lg btn-block ">Salvar</button>
				</div>
			</div>
		</div>
		<script type="text/javascript">

			$(document).ready(function(){

				$("#cpfId").mask("999.999.999-99");
				$("#ig_cnpj").mask("99.999.999/9999-99");
				$("#ig_telefone").mask("9999-9999");
				$("#sec_tel").mask("9999-9999");
				$("#ig_fax").mask("9999-9999");
				$("#sec_fax").mask("9999-9999");
				$("#sec_CEP").mask("99.999-999");
				$("#ig_CEP").mask("99.999-999");
				$("#sec_CEP2").mask("99.999-999");
				$("#ig_CEP2").mask("99.999-999");

				$("#botao_voltar").on('click', function() {
					location.replace("http://relatorioipb.com.br/index.php/Usuario/voltaParaData");
				});
				$("#botao_imprimir").on('click', function() {
					//location.replace("http://relatorioipb.com.br/index.php/Usuario/voltaParaData");
					console.log("imprimiu");
					window.print();
				});
				$("#botao_salvar").on('click', function() {
					// location.replace("http://relatorioipb.com.br/index.php/Usuario/voltaParaData");
					console.log("submeteu");
				});


				$(".numeros").mask("?99999");

				$(".dinheiro").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});


				somaTotaisComungantesAdmitidosDemitidosFeminino();

				somaTotaisComungantesAdmitidosDemitidosMasculino();

				somaTotaisNaoComungantesAdmitidosDemitidosFeminino();

				somaTotaisNaoComungantesAdmitidosDemitidosMasculino();

				somaMoney([ano_ant_rec_diz,ano_ant_rec_ofe_esp],ano_ant_rec_tot_anu);



				$(".comungantes_admitidos_fem, .comungantes_demitidos_fem").on('keyup', function(event) {
					
					somaTotaisComungantesAdmitidosDemitidosFeminino();

				});

				$(".comungantes_admitidos_masc, .comungantes_demitidos_masc").on('keyup', function(event) {
					
					somaTotaisComungantesAdmitidosDemitidosMasculino();

				});

				$(".naocomungantes_admitidos_fem, .naocomungantes_demitidos_fem").on('keyup', function(event) {
					
					somaTotaisNaoComungantesAdmitidosDemitidosFeminino();

				});

				$(".naocomungantes_admitidos_masc, .naocomungantes_demitidos_masc").on('keyup', function(event) {
					
					somaTotaisNaoComungantesAdmitidosDemitidosMasculino();

				});
			});

			function soma(n1, n2, n3) {


				var valor1 = parseInt($(n1).val().replace('\_', ''));

				var valor2 = parseInt($(n2).val().replace('\_', ''));

				if (isNaN(valor1)) {
					valor1 = 0;
				}

				if (isNaN(valor2)) {
					valor2 = 0;
				}

				$(n3).val(valor1 + valor2);

			}

			function somaMoney(arrayValores, n3) {

				var total = 0;

				$(arrayValores).each(function(index, el) {
					var parcial = parseFloat($(el).val().replace(/\./g, '').replace(',', '.'));

					if (isNaN(parcial)) {
						parcial = 0;
					}

					total += parcial;	
				});

				$(n3).val(parseFloat(total).toFixed(2));
				$(n3).trigger('mask.maskMoney');

			}


			// function somaMoney(n1, n2, n3) {

			// 	var value1 = parseFloat($(n1).val().replace(/\./g, '').replace(',', '.'));

			// 	var value2 = parseFloat($(n2).val().replace(/\./g, '').replace(',', '.'));

			// 	if (isNaN(value1)) {
			// 		value1 = 0;
			// 	}

			// 	if (isNaN(value2)) {
			// 		value2 = 0;
			// 	}

			// 	var res = parseFloat(value1) + parseFloat(value2);

			// 	// $(n3).maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});

			// 	$(n3).val(parseFloat(res).toFixed(2));
			// 	$(n3).trigger('mask.maskMoney');

			// }

			function somaTotaisComungantesAdmitidosDemitidosFeminino(){
				var numero_pos = 0;
				var numero_neg = 0;	

				$(".comungantes_admitidos_fem").each(function(index, el) {
					if ($(this).val().replace(/_/g, '') == '') {
						numero_pos += 0;
					}else{
						numero_pos += parseInt($(this).val().replace(/_/g, ''));
					}
				});

				$(".comungantes_demitidos_fem").each(function(index, el) {
					if ($(this).val().replace(/_/g, '') == '') {
						numero_neg += 0;
					}else{
						numero_neg += parseInt($(this).val().replace(/_/g, ''));
					}
				});

				$(".comungantes_admitidos_fem_total").val(numero_pos - numero_neg);

				soma($("#a121"), $("#a122"), $("#a123"));

				soma($("#a131"), $("#a132"), $("#a133"));

				soma($("#a121"), $("#a131"), $("#a141"));

				soma($("#a141"), $("#a142"), $("#a143"));
			}

			function somaTotaisComungantesAdmitidosDemitidosMasculino(){
				var numero_pos = 0;
				var numero_neg = 0;	

				$(".comungantes_admitidos_masc").each(function(index, el) {
					if ($(this).val().replace(/_/g, '') == '') {
						numero_pos += 0;
					}else{
						numero_pos += parseInt($(this).val().replace(/_/g, ''));
					}
				});

				$(".comungantes_demitidos_masc").each(function(index, el) {
					if ($(this).val().replace(/_/g, '')== '') {
						numero_neg += 0;
					}else{
						numero_neg += parseInt($(this).val().replace(/_/g, ''));
					}
				});

				$(".comungantes_admitidos_masc_total").val(numero_pos - numero_neg);


				soma($("#a121"), $("#a122"), $("#a123"));

				soma($("#a131"), $("#a132"), $("#a133"));

				soma($("#a122"), $("#a132"), $("#a142"));

				soma($("#a141"), $("#a142"), $("#a143"));


			}

			function somaTotaisNaoComungantesAdmitidosDemitidosFeminino(){
				var numero_pos = 0;
				var numero_neg = 0;	

				$(".naocomungantes_admitidos_fem").each(function(index, el) {
					if ($(this).val().replace(/_/g, '') == '') {
						numero_pos += 0;
					}else{
						numero_pos += parseInt($(this).val().replace(/_/g, ''));
					}
				});

				$(".naocomungantes_demitidos_fem").each(function(index, el) {
					if ($(this).val().replace(/_/g, '') == '') {
						numero_neg += 0;
					}else{
						numero_neg += parseInt($(this).val().replace(/_/g, ''));
					}
				});

				$(".naocomungantes_admitidos_fem_total").val(numero_pos - numero_neg);

				soma($("#a221"), $("#a222"), $("#a223"));

				soma($("#a231"), $("#a232"), $("#a233"));

				soma($("#a221"), $("#a231"), $("#a241"));

				soma($("#a241"), $("#a242"), $("#a243"));
			}

			function somaTotaisNaoComungantesAdmitidosDemitidosMasculino(){
				var numero_pos = 0;
				var numero_neg = 0;	

				$(".naocomungantes_admitidos_masc").each(function(index, el) {
					if ($(this).val().replace(/_/g, '') == '') {
						numero_pos += 0;
					}else{
						numero_pos += parseInt($(this).val().replace(/_/g, ''));
					}
				});

				$(".naocomungantes_demitidos_masc").each(function(index, el) {
					if ($(this).val().replace(/_/g, '') == '') {
						numero_neg += 0;
					}else{
						numero_neg += parseInt($(this).val().replace(/_/g, ''));
					}
				});

				$(".naocomungantes_admitidos_masc_total").val(numero_pos - numero_neg);

				soma($("#a221"), $("#a222"), $("#a223"));

				soma($("#a231"), $("#a232"), $("#a233"));

				soma($("#a222"), $("#a232"), $("#a242"));

				soma($("#a241"), $("#a242"), $("#a243"));
			}

			function totalReceitaAnual(cp1, cp2, cp3) {
				var value1 = $(cp1).val().replace(/\./g, '').replace(',', '.');

				var value2 = $(cp2).val().replace(/\./g, '').replace(',', '.');

				var res = parseFloat(value1) + parseFloat(value2);

				$(cp3).val(parseFloat(res).toFixed(2));
			}

			
			// function grandTotal(cp1, cp2, cp3) {

			// var value1 = $(cp1).val().replace(',', '.');
			// var value2 = $(cp2).val().replace(',', '.');

			// if(value2 == ''){
			// value2 = 0.00;
			// }

			// var res = parseFloat(value1) + parseFloat(value2);

			// $(cp3).val(parseFloat(res).toFixed(2));

			// }




			// function somaDinheiros(cp1, cp2, cp3) {
			// var value1 = $(cp1).val().replace(/\./g, '').replace(',', '.');
			// var value2 = $(cp2).val().replace(/\./g, '').replace(',', '.');
			// var value3 = parseFloat(value1) + parseFloat(value2);

			// //alert(value1 + " + " + value2 + " = " + value3);
			// var value = value3;
			// $(cp3).val(value);
			// }

			// function alteraDinheiro(cp1, cp2) {
			// var value1 = parseFloat($(cp1).val().replace(/\./g, '').replace(',', '.'));
			// $(cp2).val(value1);
			// }




			// function totalReceitaAnual(cp1, cp2, cp3) {
			// var value1 = $(cp1).val().replace(/\./g, '').replace(',', '.');
			// var value2 = $(cp2).val().replace(/\./g, '').replace(',', '.');
			// var value3 = parseFloat(value1) + parseFloat(value2);

			// //  alert(value1 + " + " + value2 + " = " + value3);
			// var value = value3;
			// $(cp3).val(value);
			// }


			// function grandeTotal(cp1, cp2, cp3) {
			// var value1 = $(cp1).val().replace(/\./g, '').replace(',', '.');
			// var value2 = $(cp2).val().replace(/\./g, '').replace(',', '.');
			// var value3 = parseFloat(value1) + parseFloat(value2);

			// //  alert(value1 + " + " + value2 + " = " + value3);
			// var value = value3;
			// $(cp3).val(value);
			// }






			




			// function dep(n1, n2, n3, n4, n5, n6, n7) {

			// var c1 = parseInt($(n1).val());
			// var c2 = parseInt($(n2).val());
			// var c3 = parseInt($(n3).val());
			// var c4 = parseInt($(n4).val());
			// var c5 = parseInt($(n5).val());
			// var c6 = parseInt($(n6).val());

			// var c7 = c1 + c2 + c3 + c4 + c5 + c6;
			// var res = 0;
			// var res = c7;
			// $(n7).val(res);
			// }
			

		</script>

	</body>
</html>

