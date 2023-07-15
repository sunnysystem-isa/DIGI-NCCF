@extends('layouts.main')

<!--begin::Header-->
@include('layouts.header')
<!--end::Header-->     

@section('title', 'Main Page')

<style>
	.logo-container {
            background-color: #4986df;
            border-radius: 30px;
            margin-top: 20px;
        }

        .header {
            height: 150px;
        }

        body {
            background: linear-gradient(to right,
                    #004AAD 0%,
                    #004AAD 70%,
                    #EFF2F5 70%,
                    #EFF2F5 100%);
        }
</style>

@section('container')

		<!--begin::Body Main Page -->
		<div class="container-fluid d-flex flex-column flex-lg-row flex-column-fluid ps-0">
			<!--begin::Body Left-->
			<div class="d-flex flex-column w-lg-50 py-10 ps-10 order-2 order-lg-1">
				<!--begin::Content-->
				<div class="w-80">
					<!--begin::card logo-->
					<div class="order-2 order-lg-2">
						<!--begin::Card-->
						<div class="card mb-3 max-w-25rem" style="border-radius: 0px 50px 50px 0px !important">
							<div class="card-body p-4">
								<h2 class="card-title ps-5">Submission</h2>
								<!--begin:Row-->
								<div class="row">
									<!--begin:Col-->
									<div class="col-lg-4 border-left-lg-1">
										<div class="menu-item">
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Upload e-CRA</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Upload e-IRA</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Company</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">AU Dasboard</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">AU Activation</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Update SO Status</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Port Into CRM</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">DEP registration</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">DEP Order Tracking</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">CMS Download</span>
											</a>
											<!--end:Link-->
										</div>
									</div>
									<!--end:Col-->
								</div>
								<!--end:Row-->
							</div>
						</div>
						<!--end::Card-->
						<!--begin::Card-->
						<div class="card mb-3 max-w-25rem" style="border-radius: 0px 50px 50px 0px !important">
							<div class="card-body p-4">
								<h2 class="card-title ps-5">Management</h2>
								<!--begin:Row-->
								<div class="row">
									<!--begin:Col-->
									<div class="col-lg-4 border-left-lg-1">
										<div class="menu-item">
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Company</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">User Account</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Change Password</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">3PL Service</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">UERP Package Code</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Credit Limit matrix</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">AU TAT</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">AU SL</span>
											</a>
											<!--end:Link-->
										</div>
									</div>
									<!--end:Col-->
									<!--begin:Col-->
									<div class="col-lg-4 border-left-lg-1">
										<div class="menu-item">
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Company</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Handset</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Salesperson</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Dealer</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Offering</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Offering Relationship</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Credit Card Token</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Internal Blacklist</span>
											</a>
											<!--end:Link-->
										</div>
									</div>
									<!--end:Col-->
								</div>
								<!--end:Row-->
							</div>
						</div>
						<!--end::Card-->
						<!--end::Card-->
						<!--begin::Card-->
						<div class="card mb-3 max-w-25rem" style="border-radius: 0px 50px 50px 0px !important">
							<div class="card-body p-4">
								<h2 class="card-title ps-5">Export Reports</h2>
								<!--begin:Row-->
								<div class="row">
									<!--begin:Col-->
									<div class="col-lg-4 border-left-lg-1">
										<div class="menu-item">
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Management Report (New)</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Line Management Report (New)</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">No Stock</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Management Report (2008)</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Management Report (2009)</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Sales Person (New)</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Sales Person (Old)</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">D'Polaris Upload</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Concept Paper Report</span>
											</a>
											<!--end:Link-->
										</div>
									</div>
									<!--end:Col-->
									<!--begin:Col-->
									<div class="col-lg-4 border-left-lg-1">
										<div class="menu-item">
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">ACDC Order Tracking</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Penalty Report</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Credit Limit Matrix</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Credit Limit Report</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">UERP Order Tracking</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">AU Reject Report</span>
											</a>
											<!--end:Link-->
											<!--begin:Link-->
											<a href="#" class="menu-link p-0">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title fs-4">Daily SLA Report</span>
											</a>
											<!--end:Link-->
										</div>
									</div>
									<!--end:Col-->
								</div>
								<!--end:Row-->
							</div>
						</div>
						<!--end::Card-->
					</div>
					<!--end::card logo-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body Left-->

			<!--begin::Body Right-->
			<div class="container-xl d-flex w-lg-50 order-2 order-lg-2">
				<!--begin::Content-->
				<div class="d-flex flex-column align-items-start p-10">
					<!--begin::card logo-->
					<div class="order-1 order-lg-2">
						<div class="logo-container py-6 px-6 ps-6 me-6 mb-5"
							style="background-color: #021773;">
							<div class="row">
								<span class="text-container" style="padding-left: 15px; padding-top: 15px; font-size: 3rem; color: #F7c548;">NCCF
									2.0</span>
								<span class="text-container" style="padding-left: 15px; font-size: 1rem; color: white;">Delivering  the future</span>
							</div>
							<div class="col">
								<img src="assets/media/logos/logo.png" height="300"
									style="padding-left: 9cm; margin-top: -1.9cm">
							</div>
						</div>
						<!--begin::chart-->
						<div class="row">
							<div class="col">
								<!--begin::Card-->
								<div class="card mb-3" style="width: 25rem;">
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::PIE CHART-->
										<div id="pie-chart-1"></div>
										<!-- data table is inserted here -->
										<!--end::PIE CHART-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<div class="col">
								<!--begin::Card-->
								<div class="card mb-3" style="width: 25rem;">
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::PIE CHART-->
										<div id="column-chart-1"></div>
										<!-- data table is inserted here -->
										<!--end::PIE CHART-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
						</div>
						<!--end::chart-->
					</div>
					<!--end::card logo-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body Right-->
		</div>
		<!--end::Body Main Page-->

@endsection


@section('js-script')
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>
	<script src="https://code.highcharts.com/highcharts-3d.js"></script>
	<script src="https://rawgit.com/highcharts/rounded-corners/master/rounded-corners.js"></script>
	<script>
		Highcharts.setOptions({
			chart: {
				style: {
					fontFamily: 'Poppins'
				}
			},
			colors: ["#021773", "#F7C548", "#004AAD", "#F7C548"],
			// colors: ["#239DB5", "#71B383", "#EE8E52", "#EBC44F", "#8D5690", "#E85170",  "#4282A6"],
			// colors: ["#009EF7", "#50CD89", "#F1416C", "#FFC700", "#7239EA", "#43CED7", "#FA8B28"],
		});
	</script>
	
     <!--begin::Highchart Donut 1-->
    <script>
        Highcharts.chart('pie-chart-1', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 5
                }
            },
            title: {
                text: 'Activation Chart',
                style: {
                    fontWeight: 'bold',
                    fontSize: '15px'
                }
            },
            subtitle: {
                // text: '3D donut in Highcharts'
            },
            tooltip: {
                headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
                pointFormat: '<tr><td style="padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>&nbsp;{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                pie: {
                    innerSize: "50%",
                    depth: 5,
                    showInLegend: true,
                    dataLabels: {
                        enabled: false
                    }
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                format : '<b>{point.key}</b><br>',
                itemStyle: {
                    fontSize:'15px',
                },
            },
            credits: {
                enabled: false
            },
            exporting: {
                showTable: false,
                allowHTML: true
            },
            series: [{
                name: 'Summary',
                data: [
                    ['Active', 110],
                    ['Re-Active', 81],
                    ['Offline', 69],
                ]
            }]
        });
    </script>
    <!--end::Highchart Donut 1-->

     <!--begin::Highchart Donut 1-->
    <script>
        Highcharts.chart('column-chart-1', {
            chart: {
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 5
                }
            },
            title: {
                text: 'Productivity Chart',
                style: {
                    fontWeight: 'bold',
                    fontSize: '15px'
                }
            },
            subtitle: {
                // text: '3D donut in Highcharts'
            },
            tooltip: {
                headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
                pointFormat: '<tr><td style="padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>&nbsp;{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                pie: {
                    innerSize: "50%",
                    depth: 5,
                    showInLegend: false,
                    dataLabels: {
                        enabled: false
                    }
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                format : '<b>{point.key}</b><br>',
                itemStyle: {
                    fontSize:'15px',
                },
            },
            credits: {
                enabled: false
            },
            exporting: {
                showTable: false,
                allowHTML: true
            },
            series: [{
                name: 'Productivity',
                data: [
                    ['W Region', 713],
                    ['X Region', 1213],
                    ['Y Region', 561],
                    ['Z Region', 971],
                ]
            }]
        });
    </script>
    <!--end::Highchart Donut 1-->
@endsection

</body>
<!--end::Body-->

</html>
