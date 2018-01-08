<?php

namespace app\modules\testModul\controllers;

use yii;
use yii\web\Controller;
use app\modules\testModul\models\formClient;
/**
 * Default controller for the `client` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionForm()
    {
        $formTitle = 'Новый клиент';
        $newClient = new formClient();
        if( $newClient->load(Yii::$app->request->post()) ){
            if( $newClient->save() ){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Данные указаны неверно');
            }
        }
        return $this->render('form',compact('formTitle','newClient'));
    }
    
    public function actionEdit($id){
        $formTitle = 'Редактирование данных';
        $newClient = formClient::find()->where(['id' => $id])->one();
        if( $newClient->load(Yii::$app->request->post()) ){
            if( $newClient->update() ){
                return($this->actionList());
            }else{
                Yii::$app->session->setFlash('error', 'Данные указаны неверно');
            }
        }else{
            return $this->render('edit',compact('formTitle','newClient'));
        }
    }

    public function actionDelete($id){
        $Client = formClient::find()->where(['id' => $id])->one();
        $Client->delete();
        return($this->actionList());
    }

    
    public function actionList()
    {
        $Clients = formClient::find()->all();
        return $this->render('list',compact('Clients'));
    }
    
    
}
