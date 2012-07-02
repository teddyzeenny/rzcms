<br><br>
<?php 	
	echo $this->Form->create('Service');
	echo $this->Form->input('id');
	echo $this->Form->input('title');
	echo $this->Form->input('content');
	echo $this->Form->end('change');	
?>