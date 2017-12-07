<?php

use yii\helpers\Html;
use frontend\models\Campaign;
use frontend\models\CampaignRewards;
use \frontend\models\CampaignStory;
use frontend\models\CampaignYourself;

/* @var $this yii\web\View */
/* @var $model frontend\models\Campaign */

$this->title = 'Start a Campaign';
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-new">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $model = new Campaign(); 
          $modelReward = new CampaignRewards(); 
          $modelStory = new CampaignStory();
          $modelYourself = new CampaignYourself();
          ?>
    <?php
    $wizard_config = [
	'id' => 'stepwizard',
	'steps' => [
		1 => [
			'title' => 'Project Details',
			'icon' => 'glyphicon glyphicon-user',
			'content' => $this->render('_form',[
                            'model' => $model,
                            ]),
			'buttons' => [
				'next' => [
					'title' => 'Forward', 
					'options' => [
						'class' => 'disabled'
					],
				 ],
			 ],
		],
		2 => [
			'title' => 'Rewards',
			'icon' => 'glyphicon glyphicon-gift',
			'content' => $this->render('_formReward',[
                            'model' => $modelReward,
                            ]),
		],
                3 => [
			'title' => 'Story',
			'icon' => 'glyphicon glyphicon-film',
			'content' => $this->render('_formStory',[
                            'model' => $modelStory,
                            ]),
		],
                4 => [
			'title' => 'About yourself',
			'icon' => 'glyphicon glyphicon-education',
			'content' => $this->render('_formYourself',[
                            'model' => $modelYourself,
                            ]),
		],
	],
	'complete_content' => "You are done!", // Optional final screen
	//'start_step' => 2, // Optional, start with a specific step
];
?>

<?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); ?>

</div>
