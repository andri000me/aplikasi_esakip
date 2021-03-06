<!--<link href="<?php /*echo Yii::app()->baseUrl;*/ ?>/static/css/jquery.toastmessage.css" rel="stylesheet" media="screen">
<script src="<?php /*echo Yii::app()->baseUrl;*/ ?>/static/js/jquery.toastmessage.js"></script>-->
<!-- Top Bar Starts -->
<div class="top-bar clearfix">
    <div class="page-title">
        <h4>
            <div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
            Dashboard Informasi
        </h4>
    </div>

</div>
<!-- Top Bar Ends -->

<!-- Container fluid Starts -->
<div class="container-fluid">
    <!-- Spacer starts -->
    <div class="spacer-xs">
        <!-- Row Starts -->
        <div class="row no-gutter">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="panel" style="background-color: #1abc9c;">
                    <div class="panel-heading">
                        <h4>Total Visi</h4>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number" style="color: #fff;">
                                <?php echo Yii::app()->format->formatNumber($jmlVisi) ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="panel" style="background-color: #2ecc71;">
                    <div class="panel-heading">
                        <h4>Total Misi</h4>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number primary" style="color: #fff;">
                                <?php echo Yii::app()->format->formatNumber($jmlMisi) ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="panel" style="background-color: #3498db;">
                    <div class="panel-heading">
                        <h4>Total Tujuan</h4>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number primary" style="color: #fff;">
                                <?php echo Yii::app()->format->formatNumber($jmlTujuan) ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="panel" style="background-color: #e67e22;">
                    <div class="panel-heading">
                        <h4>Total Sasaran</h4>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number primary" style="color: #fff;">
                                <?php echo Yii::app()->format->formatNumber($jmlSasaran) ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutter">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="panel" style="background-color: #8e44ad;">
                    <div class="panel-heading">
                        <h4>Total Indikator</h4>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number" style="color: #fff;">
                                <?php echo Yii::app()->format->formatNumber($jmlIndikator) ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="panel" style="background-color: #e74c3c;">
                    <div class="panel-heading">
                        <h4>Total Program</h4>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number primary" style="color: #fff;">
                                <?php echo Yii::app()->format->formatNumber($jmlProgram) ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="panel" style="background-color: #d35400;">
                    <div class="panel-heading">
                        <h4>Total Kegiatan</h4>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number primary" style="color: #fff;">
                                <?php echo Yii::app()->format->formatNumber($jmlKegiatan) ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="panel" style="background-color: #f39c12;">
                    <div class="panel-heading">
                        <h4>Total Aktivitas</h4>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number primary" style="color: #fff;">
                                <?php echo Yii::app()->format->formatNumber($jmlAktivitas) ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="row no-gutter">
                <?php if (Yii::app()->user->isAdmin()) { ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="panel" style="background-color: #6c5ce7;">
                        <div class="panel-heading">
                            <h4>Total User</h4>
                        </div>
                        <div class="panel-body">
                            <div class="daily-stats">
                                <h1 class="number" style="color: #fff;">
                                    <?php echo Yii::app()->format->formatNumber($jmlUser) ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="panel" style="background-color: #00b894;">
                        <div class="panel-heading">
                            <h4>Total OPD</h4>
                        </div>
                        <div class="panel-body">
                            <div class="daily-stats">
                                <h1 class="number primary" style="color: #fff;">
                                    <?php echo Yii::app()->format->formatNumber($jmlOpd) ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php if (Yii::app()->user->isAdminOPD() || Yii::app()->user->isAdmin()) { ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="panel" style="background-color: #993333;">
                        <div class="panel-heading">
                            <h4>Total User OPD</h4>
                        </div>
                        <div class="panel-body">
                            <div class="daily-stats">
                                <h1 class="number primary" style="color: #fff;">
                                    <?php echo Yii::app()->format->formatNumber($jmlUserOpd) ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="panel" style="background-color: #636e72;">
                        <div class="panel-heading">
                            <h4>Total Admin</h4>
                        </div>
                        <div class="panel-body">
                            <div class="daily-stats">
                                <h1 class="number primary" style="color: #fff;">
                                    <?php echo Yii::app()->format->formatNumber($jmlUserAdmin) ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- Row Ends -->
    </div>
    <!-- Spacer ends -->
</div>
<!-- Container fluid ends -->