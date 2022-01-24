<?php  if (count($logs) > 0) : ?>
  <div class="logs">
  	<?php foreach ($logs as $log) : ?>
  	  <p><?php echo $log ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>