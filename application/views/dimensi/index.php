<?php $this->load->view('layout/header.php') ?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="template.php">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Lihat Data Dimensi</a></li>
</ul>

<!-- isi konten disini -->
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white user"></i><span class="break"></span>Dimensi</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <?php if ($this->session->flashdata('msg')): ?>
                <div class="alert alert-warning">
                    <?= $this->session->flashdata('msg') ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Dimensi</th>
                        <th>Bobot</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                <?php $no=1;
                foreach ($dimensi as $datadms): ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $datadms->dimensi ?></td>
                    <td class="center"><?php echo $datadms->bobot ?></td>
                    
                    <td class="center">
                        <a class="btn btn-success" href="<?php echo base_url('Dimensi/view/') . $datadms->id_dimensi; ?>">
                            <i class="halflings-icon white zoom-in"></i>  
                        </a>
                        <a class="btn btn-info" href="<?php echo base_url('Dimensi/edit/') . $datadms->id_dimensi; ?>">
                            <i class="halflings-icon white edit"></i>  
                        </a>
                        <a class="btn btn-danger" onclick="deleteDimensi(<?php echo $datadms->id_dimensi; ?>)">
                            <i class="halflings-icon white trash"></i> 
                        </a>
                    </td>
                </tr>
                <?php $no++; endforeach;?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->	

<?php $this->load->view('layout/footer.php') ?>
<script>
    function deleteDimensi(e) {
        let text = "Are you sure want to delete?";
        if (confirm(text) == true) {
            window.location.href = '<?php echo base_url('Dimensi/delete/') . $datadms->id_dimensi; ?>';
        } 
        // else {
        //     alert(e);
        // }
    }
</script>