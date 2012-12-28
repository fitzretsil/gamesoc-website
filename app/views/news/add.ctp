<div class='news' style='height: 14px;'>
	<h2>Add Article</h2>
</div>

<div class='form-wide' style='width: 610px'> 
<?php 
echo $form->create('News'); 
echo $form->input('title'); 
echo "<p></p>";
echo $form->input('body', array('class'=>'ckeditor')); 
echo $form->end('Save Article'); 
?> 
</div>
