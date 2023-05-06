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
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Tambah Data Pertanyaan</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" method="POST" action="<?php echo base_url('Pertanyaan/process'); ?>">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Pertanyaan : </label>
                        <div class="controls">
                            <textarea class="input-xlarge" id="textarea2" cols="90" rows="3" name="pertanyaan"></textarea>
                            <span style="color:red;"><?= form_error('pertanyaan') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Dimensi : </label>
                        <div class="controls">
                            <select id="id_dimensi" data-rel="chosen" name="id_dimensi">
                            <option></option>
                            <?php 
                                foreach($dimensis as $dimensi){
                            ?>
                            <option value="<?php echo $dimensi->id_dimensi;?>"><?php echo $dimensi->dimensi; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                            <span style="color:red;"><?= form_error('id_dimensi') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Variabel : </label>
                        <div class="controls">
                            <select id="variabel" data-rel="chosen" name="variabel">
                            <option></option>
                            <?php 
                                foreach($variabels as $variabel){
                            ?>
                            <option value='<?php echo $variabel;?>'><?php echo $variabel;?></option>
                            <?php
                                }
                            ?>
                            </select>
                            <span style="color:red;"><?= form_error('variabel') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban A : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pila" type="text" value="" name="pila">
                            <span style="color:red;"><?= form_error('pila') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban B : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pilb" type="text" value="" name="pilb">
                            <span style="color:red;"><?= form_error('pilb') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban C : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pilc" type="text" value="" name="pilc">
                            <span style="color:red;"><?= form_error('pilc') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban D : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pild" type="text" value="" name="pild">
                            <span style="color:red;"><?= form_error('pild') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban E : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pile" type="text" value="" name="pile">
                            <span style="color:red;"><?= form_error('pile') ?></span>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="simpan">Save changes</button>
                        <a class="btn" href="<?php echo base_url('Pertanyaan/create'); ?>">Cancel</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!--/span-->
</div>

<?php $this->load->view('layout/footer.php') ?>