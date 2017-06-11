<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Wishlist;
use frontend\models\WishlistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WishlistController implements the CRUD actions for Wishlist model.
 */
class WishlistController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Wishlist models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WishlistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Wishlist model.
     * @param integer $id
     * @return mixed
     */
    
    public function actionAdd($id)
    {
// die('sadad'.$id.'--'.Yii::$app->user->id);
        $model = new Wishlist();
        $model->user_id = Yii::$app->user->id;
        $model->pro_id = $id;
        $model->date_create = time();
        $model->status = 1;
        if(!$model->save()){
            echo "loi";
        }

    }

    
}
