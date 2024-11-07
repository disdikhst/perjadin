 <!-- Content Row -->
 <div class="row" align="center">

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Surat Tugas</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                             <?php
                                $hitung = count($tb_st);
                                ?>
                             <?php echo $hitung ?>
                         </div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-calendar fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Pegawai yang Tulak</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                             <?php
                                $tungspd = count($tb_spd);
                                ?>
                             <?php echo $tungspd ?>
                         </div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>