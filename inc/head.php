<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $tittel; ?>-Privatlærer i Trondheim</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Realfagslærere fra lektorutdanningen på NTNU. Fag: Matematikk, fysikk, kjemi, IT og elektronikk. Pris fra 450kr/time." />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/stil.css" rel="stylesheet" />
  </head>
  <body>
    <div id="background"></div>
    <div class="container">
      <!-- Slagord -->
      <div class="slagord row">
        <div class="col-xs-12 col-sm-4 col-md-3">
          <a href="/"><img alt="Privatlaerer.no" class="img-responsive logo" src="img/logo.png" /></a>
        </div>
        <div class="hidden-xs col-sm-offset-0 col-sm-8 col-md-9">
          <h1>Tid til eleven</h1>
        </div>
      </div>
      <!-- Meny -->
      <div class="ytre-meny">
        <div class="row meny">
          <div class="col-xs-12">
            <div class="navbar navbar-default">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" href="#collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div id="collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav"> 
                  <li><a href="/">Hjem</a></li>
                  <li><a href="#kontakt">Kontakt</a></li>
                  <li><a href="/#fag">Fag</a></li>
                  <li><a href="/#pris">Pris</a></li>
                  <li><a href="laerere.php#laerere">Lærere</a></li>
                  <li><a href="privatist.php#privatist">Privatist</a></li>
                  <li><a href="leksehjelp.php#leksehjelp">Leksehjelp</a></li>
                  <!--<li><a href="tips.php#tips">Tips</a></li>-->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
