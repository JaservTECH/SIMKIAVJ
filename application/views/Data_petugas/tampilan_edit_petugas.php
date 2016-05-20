<!-- /.row -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				DATA IDENTITAS
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<?php 
						 echo form_open('data_petugas/proses_edit') ?>
						 <?php 
						 foreach ($user->result() as $row):?>
						 
						
						<form class="form-horizontal">
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama Petugas</label>
								<div class="col-md-9">
								  <input type="hidden" name="id_user" value="<?php echo($row->id_user);?>"/>
								  <input class="form-control" type="text" name="nama" value="<?php echo($row->nama);?>" />
								<br>
								</div>
							</div>
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jenis Kelamin</label>
								<div class="col-md-9">
								  <?php echo form_dropdown('jenis_kelamin',$list_jenis_kelamin,'laki-laki', 'class="form-control" name="jenis_kelamin" id="kelamin"')?>
								<script type="text/javascript"></script>
								<br>
								</div>
							</div>
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alamat</label>
								<div class="col-md-9">
								<input class="form-control" type="text" 
								  name="alamat" value="<?php echo($row->alamat);?>">
								<br>
								</div>
							</div>
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Username</label>
								<div class="col-md-9">
								  <input class="form-control" type="text" 
								  name="username" value="<?php echo($row->username);?>">
								<br>
								</div>
							</div>
							<div class="form-group form-group">
								<label class="col-md-3 control-label" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Level</label>
								<div class="col-md-9">
								
								<select class="form-control"  name="level" 
								
								<?php echo form_input('level'); ?>
									<option>Admin</option>
									<option>Petugas</option>
									<option>Pasien</option>
								</select>
								
								
							
								<br>
								 
								<br>
								</div>
								<br>
								</div>
							</div>
							
							<div class="col-md-12">
								<center>
									<button class="btn btn-primary" href="<?php echo form_submit('batal','Tambah'); ?><i class="fa fa-close fa-fw"></i> Batal</button>
									<button class="btn btn-primary" href="<?php echo form_submit('update','Tambah'); ?><i class="fa fa-save fa-fw"></i> Update</button>
									
								</center>
							</div>	
							
						</form>
						
						<?php endforeach; ?> 
												
						
				   
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
<script type="text/javascript">
	val =<?php echo($row->jenis_kelamin);?>;
	if(val==1){
		document.getElementById("kelamin").value=1;
	}
	else {
		document.getElementById("kelamin").value=2;
	}
</script>