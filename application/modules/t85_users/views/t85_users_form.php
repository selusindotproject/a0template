
<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title"><?= $_judulForm ?></h3>
    </div>

    <form class="form-horizontal" action="<?php echo $action; ?>" method="post">

    <div class="card-body">

        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Ip Address <?php echo form_error('ip_address') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="Ip Address" value="<?php echo $ip_address; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Username <?php echo form_error('username') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Password <?php echo form_error('password') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Email <?php echo form_error('email') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Activation Selector <?php echo form_error('activation_selector') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="activation_selector" id="activation_selector" placeholder="Activation Selector" value="<?php echo $activation_selector; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Activation Code <?php echo form_error('activation_code') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="activation_code" id="activation_code" placeholder="Activation Code" value="<?php echo $activation_code; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Forgotten Password Selector <?php echo form_error('forgotten_password_selector') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="forgotten_password_selector" id="forgotten_password_selector" placeholder="Forgotten Password Selector" value="<?php echo $forgotten_password_selector; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Forgotten Password Code <?php echo form_error('forgotten_password_code') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="forgotten_password_code" id="forgotten_password_code" placeholder="Forgotten Password Code" value="<?php echo $forgotten_password_code; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="int" class="col-sm-2 col-form-label">Forgotten Password Time <?php echo form_error('forgotten_password_time') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="forgotten_password_time" id="forgotten_password_time" placeholder="Forgotten Password Time" value="<?php echo $forgotten_password_time; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Remember Selector <?php echo form_error('remember_selector') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="remember_selector" id="remember_selector" placeholder="Remember Selector" value="<?php echo $remember_selector; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Remember Code <?php echo form_error('remember_code') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="remember_code" id="remember_code" placeholder="Remember Code" value="<?php echo $remember_code; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="int" class="col-sm-2 col-form-label">Created On <?php echo form_error('created_on') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="created_on" id="created_on" placeholder="Created On" value="<?php echo $created_on; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="int" class="col-sm-2 col-form-label">Last Login <?php echo form_error('last_login') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="last_login" id="last_login" placeholder="Last Login" value="<?php echo $last_login; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="tinyint" class="col-sm-2 col-form-label">Active <?php echo form_error('active') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="active" id="active" placeholder="Active" value="<?php echo $active; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">First Name <?php echo form_error('first_name') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="<?php echo $first_name; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Last Name <?php echo form_error('last_name') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Company <?php echo form_error('company') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="company" id="company" placeholder="Company" value="<?php echo $company; ?>" />
            </div>
        </div>
        
        <div class="form-group row">
            <label for="varchar" class="col-sm-2 col-form-label">Phone <?php echo form_error('phone') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone; ?>" />
            </div>
        </div>
        
    </div>

    <input type="hidden" name="id" value="<?php echo $id; ?>" />

    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('t85_users') ?>" class="btn btn-default">Batal</a>
    </div>

    </form>

</div>
