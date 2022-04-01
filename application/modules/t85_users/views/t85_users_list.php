
<div class="card">

    <div class="card-body">
        <p><a href="<?= site_url() ?>t85_users/create" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp;Tambah</a></p>
        <table id="list" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
					<th>Ip Address</th>
					<th>Username</th>
					<th>Password</th>
					<th>Email</th>
					<th>Activation Selector</th>
					<th>Activation Code</th>
					<th>Forgotten Password Selector</th>
					<th>Forgotten Password Code</th>
					<th>Forgotten Password Time</th>
					<th>Remember Selector</th>
					<th>Remember Code</th>
					<th>Created On</th>
					<th>Last Login</th>
					<th>Active</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Company</th>
					<th>Phone</th>
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
            "ajax": {"url": "t85_users/json", "type": "POST"},
            "columns": [
                {
                    "data": "id",
                    "orderable": false
                },{"data": "ip_address"},{"data": "username"},{"data": "password"},{"data": "email"},{"data": "activation_selector"},{"data": "activation_code"},{"data": "forgotten_password_selector"},{"data": "forgotten_password_code"},{"data": "forgotten_password_time"},{"data": "remember_selector"},{"data": "remember_code"},{"data": "created_on"},{"data": "last_login"},{"data": "active"},{"data": "first_name"},{"data": "last_name"},{"data": "company"},{"data": "phone"},
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
