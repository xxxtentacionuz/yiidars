<?php use yii\bootstrap5\LinkPager;?>

<div class="container">
    <h1>Personlar</h1>
    <a href="post/create" class="btn btn-success">Post qushish</a>
    <div class="row my-3">
        <form method="get" class="d-flex">
            <input type="search" class="form-control me-2" placeholder="Search" name="search" aria-label="Search">
            <button type="submit" class="btn btn-primary"><i class="bi-search">Search</i></button>
        </form>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Author</th>
            <th scope="col">Catgory</th>
            <th scope="col"><?= $provider->sort->link('title');?></th>
            <th scope="col"><?= $provider->sort->link('body');?></th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($provider->getModels() as $post):  ?>
            <tr>

                <th scope="row"><?= $post->id ?></th>
                <td><?= $post->author->username ?></td>
                <td><?= $post->category->name?></td>
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
    <?php
    echo LinkPager::widget([
                'pagination'=>$provider->pagination,
                'maxButtonCount'=>3,
            ]); ?>
</div>
