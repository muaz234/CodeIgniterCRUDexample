<title><?php echo $title ; ?></title>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<div class="form-group">
<label for"title">Title</label>
<input type="text" name="title" placeholder="Title">
</div>
<br>
<div class="form-group">
<label for="text">Text</label>
<textarea name="text"></textarea><br />
</div>
<div class="form-group">
<input type="submit" name="Create" value="Create new item">
</div>
</form>