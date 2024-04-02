<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
?>

<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Statistics</h3>
             </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
            <div class="col-sm-12 box-col-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Donation Statistics</h5>
                  </div>
                  <div class="card-body chart-block">
                    <div class="chart-overflow" id="line-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 box-col-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>User Engagement Statistics</h5>
                  </div>
                  <div class="card-body chart-block">
                    <canvas id="myBarGraph"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 box-col-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>New Doner Regsitration</h5>
                  </div>
                  <div class="card-body">
                    <div class="ct-4 flot-chart-container"></div>
                  </div>
                </div>
              </div>
               
              <div class="col-sm-12 col-xl-4 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Camapaign Performence <span class="digits"></span></h5>
                  </div>
                  <div class="card-body p-0 chart-block">
                    <div class="chart-overflow" id="pie-chart2"></div>
                  </div>
                </div>
              </div>
              </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
   <?php   include('includes/footer.php');  ?>