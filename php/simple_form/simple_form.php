<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php simple form</title>
</head>
<body>
    <h1>php 실습</h1>
    <form action="simple_form_result.php" method="post">
        <label for="">이름을 입력해주세요:</label>
        <input type="text" name="userName">
        <br>
        <label for="">별명을 입력해주세요:</label>
        <input type="text" name="nickName">
        <br>
        <button type="submit">제출</button>
    </form>
</body>
</html>