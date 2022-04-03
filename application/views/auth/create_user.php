<div id="infoMessage"><?php echo $message;?></div>

<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title"><?= $_judulForm ?></h3>
    </div>

    <?php echo form_open("auth/create_user", 'class="form-horizontal"');?>

    <div class="card-body">

        <div class="form-group row">
            <?php echo lang('create_user_fname_label', 'first_name', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($first_name, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('create_user_lname_label', 'last_name', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($last_name, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('create_user_company_label', 'company', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($company, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('create_user_email_label', 'email', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($email, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('create_user_phone_label', 'phone', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($phone, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('create_user_password_label', 'password', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($password, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('create_user_password_confirm_label', 'password_confirm', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($password_confirm, '', 'class="form-control"');?>
            </div>
        </div>

    </div>

    <div class="card-footer">
        <?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary"');?>
        <a href="<?php echo site_url('auth') ?>" class="btn btn-default">Batal</a>
    </div>

    <?php echo form_close();?>

</div>
