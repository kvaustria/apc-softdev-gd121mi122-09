<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'You have successfully finished the application!';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <br/>

    <h4>You can now view your profile and update if you need to have edit some changes on your profile.</h4><hr/>

     <p><a class="btn btn-default" href="http://localhost/module1/frontend/web/index.php?r=personal%2Fview&id=10" target="_blank">View Personal Background &raquo;</a></p><br>
     <p><a class="btn btn-default" href="http://localhost/module1/frontend/web/index.php?r=academic%2Fview&id=2" target="_blank">View Academic Background &raquo;</a></p><br>
     <p><a class="btn btn-default" href="http://localhost/module1/frontend/web/index.php?r=college%2Fview&id=4" target="_blank">View College Plan &raquo;</a></p><br/>
     <p><a class="btn btn-default" href="http://localhost/module1/frontend/web/index.php?r=family%2Fview&id=2" target="_blank">View Family Background &raquo;</a></p><br/>
     <p><a class="btn btn-default" href="http://localhost/module1/frontend/web/index.php?r=fileserver%2Fview&id=12" target="_blank">View Other Requirements &raquo;</a></p>


  <!--  <p>This is the About page. You may modify the following file to customize its content:</p> 

    <code><?= __FILE__ ?></code> -->
</div>
