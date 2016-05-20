<!-- /.row -->
<div class="row">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()."resource/assets/css/bootstrap.css" ?>">

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
			<span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
				Data Ibu
			</div>
			
			<div class="panel-body">
			   
				<!-- menu pencarian -->
				<div class="col-md-4">	
					<form role="form"> 
						<div class="input-group"> 
							<input type="text" id="cari" class="form-control" placeholder="Cari apa?" aria-describedby="basic-addon2"> 
							<span class="input-group-addon" id="basic-addon2">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</span> 
						</div> 
					</form>
				</div>
				
				<div class="col-md-12">
				<br>
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" width="900px">
							<thead>
								<tr>
									<th width="50px"><center>NO.</center></th>
									<th width="150px"><center>NO. RM</center></th>
									<th width="300px"><center>NAMA</center></th>
									<th width="150px"><center>STATUS</center></th>
									<th width="150px"><center>UMUR</center></th>
									<th width="250px"><center>ALAMAT</center></th>									
									<th width="50px"><center>AKSI</center></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$NO = 1;
								foreach ($data->result() as $row){
								?>
								<tr class="baris hidden"> 
									<td class="no"><center><?php echo $NO++; ?></center></td>
									<td class="no_RM"><?php echo $row-> no_RM ;?></td>
									<td class="nama"><?php echo $row-> nama ;?></td>
									<td class="status"><?php echo $row-> status[0]->status ;?></td>
									<td class="umur"><?php echo $row-> umur ;?></td>
									<td class="alamat"><?php echo $row-> alamat ;?></td>
									<td align="center">
										<a href="#delete" data-toggle="modal" data-target="#ModalDelete">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
										</a>
										
										<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
											  </div>
											  <div class="modal-body">
												Apakah anda yakin untuk menghapus data ini?
											  </div>
											  <div class="modal-footer">
												  <a href="<?php echo base_url();?>index.php/data_pasien/hapus/<?php echo $row->no_RM ?>">
													<button type="button" class="btn btn-primary" >Ya</button>
												  </a>		
												  <a>		
													<button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
												  </a>	
											  </div>
											</div>
										  </div>
										</div>
									</td>
								</tr>
								
								<?php }?>
								
							</tbody>
						</table>
						<style type="text/css">
							.hidden{
								display: none;
							}
						</style>
					</div>
					<!-- /.table-responsive -->	
					
					<!-- footer -->
					<div class="pull-right">
						<nav> 
							<ul class="pagination"> 
								<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
								<li id="hal" class="active"></li> 
								<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li> 
							</ul> 
						</nav>
					</div>	
					
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var baris = document.getElementsByClassName('baris');
	current = 1;
	page = 10;
	total = baris.length;
	jmlHal = Math.ceil(total/page);
	for(i=0;i<page;i++) {
		baris[i].classList.remove("hidden");
	}
	function gotoPage(arg) {
		console.log(current, arg);
		for(i=0;i<total;i++) {
			baris[i].classList.add("hidden");	
		}
		start = (arg*page)-page;
		end = start+page;
		console.log(start);
		if(end<total) {
			end=end;
		}
		else{
			end = total;
		}
		for(i=start;i<end;i++) {
			baris[i].classList.remove("hidden");
		}
		current=arg;
	}

	for(i=0;i<jmlHal;i++) {
		var node = document.createElement("a");
		hl = 'gotoPage(' + (i+1) + ')';
		node.setAttribute('onclick',hl)
		node.setAttribute('style','cursor:pointer;')
		var text = document.createTextNode(i+1);
		node.appendChild(text);
		document.getElementById('hal').appendChild(node)	
	}
	
	element = document.getElementById('cari');
	element.addEventListener("keypress", function(e){ 
		if (e.keyCode == 13) {
			e.preventDefault();
			datas = document.getElementsByClassName('nama');
			data = document.getElementById('cari').value;
			for(i=0;i<datas.length;i++){
			if(datas[i].innerHTML!=data) {
				baris[i].classList.add("hidden");
				}
				else {
					baris[i].classList.remove("hidden");
				}
			}
		}
	});
</script>