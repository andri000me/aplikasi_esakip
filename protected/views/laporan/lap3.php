<?php
/**
 * Author: Abdi-Iwan
 * Date: 9/7/2017 2:35 AM
 * Build For : Gabungan-BIT
 */
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="Description" content="<?php echo CHtml::encode($this->pageTitle); ?>">
        <meta name="Author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=9;FF=3;OtherUA=4">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl ?>/static/css/theme.css">
    </head>
    <body style="width:2200px;">
    <div class="row text-center" style="font-weight:bold;">
        <div class="col-sm-12 form-inline">
            Laporan Efisiensi Penggunaan Sumber Daya Tahun <?php echo Yii::app()->user->getTahun(); ?><BR>
            <?php echo ucwords(Yii::app()->user->getNamaOpd()); ?><BR>
            Pemerintah Daerah Kabupaten Sukabumi<BR>
        </div>
    </div>
    <div class="row" style="margin: 0 auto;">
        <div class="row" style="margin: 0 auto;">
            <table class="table table-bordered table-hover table-responsive table-condensed">
                <thead style="background-color:#C5C5EC;font-weight:bold;">
                <tr>
                    <th class="text-center" style="width:50px;">No.</th>
                    <th class="text-center" style="width:300px;">Sasaran</th>
                    <th class="text-center" style="width:300px;">Indikator</th>
                    <th class="text-center" style="width:100px;">% Capaian Kinerja</th>
                    <th class="text-center" style="width:100px;">% Penyerapan Anggaran</th>
                    <th class="text-center" style="width:100px;">Tingkat Efisiensi</th>
                </tr>
                <tr>
                    <th class="text-center">1</th>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
                    <th class="text-center">5</th>
                    <th class="text-center">6</th>
                </tr>
                </thead>
            </table>
        <BR><BR>
        <table>
            <tr>
                <?php //keterangan_nilai() ?>
            </tr>
        </table>
    </div>
    </body>
    </html>
<?php
/**
 * File Name: laporan.php
 */
?>