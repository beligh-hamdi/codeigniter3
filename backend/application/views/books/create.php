
<h1>Create Book</h1>

<?php echo validation_errors(); ?>

<?php echo form_open('books/create') ?>

<label for="title">Title: </label>
<input type="input" name="title" />

<label for="text">Description: </label>
<textarea name="description"></textarea>

<label for="image">Image: </label>
<input type="input" name="image" />


<input type="submit" name="submit" value="Create" />

</form>
