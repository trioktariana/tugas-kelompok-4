<?php $this->load->view('layout/header.php') ?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="template.php">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Lihat Data Pertanyaan</a></li>
</ul>

<!-- isi konten disini -->
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white user"></i><span class="break"></span>Pertanyaan</h2>
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
                        <th>Pertanyaan</th>
                        <th>Variabel</th>
                        <th>Dimensi</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                <?php $no=1;
                foreach ($pertanyaan as $datatanya): ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $datatanya->pertanyaan ?></td>
                    <td><?php echo $datatanya->variabel ?></td>
                    <td><?php echo $datatanya->dimensi ?></td>
                    <td class="center">
                        <a class="btn btn-success" href="<?php echo base_url('Pertanyaan/view/') . $datatanya->id_kuesioner; ?>">
                            <i class="halflings-icon white zoom-in"></i>  
                        </a>
                        <a class="btn btn-info" href="<?php echo base_url('Pertanyaan/edit/') . $datatanya->id_kuesioner; ?>">
                            <i class="halflings-icon white edit"></i>  
                        </a>
                        <a class="btn btn-danger" onclick="deletePertanyaan(<?php echo $datatanya->id_kuesioner; ?>)">
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
    function deletePertanyaan(e) {
        let text = "Are you sure want to delete?";
        if (confirm(text) == true) {
            window.location.href = '<?php echo base_url('Pertanyaan/delete/'); ?>' + e;
        } 
        // else {
        //     alert(e);
        // }
    }
</script>