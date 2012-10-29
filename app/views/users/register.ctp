<div class="news">
<h2>Join GameSoc</h2>
<div id='join' class='news-text'>
<?php echo $this->Form->create('User');?>
        <?php
		echo "<div class='join_text'>Membership of <strong>Edinburgh University Computer Gaming Society</strong> is open to students 
and non-students alike, and will give you <strong>free</strong>, or reduced, entry fee to all Society organised LANs &amp; console events, 
plus access to our gaming server - Trogdor - and <strong>discounts</strong> at Chips and The Ministry of Gaming.
<p>The society's weekly pub night is open to anyone wanting to come along and find out some more about <strong>GameSoc</strong> before joining.</p>
</div>";
                echo $this->Form->input('username');
                echo $this->Form->input('password');
                echo $this->Form->input('first_name');
                echo $this->Form->input('last_name');
                echo $this->Form->input('gamertag');
                echo $this->Form->input('email');
                echo $this->Form->input('matriculation_number');
                echo $this->Form->input('year');
                echo $this->Form->input('degree');
                echo $this->Form->input('university');
        ?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
</div>
