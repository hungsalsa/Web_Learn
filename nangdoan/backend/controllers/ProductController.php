<?php

namespace backend\controllers;

use Yii;
use backend\models\Product;
use backend\models\ProductSearch;
use backend\models\Group;
use backend\models\Category;
use backend\models\Suppliers;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        $group = new Group();
        $allGroup = ArrayHelper::map($group->getAllGroup(),'idGroups','groupsName');

        $category = new Category();
        $allCategory = $category->getCategoryParent();
        if(empty($allCategory)) { $allCategory =array(); }

        $suplier = new Suppliers();
        $allSupliers = ArrayHelper::map($suplier->getAllSuppliers(),'suppID','companyName');

        $urlImage = Yii::$app->request->post();

        // $img_link = str_replace("http://local.web_learn.vn/nangdoan/", "", $urlImage['Product']['image']);
        

        $time = time();
        $model->created_at = $time;
        $model->updated_at = $time;


        $model->userID = Yii::$app->user->id;


        if ($model->load(Yii::$app->request->post())) {
            $model->image = str_replace("http://local.nangdoan.vn/", "", $urlImage['Product']['image']);
            if($model->save())
                return $this->redirect(['view', 'id' => $model->proID]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'allGroup' => $allGroup,
                'allCategory' => $allCategory,
                'allSupliers' => $allSupliers,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $group = new Group();
        $allGroup = ArrayHelper::map($group->getAllGroup(),'idGroups','groupsName');

        $category = new Category();
        $allCategory = $category->getCategoryParent();
        if(empty($allCategory)) { $allCategory =array(); }

        $suplier = new Suppliers();
        $allSupliers = ArrayHelper::map($suplier->getAllSuppliers(),'suppID','companyName');

        $time = time();
        
        $model->updated_at = $time;
         $urlImage = Yii::$app->request->post();
        if ($model->load(Yii::$app->request->post())) {
            $model->image = str_replace("http://local.nangdoan.vn/", "", $urlImage['Product']['image']);
            if($model->save())
                return $this->redirect(['view', 'id' => $model->proID]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'allGroup' => $allGroup,
                'allCategory' => $allCategory,
                'allSupliers' => $allSupliers,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionList_category($id)
    {
        //count
        $countcategory = Category::find()->where(['group_ID'=>$id])->count();

        $category = Category::find()->where(['group_ID'=>$id])->orderBy('idCate DESC')->all();
        if($countcategory > 0 ){
            foreach ($category as $result) {
                echo "<option value='".$result->idCate."'>".$result->cateName."</option>";
            }
        }else{
            echo "<option>-Hãy tạo danh mục trước-</option>";
        }
    }
}
