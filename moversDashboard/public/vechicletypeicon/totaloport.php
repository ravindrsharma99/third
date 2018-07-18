<link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">
<section id="main-content">
    <section class="wrapper site-min-height1">
      <div class="table-responsive1">
        <?php if($this->session->flashdata('msg')); ?>
        <!-- page start-->
        <section class="panel custom_height1">

                <?php 
                  if(isset($id)){  ?>
                <div class="row border_bottom mgggn">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <header class="panel-heading">
                            <?php echo $title;?>
                        </header>
                    </div>
                </div>
                <?php }else{
                ?>
                <div class="row border_bottom mgggn">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <header class="panel-heading">Opportunities List</header>
                        <a class="btn btn-primary prim blok_btn bdefault" id="again" href="<?php echo base_url("Users/liveonappxls")?>" onclick="downloadXls()">Download</a>
                    </div>
                </div>

            <?php echo $this->session->flashdata('msg'); ?>

            <div class="panel-body">
              <div class="adv-table">
                  <div class="tabss">
                    <div class="row border_bottom">
                            <div class="col-lg-10 col-md-10 col-sm-10 w3-bar w3-black">
                                 <a href="<?php echo base_url("Users/completed")?>"> <button class="w3-bar-item w3-button" onclick="openCity('London')">Completed (<?php print_r($complete); ?>)</button></a>
                                        <a href="<?php echo base_url("Users/liveonapp")?>"><button class="w3-bar-item w3-button" onclick="openCity('London2')">Live on the App (<?php print_r($liveapp); ?>)</button></a>
                                        <a href="<?php echo base_url("Users/live")?>"><button class="w3-bar-item w3-button" onclick="openCity('Paris')">Happening now (<?php print_r($liveee); ?>)</button></a>
                                      <a href="<?php echo base_url("Users/incomplete")?>"> <button class="w3-bar-item w3-button" onclick="openCity('London')">Expired (<?php print_r($incompletee); ?>)</button></a>
                            </div>
<!--                             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <a class="btn btn-primary prim blok_btn bdefault" id="again" href="<?php echo base_url("Users/liveonappxls")?>" onclick="downloadXls()">Download</a>
                            </div> -->
                    </div>
                      <?php  } ?>
                                      <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                                        <thead>
                                                            <tr>
                                                                <th style="width:6%">Sr.No</th>
                                                                <th>Opportunity #</th>
                                                                  <th>Title</th>
                                                                <th>Organiser Name</th>
                                                                <th>Organiser Email Address</th>
                                                                <th>Location</th>
                                                                <th>Number of Vallanteers Required</th>
                                                                <th>Number of Vallenteers Signed Up</th>
                                                                <th>Vallanteer E-mail Addresses</th>
                                                                <th>Number of Hours Required</th>
                                                                <th>Start Date</th>
                                                                <th>End Date</th>
                                                                <th>Expiry Date</th>
                                                                <th>Start Time</th>
                                                                <th>Skills</th>
                                                                <th>Causes</th>
                                                                
                                                                <th>Opportunity Image</th>
                                                                <?php if (isset($id)) {

                                                                } else { ?>
                                                                <th>Action</th>
                                                                <?php } ?>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php   
            $sid = 1;  
               $current_date = date('Y-m-d');          
             foreach ($liveonapp as $user) {
              
            ?>
                                                             <tr id="row-<?php echo $user->opportunity_id?>">
                                                                <td>
                                                                    <?php echo $sid; ?>
                                                                </td>
                                                                   <td>
                                                                    <?php echo $user->opportunity_id; ?>
                                                                   </td>
                                                                <td>
                                                                    <?php echo $user->title; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $user->name; ?>
                                                                </td>
                                                                    <td>
                                                                    <?php echo $user->email; ?>
                                                                </td> 
                                                                <td>
                                                                    <?php echo $user->location; ?>
                                                                </td>
                                                                 <td>
                                                                    <?php echo $user->volunteers_no; ?>
                                                                </td>
                                                                <td><?php echo $user->vaga->count; ?></td>
                                                              

                                                                
                                                                <td>
                                                                          <?php
                                                                         foreach($user->vag as $uu){ ?>
                                                                      

                                                                          <a href="<?php echo base_url("Users/get/$uu->id"); ?>"><?php echo $uu->email.","; ?></a>
                                                                   
                                                                        <?php }

                                                                              
                                                                         ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $user->hours_no; ?>
                                                                </td>
                                                                  <td>
                                                                 <?php $date= $user->form_date;
                                                                  echo date("d-m-Y", strtotime($date));
                                         // echo $date;
                                                                      ?>
                                                                    
                                                                </td>
                                                                 <td>
                                                                 <?php $date= $user->to_date;
                                        echo date("d-m-Y", strtotime($date));
                                         // echo $date;
                                          ?>

                                                                    
                                                                </td>
                                                                 <td>
                                                                 <?php $date= $user->expiryDate;
                                        echo date("d-m-Y", strtotime($date));
                                         // echo $date;
                                          ?>

                                                                 
                                                                   

                                                                 </td>
                                                                    <td><?php echo $user->start_time;?></td>
                                                                 <td>
                                                                    <?php 
                $sk = explode(',',  $user->skills);
                $hello  = array_filter($sk);  
                $size=count($hello);  
                  if(!empty($sk)){
                foreach ($hello as $key2 => $value) {
                  // print_r($value.'easas');die();
                  $result = $this->db->query("select skill_title from skills where id = ".$value)->row();
                   $datas = $result->skill_title;
                  $comma=", ";
                  if($size==($key2))
                   {
                     $comma="";
                   }




                   print_r($datas);
                   echo $comma;
                 }
                }
                else{
                    echo "NO RECORD FOUND";
                  }

?>
                                                                </td>
                                                                     <td>
                                                                    <?php 
                $sk = explode(',',  $user->causes);
                $hello  = array_filter($sk);  
                $size=count($hello);  
                  if(!empty($sk)){
                foreach ($hello as $key2 => $value) {
                  // print_r($value.'easas');die();
                  $result = $this->db->query("select cause_title from causes where id = ".$value)->row();
                   $datas = $result->cause_title;
                  $comma=", ";
                  if($size==($key2))
                   {
                     $comma="";
                   }




                   print_r($datas);
                   echo $comma;
                 }
                }
                else{
                    echo "NO RECORD FOUND";
                  }

?>
                                                                </td>
                                                           
                                                                    
                                                             
                                                               
                                                                  
                                                               
                                                               
                                                              
                                                               
                                                                <td>
                                                                    <?php if(empty($user->oppertunity_image)) { ?>
                                                                    <img src="<?php echo base_url()?>public/default.png" style="width:90px;height:90px">
                                                                    <?php } else { ?>
                                                                    <img src="<?php echo $user->oppertunity_image; ?>" style="width:90px;height:90px">
                                                                    <?php }?>
                                                                </td>
                                                               <?php if (isset($id)) {
                                                                
                                                               }else{?>
                                                                <td>
                                                                  
                                                                     <button class="delete" id ="<?php echo $user->opportunity_id; ?>">Delete
                                                                          </button>
                                                                        <input type="hidden" value="<?php if($user->status==" Y "){ echo "N "; }else{ echo "Y "; } ?>" name="status">
                                                                        <!--   <input type="hidden" value="<?php echo $user->opportunity_id ; ?>" name="update" > -->
                                                                        <a href="liveonappopportunity_details/<?php echo $user->opportunity_id; ?>">
                                                                            <input type="submit" value="Details" class="btn btn-primary prim"></input>
                                                                        </a>
                                                         
                                                                </td>
                                                                <?php }?>
                                                            </tr>
                                                            <?php $sid++; }?>
                                                        </tbody>
                                                    </table>
                  </div>
              </div>
            </div>
        </section>
                <!-- page end-->
      </div>
    </section>
