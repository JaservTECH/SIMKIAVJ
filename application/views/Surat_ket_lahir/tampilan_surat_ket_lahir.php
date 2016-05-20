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
	   	$("#no_RM_anak").change(function(e){
	      	e.preventDefault();  
	      	var data = $(this).val(); 

	      	$.ajax({
	        	url: 'surat_ket_lahir/get_RM',
	        	data: {'kolom': '*', 'tabel': 'data_pasien', 'cat': data}, 
	        	type: "GET",
	        	success: function(data){
	        		
	        		data = JSON.parse(data);
	        		console.log(data);
	           		$('#nama').val(data[0]['nama']);
					$('#jenis_kelamin').val(data[0]['jenis_kelamin']);
					$('#tanggal_lahir').val(data[0]['tanggal_lahir']);
					$('#nama_wali').val(data[0]['nama_wali']);
					$('#umur_wali').val(data[0]['umur_wali']);
	           		$('#pekerjaan_wali').val(data[0]['pekerjaan_wali']);
					$('#no_KTP_wali').val(data[0]['no_KTP_wali']);
					$('#alamat').val(data[0]['alamat']);
				}
	      	});
	   	});
	   	$("#no_RM_ibu").change(function(e){
	      	e.preventDefault();  
	      	var data = $(this).val(); 

	      	$.ajax({
	        	url: 'surat_ket_lahir/get_RM',
	        	data: {'kolom': '*', 'tabel': 'data_pasien', 'cat': data}, 
	        	type: "GET",
	        	success: function(data){
	        		
	        		data = JSON.parse(data);
	        		console.log(data);
	           		$('#nama_ibu').val(data[0]['nama']);
					$('#umur_ibu').val(data[0]['umur_wali']);
	           		$('#pekerjaan_ibu').val(data[0]['pekerjaan_wali']);
					$('#no_KTP_ibu').val(data[0]['no_KTP_wali']);
				}
	      	});
	   	});
	}); 
	
</script>

	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				DATA KELAHIRAN ANAK
			</div>
			<div class="panel-body">
				<div class="row">		
					<div class="col-md-6">
					<?php 
				 echo form_open('surat_ket_lahir/tambah_data'); //membuka file tambah_data di c_mhs 
				?>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Tanggal Surat
								</div>
								<div class="col-md-9">
									<input type="date" class="form-control" id="tgl_surat" placeholder="Tanggal Surat"
									<?php echo form_input('tanggal_surat'); ?>								
								</div>
								</div>
						</div>
						<div class="row">
							<div class="panel-heading">
								<h4>IDENTITAS ANAK</h4>
							</div>						
							<div class="form-group">
								<div class="col-md-3">
								Nomor RM
								</div>
								<div class="col-md-9">
									<input class="form-control" id="no_RM_anak" placeholder="Nomor RM"
									<?php echo form_input('no_RM'); ?>	
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Nama Anak
								</div>
								<div class="checkbox">
									<div class="col-md-9">	
										<input class="form-control" id="nama" placeholder="Nama Lengkap Anak"
										<?php echo form_input('nama'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Jenis Kelamin
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<?php echo form_dropdown('jenis_kelamin',$list_jenis_kelamin,'Laki-laki', 'class="form-control" id="jenis_kelamin"')?>
									</div>		
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Hari Kelahiran
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" placeholder="Hari Kelahiran"
										<?php echo form_input('hari_lahir'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Tanggal Lahir
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input type="date" id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir"
										<?php echo form_input('tanggal_lahir'); ?>	
									</div>		
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Waktu Kelahiran
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input type="time" class="form-control" placeholder="00:00"
										<?php echo form_input('waktu_lahir'); ?>	
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Jenis Kelahiran
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="nama" placeholder="Jenis Kelahiran"
										<?php echo form_input('jenis_kelahiran'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Kelahiran Keberapa 
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" placeholder="Kelahiran Keberapa"
										<?php echo form_input('kelahiran_ke'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Berat Lahir
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<div class="input-group ">
											<input class="form-control" placeholder="Berat Lahir"
											<?php echo form_input('berat_lahir'); ?>
											<span class="input-group-addon">kg</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Panjang Badan
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<div class="input-group ">
											<input class="form-control" placeholder="Panjang Badan"
											<?php echo form_input('panjang_badan'); ?>	
											<span class="input-group-addon">cm</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				
					
					<!-- /.col-lg-6 (nested) -->
					<div class="col-md-6">
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Nomor Surat
								</div>
									<div class="col-md-9">
										<input class="form-control" id="no_surat" placeholder="Nomor Surat (otomatis)"
										<?php echo form_input('no_surat'); ?>	
									</div>
							</div>
						</div>
						<div class="row">	
							<div class="panel-heading">
								<h4>IDENTITAS ORANG TUA</h4>
							</div>	
							<div class="form-group">
								<div class="col-md-3">
								Nomor RM Ibu
								</div>
								<div class="col-md-9">
									<input class="form-control" id="no_RM_ibu" placeholder="Nomor RM Ibu"
									<?php echo form_input('no_RM_ibu'); ?>									
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Nama Ibu
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="nama_ibu" placeholder="Nama Lengkap Ibu"
										<?php echo form_input('nama_ibu'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Umur Ibu
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="umur_ibu" placeholder="Umur Ibu"
										<?php echo form_input('umur_ibu'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Pekerjaan Ibu
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu"
										<?php echo form_input('pekerjaan_ibu'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								No. KTP Ibu
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="no_KTP_ibu" placeholder="No. KTP Ibu"
										<?php echo form_input('no_KTP_ibu'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Nama Ayah
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="nama_wali" placeholder="Nama Lengkap Ayah"
										<?php echo form_input('nama_ayah'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Umur Ayah
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="umur_wali" placeholder="Umur Ayah"
										<?php echo form_input('umur_ayah'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Pekerjaan Ayah
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Ayah"
										<?php echo form_input('pekerjaan_ayah'); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								No. KTP Ayah
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="no_KTP_wali" placeholder="No. KTP Ayah"
										<?php echo form_input('no_KTP_ayah'); ?>									
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
										<textarea class="form-control" row="3" id="alamat" placeholder="Alamat Lengkap"<?php echo form_input('alamat'); ?></textarea>									
									</div>
								</div>
							</div>
						</div>
					</div>
						
					<div class="col-md-4">	
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Saksi I
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" placeholder="Nama Saksi I"
										<?php echo form_input('saksi1'); ?>									
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">	
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Saksi II
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" placeholder="Nama Saksi II"
										<?php echo form_input('saksi2'); ?>									
									</div>
								</div>
							</div>
						</div>
					</div>		
					<div class="col-md-4">	
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Penolong Persalinan
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" placeholder="Nama Penolong Persalinan"
										<?php echo form_input('penolong_lahir'); ?>									
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
