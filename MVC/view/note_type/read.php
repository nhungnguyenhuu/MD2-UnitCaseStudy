<a href="index.php?page=note_type-create">Create New Note_Type</a>
<table border="5">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Description</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($noteTypes as $key=> $noteType):?>
    <tr>
        <td><?php  echo $key+1 ?></td>
        <td><?php echo $noteType->name ?></td>
        <td><?php echo $noteType->description ?></td>
        <td><a href="index.php?page=note_type-edit&id=<?php echo $noteType->id?>">Edit</a></td>
        <td><a href="index.php?page=note_type-detail&id=<?php echo $noteType->id?>">Detail</a></td>
        <td><a onclick="return confirm('Are you sure?')" href="index.php?page=note_type-delete&id=<?php echo $noteType->id?>">Delete</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>