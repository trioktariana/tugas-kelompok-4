<?php $this->load->view('layout/header.php') ?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url('/'); ?>">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Kuesioner</a></li>
</ul>

<!-- isi konten disini -->
<div class="row-fluid sortable">		
    <form name="form" id="form" method="post">
    <?php
    $urut = 1; 
        foreach($kuesioner as $qna){
    ?>
    <input type="hidden" name="id<?php echo $qna->id_kuesioner; ?>" value='<?php echo $qna->id_kuesioner; ?>'>
        <div class="control-group">
            <label class="control-label"><?php echo $urut; ?>. <?php echo " $qna->pertanyaan"; ?>
            <td></label>
            <div class="controls">
                <label class="radio">
                <input type="radio" name="pilihan<?php echo $qna->id_kuesioner; ?>" 
                    value="A" >A. <?php echo "$qna->pila";?>
                    <br>
                </label>
                <div style="clear:both"></div>
                <label class="radio">
                <input type="radio" name="pilihan<?php echo $qna->id_kuesioner; ?>" 
                    value="B">B. <?php echo "$qna->pilb";?>
                </label>
                <div style="clear:both"></div>
                <label class="radio">
                <input type="radio" name="pilihan<?php echo $qna->id_kuesioner; ?>" 
                value="C">C. <?php echo "$qna->pilc";?>
                </label>
                <div style="clear:both"></div>
                
                <label class="radio">
                <input type="radio" name="pilihan<?php echo $qna->id_kuesioner; ?>" 
                value="D">D. <?php echo "$qna->pild";?>
                </label>
                <div style="clear:both"></div>
                
                <label class="radio">
                <input type="radio" name="pilihan<?php echo $qna->id_kuesioner; ?>" 
                value="E">E. <?php echo "$qna->pile";?>
                </label>
                <label>
        </div>
        </div>
    <?php
        $urut++;
        }
    ?>
    <input type="hidden" name="jumlah" value=<?php echo $urut-1; ?>>
    <tr>
        <td>&nbsp;</td>
        <td><button id="jawaab">Jawab</button></td>
    </tr>
</form>

</div><!--/row-->	

<?php $this->load->view('layout/footer.php') ?>
<script type="text/javascript">
    $("#jawaab").click(function (e){
        e.preventDefault();
        debugger;
        if(confirm('Apakah Anda yakin dengan jawaban Anda?')){
            var hitungJawab = 0;
            var totalSoal = $("input[name=jumlah]").val();
            for (let index = 1; index <= totalSoal; index++) {
                if($("input[name=pilihan" + index + "]:checked").val()){
                    hitungJawab = hitungJawab +1;
                }
            }
            if(hitungJawab < totalSoal){
                alert("Maaf anda belum mengisi secara lengkap, mohon diisi secara lengkap");
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('Kuesioner/process'); ?>",
                    data: $("form").serialize(),
                    dataType: "html",
                    success: function(result){
                        var data = JSON.parse(result);
                        if(!alert(data.message)){
                            window.location.href = "<?php echo base_url('/'); ?>"
                        }
                    },
                    error: function() { alert("Error posting feed."); }
                });
            }
        }
    });
</script>