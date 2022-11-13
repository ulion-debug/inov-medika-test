<!doctype html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}"> --}}
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/Prime_Logo.png')}}">
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
	@include('layouts.includes._navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
	@yield('content')
		<!-- END MAIN -->
	
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery/min/js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
    $(document).ready(function() {
      $('#datatableid').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Your Data",
        }
    });

} );
    </script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				type:'get',
				url:'{!!URL::to('pasienget')!!}',
				success:function(response){
					var custArray = response;
					var dataCust = {};
					var dataCust2 = {};
					for (var i=0;i<custArray.length;i++){

						dataCust[custArray[i].nama_lengkap]=null;
						dataCust2[custArray[i].nama_lengkap]=custArray[i];
					}
					console.log("dataCus2t");
					console.log(dataCust2);
					$('input#nama_pasien').autocomplete({
						data: dataCust,
						onAutocomplete:function(reqdata){
							console.log(reqdata);
							$('#nik').val(dataCust2[reqdata]['nik']);
							$('#jenis_kelamin').val(dataCust2[reqdata]['jenis_kelamin']);
						}
					});
					//end
				}

			})
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				type:'get',
				url:'{!!URL::to('tindakanget')!!}',
				success:function(response){
					var tArray = response;
					var dataTindakan = {};
					var dataTindakan2 = {};
					for (var i=0;i<tArray.length;i++){

						dataTindakan[tArray[i].nama_tindakan]=null;
						dataTindakan2[tArray[i].nama_tindakan]=tArray[i];
					}
					console.log("dataTindakan2");
					console.log(dataTindakan2);
					$('input#nama_tindakan').autocomplete({
						data: dataTindakan,
						onAutocomplete:function(reqdata){
							console.log(reqdata);
							$('#harga').val(dataTindakan2[reqdata]['harga']);
						}
					});
					//end
				}

			})
		});
	</script>
</body>

</html>
