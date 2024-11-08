  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i>
          Ubah Data Login
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $id   = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM user WHERE id='$id'") or die('Query Error : ' . mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id        = $data['id'];
          $username  = $data['username'];
          $password  = $data['password'];
          $level     = $data['level'];
          $nis       = $data['nis'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="?page=proses-ubah">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="username" autocomplete="off" value="<?php echo $username; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="password" autocomplete="off" value="<?php echo $password; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Level</label>
              <div class="col-sm-3">
                <select class="form-control" name="level" placeholder="Pilih level" readonly>
                  <option value="<?php echo $level; ?>"><?php echo $level; ?></option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nis</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nis" autocomplete="off" value="<?php echo $nis; ?>" required>
              </div>
            </div>

            <hr />
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->