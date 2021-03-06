<?php
/* @var $this ProgramController */
/* @var $model Program */


$this->breadcrumbs = array(
    'Programs' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Daftar Program', 'url' => array('index')),
    array('label' => 'Tambah Program', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#program-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

    <h1>Manage Programs</h1>

    <p>
        You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
            &lt;&gt;</b>
        or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
    </p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
    <div class="search-form" style="display:none">
        <?php $this->renderPartial('_search', array(
            'model' => $model,
        )); ?>
    </div><!-- search-form -->

<?php $this->widget('\TbGridView', array(
    'id' => 'program-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'htmlOptions'=> array('class'=>'table-responsive'),
    'columns' => array(
        'programid',
        'id_instansi',
        'nomor_misi',
        'nomor_tujuan',
        'nomor_sasaran',
        'nomor_indikator',
        /*
        'nomor_program',
        'program',
        'pagu_anggaran',
        'target_keuangan',
        'realisasi_keuangan',
        'target_fisik',
        'realisasi_fisik',
        'keterangan',
        */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
)); ?>