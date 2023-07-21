<?php
/**
 * @var $rows
 */
namespace frontend\controllers;

use frontend\models\MyModel;
use frontend\models\News;
use PhpParser\Node\Expr\New_;
use Yii;
use yii\data\Pagination;
use yii\db\Query;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex($page = 1)
    {
        $model = new News();
        $command = Yii::$app->db->createCommand("select * from news  LIMIT :offset,:limit ");


        $offset = ($page - 1) * 5;
        $command->bindValue(':offset', $offset);
        $command->bindValue(':limit', 5);
        $person = $command->queryAll();
        $count = (new Query())->from('news')->count();
        $data = ceil($count / 5);
        return $this->render('/news/index', ['rows' => $person, 'data' => $data]);


    }

    public function actionCreate()
    {
        $model = new News();
        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());
            if (!$model->validate()) {
                \Yii::$app->session->setFlash('danger', $model->getErrorSummary(true)[0]);
            } else {

                if (!is_null($model->category_id))
                {
                    $commad = \Yii::$app->db->createCommand()->insert('news',
                        [
                            'title' => $model->title,
                            'author_id' => $model->author_id,
                            'description' => $model->description,
                            'category_id' => $model->category_id
                        ])->execute();
                    \Yii::$app->session->setFlash('success', 'Malumotlar bazga qushildi');
                }else
                {
                    $commad = \Yii::$app->db->createCommand()->insert('news',
                        [
                            'title' => $model->title,
                            'author_id' => $model->author_id,
                            'description' => $model->description,
                        ])->execute();
                    \Yii::$app->session->setFlash('success', 'Malumotlar bazga qushildi');
                }


            }
        }
        return $this->render('create',
            [
                'model' => $model
            ]
        );
    }


    public function actionUpdate($id)
    {
        if (!\Yii::$app->request->isPost) {
            $rows = (new Query())
                ->select('*')
                ->from('news')
                ->where('id=:id', [':id' => $id])
                ->one();
            $model = new News();
                $model->title = $rows['title'];
                $model->author_id = $rows['author_id'];
                $model->description = $rows['description'];
                $model->category_id = $rows['category_id'];
                return $this->render('update', ['model' => $model]);

        } else {
            $model = new News();
            $model->load(\Yii::$app->request->post());
            if (!$model->validate()) {
                \Yii::$app->session->setFlash('danger', $model->getErrorSummary(true)[0]);
            } else {
                $commad = \Yii::$app->db->createCommand()->update('news',
                    [
                        'title' => $model->title,
                        'author_id' => $model->author_id,
                        'description' => $model->description,
                        'category_id' => $model->category_id
                    ], "id = $id")->execute();
                $this->redirect('/news/index');
            }

        }

    }


    public function actionView($id)
    {
        $rows = (new Query())
            ->select('*')
            ->from('news')
            ->where("id = $id")
            ->one();
        return $this->render('view', ['row' => $rows]);
    }



    public function actionDelete($id)
    {

        $model = new News();

        $commad = \Yii::$app->db->createCommand()->delete('news', ['id' => $id])
            ->execute();

        $this->redirect('/news/index');
    }
}