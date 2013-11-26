// app/views/elements/headings.ctp
<?php $this->start('heading1'); ?>
<div class="heading1">
    <h2>Heading 1</h2>
</div>
<div class="ul-list1">
    <ul> 
        <li>list item 1</li>
        <li>list item 2</li>
    </ul>
</div>
<?php $this->end(); ?>


<?php $this->start('heading2'); ?>
<div class="heading2">
    <h2>Heading 2</h2>
</div>

<div class="ul-list1">
    <ul> 
        <li>list item 3</li>
        <li>list item 4</li>
    </ul>
</div>
<?php $this->end(); ?>
// end element file

// include the element first before getting block in the views or layout file.
<?php 
    echo $this->element('headings');
?>

// after that you will able to display block anywhere inside view files or layout also with following statements.

<?php
    // for heading first 
    echo $this->fetch('heading1');

    // for heading second.
    echo $this->fetch('heading2');
?>