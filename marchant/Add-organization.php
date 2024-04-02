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
                  <h3>Add Organization</h3>
                </div>
              </div>
            </div>
          </div>
    <!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="edit-profile">
        <div class="row">
            
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">Organization Details</h4>
                        <div class="card-options">
                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
                                <i class="fe fe-chevron-up"></i>
                            </a>
                            <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
                                <i class="fe fe-x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Organization Name</label>
                                <input class="form-control" type="text" placeholder="Organization Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Abbreviation Name</label>
                                <input class="form-control" type="text" placeholder="Abbreviation Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SSM Number</label>
                                <input class="form-control" type="text" placeholder="SSM Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input class="form-control" type="text" placeholder="Address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Postcode</label>
                                <input class="form-control" type="number" placeholder="Postcode">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input class="form-control" type="text" placeholder="City">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <input class="form-control" type="text" placeholder="State">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <select class="form-control">
                                    <option value="">-- Select Country --</option>
                                   <option value="Malaysian">Malaysian</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Canada">Canada</option>
                                    <option value="USA">USA</option>
                                    <option value="Australia">Australia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Handphone No</label>
                                <input class="form-control" type="tel" placeholder="Handphone No">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Office Telephone No</label>
                                <input class="form-control" type="tel" placeholder="Office Telephone No">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Certificate of e-ROSES / SSM / Organization</label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Profile of Company / Organization</label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">First Page of Bank Account Statement (proof of Bank Account)</label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name of Bank</label>
                                <input class="form-control" type="text" placeholder="Name of Bank">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name of Account Bank Owner</label>
                                <input class="form-control" type="text" placeholder="Name of Account Bank Owner">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Account Number</label>
                                <input class="form-control" type="text" placeholder="Account Number">
                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

</div>
   <?php   include('includes/footer.php');  ?>