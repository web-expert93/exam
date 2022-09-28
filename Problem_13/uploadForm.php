<h2 align="center">Image Upload</h2>

<form action="uploadDatabase.php" method="post" enctype="multipart/form-data">
    <table align="center">
        <tr>
            <td><label for="imageTitle">Image Title:</td>
            <td><input type="text" id="imageTitle" name="imageTitle"></td>
        </tr>
        <tr>
            <td>Upload Image:</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="upload" value="Upload" style="width:70%"></td>
        </tr>
    </table>
</form>

<footer align="center"><a href="index.php">Image Gallery</a></footer>