<html>
<head>
  <title>Kosmici mnie uprowadzili - zgłoszenie porwania</title>
</head>
<body>
  <h2>Kosmici mnie uprowadzili - zgłoszenie porwania</h2>

<?php

$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$what_they_did = $_POST['whattheydid'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$other = $_POST['other'];

$to = 'anna.d.dabrowska@gmail.com';
$subject = 'Kosmici mnie uprowadzili - zgłoszenie porwania';
$msg = "$name: porwano mnie $when_it_happened i nie było mnie $how_long.\n" .
 "Liczba kosmitów: $how_many\n".
 "Opis kosmitów: $alien_description\n" .
 "Działania kosmitów: $what_they_did\n" .
 "Czy widziano Kła: $fang_spotted\n" .
 "Inne komentarze: $other";
mail($to, $subject, $msg, 'From: ' . $email);


echo 'Dziękujemy za przesłanie formularza.<br />';
echo 'Porwano cię ' . $when_it_happened;
echo 'i nie było cię przez ' . $how_long . '<br />';
echo 'Liczba kosmitów: ' . $how_many . '<br />';
echo 'Opis kosmitów: ' . $alien_description . '<br />';
echo 'Działania kosmitów: ' . $what_they_did . '<br />';
echo 'Czy widzino Kła? ' . $fang_spotted . '<br />';
echo 'Inne komentarze: ' . $other . '<br />';
echo 'Adres e-mail: ' . $email;
?>

</body>
</html>
