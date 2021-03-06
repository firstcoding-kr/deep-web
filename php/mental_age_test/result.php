<!DOCTYPE html>
<?php
    $goto = $_GET['goto'];
    $title = "";
    $description = "";
 
    switch ($goto) {
        case "A":
            $title = "A타입-유아수준인 당신";
            $description = "마치 어린아이처럼 천진난만하고 순진무구한 유형이지만
            때로는 자신의 뜻대로 되지 않으면 잔혹하게 변할 수도 있습니다
            자기세계에서 자기중심적으로 살아가며 자신의 욕구를
            충족시키는 일이 가장 중요하다고 생각하는 경향이 있다.
            물론 모든일이 자기위해 움직이며 자기 뜻대로 될 것이라고 믿으며
            살아가기 때문에 주위사람이 무척 힘들 수도 있습니다. ";
            break;
        case "B":
            $title = "B타입-초등학생 수준인 당신";
            $description = "선악의 구분을 할 수 있으므로 해서는 안되는 일과 해서도 되는 일을 구분할 수 있다.
            물론 때와 장소를 가려서 자신을 제어하는 능력도 갖추고 있지만
            불안감과 공포심이 가득하기 때문에 주변사람들에게 쉽게 의지하고 유혹에 현옥된다. ";
            break;
        case "C":
            $title = "C타입 - 사춘기 수준인 당신";
            $description = "질풍노도의 시기라고 일컬어지는 사춘기 수준이라 고민을 많이 가지고 있기도하다.
            활동적이고 지적 호기심이 왕성한 반면에 모든것을 알고 있다며
            어른 행세를 하려든다 때때로 교만하고 건방지다는 인상을 주기도 한다. 
            잘못하면 자의식으로 생각하는 경향이 있다. ";
            break;
        case "D":
            $title = "D타입 - 사회인 수준인 당신";
            $description = "정신적으로 자립한 상태로 책임을 가지고 자신의 일을 해내는 사회인 수준이나
            사물을 판단하는데 너무나 현실적이고 융통성이 거의 없다.
            물론 선입견과 고정관념에 사로잡혀 진실을 제대로 파악하지 못 할수도 있다.
            또한 물질과 돈을 최우선으로 하는 성향이 있다.";
            break;
        case "E":
            $title = "E타입 - 노인 수준인 당신";
            $description = "인생을 달곤하고 정신적인 안정을 추구하며 온화하고 평온한 상태이다.
            돈 물질적인 것에 집착하지 않고 인생을 즐기고자 하는 사람이지만
            새로운 일에 도전하는 것을 귀찮아하며 세상일에 무관심한 경향이 있다.";
            break;
        default:
            echo "결과 없음";
    }
?>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>정신연령 테스트 결과</title>
</head>
<body>
    <fieldset>
        <legend><?php echo "정신연령 테스트 결과"?></legend>
        <h3><?php echo $title?></h3>
        <p><?php echo $description ?></p>
    </fieldset>
</body>
</html>
