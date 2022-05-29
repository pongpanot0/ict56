 
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
                                 <th scope="col">เลขประจำตัวประชาชน</th>
                                 <th scope="col">ชื่อ - นามสกุล</th>
                                 <th scope="col">เข็มที่</th>
                                 <th scope="col">วันที่รับวัคซีน</th>
                                 <th scope="col">ล็อตวัคซีน</th>
                                 <th scope="col">โรงพยาบาล</th>
                                 <th scope="col">ลบ</th>
                             </tr>
                         </thead>
                         <tbody>

                             <?php
                                $sql = "select g.*,m.*,h.*  from getvaccine g
                                    left outer join member m ON (g.getvac_mem=m.mem_id)
                                    left outer join hospital h ON (g.getvac_hosid=h.hos_id)";
                                $res = mysqli_query($con, $sql);
                                $runing = 1;
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $mem_id = $row['mem_id'];
                                    $getvac_id = $row['getvac_id'];
                                    $getvac_date = $row['getvac_date'];
                                    $getvac_seq = $row['getvac_seq'];
                                    $getvac_vacid = $row['getvac_vacid'];
                                    $mem_fname = $row['mem_fname'];
                                    $mem_lname = $row['mem_lname'];
                                    $hos_name = $row['hos_name'];

                                ?>

                                 <tr>
                                     <th scope="row"><?= $runing++; ?></th>
                                     <td><?= $mem_id; ?> </td>
                                     <td> <?= $mem_fname; ?> <?= $mem_lname; ?> </td>
                                     <td> <?= $getvac_seq; ?></td>
                                     <td><?= $getvac_date; ?> </td>
                                     <td> <?= $getvac_vacid; ?> </td>
                                     <td><?= $hos_name; ?> </td>
                                     <td><a href="index.php?Node=managegetvac&IDGETVAC=<?=$getvac_id;?>" onclick="if(confirm('คุณต้องการลบข้อมูลหรือไม่')) return true; else return false;">ลบ</a></td>
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