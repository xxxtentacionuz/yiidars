
<a href="post/create" class="btn btn-success">Person qushish</a>
<div class="container">
    <h1>Personlar</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">famly</th>
            <th scope="col">email</th>
            <th scope="col">age</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row):  ?>
            <tr>

                <th scope="row"><?= $row['id'] ?></th>
                <td><?= $row['firstname'] ?></td>
                <td><?= $row['lastname'] ?></td>
                <td><?= $row['gender'] ?></td>
                <td><?= $row['age'] ?></td>
                <td>
                    <a href="/post/view/?id=<?= $row['id'] ?>" class="btn btn-outline-info">View</a>
                    <a href="/post/update/?id=<?= $row['id'] ?>" class="btn btn-primary">Update</a>
                    <a href="/post/delete/?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>