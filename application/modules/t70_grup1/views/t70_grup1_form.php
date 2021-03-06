
<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title"><?= $_judulForm ?></h3>
    </div>

    <form class="form-horizontal" action="<?php echo $action; ?>" method="post">

    <div class="card-body">

        <input type="hidden" class="form-control" name="induk" id="induk" placeholder="Induk" value="<?php echo $induk; ?>" />

        <!-- <div class="form-group row">
            <label for="int" class="col-sm-2 col-form-label">Induk <?php echo form_error('induk') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="induk" id="induk" placeholder="Induk" value="<?php //echo $induk; ?>" />
            </div>
        </div> -->
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Kode <?php echo form_error('kode') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode" value="<?php echo $kode; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Nama <?php echo form_error('nama') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
            </div>
        </div>
        
    </div>

    <input type="hidden" name="id" value="<?php echo $id; ?>" />

    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('t70_grup1') ?>" class="btn btn-default">Batal</a>
    </div>

    </form>

</div>
