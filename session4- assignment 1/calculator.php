<?php
require_once 'includes/header.php';
require_once 'app/basic_math.php';
?>

<h2>Basic Calculator</h2>
<?php
if(isset($_POST['submit'])){    
    $num1=$num2=$result=0;
    $symbol='';
    $num1 = (int)$_POST['number1'];
    $num2 = (int)$_POST['number2'];    
    $operator = $_POST['operator'];
    $result = 0;
    switch($operator){
        case "sum":
            $result = sum($num1,$num2);
            $symbol = '+';
            break;
        case "subtraction":
            $result = subtract($num1,$num2);
            $symbol = '-';
            break;
        case "multiplication":
            $result = multiply($num1,$num2);
            $symbol = '*';
            break;
        case "division":
            $result = divide($num1,$num2);
            $symbol = '/';
            break;
    }
    echo "<p><strong>Result:</strong> ".$num1." ".$symbol." ".$num2." = ".$result."</p>";
}
// }else{
?>

<div class="calculator">
<form action="#" method="post">
    <fieldset>
        <legend>Enter Numbers:</legend>
<div class="div-num">
        <label for="number1"/>First Number:</label>
        <input class="input-num" type="text" name="number1" id="number1" placeholder="Enter first number" /><br/>
</div>
<div class="div-num">
        <label for="number2"/>Second Number:</label>
        <input class="input-num" type="text" name="number2" id="number2" placeholder="Enter second number"/><br/>        
</div>
<div class="div-radio">
    <div>
    <input type="radio" id="sum" name="operator" value="sum" checked/>
    <label for="sum">Sum</label>
    </div><div>
        <input type="radio" id="subtraction" name="operator" value="subtraction"/>
        <label for="subtraction">Subtraction</label>
    </div><div>
        <input type="radio" id="multiplication" name="operator" value="multiplication"/>
        <label for="multiplication">Multiplication</label>
    </div><div>
        <input type="radio" id="division" name="operator" value="division"/>
        <label for="division">Division</label>
    </div>
</div>

        <input type="submit" value="=" id="submit" name="submit" />
      
    </fieldset>
</form>
</div>



<?php
// }
require_once 'includes/footer.php';

