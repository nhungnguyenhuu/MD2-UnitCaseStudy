<form method="post">
    <input type="text" name="title" placeholder="Nhap tieu de">
    <input type="text" name="content" placeholder="Nhap noi dung tieu de">
    <select name="name" id="">
        <?php foreach ($noteTypes as $noteType): ?>
            <option value="<?php echo $noteType->id ?>"><?php echo $noteType->name ?></option>
        <?php endforeach; ?>
    </select>
    <button>Create</button>
</form>
