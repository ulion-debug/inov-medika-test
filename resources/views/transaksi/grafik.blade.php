@extends('layouts.master')

@section('content')
<title>Laporan Transaksi Bulanan</title>
<div class="main"> 
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Laporan Transaksi Bulanan</h3>
							<div class="center">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div id='grafik-transaksi'>
        </div>
	</div>
</div>
<script src="https://code.highcharts.com/gantt/highcharts-gantt.js"></script>
<script type="text/javascript">
    var total_transaksi = <?php echo json_encode($total_transaksi) ?>;
    var bulan = <?php echo json_encode($bulan) ?>;
    Highcharts.chart('grafik-transaksi',{
        title: {
            text: 'Grafik Total Transaksi Bulanan'
        },
        xAxis: {
            categories: bulan
        },
        yAxis:{
            title: {
                text: 'Transaksi Bulanan'
            }
        },
        plotOption: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Transaksi Bulanan',
            data: total_transaksi
        }]
    });
</script>
@stop