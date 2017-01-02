<?php
/* @var $this TreeController */
/* @var $model Tree */

$this->breadcrumbs=array(
	'Trees'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List  Nodes', 'url'=>array('index')),
	array('label'=>'Create Node', 'url'=>array('create')),
	array('label'=>'View Tree', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tree', 'url'=>array('admin')),
		array('label'=>'Edit Tree', 'url'=>array('admin_tree')),
);
?>

<h1>Update Tree <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>