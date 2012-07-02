<p><br>
	<?php 
		foreach ($categories as $category) {
			echo $this->Html->link($category['Category']['name'], array(
				'controller' => 'events',
				'action' => 'display',
				$category['Category']['id']
			));
			echo '<br>';
		}
	?>
</p>