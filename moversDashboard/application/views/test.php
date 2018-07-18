
<style type="text/css">
.btn-primaryi {
  background-color: #41cac0!important;
  border-color: #41cac0!important;
  color: #ffffff!important;
}

</style>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
               Transactions List
         </header>
         <?php if ($this->session->flashdata('msg1')!='') { ?>
         <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <?php
          echo $this->session->flashdata('msg1'); 
          ?>
        </div>
        <?php } ?>
        <?php if ($this->session->flashdata('msg2')!='') { ?>
        <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <?php
          echo $this->session->flashdata('msg2'); 
          ?>
        </div>
        <?php } ?>
        <?php if ($this->session->flashdata('msg3')!='') { ?>
        <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <?php
          echo $this->session->flashdata('msg3'); 
          ?>
        </div>
        <?php } ?>
        <?php if ($this->session->flashdata('msg4')!='') { ?>
        <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <?php
          echo $this->session->flashdata('msg4'); 
          ?>
        </div>
        <?php } ?>

          <div class="row CUSTOM_TAB">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
              <a href="#home" aria-controls="home" role="tab" data-toggle="tab" >Daily Transaction</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" >Weekly Transaction</a>
              </li>
              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" >Monthly Transaction</a></li>
               <li role="presentation"><a href="#all" aria-controls="all" role="tab" data-toggle="tab" >All Transaction</a></li>
            
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
        <div class="panel-body">
          <div class="adv-table">
            <div class="table-responsive">
 <table  class="display table table-bordered table-striped example" id="example">
                                      <thead>
                                      <tr>
                                          <th>Sr.No.</th>
                                          <th>User Name</th>
                                          <th>Amount Credited</th>
                                          <th>Amount Debited</th>
                                          <th>Transaction Id</th>
                                          <th>Booking Id</th>
                                          <th>Date Created</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                       <?php
                                       $i=1;
                                       foreach ($dailytransaction as $key => $value) {
                            
                                        ?>
                                        <tr id ='hello<?php echo $value->deleteid; ?>'> 
                                        <td>
                                          <?php echo $i; ?>
                                        </td>
                                        <td>
                                          <?php 
                                           if (isset($value->fname)) {
                                          echo $value->fname." ". $value->lname; 
                                           }
                                           else{
                                            echo "N\A";
                                           }  ?>
                                        </td>
                                
                                           <td>
                                          <?php 
                                           if (!empty($value->amount_credited)) {
                                          echo $value->amount_credited; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                                           <td>
                                          <?php 
                                           if (!empty($value->amount_debited)) {
                                          echo $value->amount_debited; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                                               <td>
                                          <?php 
                                           if (!empty($value->txn_id)) {
                                          echo $value->txn_id; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                                                     <td>
                                          <?php 
                                           if (!empty($value->move_id)) {
                                          echo $value->move_id; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                        
                                        
                                        <td>
                                                <?php $date= $value->txndate;
                                          echo date("F d, Y", strtotime($date));?>
                                        </td>
                                        <td>                 
                                     <!-- delete btn btn-danger responsive wiDTH -->
                                          <button type="button" class="delete btn btn-danger responsive wiDTH_delete" id="<?php echo $value->deleteid;?>" >Delete</button>
                                         
                                           
                                         </td>
                                        </tr>

                                      <?php 
                                        $i++;
                                        }
                                        ?>
                                      </tbody>
                           
                                  </table>  
          
        </div>
        </div>
        </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="profile">    <div class="panel-body">
          <div class="adv-table">
            <div class="table-responsive">
             <table  class="display table table-bordered table-striped example" id="example">
                                      <thead>
                                      <tr>
                                          <th>Sr.No.</th>
                                          <th>User Name</th>
                                          <th>Amount Credited</th>
                                          <th>Amount Debited</th>
                                          <th>Transaction Id</th>
                                           <th>Booking Id</th>
                                          <th>Date Created</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                       <?php
                                       $i=1;
                                       foreach ($weektransaction as $key => $value) {
                                     
                                        ?>
                                        <tr id ='hello<?php echo $value->deleteid; ?>'> 
                                        <td>
                                          <?php echo $i; ?>
                                        </td>
                                        <td>
                                          <?php 
                                           if (isset($value->fname)) {
                                          echo $value->fname." ". $value->lname; 
                                           }
                                           else{
                                            echo "N\A";
                                           }  ?>
                                        </td>
                                
                                           <td>
                                          <?php 
                                           if (!empty($value->amount_credited)) {
                                          echo $value->amount_credited; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                                           <td>
                                          <?php 
                                           if (!empty($value->amount_debited)) {
                                          echo $value->amount_debited; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                                               <td>
                                          <?php 
                                           if (!empty($value->txn_id)) {
                                          echo $value->txn_id; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>

                                                 <td>
                                          <?php 
                                           if (!empty($value->move_id)) {
                                          echo $value->move_id; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                        
                                        
                                        <td>
                                                <?php $date= $value->txndate;
                                          echo date("F d, Y", strtotime($date));?>
                                        </td>
                                        <td>                 
                                     <!-- delete btn btn-danger responsive wiDTH -->
                                          <button type="button" class="delete btn btn-danger responsive wiDTH_delete" id="<?php echo $value->deleteid;?>" >Delete</button>
                                         
                                           
                                         </td>
                                        </tr>

                                      <?php 
                                        $i++;
                                        }
                                        ?>
                                      </tbody>
                           
                                  </table>
        </div>
        </div>
        </div></div>


                     <div role="tabpanel" class="tab-pane" id="messages">    <div class="panel-body">
          <div class="adv-table">
            <div class="table-responsive">
             <table  class="display table table-bordered table-striped example" id="example">
                                      <thead>
                                      <tr>
                                          <th>Sr.No.</th>
                                          <th>User Name</th>
                                          <th>Amount Credited</th>
                                          <th>Amount Debited</th>
                                          <th>Transaction Id</th>
                                           <th>Booking Id</th>
                                          <th>Date Created</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                       <?php
                                       $i=1;
                                       foreach ($monthtransaction as $key => $value) {
                             
                                        ?>
                                        <tr id ='hello<?php echo $value->deleteid; ?>'> 
                                        <td>
                                          <?php echo $i; ?>
                                        </td>
                                        <td>
                                          <?php 
                                           if (isset($value->fname)) {
                                          echo $value->fname." ". $value->lname; 
                                           }
                                           else{
                                            echo "N\A";
                                           }  ?>
                                        </td>
                                
                                           <td>
                                          <?php 
                                           if (!empty($value->amount_credited)) {
                                          echo $value->amount_credited; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                                           <td>
                                          <?php 
                                           if (!empty($value->amount_debited)) {
                                          echo $value->amount_debited; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                                               <td>
                                          <?php 
                                           if (!empty($value->txn_id)) {
                                          echo $value->txn_id; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>

                                                 <td>
                                          <?php 
                                           if (!empty($value->move_id)) {
                                          echo $value->move_id; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                        
                                        
                                        <td>
                                                <?php $date= $value->txndate;
                                          echo date("F d, Y", strtotime($date));?>
                                        </td>
                                        <td>                 
                                     <!-- delete btn btn-danger responsive wiDTH -->
                                          <button type="button" class="delete btn btn-danger responsive wiDTH_delete" id="<?php echo $value->deleteid;?>" >Delete</button>
                                         
                                           
                                         </td>
                                        </tr>

                                      <?php 
                                        $i++;
                                        }
                                        ?>
                                      </tbody>
                           
                                  </table>
        </div>
        </div>
        </div></div>
              <div role="tabpanel" class="tab-pane" id="all">    <div class="panel-body">
          <div class="adv-table">
            <div class="table-responsive">
              <table  class="display table table-bordered table-striped example" id="example">
                                      <thead>
                                      <tr>
                                          <th>Sr.No.</th>
                                          <th>User Name</th>
                                          <th>Amount Credited</th>
                                          <th>Amount Debited</th>
                                          <th>Transaction Id</th>
                                           <th>Booking Id</th>
                                          <th>Date Created</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                       <?php
                                       $i=1;
                                       foreach ($alltransaction as $key => $value) {
                                        // print_r($value);die();
                                        ?>
                                        <tr id ='hello<?php echo $value->deleteid; ?>'> 
                                        <td>
                                          <?php echo $i; ?>
                                        </td>
                                        <td>
                                          <?php 
                                           if (isset($value->fname)) {
                                          echo $value->fname." ". $value->lname; 
                                           }
                                           else{
                                            echo "N\A";
                                           }  ?>
                                        </td>
                                
                                           <td>
                                          <?php 
                                           if (!empty($value->amount_credited)) {
                                          echo $value->amount_credited; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                                           <td>
                                          <?php 
                                           if (!empty($value->amount_debited)) {
                                          echo $value->amount_debited; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                                               <td>
                                          <?php 
                                           if (!empty($value->txn_id)) {
                                          echo $value->txn_id; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>


                                                            <td>
                                          <?php 
                                           if (!empty($value->move_id)) {
                                          echo $value->move_id; 
                                           }
                                           else{
                                            echo "N/A";
                                           }  ?>
                                        </td>
                        
                                        
                                        <td>
                                                <?php $date= $value->txndate;
                                          echo date("F d, Y", strtotime($date));?>
                                        </td>
                                        <td>                 
                  
                                          <button type="button" class="delete btn btn-danger responsive wiDTH_delete" id="<?php echo $value->deleteid;?>" >Delete</button>
                                         
                                           
                                         </td>
                                        </tr>

                                      <?php 
                                        $i++;
                                        }
                                        ?>
                                      </tbody>
                           
                                  </table>           <div id="here_table"></div>
                                       <div id="here_table213"></div>
        </div>
        </div>
        </div></div>
            </div>
            </div>
          </div>












      </div>
    </div>
  </section>
</div>
</div>
<!-- page end-->
</section>
</section>
<!-- popup start-->

<!--popup end-->
<!--main content end-->
<!--footer start-->
<?php 
$this->load->view('templete/footer');
?>
<!--footer end-->


</body>
</html>

 <script> 
 $(document).ready(function(){

   $(".delete").click(function(event){
        var result = confirm("Are you Sure to delete?");
        if (result) {

         var id = $(this).attr("id");  

         $.ajax({
          type: "POST",
          url: "<?php echo base_url("Dashboard/deletetxn")?>",
          data: {id:id},
          success: function(response) {
                  if (response == true)
                  {
                    $("#hello"+id).slideUp(100, function() {
                      $(this).remove();
                    });

                  }
                  else if(response == false)
                  {
                    alert("Error");
                  } else{
                    alert('cannot delete the id');
                  }
      
           }
         });

         event.preventDefault();
       }
       else{

       }
       })
 });
</script>

<!--       <script type="text/javascript">

  var page = 1;
$.ajax({
        method:'GET',
        url: '<php echo base_url('Dashboard/abc12');?>',
 
        // dataType: 'json',
        success:function(result){   
      
      console.log(result);
      // $('#myTable tbody').html(result); 
        //alert(result.ResponseCode);return false;  
    
                    }
               });
  

      </script> -->
  <script>
$(document).ready(function(){

        // $.get("<?php echo base_url('Dashboard/abc12')?>", function(data, status){
        //   // $('#abc12 tbody').html(data);
        //   // alert(data);
        //   var abc=JSON.parse(data);
        


        //           $.each(abc,function(item,i){
           

        //       var content = "<table>"
        
              content += '<tr><td>' + i.email + '</td><td>'+  i.amount_debited + '</td><td>' +  i.amount_credited + '</td></tr>';
       
        //       content += "</table>"

        //       $('#here_table').append(content);
        //       });
        // });

                var abc=28;
                $.post("<?php echo base_url("api/User/getprofile")?>", {user_id: abc}, function(data,status){
                  console.log(data.Response[0].company_name);
                  console.log(data.Response[0].country_code);
                   $('#here_table').append(data.Response[0].country_code);
                   $('#here_table213').append(+data.Response[0].fname+'+'data.Response[0].lname'+);




          // var abc=JSON.parse(data);
              //           $.each(data,function(item,i){
              //             console.log(i);
              //             // console.log(item.Response);
           

              // var content = "<table>"
        
              // content += '<tr><td>' + i.fname + '</td><td>'+  i.email + '</td><td>' +  i.fb_signup + '</td></tr>';
       
              // content += "</table>"

              // $('#here_table').append(content);
              // });
              // var abc="ul";
              // abc+='<li>'++'<li>';

              // abc+="<ul>";

                  // alert(abc);
                  // alert(status);

        });
        

        





            // alert("Data: " + data + "\nStatus: " + status);
        });

</script>