<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome  <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<a href="https://docs.google.com/document/d/1TCEHAammCv3kxFw_VFzEN9ClWtuXYSu2ffl1ceek6ew/edit">Тестовое задание для соискателей на позицию
	PHP-developer Yii/Yii 2</a>

<h2>Task 1</h2>

<?php foreach($numbers as $number): ?>

<p><?= $number ?></p>

<?php endforeach; ?>

<h2>Task 2</h2>
<a href="index.php?r=tree/admin_tree">Tree</a>