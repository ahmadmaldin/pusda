<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-edit"></i>
                Entri Buku
            </h4>
        </div> <!-- /.page-header -->

        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" action="?page=buku-simpan" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="judul" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Penulis</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="penulis" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Penerbit</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="penerbit" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Edisi</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="edisi" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Deskripsi</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="deskripsi" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">ISBN</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="isbn" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subjek</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="subjek" placeholder="Pilih subjek" required>
                                <option value="fiksi">fiksi</option>
                                <option value="non fiksi">non fiksi</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Bahasa</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="bahasa" placeholder="Pilih Bahasa" required>
                                <option value="indonesia">Indonesia</option>
                                <option value="non indonesia">Inggris</option>
                                <option value="non indonesia">Spanyol</option>
                                <option value="non indonesia">Prancis</option>
                                <option value="non indonesia">Jerman</option>
                                <option value="non indonesia">Jepang</option>
                                <option value="non indonesia">Mandarin</option>
                                <option value="non indonesia">Korea</option>
                                <option value="non indonesia">Italia</option>
                                <option value="non indonesia">Rusia</option>
                                <option value="non indonesia">Arab</option>
                                <option value="non indonesia">Belanda</option>
                                <option value="non indonesia">Portugis</option>
                                <option value="non indonesia">Hindi</option>
                                <option value="non indonesia">Thai</option>
                                <option value="non indonesia">Turki</option>
                                <option value="non indonesia">Swedia</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Foto</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control" name="foto" autocomplete="off" required>
                        </div>
                    </div>

                    <hr />
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" name="" value="Simpan" class="btn btn-primary">
                </form>
                <a href="?page=buku-tampil" class="btn btn-default btn-reset">Batal</a>
            </div>
        </div>
        </form>
    </div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->