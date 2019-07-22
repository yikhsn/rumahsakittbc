@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection


@section('top_add_assets')
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ URL::asset('assets/global/css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('assets/full_baru/css/fullcalendar.css') }}">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Open+Sans+Condensed:300&display=swap" rel="stylesheet">


    <!-- Custom CSS -->
    <!-- <style>
      @import url('https://fonts.googleapis.com/css?family=Nanum+Gothic|Open+Sans+Condensed:300&display=swap');
        </style> -->
      <style>
      body {
      padding-top: 0px;
      /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
      }
        #calendar {
          max-width: 100%;
        }
        .col-centered{
          float: none;
          margin: 0 auto;
			}
		</style>


@endsection

@section('content')

    <br>

		<!-- Page Content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-header" style="background-color: white;">
							<center>
							<h4 style="font-family: nanum gothic;">Penjadwalan Pasien</h4>
							</center>
							
						</div>
						<div class="card-body">
							<center>
							<i class="fa fa-user" style="font-size: 100px;"></i>
							<h6>{{ $pasien->nama }}</h6>
							</center>
							<table>
								<tbody>
									
									<!-- Tipe Pasien -->
									<tr>
										<td style="width: 40%; font-size:15px">Tipe Pasien</td>
										<!-- <td style="font-size:15px">: {{ $pasien->type->type  }} </td> -->
										<td style="font-size:15px">: {{ $pasien->type->type  }} </td>
									</tr>
									<!-- Kategori Evaluasi Pasien -->

									<!-- Evaluasi Pasien -->
									<tr>
										<td style="width: 40%; font-size:15px">Evaluasi Pasien</td>
										<td style="font-size:15px">: {{ $pasien->evaluasi->nama  }} </td>
									</tr>
									<!-- Tanggal Pendaftaran -->
									<tr>
										<td style="width: 40%; font-size:15px">Pendaftaran</td>
										<td style="font-size:15px">: {{ date('d-m-Y', strtotime($pasien->created_at))  }} </td>
									</tr>
									<!-- Jumlah Sputum -->
									<tr>
										<td style="width: 40%; font-size:15px ">Jumlah Sputum</td>
										<td style="font-size:15px">: {{ $pasien->jumlah_sputum  }} </td>
									</tr>

                  <tr>
										<td style="width: 40%; font-size:15px "> Sisa Pengobatan</td>
										<td style="font-size:15px">: {{ $pasien->type->type  }} </td>
									</tr>
								</tbody>
							</table>
									
						</div>
					</div>
				</div>
				<div class="col-lg-8 ">
					<div id="calendar" class="col-centered">
					</div>
				</div>
				
			</div>
			<!-- /.row -->
			
			<!-- Modal -->
			<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
            <form class="modal-content form-horizontal" action="/pasien/{{$id}}/jadwal_store" method="post" role="form">
            {{ csrf_field() }}
							
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Tambah Agenda</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								
								<div class="form-group">
									<label for="title" class="col-sm-2 control-label">Agenda</label>
									<div class="col-sm-10">
                    <select name="nama_jadwal" id="nama_jadwal" class="form-control">
											<option value="Pengambilan Obat">Pengambilan Obat</option>
											<option value="Konsultasi Dokter">Konsultasi Dokter</option>
										</select>
										
									</div>
								</div>
								<div class="form-group">
									<label for="color" class="col-sm-2 control-label">Color</label>
									<div class="col-sm-10">
										<select name="color" class="form-control" id="color">
											<option value="">Choose</option>
											<option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
											<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
											<option style="color:#008000;" value="#008000">&#9724; Green</option>
											<option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
											<option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
											<option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
											<option style="color:#000;" value="#000">&#9724; Black</option>
											
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="start" class="col-sm-3 control-label">Dari Tanggal</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="start" id="start" readonly>
									</div>
								</div>
								<div class="form-group">
									<label for="end" class="col-sm-4 control-label">Sampai Tanggal</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="end" id="end" readonly>
									</div>
								</div>
								
							</div>

              <input type="hidden" value="{{ $id }}"
                    name="pasien_id" id="pasien_id" required>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
			
			<!-- Modal -->
			<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<form class="form-horizontal" method="POST" action="editEventTitle.php">
							<div class="modal-header">
								
								<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								
								<div class="form-group">
									<label for="title" class="col-sm-2 control-label">Title</label>
									<div class="col-sm-10">
										<input type="text" name="title" class="form-control" id="title" placeholder="Title">
									</div>
								</div>
								<div class="form-group">
									<label for="color" class="col-sm-2 control-label">Color</label>
									<div class="col-sm-10">
										<select name="color" class="form-control" id="color">
											<option value="">Choose</option>
											<option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
											<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
											<option style="color:#008000;" value="#008000">&#9724; Green</option>
											<option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
											<option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
											<option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
											<option style="color:#000;" value="#000">&#9724; Black</option>
											
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<div class="checkbox">
											<label class="text-danger"><input type="checkbox"  name="delete"> Hapus Agenda</label>
										</div>
									</div>
								</div>
								
								<input type="hidden" name="id" class="form-control" id="id">
								
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- /.container -->
		<!-- jQuery Version 1.11.1 -->
		<!-- <script src="js/jquery.js"></script> -->
    <script src="{{ URL::asset('assets/full_baru/js/jquery.js') }}"></script>

		<!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('assets/full_baru/js/bootstrap.min.js') }}"></script>
		<!-- <script src="js/bootstrap.min.js"></script> -->
		
		<!-- FullCalendar -->
		<!-- <script src='js/moment.min.js'></script> -->
    <script src="{{ URL::asset('assets/full_baru/js/moment.min.js') }}"></script>

		<!-- <script src='js/fullcalendar.min.js'></script> -->
    <script src="{{ URL::asset('assets/full_baru/js/fullcalendar.min.js') }}"></script>

		<?php $tanggal_sekarang = date("Y-m-d"); ?>
	
  	<script>

		$(document).ready(function() {
			
			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,basicWeek,basicDay'
				},
		defaultDate: '<?php echo $tanggal_sekarang; ?>',
		editable: false,
		eventLimit: true, // allow "more" link when too many events
		selectable: true,
		selectHelper: true,
		select: function(start, end) {
		
		$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
		$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
		$('#ModalAdd').modal('show');
		},
		eventRender: function(event, element) {
		element.bind('dblclick', function() {
		$('#ModalEdit #id').val(event.id);
		$('#ModalEdit #title').val(event.title);
		$('#ModalEdit #color').val(event.color);
		$('#ModalEdit').modal('show');
		});
		},
		eventDrop: function(event, delta, revertFunc) { // si changement de position
		edit(event);
		},
		eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
		edit(event);
		},
		events: [
			@foreach($jadwal_pasien as $jadwal)
			
			{
				id: "{{ $jadwal->id }}",
				title: "{{ $jadwal->nama_jadwal }}",
				start: "{{ $jadwal->start }}",
				end: "{{ $jadwal->end }}",
				color: "{{ $jadwal->color }}",
			},
			@endforeach
		]
		});
		
		function edit(event){
		start = event.start.format('YYYY-MM-DD HH:mm:ss');
		if(event.end){
		end = event.end.format('YYYY-MM-DD HH:mm:ss');
		}else{
		end = start;
		}
		
		id =  event.id;
		
		Event = [];
		Event[0] = id;
		Event[1] = start;
		Event[2] = end;
		
		$.ajax({
		url: 'editEventDate.php',
		type: "POST",
		data: {Event:Event},
		success: function(rep) {
		if(rep == 'OK'){
		alert('Saved');
		}else{
		alert('Could not be saved. try again.');
		}
		}
		});
		}
		
		});
		</script>
	</body>
