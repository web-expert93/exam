<?php

include_once("databaseConnect.php");

if(isset($_GET['insert'])){
    ?>
    <h2 style="color:green; text-align:center">Inserted successfully in the database</h2>
    <?php
}

$fetch = "SELECT * FROM product";
$result = mysqli_query($conn, $fetch);

?>
    <h2 align="center">Product List</h2>
    <table border="1" align="center">
        <tr align="center">
            <th>Product Name</th>
            <th>Product Category</th>
            <th>Product Price</th>
            <th>Product Stock</th>
            <th>Product Image</th>
            <th>Product Description</th>
        </tr>
<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        extract($row);
?>
        <tr align="center">
            <td><?php echo $productName; ?></td>
            <td><?php echo $productCategory; ?></td>
            <td><?php echo $productPrice; ?>$</td>
            <td><?php echo $productStock; ?></td>
            <td align="center"><img src="<?php echo $productImage; ?>" alt="Product Image" width=50px height=50px style="border-radius:50%"></td>
            <td><?php echo $productDescription; ?></td>
        </tr>
<?php
    }
?>
    </table>
<?php
}
?>

<footer align="center"><a href="index.php">Go to Product Registration Page</a></foot>