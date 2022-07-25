<?php
// mysql 기본적인 조회 절차

// MySql DB 접속 (서버주소, DB유저id, 비밀번호, DB명)
$conn = mysqli_connect("localhost", "root", "", "test");

// SQL 쿼리 실행
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
	ehco $arr["name"]."<br>"; // 학생이름 출력
}

// 접속 종료
mysqli_close($conn);

?>