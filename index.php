<!DOCTYPE html>
<html>
<head>
 <title>Belajar Bootstrap</title>
<link rel="stylesheet" href="/contents/themes/fasthink/bootstrap/css/bootstrap.min.css"> 
<script src="/contents/themes/fasthink/bootstrap/js/jquery.min.js"></script>
</head>
<body>
<div style="max-width:750px;margin:10px auto;border:1px solid #ddd;padding:10px 0">
<div class="container-fluid" style="margin:10px">
<div style="border-bottom:2px solid #ddd;padding:0;word-wrap:break-word">
<h1 style="padding:5px"><b>Welcome To Fisrt Page Of OpenShift</b></h1>
</div>
 <div class="col-lg-12">  
  <div class="page-header">
   <h4>Di Bawah ini merupakan config untuk file manager, Silahkan setting username, dan password kamu untuk login ke data file manager.</h4>
  </div>

  <form role="form" class="form-horizontal" action="/pz.php">
   <div class="form-group">
    <label>username</label>
    <input type="text" name="username" placeholder="Contoh:jandalovers" class="form-control">
   </div>
   <div class="form-group">
    <label>Password</label>
    <input type="text" name="password" placeholder="Password" class="form-control">
   </div>
   <div class="form-group">
    <label>Password Again</label>
    <input type="text" name="repassword" placeholder="Password Mane" class="form-control">
   </div>
   <div class="form-group">
    <label>Create file manager</label>
	<input type="text" name="rename"  placeholder="Contoh: tools.php" class="form-control">
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-primary" value="submit">Insert Data</button>
    <button type="reset" class="btn btn-danger">Reset</button>
   </div>
  </form>
  <div class="page-footer">
   <h5 style="margin:5px 0; padding:5px 0">* <i>Form Rebuild By Putri Zafarani</i></h5>
  </div>
 </div>
</div>
</div>

</body>
</html>
