




<?PHP
// Processo di recupero dei dati
$nome = $_POST['nome'];
$email = $_POST['email'];
$messaggio = nl2br($_POST['messaggio']);
// Processo di controllo [Opzionale]
if ($nome == null)
{
print "Errore: &egrave; necessario compilare il campo 'Nome'";
}
else
{
if ($email == null)
{
print "Errore: &egrave; necessario compilare il campo 'email'";
}
else
{
if ($messaggio == null)
{
print "Errore: &egrave; necessario compilare il campo 'messaggio'";
}
else
{
// Processo di configurazione dell'email
// [Destinatario, mittente, ecc]
$mail_to = "calz.dm@alice.it";
$mail_from = $email;
$mail_subject = "richiesta informazioni dal sito Calzature Artigiane da parte di $nome";
$mail_body = "<p><font color=#000000>$messaggio</font></p>";
// Intestazioni HTML
$mail_in_html = "MIME-Version: 1.0
";
$mail_in_html .= "Content-type: text/html; charset=iso-8859-1
";
$mail_in_html .= "From: <$mail_from>";
// Processo di invio
if (mail($mail_to, $mail_subject, $mail_body, $mail_in_html))
{
print "Email inviata con successo!";
}
else
{
print "Errore";
}
}
}
}
?>