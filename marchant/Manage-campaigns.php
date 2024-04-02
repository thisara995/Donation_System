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
                    <h3> Campaigns Details</h3>
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
                        <h5>Manage Campaigns</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-key-table">
                                <thead>
                                    <tr>
                                        <th>Campaign Name</th>
                                        <th>Campaign Category</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Image</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Campaign A</td>
                                        <td>Lifestyle</td>
                                        <td>Description of Campaign A</td>
                                        <td>$10,000</td>
                                        <td><img src="path_to_image/image.jpg" alt="Campaign Image"></td>
                                        <td>2024-05-01</td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Campaign Name</th>
                                        <th>Campaign Category</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Image</th>
                                        <th>End Date</th>
                                        <th>Action</th>
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
<?php include('includes/footer.php'); ?>
