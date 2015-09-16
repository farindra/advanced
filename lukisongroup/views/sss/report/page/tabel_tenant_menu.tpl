<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Daftar Top Menu Tenant All The Time</h3>

        <div class="panel-options">
            <a href="#" data-toggle="panel">
                <span class="collapse-icon">&ndash;</span>
                <span class="expand-icon">+</span>
            </a>
            <a href="#" data-toggle="remove">
                &times;
            </a>
        </div>
    </div>

    <div class="panel-body">
        <script type="text/javascript">
            jQuery(document).ready(function($)
            {
               // $("#tabel-tenant-menu").dataTable().yadcf([
               //     {column_number : 0},
               //     {column_number : 1, filter_type: 'text'},
               //     {column_number : 2, filter_type: 'text'},
               //     {column_number : 3, filter_type: 'text'},
               // ]);

                $("#tabel-tenant-menu").dataTable({
                    dom: "<'row'<'col-sm-5'l><'col-sm-7'Tf>r>"+
                            "t"+
                            "<'row'<'col-xs-6'i><'col-xs-6'p>>",
                    tableTools: {
                        sSwfPath: "assets/js/datatables/tabletools/copy_csv_xls_pdf.swf"
                    }
                });
            });
        </script>

        <table class="table table-striped table-bordered" id="tabel-tenant-menu">
            <thead>
                <tr class="replace-inputs">
                    <th>Tenant</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Total (QTY)</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $db->tenant_menu_top_all_table(); ?>
            </tbody>
            <tfoot>
                <tr class="replace-inputs">
                    <th>Tenant</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Total (QTY)</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Daftar Top Menu Tenant Last 3 Month</h3>

        <div class="panel-options">
            <a href="#" data-toggle="panel">
                <span class="collapse-icon">&ndash;</span>
                <span class="expand-icon">+</span>
            </a>
            <a href="#" data-toggle="remove">
                &times;
            </a>
        </div>
    </div>

    <div class="panel-body">
        <script type="text/javascript">
            jQuery(document).ready(function($)
            {
                // $("#tabel-tenant-menu").dataTable().yadcf([
                //     {column_number : 0},
                //     {column_number : 1, filter_type: 'text'},
                //     {column_number : 2, filter_type: 'text'},
                //     {column_number : 3, filter_type: 'text'},
                // ]);

                $("#tabel-tenant-menu-month").dataTable({
                    dom: "<'row'<'col-sm-5'l><'col-sm-7'Tf>r>"+
                            "t"+
                            "<'row'<'col-xs-6'i><'col-xs-6'p>>",
                    tableTools: {
                        sSwfPath: "assets/js/datatables/tabletools/copy_csv_xls_pdf.swf"
                    }
                });
            });
        </script>

        <table class="table table-striped table-bordered" id="tabel-tenant-menu-month">
            <thead>
            <tr class="replace-inputs">
                <th>Tenant</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Total (QTY)</th>
            </tr>
            </thead>
            <tbody>
            <?php echo $db->tenant_menu_top_month_table(); ?>
            </tbody>
            <tfoot>
            <tr class="replace-inputs">
                <th>Tenant</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Total (QTY)</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>