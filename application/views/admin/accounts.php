

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Accounts</li>
        </ol>




<?php echo $this->session->flashdata('errorMessage');?>
<?php echo $this->session->flashdata('successMessage');?>


		<div class="col-12 mx-auto" style="margin-top:20px">
			<?php echo form_fieldset('<div class="row"><div <h1 class="text-primary">Registed Accounts</h1> </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div> <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#createModal">Create</button></div></div>
 '); ?>
			<table class="table table-striped table-hover ">
				<tr>
					<th>ID</th>
					<th>Email</th>
					<th>Account Type</th>
					<th>Date/Time Created</th>
					<th>Action</th>
				</tr>
				<?php
				$count = 1; 
				?>
				<?php foreach($accountsList as $account) :?>
				<tr>
					<?php
					$id = $account->id;
					?>
					<td><?php echo $count++; ?></td>
					<td><?php echo $account->email ?></td>
					<td><?php echo $account->account_type ?></td>
					<td><?php echo $account->date_created ?></td>
					<td><a href="<?php echo base_url("accounts/delete/$id"); ?>" class="btn btn-danger btn-md">Delete</a></td>
				</tr>
			<?php endforeach;?>
			</table>
			</div>
</div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          	
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  <!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php echo form_open('AuthController/register_account'); ?>
<?php echo form_fieldset('<h1 class="text-primary">Register Account</h1>'); ?>
<div class="row mx-auto">
			<div class="col-6 ">
		<div class="form-group   ">
			<label for='Username'>Email</label>
			<input type="text" name="email" class="form-control  input-md">
		</div>
	</div>
	<div class="col-6 ">
		<div class="form-group">
			<label for='Password'>Password</label>
			<input type="password" name="Password" class="form-control input-md">
		</div>
	</div>
</div>
<div class="row mx-auto">
<div class="col-6">
<div class="form-group">
	<label for='repeat_password'>Repeat Password</label>
	<input type="password" name="repeat_password" class="form-control  input-md">
</div>
</div>
<div class="col-6">
<div class="form-group">
	<label for='account_type'>Account Type</label>
	<select name="account_type" class="form-control input-md">
		<option>Admin</option>
		<option>Executive</option>
		<option>User</option>
		<option>Admin_dashboard</option>
	</select>
</div>
</div>
</div>


       
      </div>
      <div class="modal-footer">
<div class="row mx-auto">
	<div class="form-group">
	<input type="submit" name="submit_account" class="btn btn-primary  btn-block" value="Register">
</div>
<div class="form-group">
	
        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
  
</div>
</div>

</div>
    

    
      </div>
    </div>
  </div>
</div><?php echo form_close(); ?>
        
     
  <!-- Modal -->