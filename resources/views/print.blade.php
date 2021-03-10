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
  {{-- <link rel="apple-touch-icon" sizes="76x76" href={{ asset("assets/material-assets/assets/img/apple-icon.png") }}>
  <link rel="icon" type="image/png" href={{ asset("assets/material-assets/assets/img/favicon.png") }}> --}}
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Print Dokumen Temuan
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  {{-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> --}}
  <!-- CSS Files -->
  <link href={{ asset("assets/material-assets/assets/css/material-dashboard.css?v=2.1.2") }} rel="stylesheet" />
  <style>
    .tim-typo {
  padding-left: 25%;
  margin-bottom: 40px;
  position: relative;
  width: 100%;
}

.tim-typo .tim-note {
  bottom: 5px;
  color: #c0c1c2;
  display: block;
  font-weight: 400;
  font-size: 13px;
  line-height: 15px;
  left: 0;
  margin-left: 20px;
  position: absolute;
  width: 260px;
}

/* offline-doc */

.offline-doc .navbar.navbar-transparent {
  padding-top: 25px;
  border-bottom: none;
}

.offline-doc .navbar.navbar-transparent .navbar-minimize {
  display: none;
}

.offline-doc .navbar.navbar-transparent .navbar-brand,
.offline-doc .navbar.navbar-transparent .collapse .navbar-nav .nav-link {
  color: #FFFFFF !important;
}

.offline-doc .footer {
  z-index: 3 !important;
}

.offline-doc .page-header .container {
  z-index: 3;
}

.offline-doc .page-header:after {
  background-color: rgba(0, 0, 0, 0.5);
  content: "";
  display: block;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 2;
}

#map {
  z-index: 2;
  height: calc(100vh - 70px);
  margin-top: 70px;
}
  </style>
</head>

<body class="">
  <div class="wrapper">
    <div class="main-panel" style="width: auto">
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
            
            <div class="card">
                
                <div class="card-body">
                  <div id="typography">
                    <div class="card-title text-center">
                      <h2>Judul</h2>
                    </div>
                    <div class="row">
                        <div class="tim-typo">
                            <h4>
                            <span class="tim-note"><h4 style="color: black;">Keadaan Sd Bulan</h4></span> : The Life of Material Dashboard </h4>
                        </div>
                        <div class="tim-typo">
                            <h4>
                            <span class="tim-note"><h4 style="color: black;">Nama Instansi</h4></span> : The Life of Material Dashboard </h4>
                        </div>
                        <div class="tim-typo">
                            <h4>
                            <span class="tim-note"><h4 style="color: black;">Unit Kerja Eselon 1</h4></span> : The Life of Material Dashboard </h4>
                        </div>
                        <div class="tim-typo">
                            <h4>
                            <span class="tim-note"><h4 style="color: black;">No. & Tanggal LHP</h4></span> : The Life of Material Dashboard </h4>
                        </div>
                      
                        <table class="table table-bordered">
                            <thead class="text-primary text-center">
                                <th>No.</th>
                                <th>Judul dan Nilai</th>
                                <th>Rekomendasi</th>
                                <th>Tindak Lanjut Entitas yang Diperiksa</th>
                                <th>Status Tindak Lanjut</th>
                                <th>Keterangan</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
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
  
{{-- @include('javascript-assets') --}}

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

    <script>
        // var username;
        // var satkerId = 0;
        // var roleId = 30;
        // var jenisDokumen = 'bpk';
        // var dataTemuan;
        // $(document).ready(function()
        // {
        //     var url = new URL(window.location.href);
        //     // username = url.searchParams.get("username");
        //     // satkerId = url.searchParams.get("satkerid");
        //     // roleId = url.searchParams.get("roleid");
        //     // jenisDokumen = url.searchParams.get("jenisdokumen");
        //     hideURLParams();

        //     refreshTemuanBtn.onclick = () => {
        //         clearAllTable();
        //     }
        //     setTimeout(sendPrintDataToController, 2000);
        //     Swal.fire({
        //         title: 'Harap tunggu !',
        //         html: 'Memuat Data',// add html attribute if you want or remove
        //         allowOutsideClick: false,
        //         timer: 3000,
        //         onBeforeOpen: () => {
        //             Swal.showLoading()
        //         },
        //     });
        // });

        // function sendPrintDataToController() {
        //     $.ajax({
        //         type: "POST",
        //         //   url: "/api/bookings",
        //         // url: "/api/roomstatus",
        //         // url: "http://127.0.0.1:5000/api/roomstatus",
        //         url: "/dokumentemuan/catch-data",
        //         data: {
        //           "_token": "{{ csrf_token() }}",
        //             dataTemuan: dataTemuan
        //         },
        //         success: function (data) 
        //         {
        //         //   var dataTemp = JSON.parse(data);
        //             console.log("data temuan kiriman ke controller ==============> ",data);
        //         }
        //     });
        // }

        // function printData() {
        //     $.ajax({
        //         type: "GET",
        //         //   url: "/api/bookings",
        //         // url: "/api/roomstatus",
        //         // url: "http://127.0.0.1:5000/api/roomstatus",
        //         url: "/dokumentemuan/print",
        //         data: {
        //           "_token": "{{ csrf_token() }}",
        //             dataTemuan: dataTemuan
        //         },
        //         success: function (data) 
        //         {
        //         //   var dataTemp = JSON.parse(data);
        //             console.log("data temuan kiriman ke controller ==============> ",data);
        //         }
        //     });
        // }

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
