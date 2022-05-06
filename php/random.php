<?php
    echo "rand() : ".rand();
    //최소 숫자, 최대 숫자를 인수로 입력하지 않으면, rand 함수는 0부터 getrandmax() 사이의 임의의 난수를 반환.

    echo "<br/>";
    echo "getrandmax() : ".getrandmax();


    echo "<br/>";
    echo "min/max rand(-15, 15) : ".rand(-15, 15);

    echo "<br/>";
    echo "random key : ".bin2hex(random_bytes(30));
?>