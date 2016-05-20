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
				DATA IDENTITAS
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						
						<?php 
						 echo form_open('data_petugas/tambah_data'); //membuka file tambah_data di c_mhs 
						?>
							
						<form class="form-horizontal">
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama Petugas</label>
								<div class="col-md-9">
								  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="input nama petugas"
								  <?php echo form_input('nama'); ?>
								<br>
								</div>
							</div>
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jenis Kelamin</label>
								<div class="col-md-9">
								  								  
								  <?php echo form_dropdown('jenis_kelamin',$list_jenis_kelamin,'Laki-laki', 'class="form-control"')?>
								  
								<br>
								</div>
							</div>
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alamat</label>
								<div class="col-md-9">
								  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="input alamat petugas"
								  <?php echo form_input('alamat'); ?>
								<br>
								</div>
							</div>
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Username</label>
								<div class="col-md-9">
								  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="input username petugas"
								  <?php echo form_input('username'); ?>
								<br>
								</div>
							</div>
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password</label>
								<div class="col-md-9">
								  <input class="form-control" type="text" id="formGroupInputSmall" placeholder="input password petugas"
								  <?php echo form_input('password'); ?>
								<br>
								</div>
							</div>
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Level</label>
								<div class="col-md-9">
								   <select class="form-control"<?php echo form_input('level'); ?>
									<option>Admin</option>
									<option>Petugas</option>
									<option>Pasien</option>
								  </select>
								<br>
								</div>
							</div>
							
							<div class="col-md-12">
								<center>
									<button class="btn btn-primary" href="<?php echo form_submit('batal','Tambah'); ?><i class="fa fa-close fa-fw"></i> Batal</button>
									<button class="btn btn-primary" href="<?php echo form_submit('submit', 'Tambah'); ?><i class="fa fa-save fa-fw"></i> Simpan</button>
								</center>
							</div>	
							
						</form>
						
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