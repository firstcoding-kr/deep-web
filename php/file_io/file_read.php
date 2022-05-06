<?php
    $fp = fopen("list.txt", 'r');    // list.txt 파일을 읽기 전용으로 열고 반환된 파일 포인터를 $fp에 저장함.

    while(!feof($fp)){               // 파일의 끝까지
        $member = fgets($fp);        // 한 줄씩 $member 변수에 저장하고 
        echo $member."<br>";         // 출력함.
    }

    fclose($fp);                     // 열었던 파일을 닫는다.

    // echo readfile("list.txt");    // readfile 함수는 한번에 파일 전체를 읽는다.
?>