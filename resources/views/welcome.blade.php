<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href={{ asset("assets/material-assets/assets/img/apple-icon.png") }}>
  <link rel="icon" type="image/png" href={{ asset("assets/material-assets/assets/img/favicon.png") }}>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Print Dokumen Temuan
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href={{ asset("assets/material-assets/assets/css/material-dashboard.css?v=2.1.2") }} rel="stylesheet" />
  <link href={{ asset("assets/material-assets/assets/demo/demo.css") }} rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image={{ asset("assets/material-assets/assets/img/sidebar-1.jpg") }}>
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          <img src={{ asset("assets/img/logo.png") }} alt="" height="80">
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      {{-- <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
        </div>
      </nav> --}}
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-round" id="refreshTemuanBtn">
                        <i class="material-icons">autorenew</i> TAMPILKAN DATA
                    </button>
                </div>
            </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Temuan:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#bpkTemuanTable" data-toggle="tab">
                            <i class="material-icons">work</i> BPK
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#irjenTemuanTable" data-toggle="tab">
                            <i class="material-icons">work_outline</i> IRJEN
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="bpkTemuanTable">
                        <table class="table">
                            <thead class=" text-primary">
                              <th>
                                No.
                              </th>
                              <th>
                                No LHP
                              </th>
                              <th>
                                Tanggal LHP
                              </th>
                              <th>
                                Uni Kerja Eselon 1
                              </th>
                              <th>
                                Cetak
                              </th>
                            </thead>
                            <tbody id="bpkTemuanBody">
                                <tr>
                                    <td> 1 </td>
                                    <td> 1 </td>
                                    <td> 1 </td>
                                    <td> 1 </td>
                                    <td> 1 </td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
                    <div class="tab-pane" id="irjenTemuanTable">
                        
                        <table class="table">
                            <thead class=" text-primary">
                              <th>
                                No.
                              </th>
                              <th>
                                No LHA
                              </th>
                              <th>
                                Tanggal LHA
                              </th>
                              <th>
                                Uni Kerja Eselon 1
                              </th>
                              <th>
                                Cetak
                              </th>
                            </thead>
                            <tbody id="irjenTemuanBody">
                              
                                <tr>
                                    <td> 1 </td>
                                    <td> 1 </td>
                                    <td> 1 </td>
                                    <td> 1 </td>
                                    <td> 1 </td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, <i class="material-icons">favorite</i> by
            <a href="https://www.instagram.com/adonmuhammaddd" target="_blank">@adonmuhammaddd</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Sidebar Backgrounds</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src={{ asset("assets/material-assets/assets/img/sidebar-1.jpg") }} alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src={{ asset("assets/material-assets/assets/img/sidebar-2.jpg") }} alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src={{ asset("assets/material-assets/assets/img/sidebar-3.jpg") }} alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src={{ asset("assets/material-assets/assets/img/sidebar-4.jpg") }} alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
  
