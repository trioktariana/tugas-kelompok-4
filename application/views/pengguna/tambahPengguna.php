<?php $this->load->view('layout/header.php') ?>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tambah Data Pengguna</a></li>
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Tambah Data Pengguna</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="POST" action="<?php echo base_url() ?>index.php/Pengguna/savePengguna/">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Username : </label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="username" cols="90" rows="3" name="username"></textarea>
							  </div>
							</div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password : </label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="password" cols="90" rows="3" name="password"></textarea>
							  </div>
							</div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Hak Akses : </label>
								<div class="controls">
								  <select id="hak_akses" data-rel="chosen" name="hak_akses">
								  	<option></option>
									<option value='administrator'>Administrator</option>
									<option value='dekan'>Dekan</option>
									<option value='kepala puskom'>Kepala Puskom</option>
									<option value='kaprodi ti'>Kaprodi IT</option>
									<option value='kaprodi si'>Kaprodi SI</option>

								  </select>
								</div>

							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary" name="simpan">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
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