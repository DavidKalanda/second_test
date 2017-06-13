<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('welcome/do_upload');?>

<input type="file" name="event_image" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>
