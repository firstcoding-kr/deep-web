<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>환영합니다.</title>
</head>
<body>
    <h1>
        <?php
            
            $userName = $_POST['userName'];
            $nickName = $_POST['nickName'];
            echo "${userName}(별명: ${nickName})님 환영합니다.";

            function fnName() {
                $varName = "myVar";
            }
        ?>
    </h1>
</body>
</html>