</section>
    <script src="<?php echo base_url();?>/public/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/public/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url();?>/public/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>/public/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>/public/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>/public/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/public/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url();?>/public/js/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>/public/js/jquery.customSelect.min.js"></script>
    <script src="<?php echo base_url();?>/public/js/respond.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>/public/js/jquery.dcjqaccordion.2.7.js"></script>
    <!--common script for all pages-->
    <script src="<?php echo base_url();?>/public/js/common-scripts.js"></script>
    <!--script for this page-->
    <script src="<?php echo base_url();?>/public/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url();?>/public/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url();?>/public/js/count.js"></script>
    <script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.8/js/dataTables.bootstrap.min.js " type="text/javascript"></script>
    <script type="text/javascript">
    // $(document).ready(function() {
    //     $('#hidden-table-info').DataTable();
    //     $('#hidden-table-info2').DataTable();
    //     $('#hidden-table-info3').DataTable();

    // });

    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
    }
    </script>


<script type="text/javascript">
$(document).ready(function() {
    $('#hidden-table-info').DataTable( {
        "lengthMenu": [[100, 200, 300, ], [100, 200, 300, ]]
    } );

$('#hidden-table-info2').DataTable( {
        "lengthMenu": [[100, 200, 300, ], [100, 200, 300, ]]
    } );

$('#hidden-table-info3').DataTable( {
        "lengthMenu": [[100, 200, 300, ], [100, 200, 300, ]]
    } );
$('#hidden-table-info4').DataTable( {
        "lengthMenu": [[100, 200, 300, ], [100, 200, 300, ]]
    } );

    var type = window.location.hash.substr(1);
    if (type=="London") {
        $("#London").attr('style','display: block');
        $("#London2").attr('style','display: none');
          $("#Paris").attr('style','display: none');
        $("#Tokyo").attr('style','display: none');
    }else if(type=="London2"){
        $("#London").attr('style','display: none');
          $("#London2").attr('style','display: block');
        $("#Paris").attr('style','display: none');
        $("#Tokyo").attr('style','display: none');

    
    } else if(type=="Paris"){
        $("#London").attr('style','display: none');
          $("#London2").attr('style','display: none');
        $("#Paris").attr('style','display: block');
        $("#Tokyo").attr('style','display: none');

    }else if(type=="Tokyo"){
        $("#London").attr('style','display: none');
        $("#London2").attr('style','display: none');
        $("#Paris").attr('style','display: none');
        $("#Tokyo").attr('style','display: block');
    }
    console.log(type);

} );
</script>
<script type="text/javascript">
    $(document).ready(function(){

        $(".delete").click(function(event){
             alert("Delete?");
            var empId = $(this).attr("id");  
            // alert(empId);return false;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Users/deletelistopportunity",
                data: {id:empId},
                success: function(response) {
                    //   console.log(response);
                    // console.log(parent);return false;
                    if (response == "1")
                    {

                        $("#row-"+empId).remove();


                    }
                    else if(response == "2")
                    {
                        alert("Error");
                    } else{
                        alert('cannot delete the id');
                    }

                }
            });
            event.preventDefault();
        })
    });
     </script>


