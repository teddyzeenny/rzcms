<br><br>
<?php 
foreach ($servicesList as $service) {
	echo $this->Html->link($service['Service']['title'], array(
		'controller' => 'services',
		'action' => 'edit',
		$service['Service']['id']
	)) . '<br>';
}

?>