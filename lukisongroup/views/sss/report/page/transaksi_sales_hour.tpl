<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>

<div class="row">
    <div class="col-sm-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Data Transaksi Perjam / Hari</h3>
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
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <label class="control-label">Date Compare #1</label>
                    <div class="input-group">
                        <input onchange ="showe()"  type="text" class="form-control datepicker" data-format="dd-M-yyyy" id="date-1" placeholder="Pilih Tanggal">

                        <div class="input-group-addon">
                            <a href="#"><i class="linecons-calendar"></i></a>
                        </div>
                    </div>
                    <td align="center" class="middle-align">
                        <a href="javascript:;" onclick="changeDatea(this);" class="btn btn-info btn-block">Load to 65%</a>
                    </td>
                </div>
                <div class="col-md-3">
                    <label class="control-label">Date Compare #2</label>
                    <div class="input-group">
                        <input onchange="" type="text" class="form-control datepicker" data-format="dd-M-yyyy" id="date-2">

                        <div class="input-group-addon">
                            <a href="#"><i class="linecons-calendar"></i></a>
                        </div>
                    </div>
                    <td align="center" class="middle-align">
                        <a href="javascript:;" onclick="document.getElementById('date-2').value;"  class="btn btn-white" data-toggle="popover" data-trigger="click" data-placement="left" data-content="document.getElementById('#date-2').value;" data-original-title="Twitter Bootstrap Popover" aria-describedby="popover171917">Test</a>
                    </td>
                </div>
                <script type="text/javascript">
                    jQuery(document).ready(function($)
                    {


                        var dataSource = [
                            { jam: "China", y014: 320866959, y1564: 853191410, y65: 87774113 },
                            { jam: "India", y014: 340419115, y1564: 626520945, y65: 47063757 },
                            { jam: "United States", y014: 58554755, y1564: 182172625, y65: 34835293 },
                            { jam: "Indonesia", y014: 68715705, y1564: 146014815, y65: 10053690 },
                            { jam: "Brazil", y014: 50278034, y1564: 113391494, y65: 9190842 },
                            { jam: "Russia", y014: 26465156, y1564: 101123777, y65: 18412243 }
                        ];

                        changeDatea = function(e) {
                            var count = e.options[e.selectedIndex].value;
                            //dataSource.filter(['y014']);
                            //dataSource.load();
                            jQuery('#modal-1').modal('show', {backdrop: 'fade'});
                        };

                        $("#bar-sales-hour").dxChart({
                            dataSource: dataSource,
                            commonSeriesSettings: {
                                type: "area",
                                argumentField: "jam"
                            },
                            series: [
                                { valueField: "y1564", name: "15-64 years", color: "#68b828" },
                                { valueField: "y014", name: "0-14 years", color: "#4fcdfc" },
                                { valueField: "y65", name: "65 years and older", color: "#333" }
                            ],
                            title: "",
                            argumentAxis:{
                                valueMarginsEnabled: false
                            },
                            valueAxis:{
                                label: {
                                    format: "numbers"
                                }
                            },
                            legend: {
                                verticalAlignment: "bottom",
                                horizontalAlignment: "center"
                            }
                        });
                    });
                </script>
                <div id="bar-sales-hour" style="height: 450px;"></div>

                    <!--<div class="col-sm-9">onchange="changeFilter(this)"</div>-->



            </div>
        </div>

    </div>
</div>


</body>

</html>