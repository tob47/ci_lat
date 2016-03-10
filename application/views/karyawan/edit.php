<form class="form-horizontal" action="" method="post">
<?php echo $message;?>
	<div class="form-group">
		<label class="col-lg-2 control-label">Nama</label>
		<div class="col-lg-3">
			<input type="text" value="<?php echo $karyawan['nama'];?>" class="form-control" name="nama" required="required">
		</div>
		<?php echo form_error('id');?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Nama Atasan</label>
		<div class="col-lg-3">
			<input type="text" value="<?php echo $karyawan['id_atasan'];?>" class="form-control" name="nama" required="required">
			 <?php $kat = $id_album ?>
												<?php
                                                    foreach ($album as $a) {?> 
					<option value="<?=$a['id']?>"<?php if (isset($kat) AND $kat==$a['id']) echo " selected";?>><?=$a['nama_album']?></option>
                                                    <?php
                                                    }
                                                ?>
		</div>
		<?php echo form_error('nama');?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Tanggal Lahir</label>
		<div class="col-lg-3">
			<input type="text" value="<?php echo $karyawan['tgl_lahir'];?>" class="form-control" name="tgl_lahir" required="required">
		</div>
		<?php echo form_error('nama');?>
	</div>
	
	<div class="form-group">
		<label class="col-lg-2 control-label"></label>
		<div class="col-lg-3">
			<button></i> Update</button>
			<a href="<?php echo site_url('karyawan');?>">Kembali</a>
		</div>
	</div>
</form>
