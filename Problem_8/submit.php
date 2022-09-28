<?php

if(isset($_POST['submit'])){
    ?>
    <h2 align="center" style="color:green">Successfully validated</h2>
    <?php
}
else
    header("location:index.php");
?>