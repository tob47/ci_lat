<form class="form-horizontal" action="" method="post">
<?php echo $message;?>
	<div class="form-group">
		<label class="col-lg-2 control-label">Nama</label>
		<div class="col-lg-3">
			<input type="text" class="form-control" name="nama" required="required">
		</div>
		<?php echo form_error('nama');?>
	</div>
	<div class="form-group">
		<label class="col-lg-2 control-label">Nama Atasan</label>
		<div class="col-lg-3">
		 <select name="id_atasan" class="form-control" required="">
                                                <?php
                                                    foreach ($karyawan2 as $a) {?>
                                                        <option value="<?=$a['id']?>"><?=$a['nama']?></option>
                                                    <?php
                                                    }
                                                ?>
                                            </select>  
		</div>
		<?php echo form_error('id_atasan');?>
	</div>
	<div class="form-group">
		<label class="col-lg-2 control-label">Tanggal Lahir</label>
		<div class="col-lg-3">
			<input type="date" class="form-control" name="tgl_lahir" required="required">
		</div>
		<?php echo form_error('tgl_lahir');?>
	</div>
	<div class="form-group">
		<label class="col-lg-2 control-label"></label>
		<div class="col-lg-3">
			<button> Simpan</button>
			<a href="<?php echo site_url('karyawan');?>">Kembali</a>
		</div>
	</div>
</form>
