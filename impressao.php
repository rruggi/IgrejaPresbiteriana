<?php 



error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("assets/dompdf/autoload.inc.php");
require_once("assets/dompdf/src/Dompdf.php");
use DOMPDF\dompdf;



ob_start();


?>

<html>
	<head>
		
		<style>
			
			.container_top{
				width: 100%;
				text-align: center;
				border: 1px solid #000;
				height: 100px;
			}
			.igreja_logo{
				width: 20%;
				float:left;
			}
			.titulo_top{
				margin-left: 20%;
				width: 80%;
				text-align: right;	
			}


			.container_ii{
				margin-top: 75px;
				width: 100%;
				text-align: center;
				display: block;
			}
			.titulo{
				font-weight: bold;
			}
			.identificacao_igreja{
				width: 100%;
			}


			table, th, td{
    			border: 1px solid black;
    			border-collapse: collapse;
			}


		</style>
	</head>

	<body>
		<div class="container_top">
			<img class="igreja_logo" src="assets/img/ipb_logo.png">
			<h3 class="titulo_top">
				INFORMAÇÕES CADASTRAIS E ESTATÍSTICAS DA COMUNIDADE PRESBITERIANA
			</h3>
		</div>
		<div class="container_ii">
			<p class="titulo">I - Identificação da Igreja / Congregação Presbiterial</p>
			<table class="identificacao_igreja">
				<tr>
					<th colspan="8">Informações da Igreja:</th>
				</tr>
				<tr>
					<td>Nome da Igreja:</td>
					<td colspan="7">carai</td>
				</tr>
				<tr>
					<td>Endereço:</td>
					<td colspan="3"></td>
					<td>Numero:</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>Complemento:</td>
					<td colspan="3"></td>
					<td>Bairro:</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>Cidade:</td>
					<td></td>
					<td>UF:</td>
					<td></td>
					<td>CEP:</td>
					<td></td>
					<td>CP:</td>
					<td></td>
				</tr>
				<tr>
					<td>CEP2:</td>
					<td></td>
					<td>DDD:</td>
					<td></td>
					<td>Telefone:</td>
					<td></td>
					<td>Fax:</td>
					<td></td>
				</tr>
				<tr>
					<td>E-mail:</td>
					<td colspan="3"></td>
					<td>Data de Organização:</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>CNPJ</td>
					<td colspan="2"></td>
					<td>Número da Ordem:</td>
					<td colspan="2"></td>
					<td>H-Page:</td>
					<td></td>
				</tr>
			</table>
		</div>
	</body>
</html>

<?php 
	$PAGE_COUNT= 4;
	$html = ob_get_clean();

	$dompdf = new DOMPDF();
	$dompdf->set_paper("A4");
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream("certificado", array("Attachment" => 0));

	?>