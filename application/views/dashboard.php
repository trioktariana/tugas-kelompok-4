<?php $this->load->view('layout/header.php') ?>
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="template.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

				
			<div class="row-fluid">
				
				<div class="widget red span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons globe"><i></i></span>CORPORATE CONTRIBUTION</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							<?php
										$urut=0;
										$total=0;
										$kategori="";

										foreach ($dimensi1->result() as $data) {
											$urut=$urut+1;
											$jawaban=$data->jawaban;
											$jumlah=$data->jumlah;
						
											$stringedit =  str_replace(" ", ",", ($jumlah. " "));
											$total=$total+$jumlah
										
									?>
							<div class="singleBar">
							
								<div class="bar">
								
									<div class="value">
										<span><?php echo $jumlah; ?></span>
									</div>
								
								</div>
								
								<div class="title"><?php echo $jawaban; ?></div>
								
							</div>
							
								
							<?php } ?>
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->
				
				<div class="widget blue span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons magic"><i></i></span>STAKEHOLDER ORIENTATION</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							<?php
										$urut=0;
										$total=0;
										$kategori="";

										foreach ($dimensi2->result() as $data) {
											$urut=$urut+1;
											$jawaban=$data->jawaban;
											$jumlah=$data->jumlah;
						
											$stringedit =  str_replace(" ", ",", ($jumlah. " "));
											$total=$total+$jumlah
										
									?>
							<div class="singleBar">
							
								<div class="bar">
								
									<div class="value">
										<span><?php echo $jumlah; ?></span>
									</div>
								
								</div>
								
								<div class="title"><?php echo $jawaban; ?></div>
								
							</div>
							
								
							<?php } ?>
							<div class="clearfix"></div>
						</div>
					
					</div>
					
				</div><!--/span-->
				
				<div class="widget yellow span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons pie_chart"><i></i></span>OPERATIONAL EXCELLENCE</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							<?php
										$urut=0;
										$total=0;
										$kategori="";

										foreach ($dimensi3->result() as $data) {
											$urut=$urut+1;
											$jawaban=$data->jawaban;
											$jumlah=$data->jumlah;
						
											$stringedit =  str_replace(" ", ",", ($jumlah. " "));
											$total=$total+$jumlah
										
									?>
							<div class="singleBar">
							
								<div class="bar">
								
									<div class="value">
										<span><?php echo $jumlah; ?></span>
									</div>
								
								</div>
								
								<div class="title"><?php echo $jawaban; ?></div>
								
							</div>
							
								
							<?php } ?>
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->

				<div class="widget green span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons snowflake"><i></i></span>FUTURE ORIENTATION</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							<?php
										$urut=0;
										$total=0;
										$kategori="";

										foreach ($dimensi4->result() as $data) {
											$urut=$urut+1;
											$jawaban=$data->jawaban;
											$jumlah=$data->jumlah;
						
											$stringedit =  str_replace(" ", ",", ($jumlah. " "));
											$total=$total+$jumlah
										
									?>
							<div class="singleBar">
							
								<div class="bar">
								
									<div class="value">
										<span><?php echo $jumlah; ?></span>
									</div>
								
								</div>
								
								<div class="title"><?php echo $jawaban; ?></div>
								
							</div>
							
								
							<?php } ?>
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->

			<div class="row-fluid hideInIE8 circleStats">
				
				<div class="span3" onTablet="span3" onDesktop="span3">
                	<div class="circleStatsItemBox yellow">
						<div class="header">CORPORATE CONTRIBUTION</div>
						<span class="percent">percent</span>
						<?php
									$jumlah=$dimensi1->num_rows();
									$urut=0;
									$total=0;
									$kategori="";
									foreach ($dimensi1->result() as $row) {
										$urut=$urut+1;
										$jawaban=$row->jawaban;
										$jumlah=$row->jumlah;
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
									}
									if (($total>=27) and ($total<=48.6)) {
										$kategori="Sangat Buruk";
										$bobot_kinerja=1;
									} elseif (($total>=48.7) and ($total<=70.2)) {
										$kategori="Buruk";
										$bobot_kinerja=2;
									} elseif (($total>=70.3) and ($total<=91.8)) {
										$kategori="Cukup Baik";
										$bobot_kinerja=3;
									} elseif (($total>=91.9) and ($total<=113.4)) {
										$kategori="Baik";
										$bobot_kinerja=4;
									} else {
										$kategori="Sangat Baik";
										$bobot_kinerja=5;
									}

									
									$bobot=$bobotdimensi1->bobot;
									$KPI=($bobot_kinerja/$bobot)*100;
									//kesimpulan
									if (($KPI>=1) and ($KPI<=20)) {
										$kategori_kpi="Tidak Baik";
									} elseif (($KPI>=21) and ($KPI<=40)) {
										$kategori_kpi="Kurang";
									} elseif (($KPI>=41) and ($KPI<=60)) {
										$kategori_kpi="Cukup";
									} elseif (($KPI>=61) and ($KPI<=80)) {
										$kategori_kpi="Baik";
									} else {
										$kategori_kpi="Sangat Baik";
									}
									$kesimpulan="Kesimpulan KPI adalah " . $kategori_kpi;
									
						?>
						<div class="circleStat">
                    		<input type="text" value="<?php echo $KPI; ?>" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="unit"><?php echo $kesimpulan; ?></span>
								
							</span>
							
						</div>
                	</div>
				</div>

				<div class="span3" onTablet="span3" onDesktop="span3">
                	<div class="circleStatsItemBox green">
						<div class="header">STAKEHOLDER ORIENTATION</div>
						<span class="percent">percent</span>
						<?php
									$jumlah=$dimensi2->num_rows();
									$urut=0;
									$total=0;
									$kategori="";
									foreach ($dimensi2->result() as $row) {
										$urut=$urut+1;
										$jawaban=$row->jawaban;
										$jumlah=$row->jumlah;
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
									}

									if (($total>=14) and ($total<=25.3)) {
										$kategori="Sangat Buruk";
										$bobot_kinerja=1;
									} elseif (($total>=25.2) and ($total<=36.4)) {
										$kategori="Buruk";
										$bobot_kinerja=2;
									} elseif (($total>=36.5) and ($total<=47.6)) {
										$kategori="Cukup Baik";
										$bobot_kinerja=3;
									} elseif (($total>=47.7) and ($total<=58.8)) {
										$kategori="Baik";
										$bobot_kinerja=4;
									} else {
										$kategori="Sangat Baik";
										$bobot_kinerja=5;
									}

									$bobot=$bobotdimensi2->bobot;
									$KPI=($bobot_kinerja/$bobot)*100;
									//kesimpulan
									if (($KPI>=1) and ($KPI<=20)) {
										$kategori_kpi="Tidak Baik";
									} elseif (($KPI>=21) and ($KPI<=40)) {
										$kategori_kpi="Kurang";
									} elseif (($KPI>=41) and ($KPI<=60)) {
										$kategori_kpi="Cukup";
									} elseif (($KPI>=61) and ($KPI<=80)) {
										$kategori_kpi="Baik";
									} else {
										$kategori_kpi="Sangat Baik";
									}
									$kesimpulan="Kesimpulan KPI adalah " . $kategori_kpi;	
									
						?>
						<div class="circleStat">
                    		<input type="text" value="<?php echo $KPI; ?>" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="unit"><?php echo $kesimpulan; ?></span>
								
							</span>
							
						</div>
                	</div>
				</div>

				<div class="span3" onTablet="span3" onDesktop="span3">
                	<div class="circleStatsItemBox red">
						<div class="header">OPERATIONAL EXCELLENCE </div>
						<span class="percent">percent</span>
						<?php
									$jumlah=$dimensi3->num_rows();
									$urut=0;
									$total=0;
									$kategori="";
									foreach ($dimensi3->result() as $row) {
										$urut=$urut+1;
										$jawaban=$row->jawaban;
										$jumlah=$row->jumlah;
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
									}

									if (($total>=12) and ($total<=21.6)) {
										$kategori="Sangat Buruk";
										$bobot_kinerja=1;
									} elseif (($total>=21.7) and ($total<=31.2)) {
										$kategori="Buruk";
										$bobot_kinerja=2;
									} elseif (($total>=31.3) and ($total<=40.8)) {
										$kategori="Cukup Baik";
										$bobot_kinerja=3;
									} elseif (($total>=40.9) and ($total<=50.4)) {
										$kategori="Baik";
										$bobot_kinerja=4;
									} else {
										$kategori="Sangat Baik";
										$bobot_kinerja=5;
									}
									
									$bobot=$bobotdimensi3->bobot;
									$KPI=($bobot_kinerja/$bobot)*100;
									//kesimpulan
									if (($KPI>=1) and ($KPI<=20)) {
										$kategori_kpi="Tidak Baik";
									} elseif (($KPI>=21) and ($KPI<=40)) {
										$kategori_kpi="Kurang";
									} elseif (($KPI>=41) and ($KPI<=60)) {
										$kategori_kpi="Cukup";
									} elseif (($KPI>=61) and ($KPI<=80)) {
										$kategori_kpi="Baik";
									} else {
										$kategori_kpi="Sangat Baik";
									}
									$kesimpulan="Kesimpulan KPI adalah " . $kategori_kpi;	
									
						?>
                    	<div class="circleStat">
                    		<input type="text" value="<?php echo $KPI; ?>" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="unit"><?php echo $kesimpulan; ?></span>
								
							</span>
				
						</div>
                	</div>
				</div>

				<div class="span3 noMargin" onTablet="span3" onDesktop="span3">
                	<div class="circleStatsItemBox pink">
						<div class="header">FUTURE ORIENTATION</div>
						<span class="percent">percent</span>
						<?php
									$jumlah=$dimensi4->num_rows();
									$urut=0;
									$total=0;
									$kategori="";
									foreach ($dimensi4->result() as $row) {
										$urut=$urut+1;
										$jawaban=$row->jawaban;
										$jumlah=$row->jumlah;
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
									}

									if (($total>=13) and ($total<=23.4)) {
										$kategori="Sangat Buruk";
										$bobot_kinerja=1;
									} elseif (($total>=23.5) and ($total<=33.8)) {
										$kategori="Buruk";
										$bobot_kinerja=2;
									} elseif (($total>=33.9) and ($total<=44.2)) {
										$kategori="Cukup Baik";
										$bobot_kinerja=3;
									} elseif (($total>=44.3) and ($total<=54.6)) {
										$kategori="Baik";
										$bobot_kinerja=4;
									} else {
										$kategori="Sangat Baik";
										$bobot_kinerja=5;
									}
									
									$bobot=$bobotdimensi4->bobot;
									$KPI=($bobot_kinerja/$bobot)*100;
									//kesimpulan
									if (($KPI>=1) and ($KPI<=20)) {
										$kategori_kpi="Tidak Baik";
									} elseif (($KPI>=21) and ($KPI<=40)) {
										$kategori_kpi="Kurang";
									} elseif (($KPI>=41) and ($KPI<=60)) {
										$kategori_kpi="Cukup";
									} elseif (($KPI>=61) and ($KPI<=80)) {
										$kategori_kpi="Baik";
									} else {
										$kategori_kpi="Sangat Baik";
									}
									$kesimpulan="Kesimpulan KPI adalah " . $kategori_kpi;	
									
						?>
                    	<div class="circleStat">
                    		<input type="text" value="<?php echo $KPI; ?>" class="whiteCircle" />
						</div>
						<div class="footer">
				
							<span class="count">
								
								<span class="unit"><?php echo $kesimpulan; ?></span>
							</span>	
						</div>
                	</div>
				</div>

				
						
			</div>		
			
	
<?php $this->load->view('layout/footer.php') ?>