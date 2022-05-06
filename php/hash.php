<?php 

$password = "firstcoding$11";
$password_hash = hash("sha256", $password);

echo "해싱 전 : ".$password."<br/>";
echo "해싱 후 : ".$password_hash."<br/>";
echo "해싱 후 (대문자) : ".strtoupper($password_hash)."<br/>"; 

/*
  실제 비밀번호를 해싱할 때에는 password_hash()/ password_verify()를 사용하는것이 좋다.
  https://www.php.net/manual/en/function.password-hash.php
*/

?>