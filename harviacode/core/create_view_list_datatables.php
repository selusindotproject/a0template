<?php

$string = "
<div class=\"card\">

    <div class=\"card-body\">
        <table id=\"list\" class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                    <th>No.</th>";

                    foreach ($non_pk as $row) {
                        $string .= "\n\t\t\t\t\t<th>" . label($row['column_name']) . "</th>";
                    }

                    // <th>NIK</th>
                    // <th>Nama</th>
                    // <th>Tgl. Lahir</th>

                    $string .= "
                    <th>Action</th>
                </tr>
            </thead>";

            $column_non_pk = array();
            foreach ($non_pk as $row) {
                $column_non_pk[] .= "{\"data\": \"".$row['column_name']."\"}";
            }
            $col_non_pk = implode(',', $column_non_pk);

            $string .= "
            <tbody>
            </tbody>
        </table>
    </div>

</div>

<script type=\"text/javascript\">
    $(document).ready(function() {

        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
        {
            return {
                \"iStart\": oSettings._iDisplayStart,
                \"iEnd\": oSettings.fnDisplayEnd(),
                \"iLength\": oSettings._iDisplayLength,
                \"iTotal\": oSettings.fnRecordsTotal(),
                \"iFilteredTotal\": oSettings.fnRecordsDisplay(),
                \"iPage\": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                \"iTotalPages\": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        $(\"#list\").DataTable({
            \"responsive\": true, \"lengthChange\": true, \"autoWidth\": false,
            \"processing\": true, \"serverSide\": true,
            \"buttons\": [\"copy\", \"csv\", \"excel\", \"pdf\", \"print\", \"colvis\"],
            \"ajax\": {\"url\": \"".$c_url."/json\", \"type\": \"POST\"},
            \"columns\": [
                {
                    \"data\": \"$pk\",
                    \"orderable\": false
                },".$col_non_pk.",
                {
                    \"data\" : \"action\",
                    \"orderable\": false,
                    \"className\" : \"text-center\"
                }
            ],
            initComplete: function() {
                var api = this.api();
                api.buttons().container()
                .appendTo('#list_wrapper .col-md-6:eq(0)');
            },
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });

    });
</script>
";

$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);

?>
