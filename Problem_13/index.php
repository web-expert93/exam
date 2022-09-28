<body style="margin:10px 70px 0px 70px">
    <h1 align="center">Image Gallery</h1>

    <?php

    include_once("databaseConnect.php");

    $fetch = "SELECT * FROM image";
    $result = mysqli_query($conn, $fetch);

    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            extract($row);
    ?>
            <div style="float:left; padding:1%">
                <a href="<?php echo $image;?>" target = "_blank"><img src="<?php echo $image; ?>" width="200px" height="200px" alt="<?php echo $imageTitle; ?>" style="float:left"></a> 
                <h5 align="center"><?php echo $imageTitle; ?></h5>
            </div>
    <?php
        }
    }
    ?>

    <footer align="center" style="clear:left"><a href="uploadForm.php">Upload Image</a></footer>
</body>