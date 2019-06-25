<?php
/**
 * Created by PhpStorm.
 * User: pomazkinis
 * Date: 30.05.2019
 * Time: 15:46
 *
 * @var $this \yii\web\View
 * @var $data array
 */

use yii\helpers\Html;
use yii\helpers\Url;
use ispomazkin\chevrolet_america\ChevroletAmericaAssetBundle;

ChevroletAmericaAssetBundle::register($this);

?>
<?=Html::tag('h1',$this->title)?>
<table class="table table-bordered table responsive">
    <tr>
        <th>Категория</th>
    </tr>
    <?php foreach($data['categories'] as $category):?>
        <tr>
            <td><?=Html::a($category['descr2'],Url::to(['chevrolet-america/groups','year_url'=>$data['model_url'],'category_url'=>$category['url']]))?></td>
        </tr>
    <?php endforeach;?>
</table>

