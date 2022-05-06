<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        $x = $_GET['x'];

        if ($x == 10) {
            echo "x는 10입니다.";
        } else if ($x > 10) {
            echo "x는 10보다 큽니다.";
        } else {
            echo "x는 10보다 작습니다.";
        }
    ?>
</body>
</html>