<!-- /.row -->
<div class="row">

	<?php if($this->session->flashdata('info')): ?>
	<div class="col-md-12">
		<div class="alert alert-success" role="alert">
		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  <span class="sr-only">Error:</span>
		  <?php echo $this->session->flashdata('info'); ?>
		</div>
	</div>		
	<?php endif; ?>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">
	
		$(function(){
			$("#no_RM").change(function(e){
				e.preventDefault();  
				var data = $(this).val(); 

				$.ajax({
					url: 'rencana_persalinan/get_RM',
					data: {'kolom': '*', 'tabel': 'data_pasien', 'cat': data}, 
					type: "GET",
					success: function(data){
						
						data = JSON.parse(data);
						console.log(data);
						$('#nama').val(data[0]['nama']);
						$('#gol_darah').val(data[0]['gol_darah']);
						$('#alamat').val(data[0]['alamat']);
						$('#nama_wali').val(data[0]['nama_wali']);
						$('#no_telepon_wali').val(data[0]['no_telepon_wali']);
					}
				});
			});
		}); 
	</script>

	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				RENCANA PERSALINAN
			</div>
			<div class="panel-body">
				<div class="row">
				
					<?php 
					 echo form_open('rencana_persalinan/tambah_data'); //membuka file tambah_data di c_mhs 
					?>
				
					<div class="col-md-6">
						
						
							<div class="row">
								<div class="form-group">
									<div class="col-md-3">
									Tanggal Surat
									</div>
									<div class="col-md-9">
										<input type="date" class="form-control" id="tgl_surat" placeholder="Tanggal Surat"
										<?php echo form_input('tgl_surat'); ?>								
									</div>
								</div>
							</div>	
							<div class="row">	
								<div class="form-group">
									<div class="col-md-3">
									Nomor RM
									</div>
									<div class="checkbox">
										<div class="col-md-9">
											<input class="form-control" id="no_RM" placeholder="Nomor RM"
											<?php echo form_input('no_RM'); ?>	
										</div>	
									</div>
								</div>
							</div>	
							<div class="row">	
								<div class="form-group">
									<div class="col-md-3">
									Nama
									</div>
									<div class="checkbox">
										<div class="col-md-9">
											<input class="form-control" id="nama" placeholder="Nama Lengkap Pasien"
											<?php echo form_input('nama'); ?>									
										</div>	
									</div>
								</div>
							</div>	
							<div class="row">	
								<div class="form-group">
									<div class="col-md-3">
									Gol. Darah
									</div>
									<div class="checkbox">
										<div class="col-md-9">
											<input class="form-control" id="gol_darah" placeholder="(A, B, AB, atau O)"
											<?php echo form_input('gol_darah'); ?>	
										</div>	
									</div>
								</div>	
							</div>	
							<div class="row">	
								<div class="form-group">
									<div class="col-md-3">
									Alamat
									</div>
									<div class="checkbox">
										<div class="col-md-9">
											<textarea class="form-control" row="3" id="alamat" placeholder="Alamat" <?php echo form_input('alamat'); ?></textarea>
										</div>
									</div>
								</div>	
							</div>	
							<div class="row">	
								<div class="form-group">	
									<div class="col-md-3">
									HPL
									</div>
									<div class="checkbox">
										<div class="col-md-9">
											<input class="form-control" type="date" placeholder="HPL"
											<?php echo form_input('HPL'); ?>	
										</div>
									</div>
								</div>
							</div>	
							<div class="row">	
								<div class="form-group">	
									<div class="col-md-3">
									Penolong Persalinan I
									</div>
									<div class="checkbox">
										<div class="col-md-9">
											<input class="form-control" placeholder="Nama Penolong Persalinan I"
											<?php echo form_input('penolong1'); ?>									
										</div>
									</div>
								</div>
							</div>	
							<div class="row">	
								<div class="form-group">	
									<div class="col-md-3">
									Penolong Persalinan II
									</div>
									<div class="checkbox">
										<div class="col-md-9">
											<input class="form-control" placeholder="Nama Penolong Persalinan II"
											<?php echo form_input('penolong2'); ?>									
										</div>
									</div>
								</div>
							</div>
						
						
					</div>
					
					<!-- /.col-lg-6 (nested) -->
					<div class="col-md-6">
						<div class="row">
							<div class="form-group">	
								<div class="col-md-6">
								Sumber Dana Persalinan
								</div>
								<div class="checkbox">
									<div class="col-md-6">
										<select class="form-control"
										<?php echo form_input('sumber_dana'); ?>	
											<option>Pribadi</option>
											<option>JKN</option>
											<option>Lain-lain</option>
										</select>								
									</div>
								</div>
							</div>
						</div>	
						<div class="row">	
							<div class="form-group">	
								<div class="col-md-3">
								Pemilik Kendaraan
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="nama_wali" placeholder="Nama Pemilik Kendaraan"
										<?php echo form_input('pemilik_kendaraan'); ?>									
									</div>
								</div>
							</div>
						</div>	
						<div class="row">		
							<div class="form-group">	
								<div class="col-md-3">
								No. HP
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="no_telepon_wali" placeholder="Nomor HP Pemilik Kendaraan"
										<?php echo form_input('noHP_milik_kendaraan'); ?>									
									</div>
								</div>
							</div>
						</div>	
						<div class="row">		
							<div class="form-group">	
								<div class="col-md-3">
								Rencana KB
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" placeholder="Metode KB Setelah Melahirkan"
										<?php echo form_input('metode_KB'); ?>	
									</div>								
								</div>
							</div>
						</div>	
						<div class="row">		
							<div class="form-group">	
								<div class="col-md-3">
								Pendonor I
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" placeholder="Nama Pendonor I"
										<?php echo form_input('pendonor1'); ?>									
									</div>
								</div>
							</div>
						</div>	
						<div class="row">		
							<div class="form-group">	
								<div class="col-md-3">
								No. HP
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" placeholder="Nomor HP Pendonor I"
										<?php echo form_input('noHP_donor1'); ?>									
									</div>
								</div>
							</div>
						</div>	
						<div class="row">		
							<div class="form-group">	
								<div class="col-md-3">
								Pendonor II
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" placeholder="Nama Pendonor II"
										<?php echo form_input('pendonor2'); ?>									
									</div>
								</div>
							</div>
						</div>	
						<div class="row">		
							<div class="form-group">	
								<div class="col-md-3">
								No. HP
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" placeholder="Nomor HP Pendonor II"
										<?php echo form_input('noHP_donor2'); ?>									
									</div>
								</div>
							</div>	
						</div>
					</div>
					
						<div class="col-md-12">
							<div class="checkbox">
								<center>
									<button class="btn btn-primary" href="<?php echo form_submit('submit', 'Tambah'); ?><i class="fa fa-save fa-fw"></i> Simpan</button>
								</center>
							</div>	
						</div>			
							

					<?php echo form_close(); //menutup form ?> 
							
				</div>
				<!-- /.row (nested) -->
			</div>
			<!-- /.panel-body -->							
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->	
</div>
<!-- /.row -->