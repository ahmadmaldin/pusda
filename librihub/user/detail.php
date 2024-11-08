<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-edit"></i>
                Detail Data User
            </h4>
        </div> <!-- /.page-header -->
        <?php
        if (isset($_GET['id'])) {
            $id   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM user WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $id           = $data['id'];
                $username     = $data['username'];
                $password     = $data['password'];
                $level        = $data['level'];
                $nis          = $data['nis'];
            }
        }
        ?>

        <ul class="list-group">
            <li class="list-group-item active"><b>DETAIL DATA</b></li>
            <li class="list-group-item">Id : <b><?php echo $id; ?></b></li>
            <li class="list-group-item">Username : <b><?php echo $username; ?></b></li>
            <li class="list-group-item">Password : <b>
                    <?php
                    if ($_SESSION['level'] == "Admin") {
                        echo '**********';
                    }  ?></b></li>
            <li class="list-group-item">Level : <b><?php echo $level; ?></b></li>
            <li class="list-group-item">Nis : <b><?php echo $nis; ?></b></li>
        </ul>

        <?php
        $kembali = "";
        if ($_SESSION['level'] == "Admin") {
            $kembali = "user-tampil";
        }
        ?>

        <div class="form-group">
            <a href="?page=user-tampil" <?php echo $kembali ?>class="btn btn-default btn-reset">Kembali</a>
        </div>
    </div>
    </form>
</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->