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
				display: inline;
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

			.identificacao_igreja{
				width: 100%;
				border: 1px solid #000;
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
		<table class="identificacao_igreja">
			<tr>
				<th>I - Identificação da Igreja / Congregação Presbiterial</th>
			</tr>
		</table>
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