<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title"><?= $_judulForm ?></h3>
    </div>

    <?php echo form_open("auth/deactivate/".$user->id, 'class="form-horizontal"');?>

    <div class="card-body">

        <div class="form-group row">
            <?php echo sprintf(lang('deactivate_subheading', '&nbsp;', 'class="col-sm-6 col-form-label"'), $user->{$identity}); ?>
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="confirm" value="yes" checked="checked" />
                        <?php echo lang('deactivate_confirm_y_label', 'confirm', 'class="form-check-label"');?>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="confirm" value="no" />
                        <?php echo lang('deactivate_confirm_n_label', 'confirm', 'class="form-check-label"');?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card-footer">
        <?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-primary"');?>
        <a href="<?php echo site_url('auth') ?>" class="btn btn-default">Batal</a>
    </div>

    <?php echo form_hidden($csrf); ?>
    <?php echo form_hidden(['id' => $user->id]); ?>

    <?php echo form_close();?>

</div>
