<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location:../index.html');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 
  <script src="https://kit.fontawesome.com/7e8129260b.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <script type="text/javascript">

function calculate(){
    var e=document.getElementById("n2").value,
    t=document.getElementById("n1").value,
    n=document.getElementById("n3").value,
    a=document.getElementById("prd"),
    r=a.value,
    i=n;

n=1==r?parseFloat(i/365).toFixed(8):2==r?parseFloat(i/12).toFixed(8):i;

var l=document.getElementById("n4").value/100,
d=document.getElementById("n5").value/100,
u=document.getElementById("n6").value/100,
m=new Array;

        m=[e,t,n,l,d,u];
        var o=0,v=0;
        o=fn_Fcall(m).Value,
        v=fn_Fput(m).Value;   
        var c=document.getElementById("info");
        c.innerHTML="Call Price: <b>"+c3((1*o).toFixed(3))+"</b>";
        var s=document.getElementById("info1");
        s.innerHTML="Put Price: <b>"+c3((1*v).toFixed(3))+"</b>"
}
function fn_Fcall(e){
var t,n,a,r,i,l;
t=e[0],
n=e[1],
a=e[2],
r=e[3],
i=e[4],
l=e[5];

var d=Math.sqrt(a),

u=1/(r*d)*(Math.log(t/n)+(i-l+r*r/2)*a),

m=u-r*d,
o=fn_NCD(u),
v=fn_NPD(u),
c=fn_NCD(m),
s=(fn_NPD(m),
   
   Math.exp(-i*a)),
   g=n*s,
   _=Math.exp(-l*a),
   p=o*t*_-c*g,
   y=_*o,
   f=_*v/(t*r*d),
   h=t*_*v*d,
   x=-_*t*v*r/(2*d)-i*g*c+l*t*_*o,
   E=g*a*c;

return{
    d1:u,
    d2:m,
    Value:p,
    Delta:y,
    Gamma:f,
    Vega:h,
    Theta:x,
    Rho:E }
}
function fn_Fput(e){
    
var t,n,a,r,i,l;
    t=e[0],n=e[1],a=e[2],r=e[3],i=e[4],l=e[5];
    var d=Math.sqrt(a),
    u=1/(r*d)*(Math.log(t/n)+(i-l+r*r/2)*a),
    m=u-r*d,o=fn_NCD(-u),
    v=fn_NPD(u),
    c=fn_NCD(-m),
    s=(fn_NPD(m),
    Math.exp(-i*a)),
    g=n*s,
    _=Math.exp(-l*a),
    p=c*g-o*t*_,
    y=-_*o,
    f=_*v/(t*r*d),
    h=t*_*v*d,
    x=-_*t*v*r/(2*d)+i*g*c-l*t*_*o,
    E=-g*a*c;
    return{
        d1:u,
        d2:m,
        Value:p,
        Delta:y,
        Gamma:f,
        Vega:h,
        Theta:x,
        Rho:E }
}
function onchng(){var e=document.getElementById("n3"),t=document.getElementById("t"),n=document.getElementById("prd"),a=n.value,r=(t.value,e.value);1==a?t.value=parseFloat(r/365).toFixed(8):2==a?t.value=parseFloat(r/12).toFixed(8):t.value=r,state()}


function fn_NCD(e){
    return fn_CD(e,0,1)
}

function fn_NPD(e){
    return 1/Math.sqrt(2*Math.PI)*Math.exp(-.5*e*e)
}

function fn_CD(e,t,n){
    return-1e5>(e-t)/n?0:(e-t)/n>1e5?1:.5*(1+fnER((e-t)/Math.sqrt(2*n)))
}
function fnER(e){
var t=e>=0?1:-1;
e=Math.abs(e);
var n=.3275911,
a=.254829592,
r=-.284496736,
i=1.421413741,
l=-1.453152027,
d=1.061405429,

u=1/(1+n*e),
m=1-((((d*u+l)*u+i)*u+r)*u+a)*u*Math.exp(-e*e);
return t*m}

function c3(e){
    var t=!1;
    return 0>e&&(t=!0,e=Math.abs(e)),(t?"-$":"$")+parseFloat(e,10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g,"$1,").toString()
}
</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/emil.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index3.php" class="d-block">
            <?php 
             echo $_SESSION['Nombre'];
            ?>
          </a>
        </div>

      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fa-solid fa-bars"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link active">
                  <i class="fa-solid fa-house"></i>
                  <p>Inicio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.php" class="nav-link">
                  <i class="fa-solid fa-person-circle-plus"></i>
                  <p>Agregar usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.php" class="nav-link">
                  <i class="fa-solid fa-clipboard-list"></i>
                  <p>Lista de usuarios</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>     

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Inicio</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
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
        
        <div class="row" style="display: flex; justify-content: center;">
        <form style="
    display: flex;
    padding: 30px;
    background: #3bd5b1;
    padding-bottom: 20px;
    padding-top: 15px;
    flex-direction: column;
    border-radius: 25px;">
          <p>
          <label>Precio al contado (SP)</label> 
          <input type="number" name="n2" id="n2" step="any" min="0" value="300" onchange="calculate();" /></p>
          <p>
          <label>Precio de ejercicio (ST)</label> 
          <input type="number" name="n1" id="n1" step="any" min="0" value="250" onchange="calculate();" /></p>
          <p>
          <label>Tiempo de expirar, por años (T)</label> 
          <input type="number" name="n3" id="n3" step="any" min="0" value="1" onchange="calculate();" />
          <select id="prd" onchange="onchng();calculate();"><option value="1">Dias</option><option value="2">Meses</option><option value="3" selected="">Años</option></select>
          </p>
          <p>
          <label>Volatilidad (V)<!--  anualizada de la accion (como decimal, v)--></label> 
          <input type="number" name="n4" id="n4" step="any" min="0" value="15" onchange="calculate();" /> </p>
          <p>
          <label>La tasa de interés libre de riesgo actual (como decimal, r)</label> 
          <input type="number" name="n5" id="n5" step="any" min="0" value="3" onchange="calculate();" /> </p>
          <p>
          <label>Rentabilidad por dividendo (como decimal, d)</label> 
          <input type="number" name="n6"  id="n6" step="any" min="0" value="0" onchange="calculate();" /> </p>
        
          <p><input  type="submit" value="Calcular" name="cal" onclick="calculate()" /></p>

          <br>
          <div>
            <label>Valor de la opción de compra (c)</label> <br><br>
            <div id="info" style="margin-top:20px;padding-left:20px;"></div>
            <div id="info1" style="margin-top:20px;padding-left:20px;"></div>
          </div>

        </form>
      </div>
            
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
