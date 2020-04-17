<?php include 'header.php'; ?>
<div class="wrapper">
  <div class="container w-100">
    <div class="main my-5">
      <div class="card slideInDown animated">
        <div class="card-header">
          <h4 class="text-dark p-1">Riwayat Absensi</h4>
        </div>
        <div class="card-body">
          <form class="form-inline mb-2" method="POST" action="export_xls.php">
            <div class="form-group">
              <input class="form-control" type="date" name="date_sel" id="date_sel">
              <button class="btn btn-primary ml-2" type="button" name="user_log" id="user_log">Select Date</button>
              <input class="btn btn-primary ml-2" type="submit" name="To_Excel" value="Export to Excel">
            </div>
          </form>
          <!--User table-->
          <div class="table-responsive">
            <table class="table table-striped table-bordered text-center">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Fingerprint ID</th>
                  <th>Date</th>
                  <th>Time In</th>

                </tr>
              </thead>
            </table>
          </div>
          <div class="tbl-content slideInRight animated">
            <div id="userslog"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>