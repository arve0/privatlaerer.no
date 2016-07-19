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
      <div class="col-xs-12 col-sm-3 col-md-2" id="malene">
        <img alt="Malene" class="bilde img-responsive img-rounded" src="img/malene.jpg" />
      </div>
      <div class="col-xs-12 col-sm-9 col-md-10">
        <h2>Malene Nyhus</h2>
        <p class="lead">
          <b>Alder:</b> <?php calcAge('19920503'); ?><br>
          <b>Fag:</b> Matematikk, biologi.<br>
          <b>Tre stikkord:</b> Ski, idrett, kokkelering.
        </p>
      </div>
    </div>
  </div>
</div>
</div>
