<a href="index.php?page=note-create">Create New Note</a>
<table border="5">
    <thead>
    <th>STT</th>
    <th>Title</th>
    <th>Content</th>
    <th>Name</th>
    <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php if (!empty($notes)) {
        foreach ($notes as $note):?>
        <tr>
            <td><?php echo $note->id?></td>
            <td><?php echo $note->title?></td>
            <td><?php echo $note->content?></td>
            <td><?php echo $note->name?></td>
            <td><a href="index.php?page=note-detail&id=<?php echo $note->id?>">Detail</a></td>
            <td><a href="index.php?page=note-edit&id=<?php echo $note->id?>"></a>Edit</td>
            <td><a onclick="return confirm('Are you sure?')" href="index.php?page=note-delete&id=<?php echo $note->id?>">Delete</a></td>

        </tr>
        <?php endforeach;
    } ?>
    </tbody>
</table>