<!-- data php-->
<?php include 'component/dataindex.php';?>
<!-- data php selesai-->


<!DOCTYPE html>
<html lang="en">

<head>
<!-- aset component-->
  <?php include 'component/aset.php';?>
<!-- aset selesai-->
</head>
<body>
  <div class="container-scroller">

<!-- navbar component-->
  <?php include 'component/nav.php';?>
<!-- navbar selesai -->

        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome</h3>
                  <h6 class="font-weight-normal mb-0">Dashboard Mesin Produksi Teknomedika</h6>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal">23</h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Semarang</h4>
                        <h6 class="font-weight-normal">Teknomedika</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">RP 2011</p>
                      <p class="fs-30 mb-2">4006</p>
                      <p>11/06/2022</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">RP 8011</p>
                      <p class="fs-30 mb-2">61344</p>
                      <p>11/06/2022</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">RP 1011</p>
                      <p class="fs-30 mb-2">34040</p>
                      <p>11/06/2022</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">AIRMED</p>
                      <p class="fs-30 mb-2">47033</p>
                      <p>11/06/2022</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="col-md grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Output Hari ini</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th>Mesin</th>
                            <th>Output</th>
                            <th>Proses</th>
                            <th>Finish</th>
                          </tr>  
                        </thead>
                        <tbody>
                          <tr>
                            <td>Mesin1</td>
                            <td ><?php echo $jumlah_output_mesin1_a; ?></td>
                            <td><?php echo $output_station1; ?></td>
                            <td class="font-weight-bold"><?php echo $masker_station1; ?></td>
                          </tr>
                          <tr>
                            <td>Mesin2</td>
                            <td ><?php echo $jumlah_output_mesin2_a; ?></td>
                            <td><?php echo $output_station2; ?></td>
                            <td class="font-weight-bold"><?php echo $masker_station2; ?></td>
                          </tr>
                          <tr>
                            <td>Mesin3</td>
                            <td ><?php echo $jumlah_output_mesin3_b; ?></td>
                            <td><?php echo $output_station3; ?></td>
                            <td class="font-weight-bold"><?php echo $masker_station3; ?></td>
                          </tr>
                          <tr>
                            <td>Mesin4a</td>
                            <td ><?php echo $jumlah_output_mesin4_a; ?></td>
                            <td><?php echo $output_station4; ?></td>
                            <td class="font-weight-bold"><?php echo $masker_station4; ?></td>
                          </tr>
                          <tr>
                            <td>Mesin4b</td>
                            <td ><?php echo $jumlah_output_mesin4_b; ?></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Mesin5a</td>
                            <td ><?php echo $jumlah_output_mesin5_a; ?></td>
                            <td><?php echo $output_station5; ?></td>
                            <td class="font-weight-bold"><?php echo $masker_station5; ?></td>
                          </tr>
                          <tr>
                            <td>Mesin5b</td>
                            <td ><?php echo $jumlah_output_mesin5_b; ?></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Mesin5c </td>
                            <td ><?php echo $jumlah_output_mesin5_c; ?></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Mesin5d </td>
                            <td><?php echo $jumlah_output_mesin5_d; ?></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Mesin6 </td>
                            <td ><?php echo $jumlah_output_mesin6_a; ?></td>
                            <td><?php echo $output_station6; ?></td>
                            <td class="font-weight-bold"><?php echo $masker_station6; ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Chart Data IOT dan Real time data</p>
                 </div>
                  <p class="font-weight-500">chart perbandingan antara data dari IOT dan data yang diinput oleh operator setiap akhir hari,data yang ditampilkan berupa data hari ini</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <p class="card-title">Finish Good</p>
                              <h1 class="text-primary"><?php echo $masker_station6; ?></h1>
                              <h3 class="font-weight-500 mb-xl-4 text-primary">Stasiun 6</h3>
                              <p class="mb-2 mb-xl-0">Data yang ditampilkan adalah data berapa target perhari untuk saat ini data nya diambil dari stasiun mesin 6 karena datanya yang ada di spread sheet harus diupdate secara manual

                              </p>
                            </div>  
                            </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-6 border-right">
                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                  <table class="table table-borderless report-table">
                                    <tr>
                                      <td class="text-muted">Mesin 1</td>
                                      <td class="w-100 px-0">
                                        <div class="progress-md mx-4">
                                        <progress style="progress-container" id="myProgress" value=<?php echo $masker_station1; ?> max="1500"></progress>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0"><?php echo $prosentase_target_sta1; ?></h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Mesin 2</td>
                                      <td class="w-100 px-0">
                                        <div class=" progress-md mx-4">
                                        <progress style="progress-container" id="myProgress" value=<?php echo $masker_station2; ?> max="1500"></progress>

                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0"><?php echo $prosentase_target_sta2; ?></h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Mesin 3</td>
                                      <td class="w-100 px-0">
                                        <div class=" progress-md mx-4">
                                        <progress style="progress-container" id="myProgress" value=<?php echo $masker_station3; ?> max="1500"></progress>

                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0"><?php echo $prosentase_target_sta3; ?></h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Mesin 4</td>
                                      <td class="w-100 px-0">
                                        <div class=" progress-md mx-4">
                                        <progress style="progress-container" id="myProgress" value=<?php echo $masker_station4; ?> max="1500"></progress>

                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0"><?php echo $prosentase_target_sta4; ?></h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Mesin 5</td>
                                      <td class="w-100 px-0">
                                        <div class=" progress-md mx-4">
                                        <progress style="progress-container" id="myProgress" value=<?php echo $masker_station5; ?> max="1500"></progress>

                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0"><?php echo $prosentase_target_sta5; ?></h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Mesin 6</td>
                                      <td class="w-100 px-0">
                                        <div class="progress-md mx-4">
                                        <progress style="progress-container" id="myProgress" value=<?php echo $masker_station6; ?> max="1500"></progress>

                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0"><?php echo $prosentase_target_sta6; ?></h5></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="north-america-chart"></canvas>
                                <div id="north-america-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

