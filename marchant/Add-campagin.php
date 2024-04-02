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
                  <h3>Add Campaign</h3>
                </div>
              </div>
            </div>
          </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10">
            <div class="card">
                <div class="card-header pb-0">
                <h5>Create Campaign</h5>
                </div>
                <div class="card-body add-post">
                <form class="row needs-validation" novalidate="">
                    <div class="col-sm-12">
                    <div class="form-group">
                        <label for="compagin Name">Compagin Name</label>
                        <input class="form-control" id="compagin Name" type="text" placeholder="compagin Name" required="">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="campaignCategory">Campaign Category:</label>
                        <select class="form-control" id="campaignCategory">
                        <option value="lifestyle">Lifestyle</option>
                        <option value="travel">Travel</option>
                        <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="campaignImage">Campaign Image:</label>
                        <input type="file" class="form-control-file" id="campaignImage">
                    </div>
                    <div class="form-group">
                        <label for="campaignDescription">Description:</label>
                        <textarea class="form-control" id="campaignDescription" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="campaignAmount">Amount:</label>
                        <input class="form-control" id="campaignAmount" type="text" placeholder="Amount">
                    </div>
                    <div class="form-group">
                        <label for="endDate">End Date:</label>
                        <input class="form-control" id="endDate" type="date">
                    </div>
                    <div class="btn-showcase">
                        <button class="btn btn-primary" type="submit">Add</button>
                        <button class="btn btn-light" type="reset">Discard</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- Container-fluid Ends-->
        </div>
   <?php   include('includes/footer.php');  ?>