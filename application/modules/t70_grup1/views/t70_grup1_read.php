<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">T70_grup1 Read</h2>
        <table class="table">
	    <tr><td>Induk</td><td><?php echo $induk; ?></td></tr>
	    <tr><td>Kode</td><td><?php echo $kode; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('t70_grup1') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>