<?php

namespace frontend\controllers;
use frontend\models\person2;
use Yii;
use yii\db\Query;
use yii\web\Controller;

    class Person2Controller extends Controller
    {
        public function actionAdd()
        {
//            $users_query = (new Query())->from('person')->one();
//            $users = Person2::find()->one();

            $person = new Person2();
            if ($person->load(\Yii::$app->request->post())) {
                $person->save();
                $person = new Person2();
                Yii::$app->session->setFlash("success", "Qushildi");
            }

            return $this->render('add', ['model' => $person]);

        }


        public function actionUpdate($id)
        {
            $person = person2::findOne($id);
            if (Yii::$app->request->isPost) {
                $person->load(Yii::$app->request->post());
                if ($person->Save()){
                    $this->redirect('add');
                }
            }
            return $this->render('update', ['model' => $person]);
        }


        public function actionDelete($id)
        {
            $person = person2::findOne($id);
            $person->delete();
        }

    }



