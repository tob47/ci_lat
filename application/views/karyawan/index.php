



<a href="<?php echo site_url('karyawan/tambah');?>"></i> Tambah </a>
<table border="1">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Atasan</th>
			<th>Tgl lahir</th>
			<th colspan="2"></th>
		</tr>
	</thead>
	<?php $no=0; foreach($karyawan as $karyawan): $no++;?>
	<tr> 
		<td><?php echo $karyawan->id;?></td>
		<td><?php echo $karyawan->nama;?></td> 
		<td>
		<?php $atasan = $karyawan->id_atasan;
		?>
		
		<?php foreach ($karyawan2 as $a) {?> 
		<?php if (isset($atasan) AND $atasan==$a['id']) 
		echo $a['nama'];?> 
		<?php
		}
		?>
		
		</td> 
		
<?php		
		$tgl      = $karyawan->tgl_lahir;; 
								 
								
								$pecah    = explode("-", $tgl); 
								
								$tahun_masuk    = $pecah[0];
								$bulan_masuk    = $pecah[1];
								$tanggal_masuk  = $pecah[2];
								 
								$tanggal_today = date('d');
								$bulan_today=date('m');
								$tahun_today = date('Y');
								$harimasuk=gregoriantojd($bulan_masuk,$tanggal_masuk,$tahun_masuk); 
								//menghitung jumlah hari sejak tahun 0 masehi
								 
								$hariini=gregoriantojd($bulan_today,$tanggal_today,$tahun_today);
								//menghitung jumlah hari sejak tahun 0 masehi
								
								$umur=$hariini-$harimasuk; 
								//menghitung selisih hari antara tanggal sekarang dengan tanggal masuk
															 
								$m_tahun=$umur*518400 
								 
								
		?>
		<td><?php echo "$m_tahun"; ;?> Menit</td>
		<td><a href="<?php echo site_url('karyawan/edit/'.$karyawan->id);?>">Edit</a> </td>
		<td><a href="#" class="hapus" kode="<?php echo $karyawan->id;?>">Hapus</a> </td>
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
				url:"<?php echo site_url('karyawan/hapus');?>",
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