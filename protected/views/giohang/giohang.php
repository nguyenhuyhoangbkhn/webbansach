<?php
/* @var $this GiohangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Giohangs',
);


?>

<h1>Giohangs</h1>
<div class="view">
	


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>