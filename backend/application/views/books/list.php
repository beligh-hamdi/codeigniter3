
<h1>Books</h1>

<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>#</th>
        <th>Department Name</th>
        <th>Head of Department</th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i = 0; $i < count($books); ++$i) { ?>
        <tr>
            <td><?php echo ($i+1); ?></td>
            <td><?php echo $books[$i]->title; ?></td>
            <td><?php echo $books[$i]->description; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>