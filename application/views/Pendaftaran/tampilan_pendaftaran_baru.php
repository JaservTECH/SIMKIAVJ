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

	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				DATA PENDAFTARAN
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">

					<?php 
					 echo form_open('pendaftaran_baru/tambah_data'); //membuka file tambah_data di c_mhs 
					?>

						<h4>IDENTITAS PASIEN</h4>
						<div class="row">
							<div class="form-group">
								<div class="col-md-3">
								Nomor RM
								</div>
								<div class="checkbox">
									<div class="col-md-9">
										<input class="form-control" id="no_RM" placeholder="Nomor RM"
										<?php echo form_input('no_RM'); //input no rm ?>											
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
										<input class="form-control" id="nama" placeholder="Nama Lengkap Pasien"
										<?php echo form_input('nama'); ?>
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
										<?php echo form_dropdown('jenis_kelamin',$list_JK,'Laki-laki', 'class="form-control" id="jenis_kelamin"')?>
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
										<input type="date" id="tanggal_lahir" onchange="cekUmur()" class="form-control" 
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
										<div class="input-group">
											<input type="number" id="umurThWali" class="form-control" placeholder="Umur">
											<span class="input-group-addon">tahun</span>
										</div>
									</div>
									<div class="col-md-4" class="form-group">
										<div class="input-group">
											<input type="number" id="umurBlWali" class="form-control" placeholder="Umur">
											<span class="input-group-addon">bulan</span>
										</div>
									</div>
								</div>
								<?php echo form_input(array('name' => 'umur_wali', 'type'=>'hidden', 'id' =>'umur_wali')); ?>
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
										<textarea class="form-control" row="3" placeholder="Alamat" <?php echo form_input('alamat');?></textarea>							
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
						<div class="checkbox">
							<br>
							<center>
								<button class="btn btn-primary" href="<?php echo form_submit('submit', 'Tambah'); ?><i class="fa fa-save fa-fw"></i> Simpan</button>
							</center>
							
					</div>
					
					<div class="col-md-12">
					
						
					</div>
						
					

					<script type="text/javascript">

						function cekUmur(){
							currentTime = new Date()
							lahir = document.getElementById('tanggal_lahir').value;
							lahirTh = lahir.split("-")[0];
							lahirBl = lahir.split("-")[1];
							sekarangTh = currentTime.getFullYear();
							sekarangBl = currentTime.getMonth();
							umurTh = sekarangTh-lahirTh;
							umurBl = sekarangBl-lahirBl;
							if(umurBl<0){
								umurBl=12+umurBl;
								umurTh=umurTh-1;
							}
							document.getElementById("umurTh").value = umurTh;
							document.getElementById("umurBl").value = umurBl;
							umur = umurTh + ',' + umurBl;
							document.getElementById("umur").value = umur;
						}
						function cekUmurWali(){
							currentTime = new Date()
							lahir = document.getElementById('tanggal_lahir_wali').value;
							lahirTh = lahir.split("-")[0];
							lahirBl = lahir.split("-")[1];
							sekarangTh = currentTime.getFullYear();
							sekarangBl = currentTime.getMonth();
							umurThWali = sekarangTh-lahirTh;
							umurBlWali = sekarangBl-lahirBl;
							if(umurBlWali<0){
								umurBlWali=12+umurBlWali;
								umurThWali=umurThWali-1;
							}
							document.getElementById("umurThWali").value = umurThWali;
							document.getElementById("umurBlWali").value = umurBlWali;
							umur_wali = umurThWali + ',' + umurBlWali;
							document.getElementById("umur_wali").value = umur_wali;
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



