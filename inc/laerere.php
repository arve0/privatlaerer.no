<?php
date_default_timezone_set('Europe/Oslo');
function calcAge($birthday){
  // $birthday : yyyymmdd
  $birthday_array = array(substr($birthday,0,4), substr($birthday,4,4));
  $today = array(date('Y'), date('md'));
  $diff = $today[0] - $birthday_array[0];
  if ($birthday_array[1] > $today[1]) $age = $diff - 1;
  else $age = $diff;
  echo $age;
}
?>
<div id="laerere">
<!-- Artikler -->
<div class="row artikkel">
  <div class="col-xs-12">
    <div class="well clearfix">
      <div class="col-xs-12 col-sm-3 col-md-2">
        <img alt="Arve" class="bilde img-responsive img-rounded" src="img/arve.jpg" />
      </div>
      <div class="col-xs-12 col-sm-9 col-md-10">
        <h2>Arve Seljebu</h2>
        <p class="lead">
          <b>Alder:</b> <?php calcAge('19841101'); ?><br>
          <b>Fag:</b> Fysikk, matematikk, elektronikk, IT.<br>
          <b>Tre stikkord:</b> Ski, sykling, teknologi.
      </p>
      </div>
    </div>
  </div>
</div>
<?php /*
<!-- permisjon
<div class="row artikkel">
  <div class="col-xs-12">
    <div class="well clearfix">
      <div class="col-xs-12 col-sm-3 col-md-2" id="magnus">
        <img alt="Magnus" class="bilde img-responsive img-rounded" src="img/magnus.jpg" />
      </div>
      <div class="col-xs-12 col-sm-9 col-md-10">
        <h2>Magnus Vatne</h2>
        <p class="lead">
          <b>Alder:</b> <?php calcAge('19891116'); ?><br>
          <b>Fag:</b> Matematikk, fysikk.<br>
          <b>Tre stikkord:</b> ...
        </p>
      </div>
    </div>
  </div>
  </div> end permisjon -->
 */ ?>
<div class="row artikkel">
  <div class="col-xs-12">
    <div class="well clearfix">
      <div class="col-xs-12 col-sm-3 col-md-2" id="mathias">
        <img alt="Mathias" class="bilde img-responsive img-rounded" src="img/mathias.jpg" />
      </div>
      <div class="col-xs-12 col-sm-9 col-md-10">
        <h2>Mathias Gjerland</h2>
        <p class="lead">
          <b>Alder:</b> <?php calcAge('19890809'); ?><br>
          <b>Fag:</b> Fysikk, matematikk.<br>
          <b>Tre stikkord:</b> Fotball, frossenpizza, (klassisk) fysikk.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row artikkel">
  <div class="col-xs-12">
    <div class="well clearfix">
      <div class="col-xs-12 col-sm-3 col-md-2" id="vegar">
        <img alt="Vegar" class="bilde img-responsive img-rounded" src="img/vegar.jpg" />
      </div>
      <div class="col-xs-12 col-sm-9 col-md-10">
        <h2>Vegar Andreassen</h2>
        <p class="lead">
          <b>Alder:</b> <?php calcAge('19880920'); ?><br>
          <b>Fag:</b> Matematikk, fysikk.<br>
          <b>Tre stikkord:</b> Nerd, rolig, friluftsliv.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row artikkel">
  <div class="col-xs-12">
    <div class="well clearfix">
      <div class="col-xs-12 col-sm-3 col-md-2" id="rune">
        <img alt="Rune" class="bilde img-responsive img-rounded" src="img/rune.jpg" />
      </div>
      <div class="col-xs-12 col-sm-9 col-md-10">
        <h2>Rune Kleiven Rynning</h2>
        <p class="lead">
          <b>Alder:</b> <?php calcAge('19911011'); ?><br>
          <b>Fag:</b> Matematikk, fysikk.<br>
          <b>Tre stikkord:</b> Fotball, swing, analyse.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row artikkel">
  <div class="col-xs-12">
    <div class="well clearfix">
      <div class="col-xs-12 col-sm-3 col-md-2" id="marie">
        <img alt="Marie" class="bilde img-responsive img-rounded" src="img/marie.jpg" />
      </div>
      <div class="col-xs-12 col-sm-9 col-md-10">
        <h2>Marie Klevjer</h2>
        <p class="lead">
          <b>Alder:</b> <?php calcAge('19921229'); ?><br>
          <b>Fag:</b> Matematikk, fysikk.<br>
          <b>Tre stikkord:</b> Trening, reise, planlegging.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row artikkel">
  <div class="col-xs-12">
    <div class="well clearfix">
      <div class="col-xs-12 col-sm-3 col-md-2" id="lars">
        <img alt="Lars" class="bilde img-responsive img-rounded" src="img/lars.jpg" />
      </div>
      <div class="col-xs-12 col-sm-9 col-md-10">
        <h2>Lars Meringdal</h2>
        <p class="lead">
          <b>Alder:</b> <?php calcAge('19910709'); ?><br>
          <b>Fag:</b> Matematikk, fysikk.<br>
          <b>Tre stikkord:</b> Ski, fotball, kortspill.
        </p>
      </div>
    </div>
  </div>
</div>
</div>
