<?php
/* @var $this CategoriesController */
/* @var $model Categories */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Categories', 'url'=>array('index')),
	array('label'=>'Create Categories', 'url'=>array('create')),
	array('label'=>'Update Categories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Categories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categories', 'url'=>array('admin')),
);
?>

<h1>View Categories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'date_created',
	),
)); ?>

<h1>Related Products </h1>

<?php
    
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'products-grid',
	'dataProvider'=>$related_products,

	'columns'=>array(
		'id',
		'name',
		'description',
		'date_created',
		array(
			'class'=>'CButtonColumn',
		),
	),
    )); 

   /* $this->widget('zii.widgets.CDetailView',array(
        'data'=>$related_products,
        'attributes'=>array(
            'id'=>$id,
            'name',
            'description',
            'date_created',
        ),        
    ));*/
?>


