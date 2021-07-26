<?php 

if(count($orders) >0): ?>
<div class="errors">
    <?php echo "ORDER ID"; foreach ($orders as $order): ?>
        <p><?php echo $order; ?></p>
    <?php endforeach ?>
    </div>
<?php endif ?>