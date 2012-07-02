<?php 
	echo $this->Form->create('Page', array('action' => 'index'));
	echo $this->Form->input('title');
	echo $this->Form->input('content');
	echo $this->Form->input('id');
	echo $this->Form->end('Change');
?>