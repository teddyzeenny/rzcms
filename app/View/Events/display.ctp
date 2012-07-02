<p><br>
	<?php 
		foreach ($eventsList as $event) {
			echo $this->Html->link($event['Event']['title'], array(
				'controller' => 'events',
				'action' => 'edit',
				$event['Event']['id']
			));
			echo ' ';
			echo $this->Html->link('(Delete)', array(
				'controller' => 'events',
				'action' => 'delete',
				$event['Event']['id']
			));
			echo '<br>';
		}

		echo $this->Form->create('Event', array('enctype' => 'multipart/form-data'));
		echo $this->Form->input('title');
		echo $this->Form->input('lecturer');
		echo $this->Form->input('date');
		echo $this->Form->input('lecturer_website');
		echo $this->Form->input('description');
		echo $this->Form->end('Add');
	?>
</p>