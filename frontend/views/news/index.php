<?php


use yii\bootstrap5\LinkPager; ?>

<a href="/news/create" class="btn btn-success">Person qushish</a>
<div class="container">
    <h1>Yangiliklar</h1>
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
        <?php foreach ($rows as $row):  ?>
            <tr>

                <th scope="row"><?= $row['id'] ?></th>
                <td><?= $row['title'] ?></td>
                <td><?= $row['author_id'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><?= $row['category_id'] ?></td>
                <td>
                    <a href="/news/view/?id=<?= $row['id'] ?>" class="btn btn-outline-info">View</a>
                    <a href="/news/update/?id=<?= $row['id'] ?>" class="btn btn-primary">Update</a>
                    <a href="/news/delete/?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <?php for ($page = 1; $page<=$data;$page++):?>
                <li class="page-item"><a class="page-link" href="http://yiifront.dars/news/index?page=<?=$page?>"><?=$page?></a></li>
            <?php endfor;?>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

</div>