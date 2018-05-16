<? 

$adminemail="admin@gmail.com";  // e-mail admin 
$backurl="company.html";  // sending suin up e--mail
   
// Data form
 
$name=$_POST['name']; 
$secondname=$_POST['secondname']; 
$email=$_POST['email']; 
$password=$_POST['password']; 
  
 
// validity e-mail 
 
if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", strtolower($email))) 
 { 
 
  echo 
"<center>Вернитесь<a 
href='javascript:history.back(1)'><B>back</B></a>. Вы 
указали неверные данные"; 
  } 
 
 else 
 
 { 
$msg="
<p>Name: $name</p> 
<p>SecondName: $secondname</p> 
<p>E-mail: $email</p> 
<p>Password: $password</p> 
"; 
 
 // Sending letter 
 
mail("$adminemail", "message from $name", "$secondname"); 
 
// Displaying the message to the user
 
print "
<!DOCTYPE html>
<html lang='ru'>
<head>
	<meta charset='UTF-8'>
</head>
<body>
<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 5000); 
//--></script> 
<div style='width: 500px; height: 400px; margin: 0 auto;'>
$msg 
 
<p>Сообщение отправлено! 
Подождите, теперь вы будете перенаправлены на главную страницу.</p></div>
</body>
</html>
";  
exit; 
 
 } 
 
?>