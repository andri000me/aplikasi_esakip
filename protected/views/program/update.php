<?php
/* @var $this ProgramController */
/* @var $model Program */
?>

<?php
$this->breadcrumbs = array(
    'Programs' => array('index'),
    $model->programid => array('view', 'id' => $model->programid),
    'Update',
);

$this->menu = array(
    array('label' => 'Daftar Program', 'url' => array('index')),
    array('label' => 'Tambah Program', 'url' => array('create')),
    array('label' => 'View Program', 'url' => array('view', 'id' => $model->programid)),
);
?>

<div class="top-bar clearfix">
    <div class="page-title">
        <h4>
            <div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
            Update Data Program
        </h4>
    </div>
    <div class="pull-right" id="mini-nav-right">
        <?php
        echo TbHtml::buttonDropdown('Aksi', $this->menu, array('split' => false, 'dropup' => false, 'menuOptions' => array('pull' => TbHtml::PULL_RIGHT)));;
        ?>
    </div>
</div>
<div class="container-fluid">
    <div class="spacer-xs">

        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>
