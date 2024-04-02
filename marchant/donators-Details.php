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
                  <h3>Chart</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Widgets</li>
                    <li class="breadcrumb-item active">Chart</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Donar Detials</h5>
        </div>
        <div class="card-body">
          <div class="dt-ext table-responsive">
            <table class="display" id="basic-key-table">
              <thead>
                <tr>
                <th>Donor ID</th>
                  <th>Donor Name</th>
                  <th>Donation Amount</th>
                  <th>Donation Date</th>
                  <th>Payment Method</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>001</td>
                  <td>John Smith</td>
                  <td>$50</td>
                  <td>2024-03-15</td>
                  <td>john@example.com</td>
                  <td>Debit Card </td>
                  <td>+1234567890 </td>
                
                </tr>
                <tr>
                  <td>002</td>
                  <td>Jane Doe</td>
                  <td>$100</td>
                  <td>2024-05-01</td>
                  <td>Jane@example.com</td>
                  <td>Credit Card </td>
                  <td>+1234567890 </td>
                </tr>

              </tbody>
              <tfoot>
                <tr>
                <th>Donor ID</th>
                  <th>Donor Name</th>
                  <th>Donation Amount</th>
                  <th>Donation Date</th>
                  <th>Payment Method</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
</div>
   <?php   include('includes/footer.php');  ?>