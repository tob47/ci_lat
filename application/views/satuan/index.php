<a href="<?php echo site_url('satuan/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Satuan</a>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Kode Satuan</th>
			<th>Satuan</th>
			<th colspan="2"></th>
		</tr>
	</thead>
	<?php $no=0; foreach($satuan as $satuan): $no++;?>
	<tr>
		<td><?php echo $no;?></td>
		<td><?php echo $satuan->id_satuan;?></td>
		<td><?php echo $satuan->nm_satuan;?></td>
		<td><a href="<?php echo site_url('satuan/edit/'.$satuan->id_satuan);?>"><i class="glyphicon glyphicon-edit"></i></a></td>
		<td><a href="#" class="hapus" kode="<?php echo $satuan->id_satuan;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
	</tr>
	<?php endforeach;?>
</table>

<script>
	$(function(){
		$(".hapus").click(function(){
			var kode=$(this).attr("kode");
			$("#idhapus").val(kode);
			$("#myModal").modal("show");
		});

		$("#konfirmasi").click(function(){
			var kode=$("#idhapus").val();

			$.ajax({
				url:"<?php echo site_url('satuan/hapus');?>",
				type:"POST",
				data:"kode="+kode,
				cache:false,
				success:function(html){
					location.reload();
				}
			})
		})
	});
</script>