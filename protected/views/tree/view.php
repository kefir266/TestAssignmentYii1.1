<?php
/* @var $this TreeController */
/* @var $model Tree */

$this->breadcrumbs=array(
	'Trees'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List  Nodes', 'url'=>array('index')),
	array('label'=>'Create Node', 'url'=>array('create')),
	array('label'=>'Update Tree', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete  Node', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tree', 'url'=>array('admin')),
		array('label'=>'Edit Tree', 'url'=>array('admin_tree')),
);
?>

<h1>View Tree #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'parent_id',
		'name',
	),
)); ?>
