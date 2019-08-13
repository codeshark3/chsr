

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  
 <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

     <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->

      <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level plugin JavaScript-->
<!-- 
    <script src="</?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script> -->

    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.js"></script>

      <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->

    <script src="<?php echo base_url(); ?>assets/js/sb-admin.min.js"></script>
  <!-- Demo scripts for this page-->

     <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

     <script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
</body>

</html>

<div id="createModal" class="modal fade">
  <div class="modal-dialog">
       <!-- </?php echo validation_errors(); ?> -->
    <form method="post" id="create_form">
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">Create New Task</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
<div class="modal-body">
      <div class="row" >
       
       <div class="col-md-6">
        
 <!--  <form action="entries/create" method="post"> -->
             <select name="service_department" id="service_department" class="form-control">
              <option disabled selected >Select Deparment</option>
               <option value="IT">IT</option>
               <option value="Engineering">Engineering</option>
             </select>
        </div>
        <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Asset/BME Number" name="asset_no"id="asset_no">
             </div>
       </div>
     
  
  
     <div class="row">

       <div class="col-md-6">
          <select  class="form-control" name="user_department" id="user_department">   
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
     <select class="form-control"  name="nature_of_request" id="nature_of_request">
       <option disabled selected  >Select Nature Of Request</option>
    <option value="saab">value="saab"Planned Preventive Maintenance</option>
    <option value="saab">Internet/Network Downtime</option>
    <option >Telephone Issues</option>
    <option >Corrective Maintenance/Repair</option>
    <option >Other</option>

  </select>
</div>
       
     


    <div class="col-md-6">
            
   <input type="text" class="form-control" placeholder="Asset/Equipment Type" name="equipment_type" id="equipment_type" >
</div>
       </div>



    <div class="row">
      <div class="col-md-6">
         <input type="text" class="form-control" placeholder="Name"  name="name" id="name" >
      </div>
       <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Position"  name="position"  id="position"  >
       </div>
    </div>

  <div class="row">
      
       <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Telephone Number" name="number"  id="number" aria-label="Username" aria-describedby="basic-addon1">
       </div>
    </div>
    <div class="modal-footer">
        <input type="hidden" name="id" id="id"/>
        <input type="submit" name="action" class="btn btn-block btn-primary" value="Add" id="action"/>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
          
</div>
      </div>
             </form>
  </div>
</div>



<script type="text/javascript">
	$(document).ready(function(){
		var dataTable = $('#mytable').DataTable({
			"processing":true,
			"serverSide":true,
			"order":[],
			"ajax":{
				url:"<?php echo base_url() . 'entries/fetch'?>",
				type: "POST"
			},
			"columnDefs":[
			{
				"target":[0,3,4],
				"orderable":false
			},
			],

					});


    $(document).on('submit', '#create_form', function(event){
       event.PreventDefault(); 
              
          var  service_department = $('#service_department').val();
          var asset_no =  $('#asset_no').val();       
         var equipment_type = $('#equipment_type').val(); 
          var user_department = $('#user_department').val(); 
          var nature_of_request = $('#nature_of_request').val();
          var name = $('#name').val();   
          var position = $('#position').val();   
        var  number = $('#number').val(); 

      if(service_department != '' && asset_no != '' && equipment_type != '' && user_department != '' && nature_of_request != '' && name != '' && position != '' && number != ''){

          $.ajax({
            // url:"</?php echo base_url() . 'asd'?>",
             url:"<?php echo base_url(); ?>entries/create", 
            method: 'POST',
            data: new FormData(this), 
            contentType:false,
            processData:false,
            success:function(data)
            {
              alert(data); window.alert(number);
              $('#create_form')[0].reset();
              $('#createModal').modal('hide');
              dataTable.ajax.reload();

            }
          });
      }else
      {
          alert("All fields are required");
      }
      
    });  


    $(document).on('click', '.update', function(){
      var id = $(this).attr("id");
      $.ajax({
          url:"<?php echo base_url(); ?>entries/fetch_single_user", 
          method:"POST",
          data: {id:id},
          dataType:"json",
          success: function(data)
          {
             
               $('#createModal').modal('show');
               $('#service_department').val(data.service_department);
              $('#asset_no').val(data.asset_no);       
             $('#equipment_type').val(data.equipment_type); 
             $('#user_department').val(data.user_department); 
              $('#nature_of_request').val(data.nature_of_request);
              $('#name').val(data.name);   
              $('#position').val(data.position);
               $('#number').val(data.number); 
               $('.modal-title').text("Edit ");
               $('#id').val(id);
               $('#action').val("Edit");
              // dataTable.ajax.reload();
          },
      })
    });


});	
</script>



<!--<d iv id="createModal" class="modal fade">
  <div class="modal-dialog">
     </?php echo validation_errors(); ?> 
    <form method="post" id="create_form">
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">Create New Task</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
<div class="modal-body">
      <div class="row" >
       
       <div class="col-md-6">
        
 <form action="entries/create" method="post"> 
             <select name="service_department" id="service_department" class="form-control">
              <option disabled selected >Select Deparment</option>
               <option value="IT">IT</option>
               <option value="Engineering">Engineering</option>
             </select>
        </div>
        <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Asset/BME Number" name="asset_no"id="asset_no">
             </div>
       </div>
     
  
  
     <div class="row">

       <div class="col-md-6">
          <select  class="form-control" name="user_department" id="user_department">   
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
     <select class="form-control"  name="nature_of_request" id="nature_of_request">
       <option disabled selected  >Select Nature Of Request</option>
    <option value="saab">value="saab"Planned Preventive Maintenance</option>
    <option value="saab">Internet/Network Downtime</option>
    <option >Telephone Issues</option>
    <option >Corrective Maintenance/Repair</option>
    <option >Other</option>

  </select>
</div>
       
     


    <div class="col-md-6">
            
   <input type="text" class="form-control" placeholder="Asset/Equipment Type" name="equipment_type" id="equipment_type" >
</div>
       </div>



    <div class="row">
      <div class="col-md-6">
         <input type="text" class="form-control" placeholder="Name"  name="name" id="name" >
      </div>
       <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Position"  name="position"  id="position"  >
       </div>
    </div>

  <div class="row">
      
       <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Telephone Number" name="number"  id="number" aria-label="Username" aria-describedby="basic-addon1">
       </div>
    </div>
    <div class="modal-footer">
      
        <input type="submit" name="action" class="btn btn-block btn-primary" value="Add" id="action"/>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
          
</div>
      </div>
             </form>
  </div>
</div> -->