<?php $this->load->view('layout/header.php') ?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="template.php">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Dashboard</a></li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>View Detail Dimensi</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" method="POST">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Dimensi : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $dimensi->dimensi ?>" name="dimensi" disabled>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Bobot : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="" type="text" value="<?php echo $dimensi->bobot ?>" name="bobot" disabled>
                        </div>
                    </div>
                    <div class="form-actions">
                        <a class="btn" href="<?php echo base_url('Dimensi'); ?>">Cancel</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!--/span-->
</div>

<?php $this->load->view('layout/footer.php') ?>