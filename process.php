Thanks, <?php
@extract($_POST);
$sub="Form feedback";
$name = stripslashes($name);
$email = stripslashes($email);
mail('200016@hkis.edu.hk',$sub,"$name $email","From: $name <admin@your-domain.com>");
echo stripslashes($name);
?> , we will drop you a line shortly.