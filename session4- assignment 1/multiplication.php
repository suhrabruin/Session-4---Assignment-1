<?php
require_once 'includes/header.php';
require_once 'app/multiplication.php';
?>

<h2>Multiplication Table</h2>



<div class="multiplications">
    <?php for($i=2;$i<=10;$i++){ ?>
        <div class="multiplication">
            <?php multiply($i); ?>
        </div>
    <?php } ?>
</div>




<?php
require_once 'includes/footer.php';

