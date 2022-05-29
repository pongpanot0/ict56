<?php
if (isOnline()) {
  $user = $_SESSION['usr'];
  $sql1 = "select * from admin where admin_id='$user'";
  $res1 = mysqli_query($con, $sql1);
  $row1 = mysqli_num_rows($res1);
  $sql2 = "select * from member where mem_id='$user'";
  $res2 = mysqli_query($con, $sql2);
  $row2 = mysqli_num_rows($res2);
  $sql3 = "select f.*,h.* from officer f LEFT OUTER JOIN hospital h ON(f.officer_hospital=h.hos_id) where f.officer_id='$user'";
  $res3 = mysqli_query($con, $sql3);
  $row3 = mysqli_num_rows($res3);
  if ($row1 > 0) {
    $row11 = mysqli_fetch_assoc($res1);
    $id = $row11['admin_id'];
    $fname = $row11['admin_fname'];
    $lname = $row11['admin_lname'];
    $pic = $row11['admin_img'];
    $level = $row11['admin_level'];
  } else if ($row2 > 0) {

    $row22 = mysqli_fetch_assoc($res2);
    $id = $row22['mem_id'];
    $fname = $row22['mem_fname'];
    $lname = $row22['mem_lname'];
    $pic = $row22['mem_img'];
    $level = $row22['mem_level'];
    $sex = $row22['mem_sex'];
    $phone = $row22['mem_phone'];
    $hbd = $row22['mem_bd'];
  } else if ($row3 > 0) {
    $row33 = mysqli_fetch_assoc($res3);
    $id = $row33['officer_id'];
    $fname = $row33['officer_fname'];
    $lname = $row33['officer_lname'];
    $pic = $row33['officer_img'];
    $level = $row33['officer_level'];
    $hos_id = $row33['officer_hospital'];
    $hos_name = $row33['hos_name'];

    $name = "$fname"." "."$lname";
  }
  if ($level == 1) {
    $levelname = "สถานะผู้ดูแลระบบ";
  } else if ($level == 2) {
    $levelname = "สถานะผู้ใช่ทั่วไป";
  } else if ($level == 3) {
    $levelname = "เจ้าหน้าที่โรงพยาบาล";
  }
}

?>


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">หมอพร้อม</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <?php if (isOnline()) { ?>
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $pic ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $fname ?> <?= $lname ?> <br><?= $levelname ?> </a>
          <a href="index.php?Node=edit_person&IDPER=<?=$id;?>" style="font-size: 10px;">[แก้ไขข้อมูลส่วนตัว]</a>
        </div>
      </div>
    <?php } ?>
    <!-- SidebarSearch Form -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php if (!isOnline()) { ?>
          <li class="nav-header">เมนูหลัก</li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt" aria-hidden="true"></i>
              <p>
                หน้าแรก
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?Node=frmreg" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                ลงทะเบียนรับวัคซีน
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?Node=frm_login" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                เข้าสู่ระบบ
              </p>
            </a>
          </li>
        <?php } else if (isOnline()) { ?>

          <?php if (Admin($_SESSION['usr'], $_SESSION['pwd'], $con)) { ?>
            <li class="nav-header">เมนูหลัก</li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt" aria-hidden="true"></i>
                <p>
                  หน้าแรก
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?Node=managemem" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  ข้อมูลผู้ลงทะเบียน
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                 ข้อมูลโรงพยาบาล
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                 ข้อมูลวัคซีน
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?Node=lout" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  ออกจากระบบ
                </p>
              </a>
            </li>
          <?php } else if (User($_SESSION['usr'], $_SESSION['pwd'], $con)) { ?>
            <li class="nav-header">เมนูหลัก</li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt" aria-hidden="true"></i>
                <p>
                  หน้าแรก
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?Node=managefrm_estimate" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  อาการหลังฉีดวัคซีน
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?Node=hisvac" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  ประวัติการรับวัคซีน
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?Node=docvac" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  ใบรับรองการฉีดวัคซีน
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?Node=lout" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  ออกจากระบบ
                </p>
              </a>
            </li>
          <?php } else if (Officer($_SESSION['usr'], $_SESSION['pwd'], $con)) {   ?>

            <li class="nav-header">เมนูหลัก</li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt" aria-hidden="true"></i>
                <p>
                  หน้าแรก
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?Node=managemem" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  ข้อมูลผู้ลงทะเบียน
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?Node=managegetvac" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  จัดการข้อมูลการรับวัคซีน
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="index.php?Node=manageestimate" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  อาการหลังฉีดวัคซีน
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?Node=lout" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  ออกจากระบบ
                </p>
              </a>
            </li>

          <?php } ?>
        <?php } ?>
        </a>

      </ul>
    </nav>
  </div>
</aside>