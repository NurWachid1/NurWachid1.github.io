        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em></a>
                </li>
                <li>Beranda</li>
            </ol>
        </div><!--/.row-->
        <div class="row" style=" margin-top: 10px;">
          <div class="col-lg=12">
            <div class="col-lg=12">
              <div class="panel panel-info">
                <div class="panel-heading" style="text-align: left; font-family: times new romans; ">
                  Selamat Datang! Anda Masuk sebagai <b style="font-family: calibri; color: blue;">Admin</b>. Anda dapat melakukan pengelolan dari seluruh data yang ada di Sekolah.
                </div>


<div class="panel-body">
<div class="panel panel-container">
            <div class="row">
              <a href="?page=user">
                <div class="  col-lg-3"> 
                                    <?php
    $qjumlah=mysqli_query($conn,"SELECT * FROM user ");
    $jumlah=mysqli_num_rows($qjumlah);
        ?>
                    <div class="panel panel-teal panel-widget border-right" style="background-color:#D9EDF7;">
                        <div><center><em class="fa fa-xl fa-user  color-blue"></em>
                            <div class="large"><?php echo $jumlah ?></div>
                            <div class="text-muted">Data Pengguna</div></center>
                        </div>
                    </div>
                
                </div>
  </a>

  <a href="?page=guru">
            <div class="col-xs-6 col-md-3 col-lg-3">
                <?php
    $qjumlah=mysqli_query($conn,"SELECT * FROM guru ");
    $jumlah=mysqli_num_rows($qjumlah);
        ?>
                    <div class="panel panel-teal panel-widget border-right" style="background-color:#D9EDF7;"> 
                        <div><center><em class="fa fa-xl fa-graduation-cap color-blue "></em>
                            <div class="large"><?php echo $jumlah ?></div>
                            <div class="text-muted">Data Guru</div></center>
                        </div>
                      
                    </div>
                </div>
                </a>
                <a href="?page=kritik">
                <div class="col-xs-6 col-md-3 col-lg-3">
                     <?php
    $qjumlah=mysqli_query($conn,"SELECT * FROM kritik ");
    $jumlah=mysqli_num_rows($qjumlah);
        ?>
                    <div class="panel panel-teal panel-widget border-right" style="background-color:#D9EDF7;">
                        <div><center><em class="fa fa-xl fa-clipboard color-blue"></em>
                            <div class="large"><?php echo $jumlah ?></div>
                            <div class="text-muted">Kritik/Saran</div> </center>
                        </div>
                    </div>
                </div>
            </a>
            <a href="?page=berita">
               <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <?php
    $qjumlah=mysqli_query($conn,"SELECT * FROM berita");
    $jumlah=mysqli_num_rows($qjumlah);
        ?>
                    <div class="panel panel-teal panel-widget border-right" style="background-color:#D9EDF7;">
                        <div><center><em class="fa fa-xl fa-info-circle color-blue"></em>
                            <div class="large"><?php echo $jumlah ?></div>
                            <div class="text-muted">Berita</div></center>
                        </div>
                    </div>
                </div>
            </a>
</div>

</div>
    </div>
</div>
</div>
</div>
</div>
</div>