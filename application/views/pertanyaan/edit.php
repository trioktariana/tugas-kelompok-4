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
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Edit Data Pertanyaan</h2>
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
                            <textarea class="input-xlarge" id="textarea2" cols="90" rows="3" name="pertanyaan"> <?php echo $pertanyaan->pertanyaan;?> </textarea>
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
                                <option value="<?php echo $dimensi->id_dimensi;?>" <?php if($pertanyaan->id_dimensi == $dimensi->id_dimensi){echo "selected";}?> ><?php echo $dimensi->dimensi; ?></option>
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
                            <option value='<?php echo $variabel;?>' <?php if($pertanyaan->variabel == $variabel){echo "selected";}?> ><?php echo $variabel;?></option>
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
                            <input class="input-xlarge focused" id="pila" type="text" value="<?php echo $pertanyaan->pila;?>" name="pila">
                            <input  id="id_kuesioner" type="hidden" value="<?php echo $pertanyaan->id_kuesioner;?>" name="id_kuesioner">
                            <span style="color:red;"><?= form_error('pila') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban B : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pilb" type="text" value="<?php echo $pertanyaan->pilb;?>" name="pilb">
                            <span style="color:red;"><?= form_error('pilb') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban C : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pilc" type="text" value="<?php echo $pertanyaan->pilc;?>" name="pilc">
                            <span style="color:red;"><?= form_error('pilc') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban D : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pild" type="text" value="<?php echo $pertanyaan->pild;?>" name="pild">
                            <span style="color:red;"><?= form_error('pild') ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Jawaban E : </label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="pile" type="text" value="<?php echo $pertanyaan->pile;?>" name="pile">
                            <span style="color:red;"><?= form_error('pile') ?></span>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="simpan">Save changes</button>
                        <a class="btn" href="<?php echo base_url('Pertanyaan'); ?>">Cancel</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!--/span-->
</div>

<?php $this->load->view('layout/footer.php') ?>