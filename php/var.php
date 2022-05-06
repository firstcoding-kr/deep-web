<?php
$var = "Hello!";

function myFunc() {
    // global $var;
    echo "함수 내부에서 호출한 지역 변수 var의 값은 {$var}입니다.<br>";
}

myFunc();
echo "함수 밖에서 호출한 변수 var의 값은 {$var}입니다.";

?>