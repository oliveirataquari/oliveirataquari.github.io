<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf8" /> -->
<title>Assist&ecirc;ncia t&eacute;cnica M&oacute;veis Castro</title>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


<!--
VERSÕES:
04/10/2024 - Campos do anexo ajustados


-->


<style type="text/css">
body {
	font-family: 'Raleway', sans-serif;
	color:#000000;
	font-size:14px;
	background:#e9e9e9;
}


#main {
	width:100%
}


#campos1 label { block; width:220px; padding:10px 0px; float:left; }
#campos1 input { border: 1px #cccccc solid; padding:10px; font-family: 'Raleway', sans-serif; font-size:14px; border-radius:5px; }
select { border: 1px #cccccc solid; padding:10px; font-family: 'Raleway', sans-serif; font-size:14px; border-radius:5px; }
#campos1 option { margin-left:10px }
input, textarea { padding:6px; font-family: 'Raleway', sans-serif; font-size:14px; }
hr { margin-top:20px; margin-bottom:20px; }
.msg-ok { padding:5px; background-color:#6699CC; color:#fff; }
.msg-erro { padding:5px; background-color:#FF0000; color:#fff; }
#campos2 input, textarea { border: 1px #cccccc solid; padding:10px; font-family: 'Raleway', sans-serif; font-size:14px; border-radius:5px; }


#campos1 .input-s {
	width:100px
}
#campos1 .input-m {
	width:280px
}
#campos1 .input-l {
	width:500px
}

#campos2 .input-s {
	width:60px
}
#campos2 .input-m {
	width:140px
}
#campos2 .input-l {
	width:330px
}
.table {
	margin-left:5px;
	margin-top:40px;
	margin-bottom:40px;
}
.table td {
	padding-right:10px;
}
.table tr {
	margin-bottom:20px;
}
.table-header {
	padding-left:10px;
	border-left:1px solid #444;
}
.imagem-ajuda {
	background:white;padding:30px;
	margin-top:40px;
}
.imagem-ajuda img {
	width:auto;
}


/* === MOBILE LAYOUT === */

@media(max-width:748px){ 

	#main {
		max-width:700px
	}

	#campos1 label {
		width:100%
	}

	#campos1 .input-s,
	#campos1 .input-m,
	#campos1 .input-l,
	#campos2x .input-s,
	#campos2x .input-m,
	#campos2x .input-l,
	.input-obs
	{
		width:90% !important;
		border:1px solid #000
	}
	
	#campos1 .input-obs {
		width:400px;
		display:block
	}
	
	.imagem-ajuda img { 
		width:100%;
	}

}




</style>

</head>

<body>
 
<?php

// Registrando variaveis
if(!$p){ $p=""; }
if(!$err){ $err=""; } 


