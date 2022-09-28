<style>
    input, select, textarea{
        width: 100%;
    }
</style>

<h2 align="center">Electronics Product Profile</h2>

<form action="insertProduct.php" method="post" enctype="multipart/form-data">
    <table align="center">
        <tr>
            <td><label for="productName">Product Name:</label></td>
            <td><input type="text" id="productName" name="productName"></td>
        </tr>
        <tr>
            <td><label for="productCategory">Product Category:</label></td>
            <td>
                <select name="productCategory" id="productCategory">
                    <option value="">Choose a category</option>
                    <option value="Computer Hardware & Software">Computer Hardware & Software</option>
                    <option value="Mobile Phone & Accessories">Mobile Phone & Accessories</option>
                    <option value="Camera, Photo & Accessories">Camera, Photo & Accessories</option>
                    <option value="Chargers, Batteries & Power Supplies">Chargers, Batteries & Power Supplies</option>
                    <option value="Earphone & Headphone & Accessories">Earphone & Headphone & Accessories</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="productPrice">Product Price:</label></td>
            <td><input type="number" step="0.01" id="productPrice" name="productPrice"></td>
        </tr>
        <tr>
            <td><label for="productStock">Product Stock: </label></td>
            <td><input type="number" id="productStock" name="productStock"></td>
        </tr>
        <tr>
            <td><label for="productImage">Product Image:</label></td>
            <td><input type="file" id="productImage" name="productImage"></td>
        </tr>
        <tr>
            <td><label for="productDescription">Product Description:</label></td>
            <td><textarea name="productDescription" id="productDescription" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

