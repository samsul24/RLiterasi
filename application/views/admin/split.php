<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
</head>

<body>
<form action="<?= base_url('Splitter/split') ?>" method="post" enctype="multipart/form-data">
<?php foreach ($buku as $rows) : ?>
<fieldset>
<legend>Test, Keep file size to less then 2mb for now</legend>
<iframe type="file" src="<?php echo base_url('file_buku/' . $rows->pdf_file) ?>" width="100" alt="" name="pdf_file"></iframe></iframe>
<br>
<!-- <input type="file" id="pdf_file" name="pdf_file" value="<?php echo $rows->pdf_file; ?>" /><br><br> -->
<input  type="submit" name="submit" value="Split File" id="submit" />
</fieldset>
<?php endforeach; ?>

</form>
</body>
</html>
