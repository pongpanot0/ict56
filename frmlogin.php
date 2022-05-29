<center>
<div class="content-wrapper">
  
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>เข้าสู่ระบบ</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">กรุณากรอก Username และ Password</p>
      <form action="index.php?Node=chklog" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="รหัสประจำตัว" name="user" require>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="Password" require>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="btlogin" class="btn btn-primary btn-block">ตกลง</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
</center>
<!-- /.login-box -->