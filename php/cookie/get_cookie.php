<?php 
  if (!empty($_COOKIE['testCookie'])) {
    echo "testCookie 쿠키의 값: ".$_COOKIE['testCookie'];
  } else {
    echo "testCookie 쿠키가 설정되지 않았습니다.";
  }
?>