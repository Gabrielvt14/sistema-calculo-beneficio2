<?php
	$diasUteis 	  = $_GET['diasUteis'];
	$result 	  = $_GET['result'];
	$beneficio 	  = $_GET['beneficio'];
	$feriado 	  = $_GET['feriado'];
?>
<!DOCTYPE html>
<html>
<head>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<title>Calculo de beneficio</title>
</head>
<body>
<div class="container" align="center"><br /><br /><br /><br /><br /><br />
<p><span style="background-color: #E6E6FA;">O mês do ano que você selecionou tem <span style="color: red;"><?php echo $diasUteis; ?> dias úteis.</span></span></p>

<p><span style="background-color: #E6E6FA;">A quantidade de dias não trabalhados é de: <span style="color: red;"><?php echo $feriado; ?> dias.</span><br />Dias para cálculo do benefício: <?php echo $diasUteis - $feriado; ?></span></p>

<p><span style="background-color: #E6E6FA;">O valor do benefício por dia que você digitou foi de: <span style="color: red;">R$ <?php echo $beneficio; ?>.</span></span></p>
    
    <p><span style="color: yellow; background-color: #b30000;">O valor total do benefício neste mês é de: <span style="color: white;">R$ <?php echo $result; ?>.</span></span></p>
      <!-- Botão para dar refresh e realizar outro calculo --><br /><br />
    <a href="index.php"><input id="botaoRefresh" type="button" class="btn btn-primary" value="Fazer outro Cálculo""></a> 
</div>
</body>
</html>