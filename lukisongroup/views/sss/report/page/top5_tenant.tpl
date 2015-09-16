<?php
//$Top5_Tenant=$db->top5_Tenant();
//$Top5_Tenant_Month=$db->top5_tenant_month();
?>
            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">TOP 5 Tenant</h3>
                            <div class="panel-options">
                                <a href="#" data-toggle="panel">
                                    <span class="collapse-icon">&ndash;</span>
                                    <span class="expand-icon">+</span>
                                </a>
                                <a href="#" data-toggle="reload">
                                    <i class="fa-rotate-right"></i>
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

                                     var dataSource = <?php echo $Top5_Tenant; ?>;
                                        $("#bar-7").dxChart({
                                            rotated: true,
                                            pointSelectionMode: "multiple",
                                            dataSource: dataSource,
                                            commonSeriesSettings: {
                                                argumentField: "country",
                                                type: "stackedbar",
                                                selectionStyle: {
                                                    hatching: {
                                                        direction: "left"
                                                    }
                                                }
                                            },

                                            series: [
                                                { valueField: "total", name: "Total Transaksi", color: "#52e667" }
                                            ],
                                            title: {
                                                text: "TOP 5 Tenant All The Time"
                                            },
                                            legend: {
                                                verticalAlignment: "bottom",
                                                horizontalAlignment: "center"
                                            },
                                            tooltip:{
                                                enabled: true
                                            },
                                            pointClick: function(point) {
                                                point.isSelected() ? point.clearSelection() : point.select();

                                        }
                                      });
                                });
                            </script>
                        <div id="bar-7" style="height: 450px; width: 100%;"></div>
                    </div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Top 5 Tenant Of The Month</h3>


                                    </div>

                                    <table class="table table-condensed">
                                        <?php echo $top5_tenant_month; ?>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Top 5 Tenant Of The Year</h3>


                                    </div>

                                    <table class="table table-condensed">
                                        <?php echo $top5_tenant_year; ?>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">New Tenant</h3>


                                    </div>

                                    <table class="table table-condensed">
                                        <?php echo $top5_tenant_new; ?>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>