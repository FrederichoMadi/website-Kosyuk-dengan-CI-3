<p>
	<a href="<?php echo base_url('admin/wilayah/tambah') ?>" class= "btn btn-success btn-lg" >
		<i class="fa fa-plus"></i>Tambah Baru
	</a>
</p>

<?php 
// notifikasi
if ($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

 ?>

 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>NO</th>
 			<th>GAMBAR</th>
 			<th>NAMA</th>
 			<th>SLUG</th>
 			<th>URUTAN</th>
 			<th>ACTION</th>

 		</tr>
 	</thead>
 	<tbody>
 		<?php $no=1; foreach($wilayah as $wilayah) { ?>
 		<tr>
 			<td><?php echo $no ?></td>
 			<td>
 				<img src="<?php echo base_url('assets/upload/image/thumbs/'.$wilayah->gambar_wilayah) ?>" class="img img-responsive img-thumbnail" width="60" >
 			</td>
 			<td><?php echo $wilayah->nama_wilayah ?></td>
 			<td><?php echo $wilayah->slug_wilayah ?></td>
 			<td><?php echo $wilayah->urutan ?></td>
 			<td>
			 	<a href="<?php echo base_url('admin/wilayah/edit/'.$wilayah->id_wilayah) ?>" class= "btn btn-warning btn-xs">
				<i class="fa fa-edit"></i>Edit</a>

				<a href="<?php echo base_url('admin/wilayah/delete/'.$wilayah->id_wilayah) ?>" class= "btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')">
				<i class="fa fa-trash-o"></i>Hapus</a>
 			</td>
 		</tr>
 		<?php $no++; ?>
 	<?php } ?>
 	</tbody>
 </table>