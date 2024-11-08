<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h4>
				<i class="glyphicon glyphicon-edit"></i>
				Detail Data Peminjaman Buku
			</h4>
		</div> <!-- /.page-header -->
		<?php
		if (isset($_GET['id'])) {
			$id_peminjaman   = $_GET['id'];
			$query = mysqli_query($db, "SELECT peminjaman.*, anggota.username, buku.judul FROM peminjaman JOIN anggota ON anggota.id_anggota = peminjaman.id_anggota JOIN buku ON buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_peminjaman='$id_peminjaman'") or die('Query Error : ' . mysqli_error($db));
			while ($data  = mysqli_fetch_assoc($query)) {
				$id_peminjaman   = $data['id_peminjaman'];
				$id_anggota      = $data['id_anggota'];
				$id_buku    	 = $data['id_buku'];
				$tglpinjam       = $data['tglpinjam'];
				$tglkembali      = $data['tglkembali'];
				$status          = $data['status'];
				$username = $data['username'];
				$judul = $data['judul'];
			}
		}
		?>

		<ul class="list-group">
			<li class="list-group-item active"><b>DETAIL DATA PEMINJAMAN BUKU</b></li>
			<li class="list-group-item">Id_Peminjaman : <b><?php echo $id_peminjaman; ?></b></li>
			<li class="list-group-item">Id - Nama Peminjam : <b><?php echo $id_anggota . " - " . $username; ?></b></li>
			<li class="list-group-item">Id - Judul Buku : <b><?php echo $id_buku . " - " . $judul; ?></b></li>
			<li class="list-group-item">Tgl Pinjam : <b><?php echo $tglpinjam; ?></b></li>
			<li class="list-group-item">Tgl Kembali : <b><?php echo $tglkembali; ?></b></li>
			<li class="list-group-item">Status : <b><?php echo $status; ?></b></li>
		</ul>

		<?php
		$kembali = "";
		if ($_SESSION['level'] == "Admin") {
			$kembali = "peminjaman-tampil";
		}
		?>

		<div class="form-group">
			<a href="?page=<?php echo $kembali ?>" class="btn btn-default btn-reset">Kembali</a>
		</div>
	</div>
	</form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->

<script>
	window.print();
</script>