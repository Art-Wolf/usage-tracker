<table>
<tr>
<td>ID</td>
<td>Location</td>
<td>Tab</td>
</tr>

<!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($images as $image): ?>
    <tr>
        <td><?php echo $image['Image']['id']; ?></td>
        <td><?php echo $image['Image']['location']; ?></td>
	<td><?php echo $image['Image']['tab']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
echo $this->Html->link('Add Image', array('controller' => 'image', 'action' => 'add'));
?>