@include('javascript-assets')

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

    <script>
        var username;
        var satkerId = 0;
        var roleId = 30;
        var jenisDokumen = 'bpk';
        var dataTemuan;
        var dataTemuanBpk = [];
        var dataTemuanIrjen = [];
        var dataToPrint;
        $(document).ready(function()
        {
            var url = new URL(window.location.href);
            setSessionData();
            getPrintData();
            // username = url.searchParams.get("username");
            // satkerId = url.searchParams.get("satkerid");
            // roleId = url.searchParams.get("roleid");
            // jenisDokumen = url.searchParams.get("jenisdokumen");
            hideURLParams();

            refreshTemuanBtn.onclick = () => {
                clearAllTable();
                // sendPrintDataToController();
                setDataOnBpkTable();
                setDataOnIrjenTable();
            }
            setTimeout(sendPrintDataToController, 2000);
            Swal.fire({
                title: 'Harap tunggu !',
                html: 'Memuat Data',// add html attribute if you want or remove
                allowOutsideClick: false,
                timer: 3000,
                onBeforeOpen: () => {
                    Swal.showLoading()
                },
            });
        });

        function setSessionData() {
            $.ajax({
                type: "POST",
                //   url: "/api/bookings",
                // url: "/api/roomstatus",
                // url: "http://127.0.0.1:5000/api/roomstatus",
                url: "http://mad-be.gakkum.id/api/auth/session/set",
                data: {
                    jenisdokumen: jenisDokumen, 
                    roleid:roleId,
                    satkerid:satkerId
                },
                success: function (data) 
                {
                    console.log(data);
                }
            });
        }
        
        function getPrintData() {
            $.ajax({
                type: "GET",
                //   url: "/api/bookings",
                // url: "/api/roomstatus",
                // url: "http://127.0.0.1:5000/api/roomstatus",
                url: "http://mad-be.gakkum.id/api/dokumentemuan/print-grid",
                data: {
                    jenisDokumen: jenisDokumen, 
                    roleId:roleId,
                    satkerId:satkerId
                },
                success: function (data) 
                {
                //   var dataTemp = JSON.parse(data);
                    console.log("semua data temuan ==============> ",data);
                    dataTemuan = data.result;
                    for (var i in data.result) {
                        if (data.result[i].jenisDokumenTemuanId == 1) {
                            dataTemuanBpk.push(data.result[i])
                        }
                        
                        if (data.result[i].jenisDokumenTemuanId == 2) {
                            dataTemuanIrjen.push(data.result[i])
                        }
                    }
                }
            });
        }

        function sendPrintDataToController() {
            $.ajax({
                type: "POST",
                //   url: "/api/bookings",
                // url: "/api/roomstatus",
                // url: "http://127.0.0.1:5000/api/roomstatus",
                url: "/dokumentemuan/catch-data",
                data: {
                  "_token": "{{ csrf_token() }}",
                    dataTemuan: dataTemuan
                },
                success: function (data) 
                {
                //   var dataTemp = JSON.parse(data);
                    console.log("data temuan kiriman ke controller ==============> ",data);
                }
            });
        }

        function printData() {
            $.ajax({
                type: "GET",
                //   url: "/api/bookings",
                // url: "/api/roomstatus",
                // url: "http://127.0.0.1:5000/api/roomstatus",
                url: "/dokumentemuan/print",
                data: {
                  "_token": "{{ csrf_token() }}",
                    dataTemuan: dataTemuan
                },
                success: function (data) 
                {
                //   var dataTemp = JSON.parse(data);
                    console.log("data temuan kiriman ke controller ==============> ",data);
                }
            });
        }

        function clearAllTable() {
            const bpkNode = document.getElementById("bpkTemuanBody");
            bpkNode.innerHTML = '';
            const irjenNode = document.getElementById("irjenTemuanBody");
            irjenNode.innerHTML = '';
        }

        function setDataOnBpkTable() {
            console.log("Data Temuan BPK ===========> ", dataTemuanBpk[6])
                var noBpk;
                var id;
            for (var i in dataTemuanBpk) {
                noBpk = i++;
                id = dataTemuanBpk[i].id
                var itemBpk = '<tr><td>'+ noBpk +'</td><td>'+ dataTemuanBpk[i].noLHA +'</td><td>'+ dataTemuanBpk[i].tglLHA +'</td><td>'+ dataTemuanBpk[i].unitKerjaEselon1 +'</td><td><button class="btn btn-warning btn-round" onclick="getTemuanToPrint('+id+')"><i class="material-icons">print</i></button></td></tr>';
            
                $('#bpkTemuanBody').append(itemBpk)
            }
        }

        function setDataOnIrjenTable() {
            console.log("Data Temuan Irjen ===========> ", dataTemuanIrjen)
            var noIrjen;
            for (var i in dataTemuanIrjen) {
                noIrjen = i++;
                var itemIrjen = '<tr><td>'+ noIrjen +'</td><td>'+ dataTemuanIrjen[i].noLHA +'</td><td>'+ dataTemuanIrjen[i].tglLHA +'</td><td>'+ dataTemuanIrjen[i].unitKerjaEselon1 +'</td><td><button>cetak</button</td></tr>';
            
                $('#irjenTemuanBody').append(itemIrjen)
            }
        }

        function getTemuanToPrint(id) {
            $.ajax({
                type: "GET",
                url: "http://mad-be.gakkum.id/api/dokumentemuan/get-detail-to-print/"+id,
                success: function (data) 
                {
                //   var dataTemp = JSON.parse(data);
                    console.log("semua data temuan ==============> ",data);
                    dataToPrint = data.result;
                    yesPrint(dataToPrint);
                }
            });
        }

        function yesPrint(dataPrintNih) {
            $.ajax({
                type: "GET",
                url: "/dokumentemuan/print",
                data: {
                  "_token": "{{ csrf_token() }}",
                  dataPrint: dataPrintNih
                },
                success: function (data) 
                {
                   console.log('success');
                }
            });
        }

        function getURLParameter(name) {
            return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);
        }
        function hideURLParams() {
            //Parameters to hide (ie ?success=value, ?error=value, etc)
            var hide = ['username','satkerid', 'roleid', 'jenisdokumen'];
            for(var h in hide) {
                if(getURLParameter(h)) {
                    history.replaceState(null, document.getElementsByTagName("title")[0].innerHTML, window.location.pathname);
                }
            }
        }
    </script>
</html>
