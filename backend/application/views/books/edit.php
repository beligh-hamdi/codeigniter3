
<h1>Create Book</h1>

<?php echo validation_errors(); ?>

<?php echo form_open('books/edit/'.$book->id) ?>

<label for="title">Title: </label>
<input type="input" name="title" value="<?php echo $book->title; ?> "/>

<label for="text">Description: </label>
<textarea name="description">v<?php echo $book->description; ?></textarea>

<input type="submit" name="submit" value="Edit" />

</form>
