<?php
/*
$name = $_POST["name"];
$email = $_POST["email"];
*/

$name = "퍼스트코딩";
$email = "first-coding@naver.com";

echo "이름 : ".$name."<br/>";    // html에 데이터 출력
echo "이메일 : ".$email;

$fp = fopen("list.txt", 'a');    // list.txt 파일을 쓰기 전용으로 열고 반환된 파일 포인터를 $fp에 저장.
                                 // fopen모드 참고: https://www.php.net/manual/en/function.fopen.php

$str = $name."\t".$email."\n";   // 파일에 저장할 문자열을 $str변수에 만든다.
fwrite($fp, $str);               // list.txt 파일에 $str 변수를 저장함.

fclose($fp);                     // list.txt 파일 닫음.

echo "<br>회원 등록 완료";
?>