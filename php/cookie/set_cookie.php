<?php 
// https://www.php.net/manual/en/function.setcookie.php

    $cookieName = "testCookie";
    $cookieValue = "Hello";
    $expire = time() + 60;

    setcookie($cookieName, $cookieValue, $expire, "/" /*path*/ , "" /*domain*/ , false /*https*/, true /*server only*/);
    echo "쿠키를 설정했습니다. <br>";
    echo "만료시간: ".$expire."<br>";
    echo "<a href=\"get_cookie.php\">확인하러가기</a>";
?>