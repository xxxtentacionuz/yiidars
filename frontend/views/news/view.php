
    <h1>Yangliklar</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nomi</th>
            <th scope="col">Muhharir</th>
            <th scope="col">Malumot</th>
            <th scope="col">Category</th>

        </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row"><?= $row['id'] ?></th>
                <td><?= $row['title'] ?></td>
                <td><?= $row['author_id'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><?= $row['category_id'] ?></td>
            </tr>
        </tbody>
    </table>
</div>

