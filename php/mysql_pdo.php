<?php
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=test" /* DB서버 및 DB명 */, "root"/* DB 아이디 */, "" /* 비번 */);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // DB접속 오류가 발생할 경우 코드 실행을 중단한다.
    echo "Error: Connection failed";
    exit();
}

// SQL쿼리문을 생성한다.
$stmt = $conn->prepare("SELECT * FROM user"); 

// 조회 조건이 있을 경우 SELECT * FROM user WHERE no = :no
//$stmt->execute(['no'=>123]);

// SQL쿼리를 실행한다.
$stmt->execute();

// 결과를 한 줄씩 가져와(fetch) 출력한다.
while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $r['name'].'<br>'; 
}
?>
