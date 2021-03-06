<!DOCTYPE html>
<html>
<head>

<!--
  * CREATED BY: Gabriel Vieira Teodoro
  * GitHub: https://github.com/Gabrielvt14
  * O uso/edição deste sistema é livre!
-->

    <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="57x57" href="midia/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="midia/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="midia/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="midia/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="midia/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="midia/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="midia/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="midia/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="midia/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="midia/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="midia/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="midia/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="midia/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="midia/img/favicon/manifest.json">
  <meta name="msapplication-TileImage" content="midia/img/favicon/ms-icon-144x144.png">

  <meta charset="utf-8">

    <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="static/css/style.css">
    <!-- JavaScript -->
  <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/js" href="static/js/acordeon.js">

  <title>Calculo de beneficio</title>

    <!-- Accordion Bootstrap -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    .bs-example{
      margin: 20px;
    }
</style>
</head>
<body>
<br />
<br />
<br />
  <!-- Accordion INICIO -->
 <div class="container">
<div class="bs-example  col-md-4">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Feriados nacionais de 2017</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul type="disc">
                      <li>1º de janeiro: Ano novo</li>    
                      <li>21 de abril: Tiradentes</li>
                      <li>1º de maio: Dia Mundial do Trabalho</li>
                      <li>7 de setembro: Independência do Brasil</li>
                      <li>12 de outubro: Nossa Senhora Aparecida</li>
                      <li>2 de novembro: Finados</li>
                      <li>15 de novembro: Proclamação da República</li>
                      <li>25 de dezembro: Natal</li>
                    </ul>
                    <i><a href="http://www.feriadosmunicipais.com.br/sao-paulo/sao-paulo/" target="_blank"><p>Leia mais</p></a></i>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Feriados municipais do estado de São Paulo em 2017</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                     <ul type="disc">
                      <li>25 de janeiro: Aniversário de São Paulo</li>    
                      <li>14 de abril: Paixão de Cristo</li>
                      <li>15 de junho: Corpus Chisti</li>
                      <li>20 de Novembro: Consciência Negra</li>
                    </ul>
                    <i><a href="http://www.brasil.gov.br/governo/2016/11/confira-feriados-nacionais-e-pontos-facultativos-de-2017" target="_blank"><p>Leia mais</p></a></i>
                </div>
            </div>
        </div>
    </div>
</div>                                                                      
<!-- Accordion FIM -->

<div class="borda">

<!-- Formulario INICIO -->
<div class="mes col-md-7">
  <form method="POST" action="core/Calcula.php">
      <div class="form-group">
        <input type="number" name="mes" class="form-control" min="1" max="12" placeholder="Mês">
      </div>
      <div class="form-group">
        <input type="number" name="ano" class="form-control" min="1900" max="2090" value="2017" placeholder="Ano">
      </div>
      <div class="form-group">
        <label>Feriados ou qualquer dia não trabalho no mês digitado acima</label>
        <input type="number" name="feriado" class="form-control" min="0" max="31" value="0">
      </div>
      <div class="form-group">
        <input type="number" step="any" name="beneficio" class="form-control" placeholder="Valor do beneficio por dia">
      </div>

      <button id="botao" type="submit" class="btn btn-success">Confirma</button>
      <button id="botaoLimpar" type="reset" class="btn btn-warning">Limpar</button>
  </form>
<!-- Formulario FIM -->
</div>
</div>
</div>
</body>
</html>