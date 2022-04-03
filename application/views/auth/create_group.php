<div id="infoMessage"><?php echo $message;?></div>

<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title"><?= $_judulForm ?></h3>
    </div>

    <?php echo form_open("auth/create_group", 'class="form-horizontal"');?>

    <div class="card-body">

        <div class="form-group row">
            <?php echo lang('create_group_name_label', 'group_name', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($group_name, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('create_group_desc_label', 'description', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($description, '', 'class="form-control"');?>
            </div>
        </div>

    </div>

    <div class="card-footer">
        <?php echo form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-primary"');?>
        <a href="<?php echo site_url('auth') ?>" class="btn btn-default">Batal</a>
    </div>

    <?php echo form_close();?>

</div>
