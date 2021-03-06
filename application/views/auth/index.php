<!-- <h1><?php echo lang('index_heading');?></h1> -->
<!-- <p><?php echo lang('index_subheading');?></p> -->

<div id="infoMessage"><?php echo $message;?></div>


<div class="card">

	<div class="card-body">
		<p>
			<a href="<?= site_url() ?>auth/create_user" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp;Tambah User</a>
			&nbsp;
			<a href="<?= site_url() ?>auth/create_group" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp;Tambah Group</a>
		</p>
		<table id="list" class="table table-bordered table-striped">
			<thead>
				<!-- <table cellpadding=0 cellspacing=10> -->
				<tr>
					<th><?php echo lang('index_fname_th');?></th>
					<th><?php echo lang('index_lname_th');?></th>
					<th><?php echo lang('index_email_th');?></th>
					<th><?php echo lang('index_groups_th');?></th>
					<th><?php echo lang('index_status_th');?></th>
					<th><?php echo lang('index_action_th');?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user):?>
					<tr>
						<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
						<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
						<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
						<td>
							<?php foreach ($user->groups as $group):?>
								<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
							<?php endforeach?>
						</td>
						<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
						<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
					</tr>
				<?php endforeach;?>
				<!-- </table> -->
			</tbody>
		</table>
	</div>

</div>
