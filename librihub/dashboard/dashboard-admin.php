<?php
include "isi-dashboard-admin.php";
?>

<h4><?php echo $ucapan . ", " . $namas ?></h4>
<hr>
<div class="row">

    <div class="col-md-2">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_user; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>USER</b></li>
        </div>
    </div>

    <div class="col-md-2">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_anggota; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>ANGGOTA</b></li>
        </div>
    </div>

    <div class="col-md-2">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_buku; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>BUKU</b></li>
        </div>
    </div>

    <div class="col-md-2">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_peminjaman; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>PEMINJAMAN</b></li>
        </div>
    </div>

    <div class="col-md-2">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_pengembalian; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>PENGEMBALIAN</b></li>
        </div>
    </div>

    <div class="col-md-2">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_perpanjangan; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>PERPANJANGAN</b></li>
        </div>
    </div>

</div>