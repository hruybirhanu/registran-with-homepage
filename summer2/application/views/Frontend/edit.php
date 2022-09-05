
<div class="container">
    <div class="row">
        <div class="col-md-12">
         <div class="card">
            <div class="card-header">
                <h5>Employee edit page
                <a href="<?php echo base_url("employee");?>" class="btn btn-danger float-right">back</a></h5>
          <form action="<?php echo base_url('employee/update/'.$employee->id);?>" method="post">
            <div class="form-group">
                <label for="">first_name</label>
                <input type="text" name='first_name' value="<?=$employee->first_name?>" class="form-control">
                <small><?php echo form_error('first_name');?></small>
            </div>
            <div class="form-group">
                <label for="">last tname</label>
                <input type="text" name='last_name' value="<?=$employee->last_name?>" class="form-control">
                <small><?php echo form_error('last_name');?></small>
            </div>
            <div class="form-group">
                <label for="">phoneNo</label>
                <input type="text" name='phoneNo' value="<?=$employee->phoneNo?>" class="form-control">
                <small><?php echo form_error('phoneNo');?></small>
            </div>
            <div class="form-group">
                <label for="">id</label>
                <input type="text" name='id' value="<?=$employee->id?>" class="form-control">
                <small><?php echo form_error('id');?></small>
            </div>
            <div class="form-group">
                <label for="">sex</label>
                <input type="text" name='sex'value="<?=$employee->sex?>" class="form-control">
                <small><?php echo form_error('sex');?></small>
            </div>
            <div class="form-group">
                <label for="">adress</label>
                <input type="text" name='adress' value="<?=$employee->adress?>" class="form-control">
                <small><?php echo form_error('adress');?></small>
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="text" name='email' value="<?=$employee->email?>" class="form-control">
                <small><?php echo form_error('email');?></small>
            </div>
            <div class="form-group">
                <button type='submit' class='btn btn-info'>update</button>
            </div>
          </form>

            </div>
            <div class="card-body">
            </div>
         </div>
        </div>
    </div>
</div>
    