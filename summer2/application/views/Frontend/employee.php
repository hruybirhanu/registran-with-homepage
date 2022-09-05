
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
         <div class="card">
            <div class="card-header">
               
                <h5>how to insert data into database
                <a href="<?php echo base_url('employee/add/');?>" class='btn btn-primary float-right'>add employe</a>
                <a href="<?php echo base_url('employee/add/');?>" class='btn btn-primary float-right'>add employe</a>
                <a href="<?php echo base_url('back_home');?>" class='btn btn-primary float-right'>add employe</a>
            
            </h5>
            
            </div>
            <div class="card-body">
            <table id='datatable1' class="table table-border">
                <thead>
                    <tr>
                        <th>firstname</th>
                        <th>last-name</th>
                        <th>phoneNo</th>
                        <th>id</th>
                        <th>sex</th>
                       
                        <th>adress</th>
                        <th>email</th>
                        <th>edit</th>
                        <th>delate</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($employee as $row):?>
                   <tr>
                    <td><?php echo $row->first_name; ?></td>
                    <td><?php echo $row->last_name; ?></td>
                    <td><?php echo $row->phoneNo; ?></td>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->sex; ?></td>
                    <td><?php echo $row->adress; ?></td>
                    <td><?php echo $row->email; ?></td>
                
                        <td>
                            <a href="<?php echo base_url('employee/edit/'.$row->id) ;?>" class="btn btn-success btm-sm">edit</a>
                        </td> 
                        <td>
                            <a href="<?php echo base_url('employee/delate/'.$row->id)?>" class="btn btn-danger btm-sm">delet</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                   
                </tbody>
            </table>
            </div>
         </div>
        </div>
    </div>
</div>
    