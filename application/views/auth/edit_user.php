<div id="infoMessage"><?php echo $message;?></div>

<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title"><?= $_judulForm ?></h3>
    </div>

    <?php echo form_open(uri_string(), 'class="form-horizontal"');?>

    <div class="card-body">

        <div class="form-group row">
            <?php echo lang('edit_user_fname_label', 'first_name', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($first_name, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('edit_user_lname_label', 'last_name', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($last_name, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('edit_user_company_label', 'company', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($company, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('edit_user_phone_label', 'phone', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($phone, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('edit_user_password_label', 'password', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($password, '', 'class="form-control"');?>
            </div>
        </div>

        <div class="form-group row">
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm', 'class="col-sm-2 col-form-label"');?>
            <div class="col-sm-10">
                <?php echo form_input($password_confirm, '', 'class="form-control"');?>
            </div>
        </div>

        <?php if ($this->ion_auth->is_admin()): ?>

            <div class="form-group row">
                <?php echo lang('edit_user_groups_heading', 'Groups', 'class="col-sm-2 col-form-label"');?>
                <div class="col-sm-10">
                    <div class="form-group">
                        <?php foreach ($groups as $group):?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="groups[]" value="<?php echo $group['id'];?>" <?php echo (in_array($group, $currentGroups)) ? 'checked="checked"' : null; ?>>
                                <label class="form-check-label"><?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?></label>
                            </div>
                        <?php endforeach?>
                    </div>
                </div>


            </div>

        <?php endif ?>

        <?php echo form_hidden('id', $user->id);?>
        <?php echo form_hidden($csrf); ?>

    </div>

    <div class="card-footer">
        <?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-primary"');?>
        <a href="<?php echo site_url('auth') ?>" class="btn btn-default">Batal</a>
    </div>

    <?php echo form_close();?>

</div>
