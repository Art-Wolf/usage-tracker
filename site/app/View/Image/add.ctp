<h1>Add Image</h1>

<?php
echo $this->Form->create('Image');
echo $this->Form->input('location');
echo $this->Form->input('tab');
echo $this->Form->end('Save');
?>
