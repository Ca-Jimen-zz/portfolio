<?php
if($_POST['message']) {
mail("ca.jimenez093@gmail.com", $_POST['name'],
$_POST['message'], "From: ". $_POST['email']);
}
?>