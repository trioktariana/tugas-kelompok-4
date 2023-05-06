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
                <?php $totalcor = 0; foreach($corporate as $cor) {?>
                <div class="singleBar">
                    <div class="bar">
                        <div class="value">
                            <span><?php echo $cor->jumlah; ?></span>
                        </div>
                    </div>
                    <div class="title"><?php echo $cor->jawaban; ?></div>
                </div>
                <?php $totalcor = $totalcor + $cor->jumlah;} ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!--/span-->

    <div class="widget blue span3" onTablet="span4" onDesktop="span3">					
    <h3><span class="glyphicons magic"><i></i></span>STAKEHOLDER ORIENTATION</h3>
        <hr>
        <div class="content">
            <div class="verticalChart">
                <?php $totalstk = 0; foreach($stakeholder as $stk) {?>
                <div class="singleBar">
                    <div class="bar">
                        <div class="value">
                            <span><?php echo $stk->jumlah; ?></span>
                        </div>
                    </div>
                    <div class="title"><?php echo $stk->jawaban; ?></div>
                </div>
                <?php $totalstk = $totalstk + $stk->jumlah; } ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!--/span-->

    <div class="widget yellow span3" onTablet="span4" onDesktop="span3">
    <h3><span class="glyphicons pie_chart"><i></i></span>OPERATIONAL EXCELLENCE</h3>
        <hr>
        <div class="content">
            <div class="verticalChart">
                <?php $totalopr = 0; foreach($operational as $opr) {?>
                <div class="singleBar">
                    <div class="bar">
                        <div class="value">
                            <span><?php echo $opr->jumlah; ?></span>
                        </div>
                    </div>
                    <div class="title"><?php echo $opr->jawaban; ?></div>
                </div>
                <?php $totalopr = $totalopr + $opr->jumlah; } ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!--/span-->

    <div class="widget green span3" onTablet="span4" onDesktop="span3">
    <h3><span class="glyphicons snowflake"><i></i></span>FUTURE ORIENTATION</h3>
        <hr>
        <div class="content">
            <div class="verticalChart">
                <?php $totalfut = 0;  foreach($future as $fut) {?>
                <div class="singleBar">
                    <div class="bar">
                        <div class="value">
                            <span><?php echo $fut->jumlah; ?></span>
                        </div>
                    </div>
                    <div class="title"><?php echo $fut->jawaban; ?></div>
                </div>
                <?php $totalfut = $totalfut + $fut->jumlah; } ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div><!--/span-->
</div>

<div class="row-fluid hideInIE8 circleStats">

</div>

<?php $this->load->view('layout/footer.php') ?>