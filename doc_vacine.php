<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">ใบรับรองการฉีดวัคซีน</h1>
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

                <div class="col-lg-12 col-12">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>Covid-19 Vaccine</h3>
                            <p>เอกสารรับรองการได้รับวัคซีน ป้องกันโควิด19</p>
                            <p>ชื่อ - สกุล : <?= $fname; ?> <?= $lname; ?> </p>
                            <p>วัน/เดือน/ปีเกิด : <?= $hbd; ?></p>
                            <p>เพศ : <?= $sex; ?></p>
                            <p>เบอร์ติดต่อ : <?= $phone; ?></p>
                        </div>
                        <hr>
                        <table border="1" class="table table-primary">
                            <tr>
                                <td>เข็มที่</td>
                                <td>วันที่ได้รับวัคซีน</td>
                                <td>ชื่อวัคซีน </td>
                                <td>รุ่นการผลิต</td>
                                <td>หน่วยบริการ</td>
                            </tr>
                            <?php
                            $sql = "SELECT gv.*,v.*,h.* FROM getvaccine gv
                LEFT OUTER JOIN vaccine v ON (gv.getvac_vacid=v.vac_serial)
                LEFT OUTER JOIN hospital h ON (gv.getvac_hosid=h.hos_id)
                WHERE gv.getvac_mem='$id' ";
                            $res = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_assoc($res)) {
                                $getvac_id = $row['getvac_id'];
                                $vac_brand = $row['vac_brand'];
                                $getvac_date = $row['getvac_date'];
                                $getvac_seq = $row['getvac_seq'];
                                $vac_lot = $row['vac_lot'];
                                $vac_serial = $row['vac_serial'];

                                $hos_name = $row['hos_name'];
                            ?>
                                <tr>
                                    <td><?= $getvac_seq; ?></td>
                                    <td><?= $getvac_date; ?></td>
                                    <td><?= $vac_brand; ?> </td>
                                    <td><?= $vac_lot; ?></td>
                                    <td><?= $hos_name; ?></td>
                                </tr>
                            <?php } ?>

                        </table>
                        <br>
                        ข้อมูลวันที่ <?php echo date("d-m-Y") ?>
                        <br>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                    </div>
                </div>


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