@endsection

@section('bottom_add_assets')

		<!-- /.container -->
		<!-- jQuery Version 1.11.1 -->
		<!-- <script src="js/jquery.js"></script> -->
    <script src="{{ URL::asset('assets/full_baru/js/jquery.js') }}"></script>

		<!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('assets/full_baru/js/bootstrap.min.js') }}"></script>
		<!-- <script src="js/bootstrap.min.js"></script> -->
		
		<!-- FullCalendar -->
		<!-- <script src='js/moment.min.js'></script> -->
    <script src="{{ URL::asset('assets/full_baru/js/moment.min.js') }}"></script>

		<!-- <script src='js/fullcalendar.min.js'></script> -->
    <script src="{{ URL::asset('assets/full_baru/js/fullcalendar.min.js') }}"></script>

		<?php $tanggal_sekarang = date("Y-m-d"); ?>
	
  	<script>

		$(document).ready(function() {
			
			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,basicWeek,basicDay'
				},
		defaultDate: '<?php echo $tanggal_sekarang; ?>',
		editable: true,
		eventLimit: true, // allow "more" link when too many events
		selectable: true,
		selectHelper: true,
		select: function(start, end) {
		
		$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
		$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
		$('#ModalAdd').modal('show');
		},
		eventRender: function(event, element) {
		element.bind('dblclick', function() {
		$('#ModalEdit #id').val(event.id);
		$('#ModalEdit #title').val(event.title);
		$('#ModalEdit #color').val(event.color);
		$('#ModalEdit').modal('show');
		});
		},
		eventDrop: function(event, delta, revertFunc) { // si changement de position
		edit(event);
		},
		eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
		edit(event);
		},
		events: [
			{
				title: 'Long Event',
				start: '2019-07-07',
				end: '2019-07-10'
			},
			{
				title: 'Conference',
				start: '2019-07-11',
				end: '2019-07-13'
			},
  		]
		});
		
		function edit(event){
		start = event.start.format('YYYY-MM-DD HH:mm:ss');
		if(event.end){
		end = event.end.format('YYYY-MM-DD HH:mm:ss');
		}else{
		end = start;
		}
		
		id =  event.id;
		
		Event = [];
		Event[0] = id;
		Event[1] = start;
		Event[2] = end;
		
		$.ajax({
		url: 'editEventDate.php',
		type: "POST",
		data: {Event:Event},
		success: function(rep) {
		if(rep == 'OK'){
		alert('Saved');
		}else{
		alert('Could not be saved. try again.');
		}
		}
		});
		}
		
		});
		</script>

@endsection