

    <div id="content-wrapper">

      <div class="container-fluid">
  
  <?php if ($this->session->flashdata('logged_in')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('logged_in').$this->session->userdata['username'].'</div>'; ?>
    
  <?php endif; ?>
   <?php if ($this->session->flashdata('logged_out')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('logged_out').'</div>'; ?>
    
  <?php endif; ?>
  <?php if ($this->session->flashdata('entry_created')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('entry_created').'</div>'; ?>
    
  <?php endif;  ?>
   <?php if ($this->session->flashdata('bill_entered')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('bill_entered').'</div>'; ?>
    
  <?php endif; ?>
   <?php if ($this->session->flashdata('entry_error')): ?>

      <?php echo '<div class="alert alert-danger" >'.$this->session->flashdata('entry_error').'</div>'; ?>
    
  <?php endif; ?>
   <?php if ($this->session->flashdata('errorMessage')): ?>

      <?php echo '<div class="alert alert-danger" >'.$this->session->flashdata('entry_error').'</div>'; ?>
    
  <?php endif; ?>
 <?php if ($this->session->flashdata('entry_updated')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('entry_updated').'</div>'; ?>
    
  <?php endif; ?>
<?php if ($this->session->flashdata('approved')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('approved').'</div>'; ?>
    
  <?php endif; ?> 
  <?php if ($this->session->flashdata('successMessage')): ?>

      <?php echo '<div class="alert alert-success" >'.$this->session->flashdata('successMessage').'</div>'; ?>
    
  <?php endif; ?> 
  <?php if ($this->session->flashdata('errorMessage')): ?>

      <?php echo '<div class="alert alert-danger" >'.$this->session->flashdata('errorMessage').'</div>'; ?>
    
  <?php endif; ?> 



        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Create New Task</li>
        </ol>

         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <a type="button" media=print  href="<?php echo base_url();?>entries/print"   class="btn btn-sm btn-outline-secondary">Export</a>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
   <div>
   </div>
   
   
     <div class="container" > 
      <?php echo validation_errors(); ?>
      <?php echo form_open('entries/create'); ?>
      <div class="row" >
       
       <div class="col-md-6">
        
 <!--  <form action="entries/create" method="post"> -->
             <select name="service_department" class="form-control">
              <option disabled selected >Select Deparment</option>
               <option value="IT">IT</option>
               <option value="Engineering">Engineering</option>
             </select>
        </div>
        <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Asset/BME Number" name="asset_no">
             </div>
       </div>
     
  
  
     <div class="row">

       <div class="col-md-6">
          <select  class="form-control" name="user_department">   
            <option disabled selected >Select Deparment</option>
            <option  value="volvo">Record/Biostat</option>
            <option  value="volvo">Nursing Secretariat</option>
            <option  value="volvo">Pharmacy</option>
            <option value="volvo" >Room 1: CBG</option>
            <option value="volvo" >Room2: Pharmacy Store</option>
            <option >Room 3:</option>
            <option>Room 4:</option> 
            <option >Room 5:</option>
            <option> Room 6:</option>
            <option >Room 7:</option>
            <option >Room 8:</option>
            <option >X-Ray</option>
            <option >Lab</option>
            <option >P1 (1st floor)</option>
           <option>P2A, P26 (2nd floor)</option>
           <option>P3B, Babies (3rd floor)</option>
            <optgroup label="Medical Administration">
            <option value="volvo">Secretariat</option>
            <option value="saab">Head Of Department</option>
            <option value="saab">Senior Consultant 1</option>
            <option value="saab">Senior Consultant 2</option>
            <option value="saab">Senior Consultant 3</option>
            </optgroup>
            <optgroup label="Mother's Hostel">
            <option value="volvo">Reception</option>
            <option value="saab">Stores</option>
            <option value="saab">General Office</option>
            <option value="saab">Accounts</option>
            <option value="saab">Administrator</option>
            <option> Administrator Secretariat</option>
            </optgroup>
            <optgroup label="Emergency">
            <option value="volvo">OPD</option>
            <option value="saab">NICU</option>
            <option value="saab">PICU</option>
            <option value="saab">IT</option>
           
            </optgroup>
            
           </select>                                                     
        </div>
         <div class="col-md-6">
     <select class="form-control"  name="nature_of_request">
       <option disabled selected  >Select Nature Of Request</option>
    <option value="saab">value="saab"Planned Preventive Maintenance</option>
    <option value="saab">Internet/Network Downtime</option>
    <option >Telephone Issues</option>
    <option >Corrective Maintenance/Repair</option>
    <option >Other</option>

  </select>
</div>
       
     

     <div class="row">
     
  </div> 
    <div class="col-md-6">
            
   <input type="text" class="form-control" placeholder="Asset/Equipment Type" name="equipment_type">
</div>
       </div>



    <div class="row">
      <div class="col-md-6">
         <input type="text" class="form-control" placeholder="Name"  name="name" >
      </div>
       <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Position"  name="position" >
       </div>
    </div>

  <div class="row">
      
       <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Telephone Number" name="number" aria-label="Username" aria-describedby="basic-addon1">
       </div>
    </div>
            <button class="btn btn-block btn-primary">Submit</button>

             </form>
      </div>
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

 