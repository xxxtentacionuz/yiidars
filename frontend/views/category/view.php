
<div class="container">
    <h1>View</h1>
    <?php echo $category->id . '/' . $category->name;?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Author</th>
            <th scope="col">Catgory</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($category->posts as $post):  ?>
            <tr>

                <th scope="row"><?= $post->id ?></th>
                <td><?= $post->author->username ?></td>
                <td><?= $post->category->name  ?></td>
                <td><?= $post->title ?></td>
                <td><?= $post->body ?></td>
                <td>
                    <a href="/post/view/?id=<?= $post['id'] ?>" class="btn btn-outline-info">View</a>
                    <a href="/post/update/?id=<?= $post['id'] ?>" class="btn btn-primary">Update</a>
                    <a href="/post/delete/?id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
