<!-- Top Bar Starts -->
 <?php 
          $id_instansi =Yii::app()->user->getOpd();
        $visi=Visi::model()->find('id_instansi=:id_instansi', array('id_instansi' => $id_instansi));
        $instansi=Opd::model()->find('id_instansi=:id_instansi', array('id_instansi' => $id_instansi));
        
        $misi = Misi::model()->findAll(array("condition"=>"idinstansi='".$id_instansi."'"));
      
        ?>
<div class="top-bar clearfix">
    <div class="page-title">
        <h4>
            <div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
            <?php echo $title?> <?php echo strtoupper($instansi["nama_instansi"]);?> <?php echo Yii::app()->user->getTahun(); ?>
        </h4>
    </div>
</div>

<!-- Container fluid Starts -->
<div class="container-fluid">

    <!-- Spacer starts -->
    <div class="spacer-xs">
        <!-- Row Starts -->
         
        <h2 class="text-center">VISI</h2>
        <p class="text-center">"<?php echo $visi["visi"];?>"</p>

        <table class="table table-bordered">
            <tr>
        <?php 
        $no=1;
         foreach($misi as $misi_row){
                echo "<td>
                <h5 class='text-center'>MISI ".$no."</h5>
                ".$misi_row->misi."</td>";
                $no++;
        }

        ?>
        <tr><td colspan="<?php echo count($misi);?>">  <h3 class="text-center">KEPALA <?php echo strtoupper($instansi["nama_instansi"]);?></h3>
</td></tr>
    </tr>
     <tr>
        <?php 
        $no=1;
         foreach($misi as $misi_row){

              $tujuan = Tujuan::model()->find(array("condition"=>"id_instansi='".$id_instansi."' and nomor_misi='".$misi_row->nomisi."'"));

            echo "<td><h6 class='text-left'>TUJUAN ".$no." : ".$tujuan->tujuan." </h6></td>";
            $no++;
        }

        ?>

    </tr>
    <tr>
        <?php 
        $no=1;
         foreach($misi as $misi_row){

              $tujuan = Tujuan::model()->find(array("condition"=>"id_instansi='".$id_instansi."' and nomor_misi='".$misi_row->nomisi."'"));

               $sasaran = Sasaran::model()->find(array("condition"=>"id_instansi='".$id_instansi."' and nomor_misi='".$misi_row->nomisi."' and nomor_tujuan='".$tujuan->nomor_tujuan."'"));

            echo "<td><h6 class='text-left'>SASARAN ".$no." : ".@$sasaran->sasaran." </h5></td>";
            $no++;
        }

        ?>

    </tr>
       <tr>
        <?php 
        $no=1;
         foreach($misi as $misi_row){

              $tujuan = Tujuan::model()->find(array("condition"=>"id_instansi='".$id_instansi."' and nomor_misi='".$misi_row->nomisi."'"));

               $sasaran = Sasaran::model()->find(array("condition"=>"id_instansi='".$id_instansi."' and nomor_misi='".$misi_row->nomisi."' and nomor_tujuan='".$tujuan->nomor_tujuan."'"));

               $indikator = Indikator::model()->find(array("condition"=>"id_instansi='".$id_instansi."' and nomor_misi='".$misi_row->nomisi."' and nomor_tujuan='".$tujuan->nomor_tujuan."' and nomor_sasaran='".$sasaran->nomor_sasaran."'"));


            echo "<td><h6 class='text-left'>".@$indikator->indikator." </h5></td>";
            $no++;
        }

        ?>

    </tr>
</table>

  
    

    </div>


</div>
