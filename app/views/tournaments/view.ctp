<div class="tournaments view">
<h2><?php  __($tournament['Tournament']['name']);?></h2>
<p><?php echo $this->Html->link( 'back to Tournaments', array('controller'=>'tournaments', 'action'=>'index') ); ?></p>
	<table width="100%" cellspacing="0">
		<tr>
			<td width="50%"><?php echo $image; ?></td>
			<td width="50%">
				<dl><?php $i = 0; $class = ' class="altrow"';?>
					<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Game'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class;?>>
						<?php echo $tournament['Tournament']['game']; ?>
						&nbsp;
					</dd>
					<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('When'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class;?>>
						<?php echo $this->Time->niceShort( $tournament['Tournament']['time'] ); ?>
						&nbsp;
					</dd>
					<?php if ( $tournament['Tournament']['spaces'] > 0 ) { ?>
						<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Spaces Available'); ?></dt>
						<dd<?php if ($i++ % 2 == 0) echo $class;?>>
							<?php echo $tournament['Tournament']['spaces']; ?>
							&nbsp;
						</dd>
					<?php } ?>
				</dl>

				<h4>Results</h4>
				<dl><?php $i = 0; $class = ' class="altrow"';?>
					<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Place'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class;?>>
						Sev Kindiakov
						&nbsp;
					</dd>
					<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Second Place'); ?></dt>
                                        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                                                Aleks Lukic
                                                &nbsp;
                                        </dd>
					<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Third Place'); ?></dt>
                                        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                                                Luke Jagger             
                                                &nbsp;
                                        </dd>
				</dl>
			</td>
		</tr>
	</table>
	<p><?php echo $description; ?></p>
</div>
