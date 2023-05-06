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
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>View Detail Pertanyaan</h2>
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
                        <label class="control-label" for="focusedInput">Pertanyaan : </label>
                        <div class="controls">
                            <textarea class="input-xlarge" id="textarea2" cols="90" rows="3" name="pertanyaan" disabled> <?php echo $pertanyaan->pertanyaan;?> </textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Dimensi : </label>
                        <div class="controls">
                            <select id="id_dimensi" data-rel="chosen" name="id_imensi" disabled>
                                <option value="<?php echo $pertanyaan->id_dimensi;?>" selected disabled><?php echo $pertanyaan->dimensi;?></option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Variabel : </label>
                        <div class="controls">
                            <select id="variabel" data-rel="chosen" name="variabel" disabled>
                                <option value='<?php echo $pertanyaan->variabel;?>' selected disable><?php echo $pertanyaan->variabel;?></option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban A : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pila" type="text" value="<?php echo $pertanyaan->pila;?>" name="pila" disabled>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban B : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pilb" type="text" value="<?php echo $pertanyaan->pilb;?>" name="pilb" disabled>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban C : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pilc" type="text" value="<?php echo $pertanyaan->pilc;?>" name="pilc" disabled>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban D : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pild" type="text" value="<?php echo $pertanyaan->pild;?>" name="pild" disabled>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban E : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pile" type="text" value="<?php echo $pertanyaan->pile;?>" name="pile" disabled>
                        </div>
                    </div>
                    <div class="form-actions">
                        <a class="btn" href="<?php echo base_url('Pertanyaan'); ?>">Cancel</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!--/span-->
</div>

<?php $this->load->view('layout/footer.php') ?>