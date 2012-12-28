<div class='news' style='height: 14px'>
	<h2>Add Hardware</h2>
</div>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum lectus at lectus semper vel mollis mauris convallis. Phasellus consequat 
lobortis fringilla. Sed turpis tellus, ultrices vel ornare nec, congue ac lacus. Pellentesque eu libero ligula. Nulla at mi leo. Nam luctus, dui eget 
posuere accumsan, justo orci volutpat tortor, porta lacinia nisl augue ac mauris. Duis sed sem id tortor rhoncus molestie. Praesent et quam in est 
dapibus venenatis quis ut mauris. Aenean pulvinar turpis id justo rhoncus quis molestie dolor posuere. Sed ipsum arcu, pulvinar eu euismod at, 
pretium vitae nulla. Praesent faucibus dui id justo consequat feugiat.</p>

<div id='form'>
	<div class="hardwares form">
	<?php echo $this->Form->create('Hardware');?>
		<?php
			echo $this->Form->input('type', array( 'type' => 'select', 'options' => array('computer' => 
'Computer', 'xbox' => 'Xbox 360', 'ps3' => 'PS3', 'wii' => 'Wii', '' => 'Other')));
			echo $this->Form->input('name');
			echo $this->Form->input('cpu', array('label'=>'CPU'));
			echo $this->Form->input('ram', array('label'=>'Memory'));
			echo $this->Form->input('hdd', array('label'=>'Storage Capacity'));
		?>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>
</div>
