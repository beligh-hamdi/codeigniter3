
<h1><?php echo $title ?></h1>

<a href="<?php echo base_url('books/create'); ?>">New Book</a>

<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
        <th>Operation</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo $book['id'] ?></td>
            <td><?php echo $book['title'] ?></td>
            <td><?php echo $book['description'] ?></td>
            <td><a href="<?php echo base_url(); ?>books/view/<?php echo $book['id'] ?>">View</a> |
                <a href="<?php echo base_url(); ?>books/edit/<?php echo $book['id'] ?>">Edit</a> |
                <a href="<?php echo base_url(); ?>books/remove/<?php echo $book['id'] ?>">Remove</a>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>


