<nav class="navbar navbar-expand navbar-dark static-top">
<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars" style="color:#000000; font-size:20px;"></i>
</button>
<div>
<a  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw" style="font-size: 25px;"></i>
</a>
<div class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">
    <a class="dropdown-item" href="logout.php">Logout</a>
</div>
</div class="nav-item dropdown no-arrow" >
<a class="navbar-brand mr-1" href="bangDB.php" style="color:#000000; font-size:15px;">Danh bạ</a>
<!-- Navbar Search -->
<form class="d-none d-sm-inline-block form-inline mr-3 mr-md-8 my-8 my-md-8" style="margin-left:100px;">
<!-- class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" -->
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"
    style="width:1000px; ">
    <div class="input-group-append">
      <button class="btn btn-primary" type="button" >
        <i class="fas fa-search" ></i>
      </button>
    </div>
  </div>
</form>


</nav>
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <button data-toggle="modal" data-target="#addItem" 
      style="margin-left: 20px; border-radius: 25px; background-color: #ffffff; border-color: #ffffff; margin-top: 10px; margin-right: 20px; box-shadow: 0.5px 0.5px 10px; height: 45px;">
          <i class="fas fa-plus" style="color: #FF69B4;"></i>
          <span style="color:#000000;">Tạo liên hệ</span>  
      </button>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
          <span>Danh bạ</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='baiso2.php'>
          <i class="fas fa-history"></i>
          <span>Thường xuyên liên hệ</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='baiso3.php'>
          <i class="far fa-copy"></i>
          <span>Liên hệ trùng lặp</span></a>
      </li>
<hr width="100%">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-tag"></i>
          <span>Nhãn</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="width:100%;">
          <a class="dropdown-item" href="Home.php">
            <i class="fas fa-tag"></i>
            <span>Cha xứ</span>
          </a>
          <Button class="dropdown-item" style="margin-top:5px;" data-toggle="modal" data-target="#add" >
            <i class="fas fa-plus"></i>
            <span style="color:#000000;">Tạo nhãn</span>
          </Button>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