// se foi enviado ...
if($_POST['v']){
	// inicia a validação dos campos
	if(!$_POST['nome'] or !$_POST['email'] or !$_POST['telefone'] or !$_POST['razao'] or !$_POST['notafiscal'] or !$_POST['representante'] or !$_POST['consumidor'] or !$_POST['transportadora'] or
	!$_POST['qtd1'] or
	!$_POST['cod1'] or
	!$_POST['desc1'] or
	!$_POST['ref1'] or
	!$_POST['motivo1'])
	{
		$err++;
	}
	
	// se $err estiver vazio, segue abaixo:
	else {
		// TRATAMENTO DE VARIÁVEIS:
		
		// Representantes
		if($_POST['representante'] == 'centralvendas@moveiscastro.com.br'){	$nome_representante = 'Vendas diretas'; }
		// if($_POST['representante'] == 'ac.wendling@hotmail.com'){ 		$nome_representante = 'AC Wendling (Antônio Carlos)'; }
		if($_POST['representante'] == 'antoniocarloswen@gmail.com'){		$nome_representante = 'AC Wendling (Antônio Carlos)'; }
		if($_POST['representante'] == 'arielconstantino11@gmail.com'){ 		$nome_representante = 'Ariel'; }
		if($_POST['representante'] == 'ivanlbm@yahoo.com.br'){ 				$nome_representante = 'BM (Ivan)'; }
		
		
		if($_POST['representante'] == 'candeiarepresentacoes@yahoo.com'){ 	$nome_representante = 'Candeia (Valmir)'; }
		if($_POST['representante'] == 'cleberalvespereira09@gmail.com'){ 	$nome_representante = 'Cleber'; }
		if($_POST['representante'] == 'confiarerepresentacoes@gmail.com'){ 	$nome_representante = 'Confiare (Patrícia)'; }
		
		
		
		if($_POST['representante'] == 'cornacini@uol.com.br'){				$nome_representante = 'Garcia'; }
		if($_POST['representante'] == 'representante@pannet.com.br'){		$nome_representante = 'Geveve'; }
		if($_POST['representante'] == 'jcezarmoveis@terra.com.br'){			$nome_representante = 'Júlio Cezar'; }
		if($_POST['representante'] == 'jeronciorepresentacoes@hotmail.com'){$nome_representante = 'JVC (Jeroncio)'; }
		if($_POST['representante'] == 'ldmrepresentacao@gmail.com'){		$nome_representante = 'L de Sousa'; }
		if($_POST['representante'] == 'tushirepres@gmail.com'){				$nome_representante = 'L. A. Matuoka (Leandro)'; }
		if($_POST['representante'] == 'leandrosmrepresentacao@gmail.com'){	$nome_representante = 'Leandro de Sousa'; }
		if($_POST['representante'] == 'rep.lenhard@terra.com.br'){			$nome_representante = 'Lenhard'; }
		if($_POST['representante'] == 'moura.representamoveis@gmail.com'){	$nome_representante = 'Lincoln'; }
		
		if($_POST['representante'] == 'miltoncara.indio@gmail.com'){		$nome_representante = 'Milton'; }
		if($_POST['representante'] == 'escritorionovaera@outlook.com.br'){	$nome_representante = 'Nova Era (Rafael)'; }
		
		
		
		
		if($_POST['representante'] == 'wagner4848jose@gmail.com'){			$nome_representante = 'Souza e Simonetti (Wagner)'; }
		if($_POST['representante'] == 'josiani@uniaosul.com.br'){			$nome_representante = 'União Sul (Henrique Faé)'; }
		if($_POST['representante'] == 'ricardoavianna@yahoo.com.br'){		$nome_representante = 'Vianna (Ricardo)'; }
		if($_POST['representante'] == 'cecconirepresentacoes@gmail.com'){	$nome_representante = 'Vilacoba & Cecconi (Fabiano)'; }



		// TRATAMENTO DE MOTIVOS/AVARIAS:
		if($_POST['motivo1'] == 1) { $nome_motivo1 = 'Ind&uacute;stria - Arranhado/Riscado'; }
		if($_POST['motivo1'] == 2) { $nome_motivo1 = 'Ind&uacute;stria - Descolando borda'; }
		if($_POST['motivo1'] == 3) { $nome_motivo1 = 'Ind&uacute;stria - Diferença de tonalidade'; }
		if($_POST['motivo1'] == 4) { $nome_motivo1 = 'Ind&uacute;stria - Empenada'; }
		if($_POST['motivo1'] == 5) { $nome_motivo1 = 'Ind&uacute;stria - Erro tamanho de peça'; }
		if($_POST['motivo1'] == 6) { $nome_motivo1 = 'Ind&uacute;stria - Falta de ferragem'; }
		if($_POST['motivo1'] == 7) { $nome_motivo1 = 'Ind&uacute;stria - Falta de peças'; }
		if($_POST['motivo1'] == 8) { $nome_motivo1 = 'Ind&uacute;stria - Falta de pintura'; }
		if($_POST['motivo1'] == 9) { $nome_motivo1 = 'Ind&uacute;stria - Furação errada'; }
		if($_POST['motivo1'] == 10){ $nome_motivo1 = 'Ind&uacute;stria - Manchas na pintura'; }
		if($_POST['motivo1'] == 11){ $nome_motivo1 = 'Ind&uacute;stria - Não fixada fita de borda'; }
		if($_POST['motivo1'] == 12){ $nome_motivo1 = 'Ind&uacute;stria - Puxadores quebrados'; }
		if($_POST['motivo1'] == 13){ $nome_motivo1 = 'Ind&uacute;stria - Quebrado/Batido/Amassado'; }
		if($_POST['motivo1'] == 14){ $nome_motivo1 = 'Transporte - Quebrado/Batido/Amassado'; }
		if($_POST['motivo1'] == 15){ $nome_motivo1 = 'Transporte - Molhado'; }
		if($_POST['motivo1'] == 16){ $nome_motivo1 = 'Transporte - Riscado/Arranhado'; }
		if($_POST['motivo1'] == 17){ $nome_motivo1 = 'Cliente - Assist&ecirc;ncia Faturada'; }
		if($_POST['motivo1'] == 18){ $nome_motivo1 = 'Cliente - Empenada'; }
		if($_POST['motivo1'] == 19){ $nome_motivo1 = 'Cliente - Erro montagem'; }
		if($_POST['motivo1'] == 20){ $nome_motivo1 = 'Cliente - Mofada'; }
		if($_POST['motivo1'] == 21){ $nome_motivo1 = 'Cliente - Pe&ccedil;a quebrada na montagem'; }
		if($_POST['motivo1'] == 22){ $nome_motivo1 = 'Fornecedor - Espelho com defeito'; }
		if($_POST['motivo1'] == 23){ $nome_motivo1 = 'Fornecedor - Espelho com defeito'; }

		if($_POST['motivo2'] == 1) { $nome_motivo2 = 'Ind&uacute;stria - Arranhado/Riscado'; }
		if($_POST['motivo2'] == 2) { $nome_motivo2 = 'Ind&uacute;stria - Descolando borda'; }
		if($_POST['motivo2'] == 3) { $nome_motivo2 = 'Ind&uacute;stria - Diferença de tonalidade'; }
		if($_POST['motivo2'] == 4) { $nome_motivo2 = 'Ind&uacute;stria - Empenada'; }
		if($_POST['motivo2'] == 5) { $nome_motivo2 = 'Ind&uacute;stria - Erro tamanho de peça'; }
		if($_POST['motivo2'] == 6) { $nome_motivo2 = 'Ind&uacute;stria - Falta de ferragem'; }
		if($_POST['motivo2'] == 7) { $nome_motivo2 = 'Ind&uacute;stria - Falta de peças'; }
		if($_POST['motivo2'] == 8) { $nome_motivo2 = 'Ind&uacute;stria - Falta de pintura'; }
		if($_POST['motivo2'] == 9) { $nome_motivo2 = 'Ind&uacute;stria - Furação errada'; }
		if($_POST['motivo2'] == 10){ $nome_motivo2 = 'Ind&uacute;stria - Manchas na pintura'; }
		if($_POST['motivo2'] == 11){ $nome_motivo2 = 'Ind&uacute;stria - Não fixada fita de borda'; }
		if($_POST['motivo2'] == 12){ $nome_motivo2 = 'Ind&uacute;stria - Puxadores quebrados'; }
		if($_POST['motivo2'] == 13){ $nome_motivo2 = 'Ind&uacute;stria - Quebrado/Batido/Amassado'; }
		if($_POST['motivo2'] == 14){ $nome_motivo2 = 'Transporte - Quebrado/Batido/Amassado'; }
		if($_POST['motivo2'] == 15){ $nome_motivo2 = 'Transporte - Molhado'; }
		if($_POST['motivo2'] == 16){ $nome_motivo2 = 'Transporte - Riscado/Arranhado'; }
		if($_POST['motivo2'] == 17){ $nome_motivo2 = 'Cliente - Assist&ecirc;ncia Faturada'; }
		if($_POST['motivo2'] == 18){ $nome_motivo2 = 'Cliente - Empenada'; }
		if($_POST['motivo2'] == 19){ $nome_motivo2 = 'Cliente - Erro montagem'; }
		if($_POST['motivo2'] == 20){ $nome_motivo2 = 'Cliente - Mofada'; }
		if($_POST['motivo2'] == 21){ $nome_motivo2 = 'Cliente - Pe&ccedil;a quebrada na montagem'; }
		if($_POST['motivo2'] == 22){ $nome_motivo2 = 'Fornecedor - Espelho com defeito'; }
		if($_POST['motivo2'] == 23){ $nome_motivo2 = 'Fornecedor - Espelho com defeito'; }

		if($_POST['motivo3'] == 1) { $nome_motivo3 = 'Ind&uacute;stria - Arranhado/Riscado'; }
		if($_POST['motivo3'] == 2) { $nome_motivo3 = 'Ind&uacute;stria - Descolando borda'; }
		if($_POST['motivo3'] == 3) { $nome_motivo3 = 'Ind&uacute;stria - Diferença de tonalidade'; }
		if($_POST['motivo3'] == 4) { $nome_motivo3 = 'Ind&uacute;stria - Empenada'; }
		if($_POST['motivo3'] == 5) { $nome_motivo3 = 'Ind&uacute;stria - Erro tamanho de peça'; }
		if($_POST['motivo3'] == 6) { $nome_motivo3 = 'Ind&uacute;stria - Falta de ferragem'; }
		if($_POST['motivo3'] == 7) { $nome_motivo3 = 'Ind&uacute;stria - Falta de peças'; }
		if($_POST['motivo3'] == 8) { $nome_motivo3 = 'Ind&uacute;stria - Falta de pintura'; }
		if($_POST['motivo3'] == 9) { $nome_motivo3 = 'Ind&uacute;stria - Furação errada'; }
		if($_POST['motivo3'] == 10){ $nome_motivo3 = 'Ind&uacute;stria - Manchas na pintura'; }
		if($_POST['motivo3'] == 11){ $nome_motivo3 = 'Ind&uacute;stria - Não fixada fita de borda'; }
		if($_POST['motivo3'] == 12){ $nome_motivo3 = 'Ind&uacute;stria - Puxadores quebrados'; }
		if($_POST['motivo3'] == 13){ $nome_motivo3 = 'Ind&uacute;stria - Quebrado/Batido/Amassado'; }
		if($_POST['motivo3'] == 14){ $nome_motivo3 = 'Transporte - Quebrado/Batido/Amassado'; }
		if($_POST['motivo3'] == 15){ $nome_motivo3 = 'Transporte - Molhado'; }
		if($_POST['motivo3'] == 16){ $nome_motivo3 = 'Transporte - Riscado/Arranhado'; }
		if($_POST['motivo3'] == 17){ $nome_motivo3 = 'Cliente - Assist&ecirc;ncia Faturada'; }
		if($_POST['motivo3'] == 18){ $nome_motivo3 = 'Cliente - Empenada'; }
		if($_POST['motivo3'] == 19){ $nome_motivo3 = 'Cliente - Erro montagem'; }
		if($_POST['motivo3'] == 20){ $nome_motivo3 = 'Cliente - Mofada'; }
		if($_POST['motivo3'] == 21){ $nome_motivo3 = 'Cliente - Pe&ccedil;a quebrada na montagem'; }
		if($_POST['motivo3'] == 22){ $nome_motivo3 = 'Fornecedor - Espelho com defeito'; }
		if($_POST['motivo3'] == 23){ $nome_motivo3 = 'Fornecedor - Espelho com defeito'; }

		if($_POST['motivo4'] == 1) { $nome_motivo3 = 'Ind&uacute;stria - Arranhado/Riscado'; }
		if($_POST['motivo4'] == 2) { $nome_motivo4 = 'Ind&uacute;stria - Descolando borda'; }
		if($_POST['motivo4'] == 3) { $nome_motivo4 = 'Ind&uacute;stria - Diferença de tonalidade'; }
		if($_POST['motivo4'] == 4) { $nome_motivo4 = 'Ind&uacute;stria - Empenada'; }
		if($_POST['motivo4'] == 5) { $nome_motivo4 = 'Ind&uacute;stria - Erro tamanho de peça'; }
		if($_POST['motivo4'] == 6) { $nome_motivo4 = 'Ind&uacute;stria - Falta de ferragem'; }
		if($_POST['motivo4'] == 7) { $nome_motivo4 = 'Ind&uacute;stria - Falta de peças'; }
		if($_POST['motivo4'] == 8) { $nome_motivo4 = 'Ind&uacute;stria - Falta de pintura'; }
		if($_POST['motivo4'] == 9) { $nome_motivo4 = 'Ind&uacute;stria - Furação errada'; }
		if($_POST['motivo4'] == 10){ $nome_motivo4 = 'Ind&uacute;stria - Manchas na pintura'; }
		if($_POST['motivo4'] == 11){ $nome_motivo4 = 'Ind&uacute;stria - Não fixada fita de borda'; }
		if($_POST['motivo4'] == 12){ $nome_motivo4 = 'Ind&uacute;stria - Puxadores quebrados'; }
		if($_POST['motivo4'] == 13){ $nome_motivo4 = 'Ind&uacute;stria - Quebrado/Batido/Amassado'; }
		if($_POST['motivo4'] == 14){ $nome_motivo4 = 'Transporte - Quebrado/Batido/Amassado'; }
		if($_POST['motivo4'] == 15){ $nome_motivo4 = 'Transporte - Molhado'; }
		if($_POST['motivo4'] == 16){ $nome_motivo4 = 'Transporte - Riscado/Arranhado'; }
		if($_POST['motivo4'] == 17){ $nome_motivo4 = 'Cliente - Assist&ecirc;ncia Faturada'; }
		if($_POST['motivo4'] == 18){ $nome_motivo4 = 'Cliente - Empenada'; }
		if($_POST['motivo4'] == 19){ $nome_motivo4 = 'Cliente - Erro montagem'; }
		if($_POST['motivo4'] == 20){ $nome_motivo4 = 'Cliente - Mofada'; }
		if($_POST['motivo4'] == 21){ $nome_motivo4 = 'Cliente - Pe&ccedil;a quebrada na montagem'; }
		if($_POST['motivo4'] == 22){ $nome_motivo4 = 'Fornecedor - Espelho com defeito'; }
		if($_POST['motivo4'] == 23){ $nome_motivo4 = 'Fornecedor - Espelho com defeito'; }

		if($_POST['motivo5'] == 1) { $nome_motivo5 = 'Ind&uacute;stria - Arranhado/Riscado'; }
		if($_POST['motivo5'] == 2) { $nome_motivo5 = 'Ind&uacute;stria - Descolando borda'; }
		if($_POST['motivo5'] == 3) { $nome_motivo5 = 'Ind&uacute;stria - Diferença de tonalidade'; }
		if($_POST['motivo5'] == 4) { $nome_motivo5 = 'Ind&uacute;stria - Empenada'; }
		if($_POST['motivo5'] == 5) { $nome_motivo5 = 'Ind&uacute;stria - Erro tamanho de peça'; }
		if($_POST['motivo5'] == 6) { $nome_motivo5 = 'Ind&uacute;stria - Falta de ferragem'; }
		if($_POST['motivo5'] == 7) { $nome_motivo5 = 'Ind&uacute;stria - Falta de peças'; }
		if($_POST['motivo5'] == 8) { $nome_motivo5 = 'Ind&uacute;stria - Falta de pintura'; }
		if($_POST['motivo5'] == 9) { $nome_motivo5 = 'Ind&uacute;stria - Furação errada'; }
		if($_POST['motivo5'] == 10){ $nome_motivo5 = 'Ind&uacute;stria - Manchas na pintura'; }
		if($_POST['motivo5'] == 11){ $nome_motivo5 = 'Ind&uacute;stria - Não fixada fita de borda'; }
		if($_POST['motivo5'] == 12){ $nome_motivo5 = 'Ind&uacute;stria - Puxadores quebrados'; }
		if($_POST['motivo5'] == 13){ $nome_motivo5 = 'Ind&uacute;stria - Quebrado/Batido/Amassado'; }
		if($_POST['motivo5'] == 14){ $nome_motivo5 = 'Transporte - Quebrado/Batido/Amassado'; }
		if($_POST['motivo5'] == 15){ $nome_motivo5 = 'Transporte - Molhado'; }
		if($_POST['motivo5'] == 16){ $nome_motivo5 = 'Transporte - Riscado/Arranhado'; }
		if($_POST['motivo5'] == 17){ $nome_motivo5 = 'Cliente - Assist&ecirc;ncia Faturada'; }
		if($_POST['motivo5'] == 18){ $nome_motivo5 = 'Cliente - Empenada'; }
		if($_POST['motivo5'] == 19){ $nome_motivo5 = 'Cliente - Erro montagem'; }
		if($_POST['motivo5'] == 20){ $nome_motivo5 = 'Cliente - Mofada'; }
		if($_POST['motivo5'] == 21){ $nome_motivo5 = 'Cliente - Pe&ccedil;a quebrada na montagem'; }
		if($_POST['motivo5'] == 22){ $nome_motivo5 = 'Fornecedor - Espelho com defeito'; }
		if($_POST['motivo5'] == 23){ $nome_motivo5 = 'Fornecedor - Espelho com defeito'; }



		// mysql protocolo:
		$remetente = $_POST['email'];
		$conn = mysqli_connect("localhost", "moveisca_user", "!_jC[pHIB.0b", "moveisca_db") or die("Erro na conexão com a base de dados"); // Conecta no banco
		// $db = mysqli_select_db("moveiscastro", $conn) or die("Erro na seleção da base de dados"); // Seleciona base de dados
		$cadastrar = mysqli_query($conn,"INSERT INTO protocolo (data,remetente,status) VALUES(now(),'$remetente',0)") or exit(mysqli_error()); // grava numero autoincrement ($id)
		$protocolo = mysqli_insert_id($conn); // recupera ID recem gerada
		$protocolo = str_pad($protocolo, 4, "0", STR_PAD_LEFT); // acrescenta zeros à esquerda

		
		// após o mysql acima, gera o assunto com numero
		$assunto = utf8_decode("Assistência técnica: Protocolo: ").$protocolo; // Assunto da mensagem;


		/* Destinatário e remetente - EDITAR SOMENTE ESTE BLOCO DO CÓDIGO */
		$representante = $_POST['representante'];
		$from = utf8_decode("Móveis Castro <assistencia@moveiscastro.com.br>");
		$to = 'assistencia@moveiscastro.com.br' . ',';
		// $to = 'oliveira.taquari@gmail.com' . ',';
		$to.= $representante;
		$replyto = $_POST['email']; // Email que será respondido

		
		/* Cabeçalho da mensagem  */
		$boundary = "XYZ-" . date("dmYis") . "-ZYX";
		$headers = "MIME-Version: 1.0\n";
		$headers.= "From: $from\n";
		$headers.= "Reply-To: $replyto\n";
		$headers.= "Cc: $replyto\n";
		$headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
		$headers.= "$boundary\n";

 
		/* Layout da mensagem   */
		$corpo_mensagem = "<h2>Protocolo n&uacute;mero:&nbsp;".$protocolo."</h2>
		<p>Nome:&nbsp;".$_POST['nome']."</p>
		<p>E-mail:&nbsp;".$_POST['email']."</p>
		<p>Telefone:&nbsp;".$_POST['telefone']."</p>
		<p>Raz&atilde;o social:&nbsp;".$_POST['razao']."</p>
		<p>Nota fiscal:&nbsp;".$_POST['notafiscal']."</p>
		<p>Nome consumidor:&nbsp;".$_POST['consumidor']."</p>
		<p>Transportadora:&nbsp;".$_POST['transportadora']."</p>
		<p>Representante:&nbsp;".$nome_representante."</p>
		
		<table border='1' cellspacing='1' cellpadding='5'>
		  <tr>
			<td>Qtde</td>
			<td>C&oacute;digo</td>
			<td>Descri&ccedil;&atilde;o</td>
			<td>Cor</td>
			<td>Refer&ecirc;ncia</td>
			<td>Avaria / Motivo</td>
		  </tr>
		  <tr>
			<td>".$_POST['qtd1']."</td>
			<td>".$_POST['cod1']."</td>
			<td>".$_POST['desc1']."</td>
			<td>".$_POST['cor1']."</td>
			<td>".$_POST['ref1']."</td>
			<td>".$nome_motivo1."</td>
		  </tr>
		  <tr>
			<td>".$_POST['qtd2']."</td>
			<td>".$_POST['cod2']."</td>
			<td>".$_POST['desc2']."</td>
			<td>".$_POST['cor2']."</td>
			<td>".$_POST['ref2']."</td>
			<td>".$nome_motivo2."</td>
		  </tr>
		  <tr>
			<td>".$_POST['qtd3']."</td>
			<td>".$_POST['cod3']."</td>
			<td>".$_POST['desc3']."</td>
			<td>".$_POST['cor3']."</td>
			<td>".$_POST['ref3']."</td>
			<td>".$nome_motivo3."</td>
		  </tr>
		  <tr>
			<td>".$_POST['qtd4']."</td>
			<td>".$_POST['cod4']."</td>
			<td>".$_POST['desc4']."</td>
			<td>".$_POST['cor4']."</td>
			<td>".$_POST['ref4']."</td>
			<td>".$nome_motivo4."</td>
		  </tr>
		  <tr>
			<td>".$_POST['qtd5']."</td>
			<td>".$_POST['cod5']."</td>
			<td>".$_POST['desc5']."</td>
			<td>".$_POST['cor5']."</td>
			<td>".$_POST['ref5']."</td>
			<td>".$nome_motivo5."</td>
		  </tr>
		</table>
		<p>Observa&ccedil;&otilde;es:<br />".$_POST['obs']."</p>
		";

		
		/* Função que codifica o anexo para poder ser enviado na mensagem */

		/* ======= ARQUIVO1: */
		$arquivo1 = $_FILES['arquivo1'];
		if(file_exists($arquivo1["tmp_name"]) and !empty($arquivo1)){
			$fp1 = fopen($_FILES["arquivo1"]["tmp_name"],"rb"); // Abri o arquivo enviado.
			$anexo1 = fread($fp1,filesize($_FILES["arquivo1"]["tmp_name"])); // Le o arquivo aberto na linha anterior
			$anexo1 = base64_encode($anexo1); // Codifica os dados com MIME para o e-mail 
			fclose($fp1); // Fecha o arquivo aberto anteriormente
			// $anexo1 = chunk_split($anexo1); // Divide a variável do arquivo em pequenos pedaços para poder enviar

			$mensagem = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
			$mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
			$mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
			$mensagem.= "$corpo_mensagem\n"; 
			$mensagem.= "--$boundary\n"; 
			$mensagem.= "Content-Type: ".$arquivo1["type"]."\n";  
			$mensagem.= "Content-Disposition: attachment; filename=\"".$arquivo1["name"]."\"\n";  
			$mensagem.= "Content-Transfer-Encoding: base64\n\n";  
			$mensagem.= "$anexo1\n";  
			$mensagem.= "--$boundary--\r\n";
		}

 		/* ======= ARQUIVO2: */
		/*$arquivo2 = $_FILES['arquivo2'];
		if(file_exists($arquivo2["tmp_name"]) and !empty($arquivo2)){
			$fp2 = fopen($_FILES["arquivo2"]["tmp_name"],"rb"); // Abri o arquivo enviado.
			$anexo2 = fread($fp2,filesize($_FILES["arquivo2"]["tmp_name"])); // Le o arquivo aberto na linha anterior
			$anexo2 = base64_encode($anexo2); // Codifica os dados com MIME para o e-mail 
			fclose($fp2); // Fecha o arquivo aberto anteriormente
			$anexo2 = chunk_split($anexo2); // Divide a variável do arquivo em pequenos pedaços para poder enviar

			$mensagem = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
			$mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
			$mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
			$mensagem.= "$corpo_mensagem\n"; 
			$mensagem.= "--$boundary\n"; 
			$mensagem.= "Content-Type: ".$arquivo2["type"]."\n";  
			$mensagem.= "Content-Disposition: attachment; filename=\"".$arquivo2["name"]."\"\n";  
			$mensagem.= "Content-Transfer-Encoding: base64\n\n";  
			$mensagem.= "$anexo2\n";  
			$mensagem.= "--$boundary--\r\n";
		} */
		

		/* ======= ARQUIVO3: */
	/*	$arquivo3 = $_FILES['arquivo3'];
		if(file_exists($arquivo3["tmp_name"]) and !empty($arquivo3)){
			$fp3 = fopen($_FILES["arquivo3"]["tmp_name"],"rb"); // Abri o arquivo enviado.
			$anexo3 = fread($fp3,filesize($_FILES["arquivo3"]["tmp_name"])); // Le o arquivo aberto na linha anterior
			$anexo3 = base64_encode($anexo3); // Codifica os dados com MIME para o e-mail 
			fclose($fp3); // Fecha o arquivo aberto anteriormente
			$anexo3 = chunk_split($anexo3); // Divide a variável do arquivo em pequenos pedaços para poder enviar

			$mensagem = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
			$mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
			$mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
			$mensagem.= "$corpo_mensagem\n"; 
			$mensagem.= "--$boundary\n"; 
			$mensagem.= "Content-Type: ".$arquivo3["type"]."\n";  
			$mensagem.= "Content-Disposition: attachment; filename=\"".$arquivo3["name"]."\"\n";  
			$mensagem.= "Content-Transfer-Encoding: base64\n\n";  
			$mensagem.= "$anexo3\n";  
			$mensagem.= "--$boundary--\r\n";
		}	
		*/


		/* Caso não tenha anexo */
		 else 
		{
			$mensagem = "--$boundary\n"; 
			$mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
			$mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
			$mensagem.= "$corpo_mensagem\n";
		}



		/* Função que envia a mensagem  */
		if(mail($to, $assunto, $mensagem, $headers)) { 
			$alterar = mysqli_query($conn,"UPDATE protocolo SET status=1 WHERE id_protocolo = $protocolo"); 
			mysqli_close($conn);
			?>
			<script type="text/javascript">window.location="index.php?p=<?php echo $protocolo; ?>"</script>
		<?php
		}
		else {
			echo "Não foi possível enviar o e-mail.";
			echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
			die;
		}
	}
} // fim do if($_POST['v']){		

		
if($_GET["p"]){ $p = $_GET["p"]; echo "<div class='msg-ok'><h3>Sua solicita&ccedil;&atilde;o foi enviada com sucesso!&nbsp;&nbsp;Protocolo:&nbsp;$p</h3>
<p>Uma c&oacute;pia deste protocolo foi enviada para seu email. Em breve entraremos em contato. Obrigado.</p>
</div>"; }
if($err > 0){ echo "<div class='msg-erro'><h3>Campos em vermelho s&atilde;o obrigat&oacute;rios!</h3></div>"; }
?>





<div id="main">

<form name="form1" method="post" action="index.php" enctype="multipart/form-data" >
	<input type="hidden" name="v" value="1" />
	<?php // echo $date = date('ymdHi'); ?><br />
	<div id="campos1">

	<p><label>Nome:</label><input class="input-l" type="text" <?php if($_POST['v'] and !$_POST['nome']){ ?>style="border:2px solid #FF0000"<?php } ?> name="nome" value="<?php echo $_POST['nome']; ?>" placeholder="Nome de quem está solicitando a assistência" /></p>

	<p><label>E-mail:</label><input class="input-m" type="text" <?php if($_POST['v'] and !$_POST['email']){ ?>style="border:2px solid #FF0000"<?php } ?> name="email" value="<?php echo $_POST['email']; ?>" placeholder="Email para contato" /></p>

	<p><label>Telefone:</label><input class="input-m" type="text" <?php if($_POST['v'] and !$_POST['telefone']){ ?>style="border:2px solid #FF0000"<?php } ?> name="telefone" value="<?php echo $_POST['telefone']; ?>" placeholder="Telefone para contato"  /></p>

	<p><label>Raz&atilde;o social:</label><input class="input-l" type="text" <?php if($_POST['v'] and !$_POST['razao']){ ?>style="border:2px solid #FF0000"<?php } ?> name="razao" value="<?php echo $_POST['razao']; ?>" /></p>

	<p><label>Nº nota fiscal ou nº do pedido:</label><input class="input-m" type="text" <?php if($_POST['v'] and !$_POST['notafiscal']){ ?>style="border:2px solid #FF0000"<?php } ?> name="notafiscal" value="<?php echo $_POST['notafiscal']; ?>" placeholder="" /> <span class="input-obs">(NF que recebeu o produto ou número do pedido)</span></p>

	<p><label>Nome  consumidor:</label><input type="text" class="input-l" <?php if($_POST['v'] and !$_POST['consumidor']){ ?>style="border:2px solid #FF0000"<?php } ?> name="consumidor" value="<?php echo $_POST['consumidor']; ?>" />
	</p>

	<p><label>Transportadora:</label>
	<select name="transportadora" id="transportadora" class="input-m" <?php if($_POST['v'] and !$_POST['transportadora']){ ?> style="border:2px solid #FF0000"<?php } ?>>
		<option value="">Selecionar ...</option>
		<option <?php if($_POST['transportadora'] == "acer"){ echo "selected='selected'"; } ?>			value="acer">Acer</option>
		<option <?php if($_POST['transportadora'] == "acorianos"){ echo "selected='selected'"; } ?>		value="acorianos">Açorianos</option>
		<option <?php if($_POST['transportadora'] == "anisio"){ echo "selected='selected'"; } ?>		value="anisio">Anísio José Tronco Filho</option>
		<option <?php if($_POST['transportadora'] == "blz"){ echo "selected='selected'"; } ?>			value="blz">BLZ</option>
		<option <?php if($_POST['transportadora'] == "civardi"){ echo "selected='selected'"; } ?>		value="blz">Civardi</option>
		<option <?php if($_POST['transportadora'] == "cristofoli"){ echo "selected='selected'"; } ?>	value="cristofoli">Cristofoli</option>
		<option <?php if($_POST['transportadora'] == "dumar"){ echo "selected='selected'"; } ?>			value="dumar">Dumar</option>
		<option <?php if($_POST['transportadora'] == "leomar"){ echo "selected='selected'"; } ?> 		value="leomar" >Expresso Leomar</option>
		<option <?php if($_POST['transportadora'] == "fritz"){ echo "selected='selected'"; } ?> 		value="fritz" >Fritz Express</option>
		<option <?php if($_POST['transportadora'] == "hbtransportes"){ echo "selected='selected'"; } ?> value="hbtransportes">HB Transportes</option>
		<option <?php if($_POST['transportadora'] == "prattica"){ echo "selected='selected'"; } ?> 		value="prattica">Prattica</option>
		<option <?php if($_POST['transportadora'] == "Ritter"){ echo "selected='selected'"; } ?>		value="Ritter">Ritter</option>
		<option <?php if($_POST['transportadora'] == "rrc"){ echo "selected='selected'"; } ?>			value="rrc">RRC</option>
		<option <?php if($_POST['transportadora'] == "tms"){ echo "selected='selected'"; } ?> 			value="tms">TMS</option>
		<option <?php if($_POST['transportadora'] == "unna"){ echo "selected='selected'"; } ?> 			value="unna">Unna</option>
		<option <?php if($_POST['transportadora'] == "proprio"){ echo "selected='selected'"; } ?> 		value="proprio">Pr&oacute;prio</option>
	</select>  <span class="input-obs">( mesma que entrega mercadoria )</span></p>


<!--
Alerson - [alerson_cas@msn.com](mailto:alerson_cas@msn.com)
Brasil Central (Clesio) - [clesio.araujo@uol.com.br](mailto:clesio.araujo@uol.com.br)

CND (Charles) - [cnd.consultoria@outlook.com](mailto:cnd.consultoria@outlook.com)
Edmilson Perandre - [edperandre@hotmail.com](mailto:edperandre@hotmail.com)
Geração (Gabriel) - [vendas@g2parana.com.br](mailto:vendas@g2parana.com.br)
JFLEX (Gustavo) - [gustavofloliveira@gmail.com](mailto:gustavofloliveira@gmail.com)
JWS (José Vilson) - [jwsrepre@gmail.com](mailto:jwsrepre@gmail.com)
Luis Eduardo (Bruno) -  [eduardorodriguesata@hotmail.com](mailto:eduardorodriguesata@hotmail.com)
Magnata (Marco Aurelio) - [marcoaurelioleitte@outlook.com](mailto:marcoaurelioleitte@outlook.com)
Miranda e Marques (Miqueias) - [miqueiasmiranda2012@gmail.com](mailto:miqueiasmiranda2012@gmail.com)
Natasu (Percio) - [natasurepresentacoes@gmail.com](mailto:natasurepresentacoes@gmail.com)
Nelson Ramos - [ramosrepresentacao@hotmail.com](mailto:ramosrepresentacao@hotmail.com)
R.R. Vitória (Rodolfo e Luciano) - [rrvitoriarepres@hotmail.com](mailto:rrvitoriarepres@hotmail.com)
Shop do Sono (Bruno) - [fmcrepresentacoesvale@gmail.com](mailto:fmcrepresentacoesvale@gmail.com)
Wagner Willians - [wamarianorepresentacoes@gmail.com](mailto:wamarianorepresentacoes@gmail.com)

-->


	<p><label>Representante:</label>
	  <select name="representante" id="representante" class="input-m" <?php if($_POST['v'] and !$_POST['representante']){ ?> style="border:2px solid #FF0000"<?php } ?> >
        <option value="">Selecionar ...</option>
		<option <?php if($_POST['representante'] == "centralvendas@moveiscastro"){ echo "selected='selected'"; } ?> 		value="centralvendas@moveiscastro.com.br" >Vendas diretas</option>
		<option <?php if($_POST['representante'] == "antoniocarloswen@gmail.com"){ echo "selected='selected'"; } ?> 		value="antoniocarloswen@gmail.com" >AC Wendling (Antônio Carlos)</option>
		<option <?php if($_POST['representante'] == "alerson_cas@msn.com"){ echo "selected='selected'"; } ?> 				value="alerson_cas@msn.com" >Alerson</option>
		<option <?php if($_POST['representante'] == "arielconstantino11@gmail.com"){ echo "selected='selected'"; } ?> 		value="arielconstantino11@gmail.com" >Ariel</option>
		<option <?php if($_POST['representante'] == "ivanlbm@yahoo.com.br"){ echo "selected='selected'"; } ?> 				value="ivanlbm@yahoo.com.brsasfds" >BM (Ivan)</option>
		<option <?php if($_POST['representante'] == "clesio.araujo@uol.com.br"){ echo "selected='selected'"; } ?> 				value="clesio.araujo@uol.com.br" >Brasil Central (Clesio)</option>
		<option <?php if($_POST['representante'] == "candeiarepresentacoes@yahoo.com"){ echo "selected='selected'"; } ?>	value="candeiarepresentacoes@yahoo.com" >Candeia (Valmir)</option>

		<option <?php if($_POST['representante'] == "candeiarepresentacoes@yahoo.com"){ echo "selected='selected'"; } ?>	value="candeiarepresentacoes@yahoo.com" >Candeia (Valmir)</option>
		
		<option <?php if($_POST['representante'] == "cleberalvespereira09@gmail.com"){ echo "selected='selected'"; } ?> 	value="cleberalvespereira09@gmail.com" >Cleber</option>
		<option <?php if($_POST['representante'] == "confiarerepresentacoes@gmail.com"){ echo "selected='selected'"; } ?> 	value="confiarerepresentacoes@gmail.com" >Confiare (Patrícia)</option>
		
		
		
		<option <?php if($_POST['representante'] == "cornacini@uol.com.br"){ echo "selected='selected'"; } ?> 				value="cornacini@uol.com.br" >Garcia</option>
		<option <?php if($_POST['representante'] == "representante@pannet.com.br"){ echo "selected='selected'"; } ?> 		value="representante@pannet.com.br" >Geveve</option>
		<option <?php if($_POST['representante'] == "jcezarmoveis@terra.com.br"){ echo "selected='selected'"; } ?> 			value="jcezarmoveis@terra.com.br" >Júlio Cezar</option>
		<option <?php if($_POST['representante'] == "jeronciorepresentacoes@hotmail.com"){ echo "selected='selected'"; } ?> value="jeronciorepresentacoes@hotmail.com" >JVC (Jeroncio)</option>
		<option <?php if($_POST['representante'] == "ldmrepresentacao@gmail.com"){ echo "selected='selected'"; } ?> 		value="ldmrepresentacao@gmail.com" >L de Sousa</option>
		<option <?php if($_POST['representante'] == "tushirepres@gmail.com"){ echo "selected='selected'"; } ?> 				value="tushirepres@gmail.com" >L. A. Matuoka (Leandro)</option>
		<option <?php if($_POST['representante'] == "leandrosmrepresentacao@gmail.com"){ echo "selected='selected'"; } ?> 	value="leandrosmrepresentacao@gmail.com" >Leandro de Sousa</option>
		<option <?php if($_POST['representante'] == "rep.lenhard@terra.com.br"){ echo "selected='selected'"; } ?>			value="rep.lenhard@terra.com.br" >Lenhard</option>
		<option <?php if($_POST['representante'] == "moura.representamoveis@gmail.com"){ echo "selected='selected'"; } ?> 	value="moura.representamoveis@gmail.com" >Lincoln</option>
		
		<option <?php if($_POST['representante'] == "miltoncara.indio@gmail.com"){ echo "selected='selected'"; } ?> 		value="miltoncara.indio@gmail.com" >Milton</option>
		<option <?php if($_POST['representante'] == "escritorionovaera@outlook.com.br"){ echo "selected='selected'"; } ?> 	value="escritorionovaera@outlook.com.br" >Nova Era (Rafael)</option>
		
		
		
		
		<option <?php if($_POST['representante'] == "wagner4848jose@gmail.com"){ echo "selected='selected'"; } ?>			value="wagner4848jose@gmail.com" >Souza e Simonetti (Wagner)</option>
		<option <?php if($_POST['representante'] == "josiani@uniaosul.com.br"){ echo "selected='selected'"; } ?> 			value="josiani@uniaosul.com.br" >União Sul (Henrique Faé)</option>
		<option <?php if($_POST['representante'] == "ricardoavianna@yahoo.com.br"){ echo "selected='selected'"; } ?> 		value="ricardoavianna@yahoo.com.br" >Vianna (Ricardo)</option>
		<option <?php if($_POST['representante'] == "cecconirepresentacoes@gmail.com"){ echo "selected='selected'"; } ?> 	value="cecconirepresentacoes@gmail.com" >Vilacoba & Cecconi (Fabiano)</option>
      </select>
	</p>



	<!-- UPLOAD DE ARQUIVOS -->
	<br />
	
	<h3><strong>Anexe 1 ou mais fotos do problema apresentado.<br>Importante!</strong> Para evitar erros ou lentid&atilde;o no envio, utilize imagens com tamanho igual ou menor que 1mb.</h3>
	<p><span style="color:red;font-weight:bold">Não será dado andamento em pedido de assistência sem recebimento de imagens.</span></p>
	Imagem 1 &nbsp;<input type="file" id="arquivo1" name="arquivo1" /><br />
	<!-- Imagem 2 &nbsp;<input type="file" id="arquivo2" name="arquivo2" /><br />
	Imagem 3 &nbsp;<input type="file" id="arquivo3" name="arquivo3" /><br /> -->
	<p>Obs.: Anexar as imagens ou enviar para o email assistencia@moveiscastro.com.br.</p>

  </div>
	

	<div class="imagem-ajuda">
		<h4>Imagem com exemplo de CÓDIGO e DESCRIÇÃO para o correto preenchimento dos campos abaixo.</h4>
		<a href="imagem-ajuda.png"><img src="imagem-ajuda.png" /></a>
	</div>

	<!-- TABELA -->

	<table id="campos2" class="table" border="0" cellspacing="0" cellpadding="3" >
  <tr >
    <td class="table-header">Qtde. de peças</td>
    <td class="table-header">C&oacute;digo da peça conf.<br />manual de montagem</td>
    <td class="table-header">Descri&ccedil;&atilde;o da peça conforme <br />manual de montagem</td>
    <td class="table-header">Cor do produto<br />conf. nota fiscal</td>
	<td class="table-header">Refer&ecirc;ncia do produto<br />conf. nota fiscal</td>
    <td class="table-header">Avaria / motivo</td>
  </tr>
  <tr>
    <td><input class="input-s" <?php if($_POST['v'] and !$_POST['qtd1']){ ?>style="border:2px solid #FF0000"<?php } ?> type="text" name="qtd1" value="<?php echo $_POST['qtd1']; ?>" size="3" /></td>
    <td><input class="input-m" <?php if($_POST['v'] and !$_POST['cod1']){ ?>style="border:2px solid #FF0000"<?php } ?> type="text" name="cod1" value="<?php echo $_POST['cod1']; ?>" size="6" maxlength="6" /></td>
    <td><input class="input-l" <?php if($_POST['v'] and !$_POST['desc1']){ ?>style="border:2px solid #FF0000"<?php } ?> type="text"  name="desc1" value="<?php echo $_POST['desc1']; ?>" /></td>
    <td><input class="input-m" <?php if($_POST['v'] and !$_POST['cor1']){ ?>style="border:2px solid #FF0000"<?php } ?> type="text" name="cor1" value="<?php echo $_POST['cor1']; ?>" /></td>
    <td><input class="input-m" <?php if($_POST['v'] and !$_POST['ref1']){ ?>style="border:2px solid #FF0000"<?php } ?> type="text" name="ref1" value="<?php echo $_POST['ref1']; ?>" /></td>
    <td>
	 <select class="input-l" name="motivo1" id="motivo1" <?php if($_POST['v'] and !$_POST['motivo1']){ ?>style="border:2px solid #FF0000"<?php } ?>>
		<option value="">Selecionar ...</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Ind&uacute;stria:</option>
		<option <?php if($_POST['motivo1'] == 2){ echo "selected='selected'"; } ?> value="2">&nbsp; Descolando borda            </option>
		<option <?php if($_POST['motivo1'] == 3){ echo "selected='selected'"; } ?> value="3">&nbsp; Diferença de tonalidade     </option>
		<option <?php if($_POST['motivo1'] == 4){ echo "selected='selected'"; } ?> value="4">&nbsp; Empenada                    </option>
		<option <?php if($_POST['motivo1'] == 5){ echo "selected='selected'"; } ?> value="5">&nbsp; Erro tamanho de peça        </option>
		<option <?php if($_POST['motivo1'] == 7){ echo "selected='selected'"; } ?> value="7">&nbsp; Falta de peças              </option>
		<option <?php if($_POST['motivo1'] == 6){ echo "selected='selected'"; } ?> value="6">&nbsp; Falta de ferragem           </option>
		<option <?php if($_POST['motivo1'] == 8){ echo "selected='selected'"; } ?> value="8">&nbsp; Falta de pintura            </option>
		<option <?php if($_POST['motivo1'] == 9){ echo "selected='selected'"; } ?> value="9">&nbsp; Furação errada              </option>
		<option <?php if($_POST['motivo1'] == 10){ echo "selected='selected'"; } ?> value="10">&nbsp; Manchas na pintura        </option>
		<option <?php if($_POST['motivo1'] == 11){ echo "selected='selected'"; } ?> value="11">&nbsp; Não fixada fita de borda  </option>
		<option <?php if($_POST['motivo1'] == 1){ echo "selected='selected'"; } ?> value="1">&nbsp; Arranhado/Riscado			</option>
		<option <?php if($_POST['motivo1'] == 13){ echo "selected='selected'"; } ?> value="13">&nbsp; Quebrado/Batido/Amassado  </option>
		<option <?php if($_POST['motivo1'] == 12){ echo "selected='selected'"; } ?> value="12">&nbsp; Puxadores quebrados       </option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Transporte:</option>
		<option <?php if($_POST['motivo1'] == 14){ echo "selected='selected'"; } ?> value="14">&nbsp; Quebrado/Batido/Amassado	</option>
		<option <?php if($_POST['motivo1'] == 15){ echo "selected='selected'"; } ?> value="15">&nbsp; Molhado					</option>
		<option <?php if($_POST['motivo1'] == 16){ echo "selected='selected'"; } ?> value="16">&nbsp; Riscado/Arranhado			</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Cliente:</option>
		<option <?php if($_POST['motivo1'] == 17){ echo "selected='selected'"; } ?> value="17">&nbsp; Assist&ecirc;ncia Faturada</option>
		<option <?php if($_POST['motivo1'] == 21){ echo "selected='selected'"; } ?> value="21">&nbsp; Pe&ccedil;a Quebrada na montagem</option>
		<option <?php if($_POST['motivo1'] == 18){ echo "selected='selected'"; } ?> value="18">&nbsp; Empenada					</option>
		<option <?php if($_POST['motivo1'] == 20){ echo "selected='selected'"; } ?> value="20">&nbsp; Mofada					</option>
		<option <?php if($_POST['motivo1'] == 19){ echo "selected='selected'"; } ?> value="19">&nbsp; Erro montagem				</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Fornecedor:</option>
		<option <?php if($_POST['motivo1'] == 22){ echo "selected='selected'"; } ?> value="22">&nbsp; Defeito Ferragem			</option>
		<option <?php if($_POST['motivo1'] == 23){ echo "selected='selected'"; } ?> value="23">&nbsp; Espelho com defeito		</option>
		<option value=""> </option>
	 </select>
	</td>
  </tr>
  <tr>
    <td><input  class="input-s" name="qtd2" type="text" value="<?php echo $_POST['qtd2']; ?>" size="3" /></td>
    <td><input  class="input-m" type="text" name="cod2" value="<?php echo $_POST['cod2']; ?>" size="6" maxlength="6" /></td>
    <td><input  class="input-l" type="text" name="desc2" value="<?php echo $_POST['desc2']; ?>" /></td>
    <td><input  class="input-m" type="text" name="cor2" value="<?php echo $_POST['cor2']; ?>" /></td>
    <td><input  class="input-m" type="text" name="ref2" value="<?php echo $_POST['ref2']; ?>" /></td>
    <td>
	 <select class="input-l" name="motivo2" id="motivo2" >
		<option value="">Selecionar ...</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Ind&uacute;stria:</option>
		<option <?php if($_POST['motivo2'] == 2){ echo "selected='selected'"; } ?> value="2">&nbsp; Descolando borda            </option>
		<option <?php if($_POST['motivo2'] == 3){ echo "selected='selected'"; } ?> value="3">&nbsp; Diferença de tonalidade     </option>
		<option <?php if($_POST['motivo2'] == 4){ echo "selected='selected'"; } ?> value="4">&nbsp; Empenada                    </option>
		<option <?php if($_POST['motivo2'] == 5){ echo "selected='selected'"; } ?> value="5">&nbsp; Erro tamanho de peça        </option>
		<option <?php if($_POST['motivo2'] == 7){ echo "selected='selected'"; } ?> value="7">&nbsp; Falta de peças              </option>
		<option <?php if($_POST['motivo2'] == 6){ echo "selected='selected'"; } ?> value="6">&nbsp; Falta de ferragem           </option>
		<option <?php if($_POST['motivo2'] == 8){ echo "selected='selected'"; } ?> value="8">&nbsp; Falta de pintura            </option>
		<option <?php if($_POST['motivo2'] == 9){ echo "selected='selected'"; } ?> value="9">&nbsp; Furação errada              </option>
		<option <?php if($_POST['motivo2'] == 10){ echo "selected='selected'"; } ?> value="10">&nbsp; Manchas na pintura        </option>
		<option <?php if($_POST['motivo2'] == 11){ echo "selected='selected'"; } ?> value="11">&nbsp; Não fixada fita de borda  </option>
		<option <?php if($_POST['motivo2'] == 1){ echo "selected='selected'"; } ?> value="1">&nbsp; Arranhado/Riscado			</option>
		<option <?php if($_POST['motivo2'] == 13){ echo "selected='selected'"; } ?> value="13">&nbsp; Quebrado/Batido/Amassado  </option>
		<option <?php if($_POST['motivo2'] == 12){ echo "selected='selected'"; } ?> value="12">&nbsp; Puxadores quebrados       </option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Transporte:</option>
		<option <?php if($_POST['motivo2'] == 14){ echo "selected='selected'"; } ?> value="14">&nbsp; Quebrado/Batido/Amassado	</option>
		<option <?php if($_POST['motivo2'] == 15){ echo "selected='selected'"; } ?> value="15">&nbsp; Molhado					</option>
		<option <?php if($_POST['motivo2'] == 16){ echo "selected='selected'"; } ?> value="16">&nbsp; Riscado/Arranhado			</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Cliente:</option>
		<option <?php if($_POST['motivo2'] == 17){ echo "selected='selected'"; } ?> value="17">&nbsp; Assist&ecirc;ncia Faturada</option>
		<option <?php if($_POST['motivo2'] == 21){ echo "selected='selected'"; } ?> value="21">&nbsp; Pe&ccedil;a Quebrada na montagem</option>
		<option <?php if($_POST['motivo2'] == 18){ echo "selected='selected'"; } ?> value="18">&nbsp; Empenada					</option>
		<option <?php if($_POST['motivo2'] == 20){ echo "selected='selected'"; } ?> value="20">&nbsp; Mofada					</option>
		<option <?php if($_POST['motivo2'] == 19){ echo "selected='selected'"; } ?> value="19">&nbsp; Erro montagem				</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Fornecedor:</option>
		<option <?php if($_POST['motivo2'] == 22){ echo "selected='selected'"; } ?> value="22">&nbsp; Defeito Ferragem			</option>
		<option <?php if($_POST['motivo2'] == 23){ echo "selected='selected'"; } ?> value="23">&nbsp; Espelho com defeito		</option>
		<option value=""> </option>
     </select>
	</td>
  </tr>
  <tr>
    <td><input  class="input-s" name="qtd3" type="text" value="<?php echo $_POST['qtd3']; ?>" size="3" /></td>
    <td><input  class="input-m" type="text" name="cod3" value="<?php echo $_POST['cod3']; ?>" size="6" maxlength="6" /></td>
    <td><input  class="input-l" type="text" name="desc3" value="<?php echo $_POST['desc3']; ?>" /></td>
    <td><input  class="input-m" type="text" name="cor3" value="<?php echo $_POST['cor3']; ?>" /></td>
    <td><input  class="input-m" type="text" name="ref3" value="<?php echo $_POST['ref3']; ?>" /></td>
    <td>
	 <select class="input-l" name="motivo3" id="motivo3" >
		<option value="">Selecionar ...</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Ind&uacute;stria:</option>
		<option <?php if($_POST['motivo3'] == 2){ echo "selected='selected'"; } ?> value="2">&nbsp; Descolando borda            </option>
		<option <?php if($_POST['motivo3'] == 3){ echo "selected='selected'"; } ?> value="3">&nbsp; Diferença de tonalidade     </option>
		<option <?php if($_POST['motivo3'] == 4){ echo "selected='selected'"; } ?> value="4">&nbsp; Empenada                    </option>
		<option <?php if($_POST['motivo3'] == 5){ echo "selected='selected'"; } ?> value="5">&nbsp; Erro tamanho de peça        </option>
		<option <?php if($_POST['motivo3'] == 7){ echo "selected='selected'"; } ?> value="7">&nbsp; Falta de peças              </option>
		<option <?php if($_POST['motivo3'] == 6){ echo "selected='selected'"; } ?> value="6">&nbsp; Falta de ferragem           </option>
		<option <?php if($_POST['motivo3'] == 8){ echo "selected='selected'"; } ?> value="8">&nbsp; Falta de pintura            </option>
		<option <?php if($_POST['motivo3'] == 9){ echo "selected='selected'"; } ?> value="9">&nbsp; Furação errada              </option>
		<option <?php if($_POST['motivo3'] == 10){ echo "selected='selected'"; } ?> value="10">&nbsp; Manchas na pintura        </option>
		<option <?php if($_POST['motivo3'] == 11){ echo "selected='selected'"; } ?> value="11">&nbsp; Não fixada fita de borda  </option>
		<option <?php if($_POST['motivo3'] == 1){ echo "selected='selected'"; } ?> value="1">&nbsp; Arranhado/Riscado			</option>
		<option <?php if($_POST['motivo3'] == 13){ echo "selected='selected'"; } ?> value="13">&nbsp; Quebrado/Batido/Amassado  </option>
		<option <?php if($_POST['motivo3'] == 12){ echo "selected='selected'"; } ?> value="12">&nbsp; Puxadores quebrados       </option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Transporte:</option>
		<option <?php if($_POST['motivo3'] == 14){ echo "selected='selected'"; } ?> value="14">&nbsp; Quebrado/Batido/Amassado	</option>
		<option <?php if($_POST['motivo3'] == 15){ echo "selected='selected'"; } ?> value="15">&nbsp; Molhado					</option>
		<option <?php if($_POST['motivo3'] == 16){ echo "selected='selected'"; } ?> value="16">&nbsp; Riscado/Arranhado			</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Cliente:</option>
		<option <?php if($_POST['motivo3'] == 17){ echo "selected='selected'"; } ?> value="17">&nbsp; Assist&ecirc;ncia Faturada</option>
		<option <?php if($_POST['motivo3'] == 21){ echo "selected='selected'"; } ?> value="21">&nbsp; Pe&ccedil;a Quebrada na montagem</option>
		<option <?php if($_POST['motivo3'] == 18){ echo "selected='selected'"; } ?> value="18">&nbsp; Empenada					</option>
		<option <?php if($_POST['motivo3'] == 20){ echo "selected='selected'"; } ?> value="20">&nbsp; Mofada					</option>
		<option <?php if($_POST['motivo3'] == 19){ echo "selected='selected'"; } ?> value="19">&nbsp; Erro montagem				</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Fornecedor:</option>
		<option <?php if($_POST['motivo3'] == 22){ echo "selected='selected'"; } ?> value="22">&nbsp; Defeito Ferragem			</option>
		<option <?php if($_POST['motivo3'] == 23){ echo "selected='selected'"; } ?> value="23">&nbsp; Espelho com defeito		</option>
		<option value=""> </option>     </select>
	</td>
  </tr>
  <tr>
    <td><input  class="input-s" name="qtd4" type="text" value="<?php echo $_POST['qtd4']; ?>" size="3" /></td>
    <td><input  class="input-m" type="text" name="cod4" value="<?php echo $_POST['cod4']; ?>" size="6" maxlength="6" /></td>
    <td><input  class="input-l" type="text" name="desc4" value="<?php echo $_POST['desc4']; ?>" /></td>
    <td><input  class="input-m" type="text" name="cor4" value="<?php echo $_POST['cor4']; ?>" /></td>
    <td><input  class="input-m" type="text" name="ref4" value="<?php echo $_POST['ref4']; ?>" /></td>
    <td>
	 <select class="input-l" name="motivo4" id="motivo4" >
      <option value="">Selecionar ...</option>
		<option value="">Selecionar ...</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Ind&uacute;stria:</option>
		<option <?php if($_POST['motivo4'] == 2){ echo "selected='selected'"; } ?> value="2">&nbsp; Descolando borda            </option>
		<option <?php if($_POST['motivo4'] == 3){ echo "selected='selected'"; } ?> value="3">&nbsp; Diferença de tonalidade     </option>
		<option <?php if($_POST['motivo4'] == 4){ echo "selected='selected'"; } ?> value="4">&nbsp; Empenada                    </option>
		<option <?php if($_POST['motivo4'] == 5){ echo "selected='selected'"; } ?> value="5">&nbsp; Erro tamanho de peça        </option>
		<option <?php if($_POST['motivo4'] == 7){ echo "selected='selected'"; } ?> value="7">&nbsp; Falta de peças              </option>
		<option <?php if($_POST['motivo4'] == 6){ echo "selected='selected'"; } ?> value="6">&nbsp; Falta de ferragem           </option>
		<option <?php if($_POST['motivo4'] == 8){ echo "selected='selected'"; } ?> value="8">&nbsp; Falta de pintura            </option>
		<option <?php if($_POST['motivo4'] == 9){ echo "selected='selected'"; } ?> value="9">&nbsp; Furação errada              </option>
		<option <?php if($_POST['motivo4'] == 10){ echo "selected='selected'"; } ?> value="10">&nbsp; Manchas na pintura        </option>
		<option <?php if($_POST['motivo4'] == 11){ echo "selected='selected'"; } ?> value="11">&nbsp; Não fixada fita de borda  </option>
		<option <?php if($_POST['motivo4'] == 1){ echo "selected='selected'"; } ?> value="1">&nbsp; Arranhado/Riscado			</option>
		<option <?php if($_POST['motivo4'] == 13){ echo "selected='selected'"; } ?> value="13">&nbsp; Quebrado/Batido/Amassado  </option>
		<option <?php if($_POST['motivo4'] == 12){ echo "selected='selected'"; } ?> value="12">&nbsp; Puxadores quebrados       </option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Transporte:</option>
		<option <?php if($_POST['motivo4'] == 14){ echo "selected='selected'"; } ?> value="14">&nbsp; Quebrado/Batido/Amassado	</option>
		<option <?php if($_POST['motivo4'] == 15){ echo "selected='selected'"; } ?> value="15">&nbsp; Molhado					</option>
		<option <?php if($_POST['motivo4'] == 16){ echo "selected='selected'"; } ?> value="16">&nbsp; Riscado/Arranhado			</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Cliente:</option>
		<option <?php if($_POST['motivo4'] == 17){ echo "selected='selected'"; } ?> value="17">&nbsp; Assist&ecirc;ncia Faturada</option>
		<option <?php if($_POST['motivo4'] == 21){ echo "selected='selected'"; } ?> value="21">&nbsp; Pe&ccedil;a Quebrada na montagem</option>
		<option <?php if($_POST['motivo4'] == 18){ echo "selected='selected'"; } ?> value="18">&nbsp; Empenada					</option>
		<option <?php if($_POST['motivo4'] == 20){ echo "selected='selected'"; } ?> value="20">&nbsp; Mofada					</option>
		<option <?php if($_POST['motivo4'] == 19){ echo "selected='selected'"; } ?> value="19">&nbsp; Erro montagem				</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Fornecedor:</option>
		<option <?php if($_POST['motivo4'] == 22){ echo "selected='selected'"; } ?> value="22">&nbsp; Defeito Ferragem			</option>
		<option <?php if($_POST['motivo4'] == 23){ echo "selected='selected'"; } ?> value="23">&nbsp; Espelho com defeito		</option>
		<option value=""> </option>
     </select>
	</td>
  </tr>
  <tr>
    <td><input  class="input-s" name="qtd5" type="text" value="<?php echo $_POST['qtd5']; ?>" size="3"/></td>
    <td><input  class="input-m" type="text" name="cod5" value="<?php echo $_POST['cod5']; ?>" size="6" maxlength="6" /></td>
    <td><input  class="input-l" type="text" name="desc5" value="<?php echo $_POST['desc5']; ?>" /></td>
    <td><input  class="input-m" type="text" name="cor5" value="<?php echo $_POST['cor5']; ?>" /></td>
    <td><input  class="input-m" type="text" name="ref5" value="<?php echo $_POST['ref5']; ?>" /></td>
    <td>
	 <select class="input-l" name="motivo5" id="motivo5" >
		<option value="">Selecionar ...</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Ind&uacute;stria:</option>
		<option <?php if($_POST['motivo5'] == 2){ echo "selected='selected'"; } ?> value="2">&nbsp; Descolando borda            </option>
		<option <?php if($_POST['motivo5'] == 3){ echo "selected='selected'"; } ?> value="3">&nbsp; Diferença de tonalidade     </option>
		<option <?php if($_POST['motivo5'] == 4){ echo "selected='selected'"; } ?> value="4">&nbsp; Empenada                    </option>
		<option <?php if($_POST['motivo5'] == 5){ echo "selected='selected'"; } ?> value="5">&nbsp; Erro tamanho de peça        </option>
		<option <?php if($_POST['motivo5'] == 7){ echo "selected='selected'"; } ?> value="7">&nbsp; Falta de peças              </option>
		<option <?php if($_POST['motivo5'] == 6){ echo "selected='selected'"; } ?> value="6">&nbsp; Falta de ferragem           </option>
		<option <?php if($_POST['motivo5'] == 8){ echo "selected='selected'"; } ?> value="8">&nbsp; Falta de pintura            </option>
		<option <?php if($_POST['motivo5'] == 9){ echo "selected='selected'"; } ?> value="9">&nbsp; Furação errada              </option>
		<option <?php if($_POST['motivo5'] == 10){ echo "selected='selected'"; } ?> value="10">&nbsp; Manchas na pintura        </option>
		<option <?php if($_POST['motivo5'] == 11){ echo "selected='selected'"; } ?> value="11">&nbsp; Não fixada fita de borda  </option>
		<option <?php if($_POST['motivo5'] == 1){ echo "selected='selected'"; } ?> value="1">&nbsp; Arranhado/Riscado			</option>
		<option <?php if($_POST['motivo5'] == 13){ echo "selected='selected'"; } ?> value="13">&nbsp; Quebrado/Batido/Amassado  </option>
		<option <?php if($_POST['motivo5'] == 12){ echo "selected='selected'"; } ?> value="12">&nbsp; Puxadores quebrados       </option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Transporte:</option>
		<option <?php if($_POST['motivo5'] == 14){ echo "selected='selected'"; } ?> value="14">&nbsp; Quebrado/Batido/Amassado	</option>
		<option <?php if($_POST['motivo5'] == 15){ echo "selected='selected'"; } ?> value="15">&nbsp; Molhado					</option>
		<option <?php if($_POST['motivo5'] == 16){ echo "selected='selected'"; } ?> value="16">&nbsp; Riscado/Arranhado			</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Cliente:</option>
		<option <?php if($_POST['motivo5'] == 17){ echo "selected='selected'"; } ?> value="17">&nbsp; Assist&ecirc;ncia Faturada</option>
		<option <?php if($_POST['motivo5'] == 21){ echo "selected='selected'"; } ?> value="21">&nbsp; Pe&ccedil;a Quebrada na montagem</option>
		<option <?php if($_POST['motivo5'] == 18){ echo "selected='selected'"; } ?> value="18">&nbsp; Empenada					</option>
		<option <?php if($_POST['motivo5'] == 20){ echo "selected='selected'"; } ?> value="20">&nbsp; Mofada					</option>
		<option <?php if($_POST['motivo5'] == 19){ echo "selected='selected'"; } ?> value="19">&nbsp; Erro montagem				</option>
		<option value=""> </option>
		<option value="" style="font-weight:bold">Fornecedor:</option>
		<option <?php if($_POST['motivo5'] == 22){ echo "selected='selected'"; } ?> value="22">&nbsp; Defeito Ferragem			</option>
		<option <?php if($_POST['motivo5'] == 23){ echo "selected='selected'"; } ?> value="23">&nbsp; Espelho com defeito		</option>
		<option value=""> </option>
     </select>
	</td>
  </tr>
</table>

    <p style="margin-left:5px;">Observa&ccedil;&otilde;es<br />
	<textarea class="input-obs" name="obs" cols="90" rows="7"><?php echo $_POST['obs']; ?></textarea>
	<p style="margin-left:5px;">


<br />

  	<p style="margin-left:5px;"><input type="submit" name="Submit" value="&nbsp;&nbsp;Enviar&nbsp;&nbsp;" style="padding:18px; border:#333 solid 1px; font-size:20px; margin-top:20px" /></p>

<br />
<br />

</form>

</div>

<?php
if($_GET["p"]){ echo "<div class='msg-ok'>
  <h3>Sua solicita&ccedil;&atilde;o foi enviada com sucesso!&nbsp;&nbsp;Protocolo:&nbsp;$p</h3>
  <p>Uma c&oacute;pia deste protocolo foi enviada para seu email. Em breve entraremos em contato. Obrigado.</p>
</div>"; }
if($err > 0){ echo "<div class='msg-erro'><h3>Campos em vermelho s&atilde;o obrigat&oacute;rios!</h3></div>"; }
?>


<!--
ac.wendling@hotmail.com 				AC Wendling (Antônio Carlos) <== email trocou (abaixo)
antoniocarloswen@gmail.com 				AC Wendling (Antônio Carlos) 
arielconstantino11@gmail.com 	    	Ariel 
ivanlbm@yahoo.com.br			    	BM (Ivan) 
cjcrepresentacoes@hotmail.com 	    	C&R Filhos (Sergio) 
carlaomp@hotmail.com			 	    Carlos Moreira 
candeiarepresentacoes@yahoo.com 	    Candeia (Valmir) 
cleberalvespereira09@gmail.com 	   		Cleber 
confiarerepresentacoes@gmail.com     	Confiare (Patrícia) 
conquistavendas@gmail.com 		    	Conquista (Jean) 
diegorepresentacoes.mt@gmail.com	    Diego 
vendas@g2parana.com.br)			    	G2 (Henrique Manesco) 
cornacini@uol.com.br				    Garcia 
representante@pannet.com.br		    	Geveve 
jeronciorepresentacoes@hotmail.com    	JVC (Jeroncio) 
ldmrepresentacao@gmail.com		    	L de Sousa 
tushirepres@gmail.com			    	L. A. Matuoka (Leandro) 
leandrosmrepresentacao@gmail.com	    Leandro de Sousa 
rep.lenhard@terra.com.br		    	Lenhard 
moura.representamoveis@gmail.com	    Lincoln 
maiquel.nv@hotmail.com		   			Maiquel 
miltoncara.indio@gmail.com)		    	Milton 
jcezarmoveis@terra.com.br)		    	Júlio Cezar 
escritorionovaera@outlook.com.br	    Nova Era (Rafael) 
rmc.rep@gmail.com 				    	RMC (Raulino) 
rodolfo@linharesrepresentacao.com.br    Rodolfo Linhares 
rossirepresente@gmail.com		    	Rossi 
sicerocerqueira@hotmail.com		    	SM (Sirleide) 
wagner4848jose@gmail.com			    Souza e Simonetti (Wagner) 
josiani@uniaosul.com.br			    	União Sul (Henrique Faé) 
ricardoavianna@yahoo.com.br			    Vianna (Ricardo) 
cecconirepresentacoes@gmail.com		    Vilacoba & Cecconi (Fabiano) 

-->


</body>
</html>