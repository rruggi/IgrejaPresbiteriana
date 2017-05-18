<?php
	require_once("../../controller/ContatoController.php");
	require_once("../lib/dompdf/autoload.inc.php");
	require_once("../lib/dompdf/src/Dompdf.php");
	use DOMPDF\dompdf;

	if(!isset($_GET)){
		exit("Seu certificado não pode ser processado.");
	}else{
		if (isset($_GET['a'])) {
			$cod_hash = base64_decode($_GET['a']);
		}
	}

	$contato_controller = new ContatoController();
	$contato = $contato_controller->getContatoById($cod_hash);

	ob_start();
?>

<html>
	<head>
		<title></title>
		<meta name="dompdf.view" content="XYZ,0,792,1" />
		<style>

			@page {
				margin: 0px 0px !important;
			}

			body{
				text-align: center;
				position: relative;
				margin: 0;
			}

			.verde{
				background-color: #F3F7DE;
				height: 620px;
			}

			.titulo{
				margin-top: 70px;
				width: 650px;
			}

			.logo{
				margin-top: 50px;
				width: 355px;
			}

			.nome{
				font-size: 25px;
			}

			.bloco_texto{
				text-align: center;
/*				margin-top: 50px;
				margin-bottom: 70px;
*/				margin: 50px auto 70px;
				font-size: 22px;
				width: 72%;
			}

			.table > tr{
				background-color: WHITE;
			}

			.table{
				width: 100%;
				background-color: white;
				text-align: center;
				margin-bottom: 0;
			}

			/*.segunda_linha{
				height:80px;
			}*/

			.aparadores{
				width: 250px;
				/*padding-bottom: 24px;*/
			}

		</style>
		<meta charset="UTF-8">
	</head>
	<body>
		<div class="verde">
			<div>
				<img class="titulo" src="../img/certificado_titulo_pequeno.png">
			</div>
			<div>
				<img class="logo" src="../img/logo_1enfito.png">
				<!-- <img class="logo" src="../img/logo_certificado_2.png"> -->
			</div>

			<div class="bloco_texto">
				<p>
					Certificamos que <u><span class="nome"> <b>  <?= $contato->getNome(); ?> </b> </span> </u> <br>
					participou do <b>I Encontro de Fitopatologia UniFEOB para Produtores Rurais e Estudantes</b> em 28 de Abril de 2017,
					realizado pelo <br>Centro Universitário Octávio Bastos - UNIFEOB, com carga de 08 horas.
				</p>
				<p>
					São João da Boa Vista, 28 de Abril de 2017
				</p>
			</div>
		</div>

		<table class="table">
			<tr>
				<td>
					<img style="width:180px;margin-top: 20px;" src="../img/assinatura_jose_roberto.png">
				</td>
				<td>
					<img style="width:150px;margin-top: 20px;" src="../img/assinatura_patricia_furlanetto.jpg">
				</td>
			</tr>
			<tr>
				<td>
					<img class="aparadores" src="../img/aparador_assinatura_certificado_1.png">
				</td>
				<td>
					<img class="aparadores" src="../img/aparador_assinatura_certificado_2.png">
				</td>
			</tr>
		</table>

	</body>
</html>
<?php
	$PAGE_COUNT= 1;
	$html = ob_get_clean();

	$dompdf = new DOMPDF();
	$dompdf->set_paper("A4", 'landscape');
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream("certificado", array("Attachment" => 0));
?>
