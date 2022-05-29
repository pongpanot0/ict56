 <?php
    if (isset($_GET['IDGETVAC'])) {
        $IDGETVAC = $_GET['IDGETVAC'];

        $sql = "DELETE FROM getvaccine WHERE getvac_id='$IDGETVAC' ";
        $res = mysqli_query($con, $sql);
        echo "กรุณารอสักครู่...";
        echo '<meta http-equiv="refresh" content="0;url=index.php?Node=managegetvac">';
    }
    ?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>จัดการข้อมูลการรับวัคซีน</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
                         <li class="breadcrumb-item active">จัดการข้อมูลการรับวัคซีน</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>


     <!-- Main content -->
     <section class="content">
         <div class="row">
             <div class="col-md-12">
                 <div class="card card-primary">
                     <div class="card-header">
                         <h3 class="card-title">รายการข้อมูลผู้รับวัคซีน [<a href="index.php?Node=frmgetvac">บันทึกข้อมูลการรับวัคซีน</a>]</h3>

                     </div>


                     <table class="table">
                         <thead class="table-primary">
                             <tr>
                                 <th scope="col">#</th>

                                 <th scope="col">ชื่อ - นามสกุล</th>
                                 <th scope="col">วัคซีนเข็มที่</th>
                                 <th scope="col">วันที่รับวัคซีน</th>
                                 <th scope="col">ยี่ห้อวัคซีน</th>
                                 <th scope="col">Lot No.</th>
                                 <th scope="col">หน่วยบริการ</th>
                                 <th scope="col">ดูรายละเอียด</th>
                             </tr>
                         </thead>
                         <tbody>

                             <?php
                                $sql = "select g.*,m.*,h.*,v.* from getvaccine g 
                                left outer join member m ON (g.getvac_mem=m.mem_id)
                                left outer join hospital h ON (h.hos_id=g.getvac_hosid)
                                left outer join vaccine v ON (v.vac_serial=g.getvac_vacid)
                                where g.getvac_hosid='$hos_id' ";
                                $res = mysqli_query($con, $sql);
                                $runing = 1;
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $getvac_mem = $row['getvac_mem'];
                                    $mem_fname = $row['mem_fname'];
                                    $mem_lname = $row['mem_lname'];
                                    $getvac_seq = $row['getvac_seq'];
                                    $getvac_date = $row['getvac_date'];
                                    $hos_name = $row['hos_name'];
                                    $vac_brand = $row['vac_brand'];
                                    $vac_lot = $row['vac_lot'];
                                    $mem_img = $row['mem_img'];
                                ?>

                                 <tr>
                                     <th scope="row"><?= $runing++; ?></th>

                                     <td> <?= $mem_fname; ?> <?= $mem_lname; ?> </td>
                                     <td> <?= $getvac_seq; ?></td>
                                     <td><?= $getvac_date; ?> </td>
                                     <td> <?= $vac_brand; ?> </td>
                                     <td><?= $vac_lot; ?> </td>
                                     <td><?= $hos_name; ?> </td>
                                     <td><a href="index.php?Node=managegetvac&IDGETVAC=<?= $getvac_id; ?>">ดูรายละเอียด</a></td>
                                 </tr>
                               
                             <?php } ?>

                         </tbody>
                     </table>


                 </div>
             </div>
         </div>

     </section>
     <!-- /.content -->

 </div>
 <!-- /.content-wrapper -->