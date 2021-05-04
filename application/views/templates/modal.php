
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
        <?= form_open('saveregistration');?>
            <form action="" method="">
                <div class="form-group row">
                    <label for="email_address" class="col-md-4 col-form-label text-md-right">First Name:</label>
                    <div class="col-md-6">
                        <input type="text" id="email_address" class="form-control" name="firstname" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Middle Name:</label>
                    <div class="col-md-6">
                        <input type="text" id="email_address" class="form-control" name="middlename" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email_address" class="col-md-4 col-form-label text-md-right">last Name:</label>
                    <div class="col-md-6">
                        <input type="text" id="email_address" class="form-control" name="lastname" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                    <div class="col-md-6">
                        <input type="email" id="email_address" class="form-control" name="email" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                    <div class="col-md-6">
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password:</label>
                    <div class="col-md-6">
                        <input type="password" id="password" class="form-control" name="confirmpass" required>
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
      </form>
    </div>
  </div>
</div>