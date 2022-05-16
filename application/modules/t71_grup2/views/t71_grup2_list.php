
<div class="card">

    <div class="card-body">
        <p><a href="<?= site_url() ?>t71_grup2/create" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp;Tambah</a></p>
        <table id="list" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
					<th>Induk</th>
					<th>Kode</th>
					<th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function() {

        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
        {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        $("#list").DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": false,
            "processing": true, "serverSide": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            "ajax": {"url": "t71_grup2/json", "type": "POST"},
            "columns": [
                {
                    "data": "id",
                    "orderable": false
                },{"data": "induk"},{"data": "kode"},{"data": "nama"},
                {
                    "data" : "action",
                    "orderable": false,
                    "className" : "text-center"
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
