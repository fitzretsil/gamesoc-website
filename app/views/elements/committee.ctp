<?php $committee = $this->requestAction('/users/committee/'); ?>
<h2>The Committee</h2>

<div id='committee'>
        <div class='line'>
	<?php foreach ( $committee as $member ) { ?>      
          <div class='member'>
			<?php $image = file_exists('img/users/' . $member['User']['id'] . '.png') ? 'users/' . $member['User']['id'] . '.png' : 'unknown.png'; ?>
                   	<?php echo $this->Html->image( $image ); ?>
			<div class='member-text'>
                                <?php echo $member['User']['first_name'] . " " . $member['User']['last_name']; ?><br />
                                <?php echo $member['User']['subtitle']; ?><br />
                                <?php echo $member['User']['email']; ?>
                        </div>
                </div>
	<?php } ?>
        </div>
</div>
