<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'กานต์ชนก คลินิก',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'หน้าหลัก', 'url' => ['/site/index']],
        
        ['label' => 'ทดสอบ',
                'items' => [
                    ['label' => 'ทักทาย', 'url' => ['/site/say']],
                    '<li class="divider"></li>',
                    ['label' => 'ลงข้อมูล', 'url' => ['/site/entry']],
                    '<li class="divider"></li>',
                    ['label' => 'Gii - ประเทศ', 'url' => ['/country/index']] ,
              ],
        ],

        ['label' => 'เกี่ยวกับ', 'url' => ['/site/about']],
        ['label' => 'ติดต่อเรา', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'ลงทะเบียน', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'ลงชื่อเข้าใช้', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'ออกจากระบบ (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
        
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">
            &copy; Kanchanok Clinic <?= date('Y') ?>
        </p>
  
        <p class="pull-right">
            <?= 
                date('D, d M H:i')
                //=Yii::powered()
            ?>
        </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
