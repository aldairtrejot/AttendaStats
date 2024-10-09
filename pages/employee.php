<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php include '../conexion.php' ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    AttendaStats
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    p {
      margin: 0;
      /* Elimina el margen por defecto del párrafo */
    }

    .input-usuario,
    .select-usuario,
    .btn-enviar {
      border: 2px solid #ccc;
      /* Color gris claro */
      border-radius: 20px;
      /* Bordes circulares */
      padding: 5px;
      /* Espacio interno reducido */
      margin-bottom: 15px;
      /* Espacio entre inputs */
      width: calc(100% - 24px);
      /* Ajusta el ancho del input */
      box-sizing: border-box;
      /* Incluye el padding en el ancho total */
      font-size: 14px;
      /* Tamaño de fuente reducido */
    }

    .btn-enviar:hover {
      background-color: #f0f0f0;
      /* Color de fondo al pasar el mouse */
    }
  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Attenda Stats</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">


    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../pages/dashboard.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Inicio</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-text-o text-dark  text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Asistecnias</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="employee.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Empleados</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="admin.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-cog text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Administraci&oacuten</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../login.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sign-out text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Salir</span>
          </a>
        </li>
      </ul>
    </div>



  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
      data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Inicio /</a></li>
            <!--
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
-->
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Empleados</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de empleados</p>
                    <h5 class="font-weight-bolder" id="all_employee">
                      0
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+0 </span>
                      Tiempo real
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de empleados activos</p>
                    <h5 class="font-weight-bolder" id="activo_employee">
                      0
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+0 </span>
                      Tiempo real
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de empleados inactivos</p>
                    <h5 class="font-weight-bolder" id="baja_employee">
                      0
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+0 </span>
                      Tiempo real
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Agregar usuario</h6>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">

                <div class="row">
                  <div class="col-6">
                    <p>Nombre completo*</p>
                    <input id="nombre_" type="text" class="input-usuario" maxlength="30">
                  </div>
                  <div class="col-6">
                    <p>CURP*</p>
                    <input id="curp_" type="text" class="input-usuario" maxlength="30">
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <p>RFC*</p>
                    <input id="rfc_" type="text" class="input-usuario" maxlength="30">
                  </div>
                  <div class="col-6">
                    <p>Correo*</p>
                    <input id="correo_" type="text" class="input-usuario" maxlength="30">
                  </div>
                </div>

                <div class="row">
                  <div class="col-4">
                    <p>Telefono*</p>
                    <input id="telefono_" type="text" class="input-usuario" maxlength="30">
                  </div>
                  <div class="col-4">
                    <p>No Dispositov*</p>
                    <input id="no_dis_" type="text" class="input-usuario" maxlength="30">
                  </div>
                  <div class="col-4">
                    <p>Estatus*</p>
                    <select id="estatus_" class="select-usuario">
                      <option value="1">ACTIVO</option>
                      <option value="2">BAJA</option>
                    </select>
                  </div>
                </div>



                <button onclick="validar();" class="btn-enviar">Enviar</button>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-12 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Empleados</h6>
              </div>
            </div>





            <div class="table-responsive">
              <table class="table align-items-center ">

                <?php

                $listado = pg_query("SELECT * 
                                    FROM empleados.empleado
                                    INNER JOIN empleados.estatus
                                      ON empleados.empleado.id_estatus =
                                        empleados.estatus.id_estatus
                                    ORDER BY id_empleado desc 
                                    LIMIT 5");

                if (pg_num_rows($listado) > 0) {
                  while ($row = pg_fetch_row($listado)) {
                    echo ' <tbody>
                  <tr>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Nombre</p>
                        <h6 class="text-sm mb-0">' . $row[1] . '</h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">CURP</p>
                        <h6 class="text-sm mb-0">' . $row[2] . '</h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">RFC</p>
                        <h6 class="text-sm mb-0">' . $row[3] . '</h6>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">E-mail</p>
                        <h6 class="text-sm mb-0">' . $row[4] . '</h6>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">Telefono</p>
                        <h6 class="text-sm mb-0">' . $row[5] . '</h6>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">No Dispositivo</p>
                        <h6 class="text-sm mb-0">' . $row[6] . '</h6>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">Estatus</p>
                        <h6 class="text-sm mb-0">' . $row[9] . '</h6>
                      </div>
                    </td>
                  </tr>
                </tbody>';
                  }
                } ?>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!--
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About
                    Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                    target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
-->

    </div>
  </main>
  <div class="fixed-plugin">

    <!--
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
-->
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
            onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free
          Download</a>
        <a class="btn btn-outline-dark w-100"
          href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard"
            data-icon="octicon-star" data-size="large" data-show-count="true"
            aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>

    $(document).ready(function () {
      calcular();
    });


    function validar() {
      let nombre_ = document.getElementById("nombre_").value;
      let curp_ = document.getElementById("curp_").value;
      let rfc_ = document.getElementById("rfc_").value;
      let correo_ = document.getElementById("correo_").value;
      let telefono_ = document.getElementById("telefono_").value;
      let no_dis_ = document.getElementById("no_dis_").value;
      let estatus_ = document.getElementById("estatus_").value;


      if (validarData(nombre_, 'Nombre completo') &&
        validarData(curp_, 'CURP') &&
        validarData(rfc_, 'RFC') &&
        validarData(correo_, 'Correo') &&
        validarData(telefono_, 'Telefono') &&
        validarData(no_dis_, 'No Disposito') &&
        validarData(estatus_, 'Estatus')) {
        saveEmployee(nombre_, curp_, rfc_, correo_, telefono_, no_dis_, estatus_);
      }
    }

    function saveEmployee(nombre_, curp_, rfc_, correo_, telefono_, no_dis_, estatus_) {
      $.ajax({
        type: 'POST',
        url: 'guardar_empleado.php',
        data: {
          nombre_: nombre_,
          curp_: curp_,
          rfc_: rfc_,
          correo_: correo_,
          telefono_: telefono_,
          no_dis_: no_dis_,
          estatus_: estatus_
        },
        success: function (data) {
          if (data) {
            messageSuccess('Empleado agregado con éxito');
            location.reload();
            //calcular();
          } else {
            messageError('Se produjo un error al registrar el empleado. Por favor, vuelve a intentarlo.');
          }

          $('#nombre_').val('');
          $('#curp_').val('');
          $('#rfc_').val('');
          $('#correo_').val('');
          $('#telefono_').val('');
          $('#no_dis_').val('');
          $('#estatus_').val('');

        }
      });
    }

    function messageError(text) {
      const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "error",
        title: text
      });
    }

    function messageSuccess(text) {
      const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "success",
        title: text
      });
    }

    function validarData(data, text) {
      let bool = true;
      if (validarNull(data)) {
        messageError('Campo ' + text + '* no puede estar vacio.');
        bool = false;
      }
      return bool;
    }


    function validarNull(cadena) {
      let bool = false;
      if (cadena.length === 0) {
        bool = true;
      }
      return bool;
    }

    function calcular() {
      $.ajax({
        type: 'POST',
        url: 'employee_result.php',
        data: {},
        success: function (data) {

          let jsonData = JSON.parse(data);

          document.getElementById("all_employee").innerText = jsonData.allEmployee;
          document.getElementById("baja_employee").innerText = jsonData.bajaEmployee;
          document.getElementById("activo_employee").innerText = jsonData.altaEmployee;


        }
      });
    }






  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>