<!-- navbar component-->
  <?php include 'component/footer.php';?>
<!-- navbar selesai -->
     
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

</body>

</html>

<script>
function myFunction() {
  document.getElementById("myProgress").value = "75";
}
</script>

<script>
    if ($("#north-america-chart").length) {
      var areaData = {
        labels: ["IOT", "REAL", "FG"],
        datasets: [{
            data: [<?php echo $masker_station6;?>, 90, 0],
            backgroundColor: [
               "#4B49AC","#FFC100", "#248AFD" , "#0000FF",
            ],
            borderColor: "rgba(0,0,0,0)"
          }
        ]
      };
      var areaOptions = {
        responsive: true,
        maintainAspectRatio: true,
        segmentShowStroke: false,
        cutoutPercentage: 78,
        elements: {
          arc: {
              borderWidth: 4
          }
        },      
        legend: {
          display: false
        },
        tooltips: {
          enabled: true
        },
        legendCallback: function(chart) { 
          var text = [];
          text.push('<div class="report-chart">');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">P</p></div>');
            text.push('<p class="mb-0">202</p>');
            text.push('</div>');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Mesin 2</p></div>');
            text.push('<p class="mb-0">66093</p>');
            text.push('</div>');
            text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
            text.push('<p class="mb-0">39836</p>');
            text.push('</div>');
          text.push('</div>');
          return text.join("");
        },
      }
      var northAmericaChartPlugins = {
        beforeDraw: function(chart) {
          var width = chart.chart.width,
              height = chart.chart.height,
              ctx = chart.chart.ctx;
      
          ctx.restore();
          var fontSize = 3.125;
          ctx.font = "500 " + fontSize + "em sans-serif";
          ctx.textBaseline = "middle";
          ctx.fillStyle = "#13381B";
      
          var text = "<?php echo $masker_station6;?>",
              textX = Math.round((width - ctx.measureText(text).width) / 2),
              textY = height / 2;
      
          ctx.fillText(text, textX, textY);
          ctx.save();
        }
      }
      var northAmericaChartCanvas = $("#north-america-chart").get(0).getContext("2d");
      var northAmericaChart = new Chart(northAmericaChartCanvas, {
        type: 'doughnut',
        data: areaData,
        options: areaOptions,
        plugins: northAmericaChartPlugins
      });
      document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
    }
</script>



<script>
  if ($("#sales-chart").length) {
      var SalesChartCanvas = $("#sales-chart").get(0).getContext("2d");
      var SalesChart = new Chart(SalesChartCanvas, {
        type: 'bar',
        data: {
          labels: ['Station 1', 'Station 2', 'Station 3', 'Station 4', 'Station 5', 'Station 6'],
          datasets: [{
              label: 'IOT',
              data: [
                <?php echo $masker_station1;?>, 
				        <?php echo $masker_station2;?>, 
				        <?php echo $masker_station3;?>, 
				        <?php echo $masker_station4;?>, 
				        <?php echo $masker_station5;?>, 
				        <?php echo $masker_station6;?>,
              ],
              backgroundColor: '#98BDFF'
            },
            {
              label: 'REAL TIME',
              data: [<?php echo $masker_station1;?>, 
				        <?php echo $masker_station2;?>, 
				        <?php echo $masker_station3;?>, 
				        <?php echo $masker_station4;?>, 
				        <?php echo $masker_station5;?>, 
				        <?php echo $masker_station6;?>,],
              backgroundColor: '#4B49AC'
            }
          ]
        },
        options: {
          cornerRadius: 5,
          responsive: true,
          maintainAspectRatio: true,
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 20,
              bottom: 0
            }
          },
          scales: {
            yAxes: [{
              display: true,
              gridLines: {
                display: true,
                drawBorder: false,
                color: "#F2F2F2"
              },
              ticks: {
                display: true,
                min: 0,
                max: 1500,
                callback: function(value, index, values) {
                  return  value ;
                },
                autoSkip: true,
                maxTicksLimit: 10,
                fontColor:"#6C7383"
              }
            }],
            xAxes: [{
              stacked: false,
              ticks: {
                beginAtZero: true,
                fontColor: "#6C7383"
              },
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
                display: false
              },
              barPercentage: 1
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }
        },
      });
      document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
    }
</script>
