<?php
if($_POST['message']) {
mail("ca.jimenez093@gmail.com", $_POST['name'],
$_POST['message'], "From: ". $_POST['email']);
echo('Mail sent. Thank you ' . $_POST['name'] . ', I will get back to you shortly.')
} else {
    echo('Mail failed to send.')
}
?>