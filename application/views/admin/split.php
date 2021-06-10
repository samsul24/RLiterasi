<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title></title>
</head>

<body>

<div id="main-content">
	<form action="<?= base_url('Splitter/split') ?>" method="post" enctype="multipart/form-data">
		<?php foreach ($buku as $rows) : ?>
			<fieldset>
				<legend>Test, Keep file size to less then 2mb for now</legend>
				<iframe type="file" src="<?php echo base_url('file_buku/' . $rows->pdf_file) ?>" width="100" alt="" name="pdf_file"></iframe></iframe>
				<br>
                <input style="height:40px; width:547;" type="hidden" name="id_sekolah" class="form-control form-control-user" id="id_sekolah" value="<?php echo $this->session->userdata('id_sekolah'); ?>" required readonly></input>
                <span class="text-danger"></span>
				<input type="hidden" id="pdf_file" name="pdf_file" value="<?= $rows->pdf_file ?>" /><br><br>
				<input type="submit" name="submit" value="Split File" id="submit" />
			</fieldset>
		<?php endforeach; ?>

	</form>
</body>
<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 © Literasi</p>
        </div>
</div>
</footer>
</div>

<script src="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/super/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url() ?>assets/super/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

<script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>


</body>

</html>
