<form method="post">
<input type="text" name="title" value ="<?php echo $note->title?>" >
<input type="text" name="content" value ="<?php echo $note->content?>">
<select name="name" id="">
    <?php foreach ($noteTypes as $noteType): ?>
        <option value="<?php echo $noteType->id ?>"><?php echo $noteType->name ?></option>
    <?php endforeach; ?>
</select>
<button>Update</button>
</form>
