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
	        	url: 'catatan_kehamilan/get_RM',
	        	data: {'kolom': '*', 'tabel': 'data_pasien', 'cat': data}, 
	        	type: "GET",
	        	success: function(data){
	        		
	        		data = JSON.parse(data);
	        		console.log(data);
	           		$('#nama').val(data[0]['nama']);
					$('#status').val(data[0]['status']);
					$('#jenis_kelamin').val(data[0]['jenis_kelamin']);
					$('#tanggal_lahir').val(data[0]['tanggal_lahir']);
					$('#umurTh').val(data[0]['umur']);
					$('#umurBl').val(data[0]['umur']);
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
				DATA PENDAFTARAN
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">

					<?php 
					 echo form_open('catatan_nifas/proses_edit'); //membuka file tambah_data di c_mhs 
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
									<div class="col-md-4" class="form-group">
										<div class="input-group ">
											<input type="number" id="umurTh" class="form-control" placeholder="Umur">
											<span class="input-group-addon">tahun</span>
										</div>
									</div>
									<div class="col-md-4" class="form-group">
										<div class="input-group ">
											<input type="number" id="umurBl" class="form-control" placeholder="Umur">
											<span class="input-group-addon">bulan</span>
										</div>
									</div>
								</div>
								<?php echo form_input(array('name' => 'umur', 'type'=>'hidden', 'id' =>'umur')); ?>
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
									<div class="col-md-4" class="form-group">
										<div class="input-group ">
											<input type="number" id="umurThWali" class="form-control" placeholder="Umur">
											<span class="input-group-addon">tahun</span>
										</div>
									</div>
									<div class="col-md-4" class="form-group">
										<div class="input-group ">
											<input type="number" id="umurBlWali" class="form-control" placeholder="Umur">
											<span class="input-group-addon">bulan</span>
										</div>
									</div>
								</div>
								<?php echo form_input(array('name' => 'umurWali', 'type'=>'hidden', 'id' =>'umurWali')); ?>
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
										<textarea class="form-control" id="alamat" row="3" placeholder="Alamat" <?php echo form_input('alamat');?></textarea>							
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
				INFORMASI KEHAMILAN
			</div>
			<div class="panel-body">
				<div class="row">
				
						<div class="col-md-6">
						
						<?php 
						 echo form_open('catatan_kehamilan/tambah_data1'); //membuka file tambah_data di c_mhs 
						?>
						
						
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
									Nomor RM
									</div>
									<div class="col-md-8">
										<input class="form-control" id="no_RM" placeholder="Nomor RM"
										<?php echo form_input('no_RM'); ?>										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
									Tanggal Kunjungan
									</div>
									<div class="checkbox">
										<div class="col-md-8">
											<input type="date" class="form-control" id="tanggal_kunjungan" placeholder="HPL"
											<?php echo form_input('tanggal_kunjungan'); ?>										
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
									HPHT
									</div>
									<div class="checkbox">
										<div class="col-md-8">
											<input type="date" class="form-control" id="HPHT" placeholder="HPHT"
											<?php echo form_input('HPHT');?>										
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
									HPL
									</div>
									<div class="checkbox">
										<div class="col-md-8">
											<input type="date" class="form-control" id="HPL" placeholder="HPL"
											<?php echo form_input('HPL');?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
									Panjang Lila							
									</div>
									<div class="checkbox">
										<div class="col-md-8">
											<div class="input-group">
												<input class="form-control" id="lila" placeholder="Panjang Lingkar Lengan Atas" 
												<?php echo form_input('lila');?>
												<span class="input-group-addon">jari</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
									Tinggi Badan
									</div>
									<div class="checkbox">
										<div class="col-md-8">
											<div class="input-group">
												<input class="form-control" id="TB" placeholder="Tinggi Badan"
												<?php echo form_input('TB');?>
												<span class="input-group-addon">cm</span>
											</div>
										</div>	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
									Berat Badan
									</div>
									<div class="checkbox">
										<div class="col-md-8">
											<div class="input-group">
												<input class="form-control" id="BB" placeholder="Berat Badan" 
												<?php echo form_input('BB');?>
												<span class="input-group-addon">kg</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
									Kontrasepsi Terakhir
									</div>
									<div class="checkbox">
										<div class="col-md-8">
											<input class="form-control" id="kontrasepsi" placeholder="Kontrasepsi Terakhir yang Digunakan" 
											<?php echo form_input('kontrasepsi');?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
									Riwayat Penyakit				
									</div>
									<div class="checkbox">
										<div class="col-md-8">
											<input class="form-control" id="penyakit" placeholder="Riwayat Penyakit" 
											<?php echo form_input('penyakit');?>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group has-warning">
									<div class="col-md-4">
										<label class="control-label" for="inputWarning">Riwayat Alergi</label>
									</div>
									<div class="checkbox">
									<div class="col-md-8">
										<div class="form-group">
											<input class="form-control" id="alergi" placeholder="Riwayat Alergi"
											<?php echo form_input('alergi'); ?>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>	
											
						<!--  riwayat kehamilan-->

						<div class="col-md-6">	
							<div class="row">
								<div class="col-md-12">
										<label>Riwayat Kehamilan</label>
                                        <div class="row">
											<div class="col-md-4">
												<div class="row">
													<div class="form-group">
														<div class="col-md-4">
														Gestasi				
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<input class="form-control" id="gestasi" placeholder="Jumlah" 
																<?php echo form_input('gestasi');?>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="row">
													<div class="form-group">
														<div class="col-md-4">
														Partus				
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<input class="form-control" id="partus" placeholder="Jumlah" 
																<?php echo form_input('partus');?>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="row">
													<div class="form-group">
														<div class="col-md-4">
														Abortus				
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<input class="form-control" id="abortus" placeholder="Jumlah" 
																<?php echo form_input('abortus');?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
										
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Riwayat Imunisasi TT</label>
													<div class="row">
														<div class="col-md-4">
															
															<?php echo form_dropdown('jenis_TT',$list_TT,'TT 1', 'class="form-control" id=""');?>
															
															
														</div>
														<div class="col-md-8">
															<input type="date" class="form-control" id="TT" placeholder="Jumlah"
															<?php echo form_input('tanggal_pemberian');?>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="form-group">
												<div class="col-md-6">
												Jumlah Anak Hidup				
												</div>
												<div class="col-md-6">
													<input class="form-control" id="anak_hidup" placeholder="Jumlah Anak" 
													<?php echo form_input('anak_hidup');?>
												</div>	
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-6">
												Jumlah Anak Lahir Mati				
												</div>
												<div class="checkbox">
													<div class="col-md-6">
														<input class="form-control" id="anak_mati" placeholder="Jumlah Anak" 
														<?php echo form_input('anak_mati');?>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-6">
												Jumlah Anak Lahir Kurang Bulan			
												</div>
												<div class="checkbox">
													<div class="col-md-6">
														<input class="form-control" id="kurang_bulan" placeholder="Jumlah Anak" 
														<?php echo form_input('kurang_bulan');?>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-6">
												Jarak Persalinan Terakhir	
												</div>
												<div class="checkbox">
													<div class="col-md-6">
														<input class="form-control" id="jarak_terakhir" placeholder="Jarak Persalinan Terakhir" 
														<?php echo form_input('jarak_terakhir');?>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-6">
												Cara Persalinan Sebelumnya	
												</div>
												<div class="checkbox">
													<div class="col-md-6">
														<input class="form-control" id="cara_lahir_terakhir" placeholder="Cara Persalinan Sebelumnya" 
														<?php echo form_input('cara_lahir_terakhir');?>
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
										<div class="checkbox">
											<center>
												<button class="btn btn-primary" href="<?php echo form_submit('submit1', 'Tambah1'); ?><i class="fa fa-save fa-fw"></i> Simpan</button>
											</center>
										</div>	
										
								</div>	
							</div>
						</div>	

						
						<?php echo form_close(); //menutup form ?>   

										
						
					</form>						
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
				CATATAN PEMERIKSAAN RUTIN
			</div>
			<div class="panel-body">
			
				<?php 
				 echo form_open('catatan_kehamilan/tambah_data2'); //membuka file tambah_data di c_mhs 
				?>
					
			
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Nomor RM	
								</div>
								<div class="col-md-9">
									<input class="form-control" id="no_RM" placeholder="Nomor RM" 
									<?php echo form_input('no_RM'); ?>
								</div>
							</div>
						</div>
		
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Tgl. Kunjungan	
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" type="date" id="tanggal_kunjungan" placeholder="Tanggal Kunjungan" 
										<?php echo form_input('tanggal_kunjungan'); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Tekanan Darah	
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<div class="input-group">
											<input class="form-control" id="TD" placeholder="Tekanan Darah" 
											<?php echo form_input('TD'); ?>
											<span class="input-group-addon">mmHg</span>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Berat Badan	
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<div class="input-group">
											<input class="form-control" id="BB" placeholder="Berat Badan" 
											<?php echo form_input('BB'); ?>
											<span class="input-group-addon">kg</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Umur Hamil
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<div class="input-group">
											<input class="form-control" id="umur_kehamilan" placeholder="Umur Kehamilan" 
											<?php echo form_input('umur_kehamilan'); ?>
											<span class="input-group-addon">minggu</span>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Tinggi Fundus
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<div class="input-group">
											<input class="form-control" id="tinggi_fundus" placeholder="Tinggi Fundus" 
											<?php echo form_input('tinggi_fundus'); ?>
											<span class="input-group-addon">cm</span>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Letak Janin
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="letak_janin" placeholder="Letak Janin" 
										<?php echo form_input('letak_janin'); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								DJJ
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<div class="input-group">
											<input class="form-control" id="DJJ" placeholder="Denyut Jantung Janin" 
											<?php echo form_input('DJJ'); ?>
											<span class="input-group-addon">/menit</span>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Kaki Bengkak
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="kaki_bengkak" placeholder="-/+" 
										<?php echo form_input('kaki_bengkak'); ?>
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
					
					<!-- /.col-lg-6 (nested) -->
					<div class="col-md-6">
							<div class="form-group">
								<label>Penyakit</label>
								<textarea class="form-control" id="keluhan_sekarang" row="3"<?php echo form_input('keluhan_sekarang'); ?></textarea>
							</div>
							<div class="form-group">
								<label>Hasil Laboratorium</label>
								<textarea class="form-control" id="hasil_lab" row="3"<?php echo form_input('hasil_lab'); ?></textarea>
							</div>
							<div class="form-group">
								<label>Tindakan</label>
								<textarea class="form-control" id="tindakan" row="3"<?php echo form_input('tindakan'); ?></textarea>
							</div>
							<div class="form-group">
								<label>Nasihat yang Disampaikan</label>
								<textarea class="form-control" id="nasihat" row="3" <?php echo form_input('nasihat'); ?></textarea>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="form-group has-warning">
											<div class="col-md-3">
												<label class="control-label" for="inputWarning">Jadwal Harus Kembali</label>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<input type="date" class="form-control" id="jadwal"
													<?php echo form_input('jadwal'); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
					</div>
		
					<div class="col-md-12">
						<div class="checkbox">
							<center>
								<button class="btn btn-primary" href="<?php echo form_submit('submit2', 'Tambah2'); ?><i class="fa fa-save fa-fw"></i> Simpan</button>
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