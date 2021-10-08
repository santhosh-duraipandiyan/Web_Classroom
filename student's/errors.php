
<?php  if (count($errors) > 0) : ?>
  <div class="error" style="width: 92%; 
  margin: 0px auto; 
  padding: 10px; ; 
  color: #a94442; 
  border-radius: 5px;">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>