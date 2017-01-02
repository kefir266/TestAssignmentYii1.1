<?php
/* @var $this TreeController */
/* @var $model Tree */


$this->breadcrumbs=array(
	'Trees'=>array('index'),
	'Manage',
);

$this->menu=array(
		array('label' => 'List  Nodes', 'url' => array('index')),
		array('label' => 'Create Node', 'url' => array('create')),
		array('label' => 'Manage Tree', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tree-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Edit Trees</h1>

<?php $this->widget('application.views.tree.TreeWidget',['tree' => $tree]) ?>


