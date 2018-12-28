<?php
/* @var $this SasaranController */
/* @var $model Sasaran */
?>

<?php
$this->breadcrumbs = array(
    'Sasarans' => array('index_eselon_tiga'),
    $model->id,
);

$this->menu = array(
    array('label' => 'Daftar Sasaran', 'url' => array('eselonEmpat')),
    array('label' => 'Tambah Sasaran', 'url' => array('createEselonEmpat')),
    array('label' => 'Update Sasaran', 'url' => array('updateEselonEmpat', 'id' => $model->id)),
    array('label' => 'Hapus Sasaran', 'url' => '#', 'linkOptions' => array('submit' => array('deleteEselonEmpat', 'id' => $model->id), 'confirm' => 'Anda yakin menghapus data ini ?')),
);
?>

<div class="top-bar clearfix">
    <div class="page-title">
        <h4>
            <div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
            Data Sasaran Eselon 4
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
        <?php $this->widget('zii.widgets.CDetailView', array(
            'htmlOptions' => array(
                'class' => 'table table-striped table-condensed table-hover',
            ),
            'data' => $model,
            'attributes' => array(
                'id',
                'datainstansi.nama_instansi',
                'datamisi.misi',
                'datatujuan.tujuan',
                'datasasaran.sasaran',
                'datasasaraneselontiga.sasaran',
                'datapejabateselontiga.nama_jabatan',
                'nomor_sasaran',
                'sasaran',
                'datapejabateselonempat.nama_jabatan',
                array(
                    'name' => 'sasaran_strategis',
                    'value' => $model->sasaran_strategis == 1 ? "Ya" : "Tidak",
                ),
                'capaian_sasaran',
            ),
        )); ?>
    </div>
</div>
