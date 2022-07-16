<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }
        table th, table td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        } 
    </style>
</head>
<body>
    <h1>회원정보 조회</h1>
    <table>
        <tr>
            <th>이름</th>
            <th>성별</th>
            <th>지역</th>
        </tr>
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'test');
            $result = mysqli_query($conn, "select name, gender, city from member_info limit 10");

            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_array($result);

                $name = $row["name"];
                $gender = $row["gender"];
                $city = $row["city"];
                echo "<tr><td>{$name}</td><td>{$gender}</td><td>{$city}</td></tr>";
            }

            mysqli_close($conn);
        ?>
    </table>
</body>
</html>