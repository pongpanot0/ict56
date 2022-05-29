<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">ประวัติการรับวัคซีน</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- ./col -->
                <?php
                $sql = "SELECT gv.*,v.*,h.* FROM getvaccine gv
                LEFT OUTER JOIN vaccine v ON (gv.getvac_vacid=v.vac_serial)
                LEFT OUTER JOIN hospital h ON (gv.getvac_hosid=h.hos_id)
                WHERE gv.getvac_mem='$id' ";
                $res= mysqli_query($con, $sql);
                $chkrow = mysqli_num_rows($res);
                if ($chkrow >= 1) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $getvac_id = $row['getvac_id'];
                        $vac_brand = $row['vac_brand'];
                        $vac_lot = $row['vac_lot'];
                        $vac_serial = $row['vac_serial'];
                        $getvac_date = $row['getvac_date'];
                        $getvac_seq = $row['getvac_seq'];
                        $hos_name = $row['hos_name'];
                ?>
                        <div class="col-lg-6 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Covid-19 Vaccine</h3>

                                    <p>ชื่ออ้างอิง :<?= $vac_brand; ?></p>
                                    <p>วันที่ได้รับ :<?= $getvac_date; ?></p>
                                    <p>เข็มที่ :<?= $getvac_seq; ?></p>
                                    <p>Lot No. :<?= $vac_lot; ?></p>
                                    <p>Seriral No. :<?= $vac_serial; ?></p>
                                    <p>โรงพยาบาล :<?= $hos_name; ?></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else echo "ไม่พบรายการ" ?>
                <!-- ./col -->

                <!-- ./col -->

                <!-- ./col -->
            </div>




            <!-- /.row -->
            <!-- Main row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->