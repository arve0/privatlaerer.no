<?php
// posted data 
$name =  strip_tags( $_POST['navn'] );
$email_address =  strip_tags( $_POST['epost'] );
$phone =  strip_tags( $_POST['telefon'] );
$message =  strip_tags( $_POST['beskjed'] );

if (empty($name)) $error = 'Du må fylle inn navn.';
elseif (empty($email_address)) $error = 'Du må fylle inn en epostadresse.';
elseif (!preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/', $email_address))
  $error = 'Epostadressen er ikke gyldig.';
elseif (empty($phone)) $error = 'Du må fylle inn et telefonnummer.';
elseif (empty($message)) $error = 'Du må fylle inn en beskjed.';

// check for a form error  
if (!empty($error)) {
  header("Location: /epost-feil.php?e=$error");
}
else {
  // write the email content 
  $email_content = "Telefon: $phone";
  $email_content .= "\n\n$message";
  $additional_header = "From: $email_address";

  // send the email 
  mail ("epost@privatlaerer.no", "[Kontakt-privatlaerer.no] $name", $email_content, $additional_header);
  header("Location: /epost-ok.php");
}
?>
