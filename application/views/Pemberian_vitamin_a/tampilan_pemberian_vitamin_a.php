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
					url: 'pemberian_vitamin_a/get_RM',
					data: {'kolom': '*', 'tabel': 'data_pasien', 'cat': data}, 
					type: "GET",
					success: function(data){
						
						data = JSON.parse(data);
						console.log(data);
						$('#nama').val(data[0]['nama']);
						$('#status').val(data[0]['status']);
						$('#jenis_kelamin').val(data[0]['jenis_kelamin']);
						$('#tanggal_lahir').val(data[0]['tanggal_lahir']);
						$('#umur').val(data[0]['umur']);
						$('#agama').val(data[0]['agama']);
						$('#gol_darah').val(data[0]['gol_darah']);
						$('#pendidikan').val(data[0]['pendidikan']);
						$('#pekerjaan').val(data[0]['pekerjaan']);
						$('#no_telepon').val(data[0]['no_telepon']);
						$('#no_KTP').val(data[0]['no_KTP']);
						$('#no_JKN').val(data[0]['no_JKN']);
						$('#no_RM_ibu').val(data[0]['no_RM_ibu']);
						
						$('#nama_wali').val(data[0]['nama_wali']);
						$('#tanggal_lahir_wali').val(data[0]['tanggal_lahir_wali']);
						$('#umur_wali').val(data[0]['umur_wali']);
						$('#gol_darah_wali').val(data[0]['gol_darah_wali']);
						$('#pendidikan_wali').val(data[0]['pendidikan_wali']);
						$('#pekerjaan_wali').val(data[0]['pekerjaan_wali']);
						$('#no_telepon_wali').val(data[0]['no_telepon_wali']);
						$('#no_KTP_wali').val(data[0]['no_KTP_wali']);
						$('#alamat').val(data[0]['alamat']);
						$('#password').val(data[0]['password']);
					}
				});
			});
		}); 
	</script>

	
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				DATA IDENTITAS PASIEN
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">

					<?php 
					 echo form_open('pemberian_vit_a/proses_edit'); //membuka file tambah_data di c_mhs 
					?>

						<h4>IDENTITAS PASIEN</h4>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Nomor RM
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="no_RM" name="no_RM" placeholder="Nomor RM">
																				
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Nama Pasien
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Pasien">
									</div>			
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Status
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<?php echo form_dropdown('status',$list_status,'Ibu', 'class="form-control" id="status"')?>
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
								Tanggal Lahir
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input type="date" id="tanggal_lahir" onchange="cekUmur()" class="form-control" placeholder="Tanggal Lahir"
										<?php echo form_input('tanggal_lahir'); ?>
									</div>		
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Umur
								</div>
								<div class="checkbox">
									<div class="col-md-9" class="form-group">
										<div class="input-group ">
											<input type="number" id="umur" class="form-control" placeholder="Umur"
											<?php echo form_input('umur'); ?>
											<span class="input-group-addon">tahun</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Agama
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<?php echo form_dropdown('agama',$list_agama,'Islam', 'class="form-control" id="agama"')?>
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
								Pendidikan
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<?php echo form_dropdown('pendidikan',$list_pendidikan,'SD', 'class="form-control" id="pendidikan"')?>
									</div>	
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Pekerjaan
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="pekerjaan" placeholder="Pekerjaan"
										<?php echo form_input('pekerjaan'); ?>
									</div>		
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								No. Telepon
								</div>
								<div class="checkbox">	
									<div class="col-md-9">
										<input class="form-control" id="no_telepon" placeholder="Nomor Telepon"
										<?php echo form_input('no_telepon'); ?>
									</div>		
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								No. KTP
								</div>
								<div class="checkbox">	
									<div class="col-md-9">
										<input class="form-control" id="no_KTP" placeholder="Nomor KTP"
										<?php echo form_input('no_KTP'); ?>
									</div>
								</div>
							</div>
						</div>							
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								No. JKN
								</div>
								<div class="checkbox">	
									<div class="col-md-9">
										<input class="form-control" id="no_JKN" placeholder="Nomor JKN"
										<?php echo form_input('no_JKN'); ?>											
									</div>		
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								No. RM Ibu
								</div>
								<div class="checkbox">	
									<div class="col-md-9">
										<input class="form-control" id="no_RM_ibu" placeholder="Nomor RM Ibu"
										<?php echo form_input('no_RM_ibu'); ?>
									</div>	
								</div>
							</div>
						</div>	
					</div>		
							
							
					<div class="col-md-6">	
						<h4>IDENTITAS WALI</h4>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Nama Wali
								</div>
								<div class="checkbox">	
									<div class="col-md-9">
										<input class="form-control" id="nama_wali" placeholder="Nama Lengkap Wali"
										<?php echo form_input('nama_wali'); ?>	
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
										<input type="date" id="tanggal_lahir_wali" onchange="cekUmurWali()" class="form-control" placeholder="Tanggal Lahir Wali"
										<?php echo form_input('tanggal_lahir_wali'); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Umur
								</div>
								<div class="checkbox">
									<div class="col-md-9" class="form-group">
										<div class="input-group ">
										  <input type="number" id="umur_wali" class="form-control" placeholder="Umur"
										  <?php echo form_input('umur_wali'); ?>
										  <span class="input-group-addon">tahun</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Agama
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<?php echo form_dropdown('agama_wali',$list_agama,'Islam', 'class="form-control" id="agama_wali"')?>
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
										<input class="form-control" id="gol_darah_wali" placeholder="(A, B, AB, atau O)"
										<?php echo form_input('gol_darah_wali'); ?>
									</div>	
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Pendidikan
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<?php echo form_dropdown('pendidikan_wali',$list_pendidikan,'SD', 'class="form-control" id="pendidikan_wali"')?>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Pekerjaan
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali"
										<?php echo form_input('pekerjaan_wali');?>
									</div>	
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								No. Telepon
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="no_telepon_wali" placeholder="Nomor Telepon Wali"
										<?php echo form_input('no_telepon_wali');?>
									</div>	
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								No. KTP Wali
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="no_KTP_wali" placeholder="No. KTP Wali"
										<?php echo form_input('no_KTP_wali'); ?>									
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								<h4>ALAMAT</h4>
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<textarea class="form-control" row="3" id="alamat" placeholder="Alamat" <?php echo form_input('alamat');?></textarea>							
									</div>
								</div>	
							</div>	
						</div>	
						<h4>ID PASIEN</h4>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Password
								</div>
								
									<div class="col-md-9">
										<input class="form-control" id="password" placeholder="Password"
										<?php echo form_input('password');?>
									</div>
								
							</div>
						</div>	
					</div>
					
					

					<script type="text/javascript">
						function cekUmur(){
							currentTime = new Date()
							lahir = document.getElementById('tanggal_lahir').value;
							lahir = lahir.split("-")[0];
							sekarang = currentTime.getFullYear();
							umur = sekarang-lahir;
							document.getElementById("umur").value = umur;
						}
						function cekUmurWali(){
							currentTime = new Date()
							lahir = document.getElementById('tanggal_lahir_wali').value;
							lahir = lahir.split("-")[0];
							sekarang = currentTime.getFullYear();
							umur = sekarang-lahir;
							document.getElementById("umur_wali").value = umur;
						}
						
					</script>
					
				   
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

