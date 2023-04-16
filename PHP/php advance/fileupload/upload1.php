<!DOCTYPE html>
<html>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
Some rules to follow for the HTML form above:

Make sure that the form uses method="post"
The form also needs the following attribute: enctype="multipart/form-data". It specifies which content-type to use when submitting the form
Without the requirements above, the file upload will not work.

Other things to notice:

The type="file" attribute of the <input> tag shows the input field as a file-select control, with a "Browse" button next to the input control
The form above sends data to a file called "upload.php", which we will create next.