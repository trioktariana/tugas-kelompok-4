<?php $this->load->view('layout/header.php') ?>
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Lihat Data Pengguna</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Pengguna</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No.</th>
								  <th>username</th>
								  <th>Password</th>								  
								  <th>Hak Akses</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	 <?php
						  	 	$j=1;
								foreach ($dataPengguna as $row) {                               
                                ?>
							<tr>
								<td><?php echo $j++; ?></td>
								<td><?php echo $row->username; ?></td>
								<td><?php echo $row->password; ?></td>
								<td><?php echo $row->hak_akses; ?></td>
								
								<td class="center">
									<a class="btn btn-success" href="<?=site_url('Pengguna/LihatDetail/'.$row->user_id);?>">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="<?=site_url('Pengguna/editPengguna/'.$row->user_id);?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data?')" href="<?=site_url('Pengguna/hapusPengguna/'.$row->user_id);?>">
										<i class="halflings-icon white trash" ></i> 
									</a>
								</td>
							</tr>
							<?php } ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->	
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
<?php $this->load->view('layout/footer.php') ?>