<!-- /.row -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				CATATAN PEMBERIAN VITAMIN A
			</div>
			<div class="panel-body">
			
			<?php 
			 echo form_open('pemberian_vitamin_a/tambah_data'); //membuka file tambah_data di c_mhs 
			?>
				
			
				<div class="row">
					<div class="col-md-6">
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
								Jenis Vitamin A
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<?php echo form_dropdown('vit_A',$list_vit_A,'vit A merah', 'class="form-control" id=""');?>									
									</div>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Nama Dokter				
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<?php echo form_dropdown('nama_dokter',$list_dokter,'', 'class="form-control" id=""')?>	
									</div>	
								</div>
							</div>
						</div>
					</div>	
					<div class="col-md-6">
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Tgl. Kunjungan
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input type="date" class="form-control" id="tanggal_kunjungan" 
										<?php echo form_input('tanggal_kunjungan'); ?>										
									</div>
								</div>
							</div>
						</div>	
						<div class="row">	
							<div class="form-group">
								<div class="col-md-3">
								Tgl. Pemberian
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input type="date" class="form-control" id="tanggal_kunjungan" 
										<?php echo form_input('tanggal_pemberian'); ?>										
									</div>
								</div>
							</div>
						</div>	
						<div class="checkbox">
							<center>
								<button class="btn btn-primary" href="<?php echo form_submit('submit', 'Tambah'); ?><i class="fa fa-save fa-fw"></i> Simpan</button>
							</center>
						</div>	
					</div>	
				</div>		
			</div>				
			
				<?php echo form_close(); //menutup form ?>      
				
			</div>
			<!-- /.panel-body -->							
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->	
</div>
<!-- /.row -->
