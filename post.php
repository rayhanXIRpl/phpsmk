<form action="" method="post">
    email :
    <input type="email" name="email">
    password :
    <input type="password" name ="password">
    <input type ="submit" name ="kirim" value="login">
</form>

<?php 
IF (isset($_POST['KIRIM'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    echo $email. '<br>'.$password;


}







?>
