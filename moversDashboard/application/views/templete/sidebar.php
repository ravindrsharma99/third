 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="<?php echo base_url("Dashboard"); ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
             

                      <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-list" aria-hidden="true"></i>
                          <span>User List</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url("Dashboard/user_list")?>">Customer List</a></li>
                          <li><a  href="<?php echo base_url("Dashboard/driver_list")?>">Driver List</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="<?php echo base_url("Dashboard/booking_list"); ?>">
                          <i class="fa fa-book"></i>
                          <span>Booking List</span>
                      </a>
                  </li>

                        <li class="sub-menu">
                      <a href="javascript:;" >
                          <!-- <i class="fa fa-list" aria-hidden="true"></i> -->
                          <i class="fa fa-building" aria-hidden="true"></i>

                          <span>City List</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url("Dashboard/addcities")?>">Add City</a></li>
                          <li><a  href="<?php echo base_url("Dashboard/cityview")?>">City List</a></li>
                      </ul>
                  </li>


                        <li class="sub-menu">
                      <a href="javascript:;" >
                          <!-- <i class="fa fa-list" aria-hidden="true"></i> -->
                          <i class="fa fa-globe" aria-hidden="true"></i>


                          <span>Country Codes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url("Dashboard/addcountry")?>">Add Country Code</a></li>
                          <li><a  href="<?php echo base_url("Dashboard/view_country")?>">Country Code List</a></li>
                      </ul>
                  </li>



                  

                  
                  

             
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-arrows" aria-hidden="true"></i>
                          <span>Move Type List</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url("Dashboard/move_list")?>">Move list</a></li>
                          <li><a  href="<?php echo base_url("Dashboard/addmove")?>">Add Move</a></li>
                          
                      
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-file" aria-hidden="true"></i>
                          <span>Vechicle Type List</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url("Dashboard/vechicle_list")?>">Vechicle List</a></li>
                          <li><a  href="<?php echo base_url("Dashboard/addvechicle")?>">Add Vechicle</a></li>
                      </ul>
                  </li>
                      <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Promocodes Type List</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url("Dashboard/promocode_list")?>">Promocodes List</a></li>
                          <li><a  href="<?php echo base_url("Dashboard/addpromocode")?>">Add Promocodes</a></li>
                      </ul>
                  </li>


                               <li class="sub-menu">
                      <a href="javascript:;" >
                       <i class="fa fa-files-o" aria-hidden="true"></i>

                          <span>Reports</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url("Dashboard/transaction_list")?>">Transaction List</a></li>
                          <li><a  href="<?php echo base_url("Dashboard/tripslist")?>">Trips List</a></li>
                          <li><a  href="<?php echo base_url("Dashboard/refundslist")?>">Refunds List</a></li>
                      </ul>
                  </li>




                  
                  <li class="sub-menu">
                  <a href="javascript:;" >
                  <i class="fa fa-list-alt" aria-hidden="true"></i>
                  <span>Balance Summary</span>
                  </a>
                  <ul class="sub">
                         <li><a  href="<?php echo base_url("Dashboard/wallet_list")?>">Wallet List</a></li>
                          <li><a  href="<?php echo base_url("Dashboard/txnlist")?>">Transactions List</a></li>

                  </ul>


                    </a>
                  </li>
                    

                    <li>
                    <a  href="<?php echo base_url("Dashboard/dispatch_management")?>">
                    <i class="fa fa-server"></i>
                    <span>Dispatch Management</span>

                    </a>
                  </li>



                   <li>
                    <a  href="<?php echo base_url("Dashboard/view_timemanagement")?>">
                    <i class="fa fa-calendar"></i>
                    <span>Time Management</span>

                    </a>
                  </li>







                   <!--    <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-times"></i>
                          <span>Time Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url("Dashboard/time_management")?>">Add Time Slots</a></li>
                          <li><a  href="<?php echo base_url("Dashboard/view_timemanagement")?>">Time List</a></li>
                      </ul>
                  </li>
 -->







                    <li>
                    <a  href="<?php echo base_url("Dashboard/push_notification")?>">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <span>Notification</span>

                    </a>
                  </li>



                   <li>
                    <a  href="<?php echo base_url("Dashboard/feedback")?>">
                    <i class="fa fa-comment" aria-hidden="true"></i>
                    <span>Feedback</span>

                    </a>
                  </li>


                  <li>
                    <a  href="<?php echo base_url("Dashboard/addsetting")?>">
                    <i class="fa fa-cogs"></i>
                    <span>Setting</span>

                    </a>
                  </li>

             <!--      <li class="sub-menu">
                  <a href="javascript:;" >
                  <i class="fa fa-th"></i>
                  <span>Setting List</span>
                  </a>
                  <ul class="sub">
                  <li><a  href="<?php echo base_url("Dashboard/")?>">Promocodes List</a></li>
                  <li><a  href="<?php echo base_url("Dashboard/addsetting")?>">Add Promocodes</a></li>
                  </ul>
                  </li> -->



       <!--            <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="grids.html">Grids</a></li>
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                          <li><a  href="draggable_portlet.html">Draggable Portlet</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Form Stuff</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                          <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                          <li><a  href="form_wizard.html">Form Wizard</a></li>
                          <li><a  href="form_validation.html">Form Validation</a></li>
                          <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                          <li><a  href="inline_editor.html">Inline Editor</a></li>
                          <li><a  href="image_cropping.html">Image Cropping</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                          <li><a  href="dynamic_table.html">Dynamic Table</a></li>
                          <li><a  href="advanced_table.html">Advanced Table</a></li>
                          <li><a  href="editable_table.html">Editable Table</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="inbox.html">
                          <i class="fa fa-envelope"></i>
                          <span>Mail </span>
                          <span class="label label-danger pull-right mail-info">2</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                          <li><a  href="flot_chart.html">Flot Charts</a></li>
                          <li><a  href="xchart.html">xChart</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-shopping-cart"></i>
                          <span>Shop</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="product_list.html">List View</a></li>
                          <li><a  href="product_details.html">Details View</a></li>
                      </ul>
                  </li>
              
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-glass"></i>
                          <span>Extra</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                          <li><a  href="profile.html">Profile</a></li>
                          <li><a  href="invoice.html">Invoice</a></li>
                          <li><a  href="search_result.html">Search Result</a></li>
                          <li><a  href="pricing_table.html">Pricing Table</a></li>
                          <li><a  href="faq.html">FAQ</a></li>
                          <li><a  href="404.html">404 Error</a></li>
                          <li><a  href="500.html">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="login.html">
                          <i class="fa fa-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li> -->

                  <!--multi level menu start-->
          <!--         <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sitemap"></i>
                          <span>Multi level Menu</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">Menu Item 1</a></li>
                          <li class="sub-menu">
                              <a  href="boxed_page.html">Menu Item 2</a>
                              <ul class="sub">
                                  <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                  <li class="sub-menu">
                                      <a  href="javascript:;">Menu Item 3</a>
                                      <ul class="sub">
                                          <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                          <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li> -->
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
