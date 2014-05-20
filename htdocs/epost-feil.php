<?php
$tittel = "Feil med kontaktskjema";
include '../inc/head.php';
if ( isset($_GET['e']) ){
  $error = $_GET['e'];
  $btn = 'Gå tilbake';
  $url = '/#kontakt';
}
else {
  $error = 'Noe gikk feil. Ta isteden kontakt med oss på telefon 41203185.';
  $btn = 'Lukk';
  $url = '/';
}
?>
<div class="modal fade in show">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><a href="/" aria-hidden="true" class="btn close">&times;</a>
        <h4>Feil</h4>
      </div>
      <div class="modal-body">
        <p class="lead"><?php echo $error; ?></p>
      </div>
      <div class="modal-footer"><a href="<?php echo $url; ?>" class="btn btn-default"><?php echo $btn; ?></a></div>
    </div>
  </div>
</div>
<?php include '../inc/end.php'; ?>
