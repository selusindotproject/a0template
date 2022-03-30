<?php

$string =
"
<div class=\"card card-primary\">

    <div class=\"card-header\">
        <h3 class=\"card-title\"><?= \$_judulForm ?></h3>
    </div>

    <form class=\"form-horizontal\" action=\"<?php echo \$action; ?>\" method=\"post\">

    <div class=\"card-body\">
";

foreach ($non_pk as $row) {
    if ($row["data_type"] == 'text') {
        $string .=
        "
        <div class=\"form-group row\">
            <label for=\"".$row["column_name"]."\" class=\"col-sm-2 col-form-label\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
            <div class=\"col-sm-10\">
                <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea>
            </div>
        </div>
        ";
    } else {
        $string .=
        "
        <div class=\"form-group row\">
            <label for=\"".$row["data_type"]."\" class=\"col-sm-2 col-form-label\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
            </div>
        </div>
        ";
    }
}

$string .=
    "
    </div>

    <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" />

    <div class=\"card-footer\">
        <button type=\"submit\" class=\"btn btn-primary\"><?php echo \$button ?></button>
        <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-default\">Batal</a>
    </div>

    </form>

</div>
";

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);

?>
