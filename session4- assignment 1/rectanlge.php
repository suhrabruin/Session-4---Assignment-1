<?php
require_once 'includes/header.php';
require_once 'app/draw.php';
?>

<h2>Draw Rectangle</h2>
<?php
if(isset($_POST["submit"])){    
    $width=$height = 0;
    $width = (int) $_POST['width'];
    $height = (int) $_POST['height'];
    $fill = (bool) isset($_POST['fill'])?$_POST['fill']:false;
    rectangle($width,$height,$fill);
}else{
?>

<div class="draw">
    <form action="#" method="post">
        <fieldset>
            <legend>Enter Dimension:</legend>
            <div class="div-num">
                <!-- <label for="width"/>Width:</label> -->
                <input class="input-num" type="text" name="width" id="width" placeholder="Enter Width" /><br/>
            </div>
            <div class="div-num">
                <!-- <label for="height"/>Height:</label> -->
                <input class="input-num" type="text" name="height" id="height" placeholder="Enter Height"/><br/>
            </div>
            <div class="div-radio">
                <div>
                    <input type="checkbox" name="fill" id="fill"/>
                    <label for="fill"/>Fill</label><br/>
                </div>
            </div>
            <input type="submit" value="Draw" id="submit" name="submit" />
        </fieldset>
    </form>
</div>



<?php
}
require_once 'includes/footer.php';

