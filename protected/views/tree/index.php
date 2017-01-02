<?php
/* @var $this TreeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trees',
);

$this->menu=array(
	array('label'=>'Create Node', 'url'=>array('create')),
	array('label'=>'Manage Tree', 'url'=>array('admin')),
		array('label'=>'Edit Tree', 'url'=>array('admin_tree')),
);
?>

<h1>Trees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
