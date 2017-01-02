<?php
/* @var $this TreeController */
/* @var $model Tree */

$this->breadcrumbs=array(
	'Trees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List  Nodes', 'url'=>array('index')),
	array('label'=>'Manage Tree', 'url'=>array('admin')),
		array('label'=>'Edit Tree', 'url'=>array('admin_tree')),
);
?>

<h1>Create Node</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>