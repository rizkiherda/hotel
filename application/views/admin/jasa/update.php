<?php foreach ($jasa as $list): ?>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        <div class="panel panel-warning">
            <div class="panel-heading"><h4>Tambah Jasa Lain-lainnya</h4></div>
            <form action="<?= site_url('admin/jasa/update') ?>" method="post" class="form-horizontal"
                  enctype="multipart/form-data" role="form">
                <div class="panel-body">
                    <!-- alert -->
                    <?php if ($this->session->flashdata('errors') != NULL) { ?>
                        <div class="alert alert-warning" role="alert">
                            <p><?= $this->session->flashdata('errors'); ?></p>
                        </div>
                    <?php } ?>
                    <!-- end of alert -->
                    <fieldset>
                        <input id="servicename" value="<?= $list['id_service'] ?>" name="id_service" hidden/>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="servicename">Nama</label>
                            <div class="col-md-8">
                                <input id="servicename" value="<?= $list['nama'] ?>" name="servicename" type="text"
                                       placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="price">Harga</label>
                            <div class="col-md-3">
                                <input id="price" value="<?= $list['harga'] ?>" name="price" type="text" placeholder=""
                                       class="form-control input-md" required="">
                            </div>
                            <label class="col-md-5" style="margin-top:5pt;">*tanpa titik ataupun koma</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="jenis">Jenis</label>
                            <div class="col-md-8">
                                <label style="margin-right:5pt"><input type="radio" name="jenis"
                                                                       value="0" <?php if ($list['jenis'] == 0) {
                                        echo 'checked="true"';
                                    } ?>>
                                    Jasa Kamar
                                </label>
                                <label style="margin-right:5pt"><input type="radio" name="jenis"
                                                                       value="1" <?php if ($list['jenis'] == 1) {
                                        echo 'checked="true"';
                                    } ?>>
                                    Jasa Lainnya
                                </label>
                            </div>
                        </div>
                    </fieldset>

                </div>
                <div class="panel-footer">
                    <a href="javascript:back()" class="btn btn-warning">Kembali</a>
                    <button id="Submit" name="Submit" class="btn btn-success pull-right">Simpan</button>
                </div>
            </form>
        </div>
    </div>
<?php endforeach; ?>
<script>
    function back() {
        $.ajax({
            type: "POST",
            url: "<?=site_url('admin/jasa/')?>",
            data: "back=" + true,
            success: function (msg) {
                $("#div_result").html(msg);
            }
        });
    }
</script>
