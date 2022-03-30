
<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title"><?= $_judulForm ?></h3>
    </div>

    <form class="form-horizontal" action="<?php echo $action; ?>" method="post">

    <div class="card-body">

        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Nama <?php echo form_error('nama') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat <?php echo form_error('alamat') ?></label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
            </div>
        </div>
        
    </div>

    <input type="hidden" name="id" value="<?php echo $id; ?>" />

    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('t01_sekolah') ?>" class="btn btn-default">Batal</a>
    </div>

    </form>

</div>
