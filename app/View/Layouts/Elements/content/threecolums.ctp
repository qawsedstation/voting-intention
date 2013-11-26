<div class="row">
<div class="container" >
        <div class="col-lg-4" <?php if(!isset($HeadingCol1)) echo "hidden"; ?> >
          <h2><?php echo $HeadingCol1; ?> </h2>
          <p><?php echo $DescriptionCol1; ?></p>
          <p><a class="btn btn-primary" href="<?php echo $ButtonLinkCol1; ?> "><?php echo $ButtonCol1; ?> &raquo;</a></p>
        </div>
        <div class="col-lg-4" <?php if(!isset ($HeadingCol2)) echo "hidden"; ?> >
          <h2><?php echo $HeadingCol2; ?> </h2>
          <p><?php echo $DescriptionCol2; ?></p>
          <p><a class="btn btn-primary" href="<?php echo $ButtonLinkCol2; ?> "><?php echo $ButtonCol2; ?>  &raquo;</a></p>
       </div>
        <div class="col-lg-4" <?php if(!isset ($HeadingCol3)) echo "hidden"; ?> >
          <h2><?php echo $HeadingCol3; ?> </h2>
          <p><?php echo $DescriptionCol3; ?></p>
          <p><a class="btn btn-primary" href="<?php echo $ButtonLinkCol3; ?> "><?php echo $ButtonCol3; ?>  &raquo;</a></p>
        </div>
		</div>
      </div>