<!-- add employee modal -->
<div class="modal fade" id="add_employee_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <form method="post" id="add_employee">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name"  placeholder="Enter First Name">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Middle Name</label>
                    <input type="text" class="form-control" name="middle_name" id="middle_name"  placeholder="Enter Middle Name">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name"  placeholder="Enter Last Name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" id="address"  placeholder="Enter Address">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"  placeholder="Enter Email">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" id="username"  placeholder="Enter Username">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter Password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Job Discipline</label>
                    <input type="email" class="form-control" name="job_discipline" id="job_discipline"  placeholder="Enter Job Discipline">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Employee Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="1">Enable</option>
                        <option value="0">Disable</option>
                    </select>
                </div>
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

    </div>
  </div>
</div>
<!-- add employee modal -->

<!-- add materials modal -->
<div class="modal fade" id="add_materials_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Materials</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form method="post" id="add_materials">
        <div class="form-group">
            <label for="exampleInputEmail1">Material Title</label>
            <input type="text" class="form-control" name="material_title" id="material_title"  placeholder="Enter Material Title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Material</label>
            <input type="file" class="form-control" name="material" id="material"  accept=".pdf">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

    </div>
    </div>
  </div>
</div>
<!-- add materials modal -->



