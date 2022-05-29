 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ข้อมูลผู้ลงทะเบียน</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
              <li class="breadcrumb-item active">ข้อมูลผู้ลงทะเบียน</li>
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
              <h3 class="card-title">รายการข้อมูลผู้ลงทะเบียนรับวัคซีน</h3>

            </div>


<table class="table" >
  <thead class="table-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">รูปภาพ</th>
      <th scope="col">เลขประจำตัวประชาชน</th>
      <th scope="col">ชื่อ - นามสกุล</th>
      <th scope="col">วัน/เดือน/ปีเกิด</th>
      <th scope="col">เพศ</th>
      <th scope="col">เบอร์โทร</th>
      <th scope="col">รหัสผ่าน</th>
      <th scope="col">ลบ</th>
      <th scope="col">แก้ไขข้อมูล</th>
    </tr>
  </thead>
  <tbody>

<?php
  $sql= "select * from member ";
  $res= mysqli_query($con, $sql);
  $runing=1;
  while ( $row = mysqli_fetch_assoc($res)) {
    $mem_id = $row['mem_id'];
    $mem_fname = $row['mem_fname'];
    $mem_lname = $row['mem_lname'];
    $mem_img = $row['mem_img'];
    $mem_bd = $row['mem_bd'];
    $mem_sex = $row['mem_sex'];
    $mem_phone = $row['mem_phone'];
    $mem_pass = $row['mem_pass']; 

?>

    <tr>
      <th scope="row"><?=$runing++;?></th>
      <td><img src="<?=$mem_img;?>" width="50"></td>
      <td><?=$mem_id;?></td>
      <td><?=$mem_fname;?> <?=$mem_lname;?></td>
      <td><?=$mem_bd;?></td>
      <td><?=$mem_sex;?></td>
      <td><?=$mem_phone;?></td>
      <td><?=$mem_pass;?></td>
      <td><a href="index.php?Node=delmem&IDMEM=<?=$mem_id;?>" onclick="if(confirm('คุณต้องการลบข้อมูลหรือไม่')) return true; else return false;">ลบ</a></td>
      <td><a href="index.php?Node=editmem&IDMEM=<?=$mem_id;?>" onclick="if(confirm('คุณต้องการแก้ไขข้อมูลหรือไม่')) return true; else return false;">แก้ไขข้อมูล</a></td>
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