<!DOCTYPE html>
<?php
/*
    php 정신연령 테스트 페이지 실습
    질문 출처: https://heddui210.tistory.com/174
*/
    ini_set('error_reporting', 'E_WARNING'); // 변수선언 등의 경고 메시지를 제거한다.

    $goto = $_GET['goto'];

    if (empty($goto)) {
        $goto = 1;
    }

    switch ($goto) {
        case 1:
            $question =  "하루 종일 아무것도 하지 않으면 지루해 미칠 것 같다.";
            $yes = '4';
            $no = '2';
            break;
        case 2:
            $question =  "다름 사람과의 경쟁과 승부에서 지면 너무나 분하고 참을수가 없다.";
            $yes = '3';
            $no = '5';
            break;
        case 3:
            $question =  "가까이서 어린아이가 울고 불고 떼를 쓰는 광경을 목격하면 화가 난다.";
            $yes = '6';
            $no = '5';
            break;
        case 4:
            $question =  "편식이 심하고 반찬에 싫어하는 것이 섞여있으면 반드시 떼어내고 먹는다.";
            $yes = '6';
            $no = '3';
            break;
        case 5:
            $question =  "내 험담을 하고 다니거나 내게 상처를 주는 사람은 절대로 용서할 수 없다.";
            $yes = '9';
            $no = '12';
            break;
        case 6:
            $question =  "화가 나거나 마음대로 안될 때에는 애꿋은 곳에 화풀이 한적 있다.";
            $yes = "8";
            $no = "9";
            break;
        case 7:
            $question =  "집에 있을 때에는 대부분 텔레비젼 시청으로 시간을 보낸다.";
            $yes = "14";
            $no = "13";
            break;
        case 8:
            $question =  "갖고 싶은 물건이 있으면 반드시 손에 넣어야한다. 절대 참을 수가 없다.";
            $yes = "15";
            $no = "7";
            break;
        case 9:
            $question =  "심령사진과 초자연적인 사진에 관심이 많고, 무서운 만화와 공포영화를 즐겨보는 편이다.";
            $yes = "7";
            $no = "10";
            break;
        case 10:
            $question =  "우리 부모님을 비롯해 나이드신 분들의 애정행위는 상상조차 할 수 없다.";
            $yes = "13";
            $no = "17";
            break;
        case 11:
            $question =  "다른 사람이 뭐라고하든 상관하지 않으며 화도 잘 내지 않는 편이다.";
            $yes = "20";
            $no = "17";
            break;           
        case 12:
            $question =  "내가 다른 사람에게 해준것보다 다른 사람에게 받는 것이 더 많다고 생각한다.";
            $yes = "11";
            $no = "10";
            break;
        case 13:
            $question =  "이제 만화책과 만화영화는 재미없고 유치하다.";
            $yes = "16";
            $no = "18";
            break;
        case 14:
            $question =  "30분 이상 책상에 앉아 있지 못하고 주위가 산만하다.";
            $yes = "19";
            $no = "18";
            break;
        case 15:
            $question =  "촌스러운 사람이나 특이한 사람이 있으면 괴롭히고 싶어진다.";
            $yes = "19";
            $no = "14";
            break;
        case 16:
            $question =  "훌륭한 선생님이나 성공한 사람을 보면 반발심이 생길 때가 있다.";
            $yes = "C";
            $no = "D";
            break;
        case 17:
            $question =  "나는 아직 모르는 것이 많다고 생각한다.";
            $yes = "20";
            $no = "16";
            break;
        case 18:
            $question =  "어른들의 세계란 참 더럽고 믿을 놈이 하나도 없다고 생각한다.";
            $yes = "C";
            $no = "B";
            break;
        case 19:
            $question =  "누가 내 흉을 보면 반박한다. 그렇지 않으면 내 자신이 바보처럼 느껴진다.";
            $yes = "A";
            $no = "B";
            break;
        case 20:
            $question =  "이렇게 살아가고 있다는 것에 감사하게 느껴진다.";
            $yes = "E";
            $no = "D";
            break;
        case "A":
            header('Location: result.php?goto=A');
            break;
        case "B":
            header('Location: result.php?goto=B');
            break;
        case "C":
            header('Location: result.php?goto=C');
            break;
        case "D":
            header('Location: result.php?goto=D');
            break;
        case "E":
            header('Location: result.php?goto=E');
            break;
        default:
            echo "시작";
    }
?>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>정신연령 테스트 질문</title>
</head>
<body>
    <fieldset>
        <legend><?php echo "정신연령 테스트 질문 ${goto}";?></legend>
        <p><?php echo $question; ?></p>
        <form action="" method="get">
            <input type="radio" name="goto" value="<?php echo $yes;?>" id="yes" required>
            <label for="yes">그렇다</label>
            <input type="radio" name="goto" value="<?php echo $no;?>" id="no" required>
            <label for="no">아니다</label>
            <button type="submit">제출</button>
        </form>
    </fieldset>
</body>
</html>
