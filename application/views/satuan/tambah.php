<form class="form-horizontal" action="" method="post">
<?php echo $message;?>
	<div class="form-group">
		<label class="col-lg-2 control-label">ID Satuan</label>
		<div class="col-lg-3">
			<input type="text" class="form-control" name="id" required="required">
		</div>
		<?php echo form_error('id');?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Nama Satuan</label>
		<div class="col-lg-3">
			<input type="text" class="form-control" name="nama" required="required">
		</div>
		<?php echo form_error('nama');?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label"></label>
		<div class="col-lg-3">
			<button class="btn btn-primary"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
			<a href="<?php echo site_url('satuan');?>" class="btn btn-default">Kembali</a>
		</div>
	</div>
</form>
