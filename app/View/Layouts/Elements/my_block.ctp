<?php $this->start('my_block'); ?>
    <h1>Hello Block!</h1>
    <p>This is a block of content</p>
    <p>Page title: <?php echo $title_for_layout; ?></p>
<?php $this->end(); ?>