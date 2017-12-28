<?php
use yii\helpers\Html;
use yii\bootstrap\Carousel;
use yii\bootstrap\ButtonGroup;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?= Carousel::widget([
            'items' => [

                [
                    'content' =>  Html::img('@web/img/carousel/1.png', ['alt'=>Yii::$app->name]),
                    'caption' => Html::tag('h3','This is title') . Html::tag('p','textdomain'),
                    //'options' => [...],
                ],

                [
                    'content' =>  Html::img('@web/img/carousel/2.png', ['alt'=>Yii::$app->name]),
                    'caption' => '<h4>ededitle</h4><p>This is the caption text</p>',
                    //'options' => [...],
                ],
            ]
        ]); ?>


        <br><br>
        <div class="container">
             <div class="card-viboco">
                  <img src="http://lorempixel.com/350/175/" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text"><?= substr("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est expedita adipisci cupiditate necessitatibus maxime id voluptatum animi molestiae, quasi cum suscipit nostrum totam vero natus provident sit at minima consequuntur!",0,200) . "..." ?></p>
                    <a href="#" class="btn">Ver màs</a>
                  </div>
            </div>
             <div class="card-viboco">
                  <img src="http://lorempixel.com/350/175/" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est expedita adipisci cupiditate necessitatibus maxime id voluptatum animi molestiae, quasi cum suscipit nostrum totam vero natus provident sit at minima consequuntur!.</p>
                    <a href="#" class="btn">Ver màs</a>
                  </div>
            </div>
             <div class="card-viboco">
                  <img src="http://lorempixel.com/350/175/" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet</p>
                    <a href="#" class="btn">Ver màs</a>
                  </div>
            </div>
             <div class="card-viboco">
                  <img src="http://lorempixel.com/350/175/" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est expedita adipisci cupiditate necessitatibus maxime id voluptatum animi molestiae, quasi cum suscipit nostrum totam vero natus provident sit at minima consequuntur!.</p>
                    <a href="#" class="btn">Ver màs</a>
                  </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                
                </div>
            </div>
        </div>
        <br><br>
</div>
