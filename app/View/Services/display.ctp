<br><br>
<?php 
	if (isset($servicesList)) {
		foreach ($servicesList as $service) {
			echo $this->Html->link($service['Service']['title'], array(
				'controller' => 'services',
				'action' => 'display',
				$service['Service']['id']
			)) . '<br>';
		}
	} elseif (!empty($this->request->data)) {
		echo $this->Form->create('Service');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('id');
		echo $this->Form->end('change');	
	}
?>