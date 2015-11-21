<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
/* @var $this yii\web\View */
$this->title = 'ทักทาย';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'This website is about Yii2 App Advanced.'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'This website is about funny raccoons.'
],'description');
?>
<div class="say">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Hello, <?= Html::encode($message) ?></p>
                <p>
                    ลองพิมพ์ ? ต่อท้าย controller<br />
                    แล้วใช้ param ชื่อ message<br />
                    จากนั้น ใส่ = ต่อด้วยชื่อที่คุณอยากจะใส่<br />
                </p>
                <dl>
                    <dt>ตัวอย่าง : </dt>
                    <dd>http://www.frontend.dev.com:8082/site/say?message=Ohm</dd>
                        
                </dl>
            
            </div><!-- /.col-md-12 -->
            
        </div><!-- /.row -->
        
        <div class="row">
            <div class="col-md-12">
                <p><?= HtmlPurifier::process($this->title) ?></p>
                
            </div><!-- /.col-md-12 -->
            
        </div><!-- /.row -->
    
    </div><!-- /.container -->

</div><!-- /.say -->