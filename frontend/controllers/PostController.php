<?php
/**
 * @var $rows
 */
namespace frontend\controllers;

use frontend\models\MyModel;
use yii\db\Query;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        $rows = (new Query())
            ->select('*')
            ->from('person')
            ->all();
        return $this->render('index', ['rows' => $rows]);
    }


    public function actionCreate()
    {
        $model = new MyModel();
        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());
            if (!$model->validate()) {

                \Yii::$app->session->setFlash('danger', $model->getErrorSummary(true)[0]);
            } else {
                $commad = \Yii::$app->db->createCommand()->insert('person',
                    [
                        'firstname' => $model->firstname,
                        'lastname' => $model->lastname,
                        'gender' => $model->gender,
                        'age' => $model->age
                    ])->execute();
                \Yii::$app->session->setFlash('success', 'Malumotlar bazga qushildi');
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
                ->from('person')
                ->where('id=:id', [':id' => $id])
                ->one();
            $model = new MyModel();
            $model->firstname = $rows['firstname'];
            $model->lastname = $rows['lastname'];
            $model->gender = $rows['gender'];
            $model->age = $rows['age'];
            return $this->render('update', ['model' => $model]);
        } else {
            $model = new MyModel();
            $model->load(\Yii::$app->request->post());
            if (!$model->validate()) {
                \Yii::$app->session->setFlash('danger', $model->getErrorSummary(true)[0]);
            } else {
                $commad = \Yii::$app->db->createCommand()->update('person',
                    [
                        'lastname' => $model->firstname,
                        'firstname' => $model->lastname,
                        'gender' => $model->gender,
                        'age' => $model->age
                    ], "id = $id")->execute();
                $this->redirect('/post/index');
            }

        }

    }


    public function actionView($id)
    {
        $rows = (new Query())
            ->select('*')
            ->from('person')
            ->where("id = $id")
            ->one();
        return $this->render('view', ['row' => $rows]);
    }



    public function actionDelete($id)
    {

        $model = new MyModel();

        $commad = \Yii::$app->db->createCommand()->delete('person', ['id' => $id])
            ->execute();

        $this->redirect('/post/index');
    }
}