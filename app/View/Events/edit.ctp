<p><br>
	<?php 
		echo $this->Form->create('Event', array('enctype' => 'multipart/form-data'));
		echo $this->Form->input('title');
		echo $this->Form->input('lecturer');
		echo $this->Form->input('date');
		echo $this->Form->input('lecturer_website');
		echo $this->Form->input('description');
		echo $this->Form->file('image');
		echo $this->Form->input('id');
		echo $this->Form->end('Edit'); 
		
		foreach ($images as $image) {
			echo $this->Html->link($image['Image']['id'] . '.jpg', '/img/events/' . $image['Image']['id'] . '.jpg');
			echo ' ' . $this->Html->link('(Delete)', array(
				'controller' => 'images',
				'action' => 'delete',
				$image['Image']['id']
			));
			echo '<br>';
		}
	?>
</p>