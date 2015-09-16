<?php

/*require_once ('config/main.php');
$db=new database();
$db->db_connect();
$daily_sales=$db->daily_sales();
$daily_trans=$db->daily_trans();
$daily_member=$db->daily_member();
$daily_trans_hour=$db->daily_trans_hour();
$daily_trans_hour_7=$db->daily_trans_hour_7();
$Trans_Years_All=$db->trans_years_all();
$week_trans_day=$db->week_trans_day()
$someJSON='[{ month: "Januari", 2012: 546, 2013: 332, 2014: 227 },{ month: "Februari", 2012: 705, 2013: 417, 2014: 283 },{ month: "Maret", 2012: 856, 2013: 513, 2014: 361 },{month: "April", 2012: 1294, 2013: 614, 2014: 471 }]';
*/
//var_dump($daily_trans_hour);
//exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>Lukison - Foodtown</title>

    <?php //include ('page/style-top.tpl');?>
	
	
</head>
<body class="page-body">
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
        <?php// include ('page/nav-main.tpl');?>

        <div class="main-content">

            <!-- User Info, Notifications and Menu Bar -->

            <?php //include ('page/nav-top.tpl');?>

			<script type="text/javascript">
				jQuery(document).ready(function($)
				{	
					// Notifications
					setTimeout(function()
					{			
						var opts = {
							"closeButton": true,
							"debug": false,
							"positionClass": "toast-top-right toast-default",
							"toastClass": "black",
							"onclick": null,
							"showDuration": "100",
							"hideDuration": "1000",
							"timeOut": "5000",
							"extendedTimeOut": "1000",
							"showEasing": "swing",
							"hideEasing": "linear",
							"showMethod": "fadeIn",
							"hideMethod": "fadeOut"
						};
						//toastr.info("20-Apr-2015!", "Last Updated", opts);
					}, 3000);

                    $(function() {
                        startRefresh();
                    });

                    //auto reload data
                    function startRefresh() {
                        setTimeout(startRefresh,3000);
                        //$('#dasboard-item1').load(location.href + ' #dasboard-item1').fadeToggle();
                        //$('#dasboard-item1').load(location.href + ' #dasboard-item1').fadeToggle(3000);
                        //setTimeout(startRefresh,1000);
                        //$('#dasboard-item2').load(location.href + ' #dasboard-item2').fadeToggle();
                        //$('#dasboard-item2').load(location.href + ' #dasboard-item2').fadeToggle(3000);setTimeout(startRefresh,1000);
                        //$('#dasboard-item3').load(location.href + ' #dasboard-item3').fadeToggle();
                        //$('#dasboard-item3').load(location.href + ' #dasboard-item3').fadeToggle(3000);setTimeout(startRefresh,1000);
                        //$('#dash-1').load(location.href + ' #dash-1').fadeIn("slow");
                        //$('#val-member-daily').load(location.href + ' #val-member-daily').fadeIn("slow");
                        //$('#val-member').reload;
                    }
					// Charts
					var xenonPalette = ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'];
                    var i = 0;
                    // transaksi harian per 3 hari (/jam)

                    var line_chart_data_source = <?php echo $daily_trans_hour; ?>;

					$("#pageviews-visitors-chart").dxChart({
						dataSource: line_chart_data_source,
						commonSeriesSettings: {

							argumentField: "jam",
							point: { visible: true, size: 7, hoverStyle: {size: 10, border: 0, color: 'inherit'} },
							line: {width: 1, hoverStyle: {width: 1}}
						},
                        title: 'Hourly Transaction',
						series: [
							{ valueField: "1",name: "Today",color: "#0066ff",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "2",name: "Yesterday",color: "#68b828",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "3",name: "2 Day ago",color: "#ffe400",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
							//{ valueField: "grand", name: "Transaksi", color: "#eeeeee" },
						],
						legend: {
							//position: 'outside',
                            verticalAlignment: "bottom",
                            horizontalAlignment: "center"

						},

						commonAxisSettings: {
							label: {
								visible: true

							},
							grid: {
								visible: true,
								color: '#f9f9f9'
							}

						},
                        tooltip:{
                            enabled: true,
                            format: "numbers",

                        },

						valueAxis: {
                            title: 'Total Transaction',
							//max: 500
						},
						argumentAxis: {
                            title: 'Hours',
					        valueMarginsEnabled: true,
                            max:22
					    },

					});

                    // transaksi harian per 7 hari (/jam)

                    var data_hari_jam = <?php echo $daily_trans_hour_7; ?>;

                    $("#server-uptime-chart3").dxChart({
                        dataSource: data_hari_jam,
                        commonSeriesSettings: {
                            argumentField: "jam",
                            point: { visible: true, size: 7, hoverStyle: {size: 10, border: 0, color: 'inherit'} },
                            line: {width: 1, hoverStyle: {width: 1}}
                        },
                        series: [
                            { valueField: "1",name: "Today",color: "#0066ff",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "2",name: "Yesterday",color: "#68b828",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "3",name: "2 Day ago",color: "#fcff00",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "4",name: "3 Day ago",color: "#ff8a00",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "5",name: "4 Day ago",color: "#00eaff",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "6",name: "5 Day ago",color: "#ea00ff",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "7",name: "6 Day ago",color: "#7100c0",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            { valueField: "8",name: "7 Day ago",color: "#a6a6a6",
                                //label:{ visible: true, customizeText: function (){return this.valueText;}},
                            },
                            //{ valueField: "grand", name: "Transaksi", color: "#eeeeee" },
                        ],
                        legend: {
                            //position: 'outside',
                            verticalAlignment: "bottom",
                            horizontalAlignment: "center"

                        },

                        commonAxisSettings: {
                            label: {
                                visible: true

                            },
                            grid: {
                                visible: true,
                                color: '#f9f9f9'
                            }

                        },
                        tooltip:{
                            enabled: true,
                            format: "numbers",

                        },

                        valueAxis: {
                            title: 'Total Transaction',
                            //max: 500
                        },
                        argumentAxis: {
                            title: 'Hours',
                            valueMarginsEnabled: true,
                            max:22
                        },

                    });
					
					
					// Server Uptime Chart
					var bar1_data_source = [
						{ year: 1, 	europe: 0, americas: 0, africa: 0 },
						{ year: 2, 	europe: 0, americas: 0, africa: 0 },
						{ year: 3, 	europe: 0, americas: 0, africa: 0 },
						{ year: 4, 	europe: 0, americas: 0, africa: 0 },
                        { year: 5, 	europe: 0, americas: 0, africa: 0 },
                        { year: 6, 	europe: 0, americas: 0, africa: 0 },
                        { year: 7, 	europe: 0, americas: 0, africa: 0 },
					];

                    var serveruptime = <?php echo $week_trans_day;?>;

					$("#server-uptime-chart").dxChart({
						dataSource: serveruptime,
					 
						series: {
							argumentField: "tgl",
							valueField: "total",
							name: "Sales",
							type: "bar",
							color: '#7c38bc',
                           // label:{
                           //     visible: true,
                           //     customizeText: function (){
                           //         return this.valueText+' Jt';
                           //     }
                           // },
						},
						commonAxisSettings: {
							label: {
								visible: false
							},
							grid: {
								visible: true
							}
						},
						legend: {
							visible: false
						},
						argumentAxis: {
					        valueMarginsEnabled: true
					    },
						valueAxis: {
							max: 100
						},
                        tooltip:{
                            enabled: true,
                            format: "numbers",
                            customizeText: function (){
                                         return this.valueText+' Jt';
                                     }
                        },
						equalBarWidth: {
							width: 17
						}

					});

                    // Server Uptime Chart
                    var bar1_data_source2 = [
                        { year: 1, 	europe: 0, americas: 0, africa: 0 },
                        { year: 2, 	europe: 0, americas: 0, africa: 0 },
                        { year: 3, 	europe: 0, americas: 0, africa: 0 },
                        { year: 4, 	europe: 0, americas: 0, africa: 0 },
                        { year: 5, 	europe: 0, americas: 0, africa: 0 },
                        { year: 6, 	europe: 0, americas: 0, africa: 0 },
                        { year: 7, 	europe: 0, americas: 0, africa: 0 },
                    ];

                    var serveruptime2 = <?php echo $week_trans_day_month;?>;

                    $("#server-uptime-chart2").dxChart({
                        dataSource: serveruptime2,
                        commonSeriesSettings: {
                            argumentField: "name"

                        },
                        series: [
                            //{valueField: "total1",name: "#1 week",type: "bar",color: '#ff6868'},
                            {valueField: "total1",name: "#1 week",type: "bar",color: '#ffdd68'},
                            {valueField: "total2",name: "#2 week",type: "bar",color: '#68ff6f'},
                            {valueField: "total3",name: "#3 week",type: "bar",color: '#7c38bc'},
                            {valueField: "total4",name: "#4 week",type: "bar",color: '#ff6868'},

                        ],

                        commonAxisSettings: {
                            label: {
                                visible: true
                            },
                            grid: {
                                visible: true
                            }
                        },
                        legend: {
                            visible: true,
                            verticalAlignment: "bottom",
                            horizontalAlignment: "center"
                        },
                        argumentAxis: {
                            valueMarginsEnabled: true
                        },
                        valueAxis: {
                            //max: 100

                        },
                        tooltip:{
                            enabled: true,
                            format: "numbers",
                            customizeText: function (){
                                return this.valueText+' Jt';
                            }
                        },
                        equalBarWidth: {
                            width: 17
                        }
                    });


                    // Average Sales Chart
					var doughnut1_data_source = [
                        //15.64
                        //15.38
                        //23.4
                        //18.82
                        //22.78
                        //73.2
                        //86.69

                        {region: "Asia", val: 10},
                        {region: "Euor", val: 15},
                        {region: "USA", val: 20},

					], timer;
					
					$("#sales-avg-chart div").dxPieChart({
						dataSource: doughnut1_data_source,
						tooltip: {
							enabled: false,
						  	format:"millions",
							customizeText: function() { 
								return this.argumentText + "<br/>" + this.valueText;
							}
						},
						size: {
							height: 90
						},
						legend: {
							visible: false
						},  
						series: [{
							type: "doughnut",
							argumentField: "region"
						}],
						palette: ['#5e9b4c', '#6ca959', '#b9f5a6'],
					});
					
					
					
					// Pageview Stats
					$('#pageviews-stats').dxBarGauge({
						startValue: -50,
						endValue: 50,
						baseValue: 0,
						values: [-21.3, 14.8, -30.9, 45.2],
						label: {
							customizeText: function (arg) {
								return arg.valueText + '%';
							}
						},
						//palette: 'ocean',
						palette: ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'],
						margin : {
							top: 0
						}
					});

					// Resize charts
					$(window).on('xenon.resize', function()
					{
						$("#pageviews-visitors-chart").data("dxChart").render();
						$("#server-uptime-chart").data("dxChart").render();
                        $("#server-uptime-chart2").data("dxChart").render();
						//$("#realtime-network-stats").data("dxChart").render();
						
						$('.first-month').data("dxSparkline").render();
						$('.second-month').data("dxSparkline").render();
						$('.third-month').data("dxSparkline").render();
					});
					
				});
				
				function networkRealtimeChartTick(min_max, min_max2)
				{
					var $ = jQuery,
						i = 0;

					var chart_data = $('#realtime-network-stats').dxChart('instance').option('dataSource');

					var count = $('#realtime-network-stats').data('iCount');

					$('#realtime-network-stats').data('iCount', count + 1);

					chart_data.shift();
					chart_data.push({id: count + 1, x1: between(min_max[0],min_max[1]), x2: between(min_max2[0],min_max2[1])});

					$('#realtime-network-stats').dxChart('instance').option('dataSource', chart_data);
				}

				function networkRealtimeGaugeTick()
				{
					var nr_gauge = jQuery('#network-realtime-gauge').dxCircularGauge('instance');
					
					nr_gauge.value( between(50,200) );
				}
				
				function networkRealtimeMBupdate()
				{
					var $el = jQuery("#network-mbs-packets"),
						options = {
							useEasing : true, 
							useGrouping : true, 
							separator : ',', 
							decimal : '.', 
							prefix : '' ,
							suffix : 'mb/s' 
						},
						cntr = new countUp($el[0], parseFloat($el.text().replace('mb/s')), parseFloat(between(10,25) + 1/between(15,30)), 2, 1.5, options);
						
					cntr.start();
				}
				
				function between(randNumMin, randNumMax)
				{
					var randInt = Math.floor((Math.random() * ((randNumMax + 1) - randNumMin)) + randNumMin);
					
					return randInt;
				}
			</script>
			
			<div id="dasboard-item" class="row">
				<div  class="col-sm-3">
					
					<div  class="xe-widget xe-counter" data-count=".num" data-from="0" data-to="<?php echo $daily_sales; ?>" data-suffix="" data-duration="2">
						<div class="xe-icon">
							<i class="linecons-money"></i>
						</div>
						<div id="dasboard-item1" class="xe-label">
							<?php echo '<strong class="num">'.$daily_sales.'</strong>'; ?>
							<span>Daily Sales (IDR)</span>
						</div>
					</div>

                    <div class="xe-widget xe-counter xe-counter-info" data-count=".num" data-from="1000" data-to="<?php echo $daily_trans; ?>" data-duration="4" data-easing="true">
                        <div class="xe-icon">
                            <i class="fa-credit-card"></i>
                        </div>
                        <div id="dasboard-item2" class="xe-label">
                            <strong class="num"><?php echo $daily_trans; ?></strong>
                            <span>Daily Trans</span>
                        </div>
                    </div>

                    <div class="xe-widget xe-counter xe-counter-purple" >
						<div class="xe-icon">
							<i class="linecons-user"></i>
						</div>
						<div id="dasboard-item3" class="xe-label">
							<?php echo '<strong class="num">'.(double)$daily_member_all.' of '.(double)$daily_member_all.'</strong>'; ?>
							<span>Daily Member</span>
						</div>
					</div>

				</div>
				<div class="col-sm-6">
					
					<div class="chart-item-bg">
						<div class="chart-label">
							<!--<div class="h3 text-secondary text-bold" data-count="this" data-from="0.00" data-to="14.85" data-suffix="%" data-duration="1">0.00%</div>
							<span class="text-medium text-muted">More visitors</span>-->
						</div>
						<div id="pageviews-visitors-chart" style="height: 298px;"></div>
					</div>
					
				</div>
				<div class="col-sm-3">
					
					<div class="chart-item-bg">
						<div class="chart-label chart-label-small">
							<!--<div class="h4 text-purple text-bold" data-count="this" data-from="0.00" data-to="95.8" data-suffix="%" data-duration="1.5">0.00%</div>-->
							<span class="text-small text-upper text-muted">Weekly Sales Chart</span>
						</div>
						<div id="server-uptime-chart" style="height: 134px;"></div>
					</div>
					
					<div class="chart-item-bg">
						<div class="chart-label chart-label-small">
							<div class="h4 text-secondary text-bold" data-suffix=" Jt" data-count="this" data-from="0.00" data-to="36" data-decimal="," data-duration="2">0</div>
							<span class="text-small text-upper text-muted">Avg. of </br>Weekly Sales</span>
						</div>
						<div id="sales-avg-chart" style="height: 134px; position: relative;">
							<div style="position: absolute; top: 25px; right: 0; left: 40%; bottom: 0"></div>
						</div>
					</div>
				</div>

                  <div class="col-sm-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">WEEKLY DATA (DAY)</h3>
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


                            <div class="chart-item-bg">
                                <div class="chart-label chart-label-small">
                                    <!--<div class="h4 text-purple text-bold" data-count="this" data-from="0.00" data-to="95.8" data-suffix="%" data-duration="1.5">0.00%</div>
                                    <span class="text-small text-upper text-muted">Weekly Chart</span>-->
                                </div>
                                <div id="server-uptime-chart2" style="height: 200px;"></div>
                            </div>
                        </div>
                    </div>
                  </div>
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">WEEKLY DATA (HOUR)</h3>
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


                            <div class="chart-item-bg">
                                <div class="chart-label chart-label-small">
                                    <!--<div class="h4 text-purple text-bold" data-count="this" data-from="0.00" data-to="95.8" data-suffix="%" data-duration="1.5">0.00%</div>
                                    <span class="text-small text-upper text-muted">Weekly Chart</span>-->
                                </div>
                                <div id="server-uptime-chart3" style="height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			
			
			<!-- Dashboard top of the month -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">TOP 5 Data</h3>
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
                            <div class="col-md-4">
                                <div class="panel panel-flat" >
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Top 5 Member Of The Month</h3>


                                    </div>

                                    <table class="table table-condensed">
                                        <?php echo $top5_member_month; ?>
                                    </table>
                                </div>
                            </div>
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
                                        <h3 class="panel-title">New Member</h3>


                                    </div>

                                    <table class="table table-condensed">
                                        <?php echo $top5_member_new; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gafik Tahunan range bulan dan sales -->

            <?php include('page/transaksi_sales.tpl');?>
            <?php// include('page/transaksi_sales_hour.tpl');?>
			<?php include('page/top5_member.tpl');?>
            <?php include('page/top5_tenant.tpl');?>
   			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">

				<div class="footer-inner">

					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2015
						<strong>Lukison Group</strong>
						theme by <a href="http://foodtown.co.id" target="_blank">Foodtown</a>
					</div>


					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">

						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>

					</div>

				</div>

			</footer>
		</div>
			

      <div class="modal fade" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Basic Modal</h4>
                </div>

                <div class="modal-body">
                    Hello I am a Modal!
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info">Save changes</button>
                </div>
            </div>
        </div>
      </div>

	</div>

	
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>

    <script type="text/javascript">
               /* $(document).ready(function() {
                       $(function() {
                               startRefresh();
                       });
                        function startRefresh() {
                                setTimeout(startRefresh,3000).fadeToggle();
                                $('#dasboard-item1').load(location.href + ' #dasboard-item1').fadeToggle();
                                $('#dasboard-item1').load(location.href + ' #dasboard-item1').fadeIn("slow");
                               // $('#dash-1').fadeIn("10000");//.load(location.href + ' #val-trans-daily').fadeIn("slow");
                                //$('#val-member-daily').load(location.href + ' #val-member-daily').fadeIn("slow");
                                //$('#val-member').reload;
                        }

                    function startRefresh2() {
                        setTimeout(startRefresh,3000).fadeToggle();
                        $('#dasboard-item2').load(location.href + ' #dasboard-item2').fadeToggle();
                        $('#dasboard-item2').load(location.href + ' #dasboard-item2').fadeIn("slow");
                        // $('#dash-1').fadeIn("10000");//.load(location.href + ' #val-trans-daily').fadeIn("slow");
                        //$('#val-member-daily').load(location.href + ' #val-member-daily').fadeIn("slow");
                        //$('#val-member').reload;
                    }

                });*/
    </script>


    <?php //nclude('page/style-bottom.tpl');?>


</body>
</html>