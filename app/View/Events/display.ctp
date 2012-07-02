<p><br>
	<?php 
		if (isset($categories)) {
			foreach ($categories as $category) {
				echo $this->Html->link($category['Category']['name'], array(
					'controller' => 'events',
					'action' => 'display',
					$category['Category']['id']
				));
				echo '<br>';
			}
		} else {
			if (isset($eventsList)) {
				foreach ($eventsList as $event) {
					echo $this->Html->link($event['Event']['title'], array(
						'controller' => 'events',
						'action' => 'display',
						$event['Event']['category_id'],
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
			}
			echo $this->Form->create('Event');
			echo $this->Form->input('title');
			echo $this->Form->input('lecturer');
			echo $this->Form->input('date');
			echo $this->Form->input('lecturer_website');
			echo $this->Form->input('description');
			echo $this->Form->file('image');
			if (!isset($eventsList)) {
				echo $this->Form->input('id');
			}
			echo $this->Form->end('Edit'); 
		}
	?>
</p>