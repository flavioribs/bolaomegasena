<?Php
	/* megasenadavirada2021.flavioribs.com.br */
	
	if(isset($_REQUEST["dezena1"])){
		$dez1 = $_REQUEST["dezena1"];
	}else{
		$dez1 = '00';
	}

	if(isset($_REQUEST["dezena2"])){
		$dez2 = $_REQUEST["dezena2"];
	}else{
		$dez2 = '00';
	}

	if(isset($_REQUEST["dezena3"])){
		$dez3 = $_REQUEST["dezena3"];
	}else{
		$dez3 = '00';
	}

	if(isset($_REQUEST["dezena4"])){
		$dez4 = $_REQUEST["dezena4"];
	}else{
		$dez4 = '00';
	}

	if(isset($_REQUEST["dezena5"])){
		$dez5 = $_REQUEST["dezena5"];
	}else{
		$dez5 = '00';
	}

	if(isset($_REQUEST["dezena6"])){
		$dez6 = $_REQUEST["dezena6"];
	}else{
		$dez6 = '00';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bol&#xE3;o Mega Sena 2021</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Bol&#xE3;o Mega Sena 2021</a></h1>
		<form id="form_541577" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Bol&#xE3;o Mega Sena 2021</h2>
			<p>Esta aplica&#xE7;&#xE3;o serve apenas para conferir as cartelas.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="dezena1">1a. Dezena </label>
		<div>
			<input id="dezena1" name="dezena1" class="element text small" type="text" maxlength="2" value="<?Php echo $dez1; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>Informe aqui a dezena sorteada na mega sena.</small></p> 
		</li>		<li id="li_5" >
		<label class="description" for="dezena2">2a. Dezena </label>
		<div>
			<input id="dezena2" name="dezena2" class="element text small" type="text" maxlength="2" value="<?Php echo $dez2; ?>"/> 
		</div><p class="guidelines" id="guide_2"><small>Informe aqui a dezena sorteada na mega sena.</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="dezena3">3a. Dezena </label>
		<div>
			<input id="dezena3" name="dezena3" class="element text small" type="text" maxlength="2" value="<?Php echo $dez3; ?>"/> 
		</div><p class="guidelines" id="guide_3"><small>Informe aqui a dezena sorteada na mega sena.</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="dezena4">4a. Dezena </label>
		<div>
			<input id="dezena4" name="dezena4" class="element text small" type="text" maxlength="2" value="<?Php echo $dez4; ?>"/> 
		</div><p class="guidelines" id="guide_4"><small>Informe aqui a dezena sorteada na mega sena.</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="dezena5">5a. Dezena </label>
		<div>
			<input id="dezena5" name="dezena5" class="element text small" type="text" maxlength="2" value="<?Php echo $dez5; ?>"/> 
		</div><p class="guidelines" id="guide_5"><small>Informe aqui a dezena sorteada na mega sena.</small></p> 
		</li>		<li id="li_6" >
		<label class="description" for="dezena6">6a. Dezena </label>
		<div>
			<input id="dezena6" name="dezena6" class="element text small" type="text" maxlength="2" value="<?Php echo $dez6; ?>"/> 
		</div><p class="guidelines" id="guide_6"><small>Informe aqui a dezena sorteada na mega sena.</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="541577" />
			    
				<input id="saveForm" class="button_text" type="submit" name="Confirmar" value="Confirmar" />
		</li>
			</ul>
		</form>	
		<div id="footer">

<?Php 
	function conferir($dezenasjogo, $dezena1, $dezena2, $dezena3, $dezena4, $dezena5, $dezena6){
		$dezenas = explode("-", $dezenasjogo);
		
		if(count($dezenas) >= 6){
			$dezena = str_replace($dezena1, "<b>$dezena1</b>", $dezenasjogo); 
			$dezena = str_replace($dezena2, "<b>$dezena2</b>", $dezena); 
			$dezena = str_replace($dezena3, "<b>$dezena3</b>", $dezena); 
			$dezena = str_replace($dezena4, "<b>$dezena4</b>", $dezena); 
			$dezena = str_replace($dezena5, "<b>$dezena5</b>", $dezena); 
			$dezena = str_replace($dezena6, "<b>$dezena6</b>", $dezena); 

			$numeroacertos = 0;
			
			if(in_array($dezena1, $dezenas)){
				$numeroacertos++;
			}

			if(in_array($dezena2, $dezenas)){
				$numeroacertos++;
			}

			if(in_array($dezena3, $dezenas)){
				$numeroacertos++;
			}
			
			if(in_array($dezena4, $dezenas)){
				$numeroacertos++;
			}
			
			if(in_array($dezena5, $dezenas)){
				$numeroacertos++;
			}
			
			if(in_array($dezena6, $dezenas)){
				$numeroacertos++;
			}
			
			$resultado = '';

			if($numeroacertos == 6){
				$resultado = '<b>Novo Milhon&#xE1;rio!!! Fez a SENA!</b> - ';
			}

			if($numeroacertos == 5){
				$resultado = '<b>Fez a QUINA!</b> - ';
			}

			if($numeroacertos == 4){
				$resultado = '<b>Fez a QUADRA!</b> - ';
			}
			
			echo "<li>$resultado $dezena</li>";
		}else{
			echo "<li>$dezenasjogo <b>Jogo inv&#xE1;lido!</b></li>";
		}
	}
	
	echo '<ul>';
	conferir('02-08-11-20-36-37-42-45-52-58', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);

	conferir('04-08-11-23-37-52-53-54-56', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);	
	conferir('09-11-12-32-42-46-47-56-57', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);	
	
	conferir('05-07-15-25-33-38-55-59', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);		
	conferir('10-24-27-29-31-36-41-55', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);		
	conferir('02-16-24-28-29-37-46-50', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);		
	conferir('01-07-11-24-27-40-43-58', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);		
	conferir('13-18-23-34-43-47-52-59', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	
	conferir('09-14-36-40-45-52-59', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	conferir('15-18-32-41-43-52-57', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	conferir('05-16-17-40-51-57-60', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	conferir('08-22-23-29-34-35-53', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	conferir('01-13-16-38-39-45-50', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	conferir('10-16-18-34-41-43-56', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	conferir('19-38-44-46-47-53-56', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	conferir('01-04-11-48-50-52-58', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	conferir('10-25-31-37-45-51-54', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	conferir('02-08-23-26-40-50-55', $dez1, $dez2, $dez3, $dez4, $dez5, $dez6);			
	echo '</ul>';
?>		
			Criado por: <b>Flavio Ribeiro</b>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>