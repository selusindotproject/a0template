
<div class="card card-primary">

	<div class="card-header">
		<h3 class="card-title"><?= $_judulForm ?></h3>
	</div>

	<form class="form-horizontal" action="<?php echo $action; ?>" method="post">

	<div class="card-body">

		<div class="form-group row">
			<label for="int" class="col-sm-2 col-form-label">Induk - Grup 1 <?php echo form_error('induk') ?></label>
			<div class="col-sm-10">
				<!-- <input type="text" class="form-control" name="induk" id="induk" placeholder="Induk" value="<?php //echo $induk; ?>" /> -->
				<select class="form-control select2" style="width: 100%;" name="induk" id="induk">
					<option value="">-</option>
					<?php foreach($dataGrup1 as $row) { ?>
					<option value="<?= $row->id ?>" <?= $row->id == $induk ? 'selected' : '' ?>><?= $row->kode . ' - ' . $row->nama ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		
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
		<a href="<?php echo site_url('t71_grup2') ?>" class="btn btn-default">Batal</a>
	</div>

	</form>

</div>
