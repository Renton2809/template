<?php
$num1 = (int) $_POST['num1'];
$op = trim(strip_tags($_POST['operator']));
$num2 = (int) $_POST['num2'];
$result = "Результат $num1 $op $num2 = ";

switch($op){
    case '-':
        $result .= $num1 - $num2;
        break;
    case '+':
        $result .= $num1 + $num2;
        break;
    case '*':
        $result .= $num1 * $num2;
        break;
    case '/':
        if($num2 == 0) {
            $result = 'На ноль делить нельзя!';
        } else {
            $result .= $num1 - $num2;
        }
        break;
}

echo $result;
?>
<div class="row">
    <form action='' method="post">
        <label>Число 1:</label><br />
        <input name='num1' type='text'/><br />
        <label>Оператор: </label><br />
        <input name='operator' type='text'/><br />
        <label>Число 2: </label><br />
        <input name='num2' type='text'/><br /><br />
        <input type='submit' value='Считать'>
    </form>
</div>
<!--// end row -->
