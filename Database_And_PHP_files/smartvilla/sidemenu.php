

<div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li <?php if($_REQUEST['menu'] == "index"){echo 'class="active"';} ?>>
                            
                            <a href="index.php?menu=index"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-tablet">Home</span></a>
                            
                        </li>    
                        
                        
                        
                        <li>
                            <a class="dropmenu" href="#"><i class="fa fa-building-o" aria-hidden="true"></i><span class="hidden-tablet"> Society</span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
                            <ul>
                                <li  <?php if($_REQUEST['menu'] == "societyinfo"){echo 'class="active"';} ?>><a class="submenu" href="societyinfo.php?menu=societyinfo"><i class="icon-file-alt"></i><span class="hidden-tablet">Society Details</span></a></li>
                                <li  <?php if($_REQUEST['menu'] == "flatinfo"){echo 'class="active"';}?>><a class="submenu" href="flatinfo.php?menu=flatinfo"><i class="icon-file-alt"></i><span class="hidden-tablet">Flat Details</span></a></li>
                                <li  <?php if($_REQUEST['menu'] == "s_member_info"){echo 'class="active"';}?>><a class="submenu" href="s_member_info.php?menu=s_member_info"><i class="fa fa-address-book-o" aria-hidden="true"></i>
<span class="hidden-tablet">Society Member Details</span></a></li>
                                <li  <?php if($_REQUEST['menu'] == "family_member_info"){echo 'class="active"';}?>><a class="submenu" href="family_member_info.php?menu=family_member_info"><i class="fa fa-users" aria-hidden="true"></i>
<span class="hidden-tablet">Family Member Details</span></a></li>
                                <li  <?php if($_REQUEST['menu'] == "society_staff_info"){echo 'class="active"';}?>><a class="submenu" href="society_staff_info.php?menu=society_staff_info"><i class="icon-file-alt"></i><span class="hidden-tablet">Society Staff Details</span></a></li>
                            
                            </ul>  
                              
                        </li>
                        
                        <li <?php if($_REQUEST['menu'] == "complaint_box"){echo 'class="active"';} ?>>
                            
                            <a href="complaint_box_info.php?menu=complaint_box"><i class="fa fa-hand-o-up" aria-hidden="true"></i>
<span class="hidden-tablet"> Complaint Box</span></a>
                            
                        </li>  
                        
                        <li <?php if($_REQUEST['menu'] == "household_services"){echo 'class="active"';} ?>>
                            
                            <a href="household_services_info.php?menu=household_services"><i class="fa fa-id-card" aria-hidden="true"></i>
<span class="hidden-tablet"> Household Services</span></a>
                            
                        </li>    
                        
                        <li <?php if($_REQUEST['menu'] == "professional_corner"){echo 'class="active"';} ?>>
                            
                            <a href="professional_corner_info.php?menu=professional_corner"><i class="fa fa-user" aria-hidden="true"></i>
<span class="hidden-tablet"> Professional Corner</span></a>
                            
                        </li>    
                        
                        
                        <li <?php if($_REQUEST['menu'] == "notice_board"){echo 'class="active"';} ?>>
                            
                            <a href="noticeboard_info.php?menu=notice_board"><i class="fa fa-calendar-o" aria-hidden="true"></i>
<span class="hidden-tablet"> Notice board</span></a>
                            
                        </li>  
                        
                        
                        
                        
                         <li>
                            <a class="dropmenu" href="#"><i class="fa fa-calculator" aria-hidden="true"></i></i><span class="hidden-tablet"> Maintenance</span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
                            <ul>
                                <li  <?php if($_REQUEST['menu'] == "society_maintainance"){echo 'class="active"';} ?>><a class="submenu" href="society_maintainance.php?menu=society_maintainance"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                <span class="hidden-tablet">Society Maintenance</span></a></li>
                                <li  <?php if($_REQUEST['menu'] == "monthly_maintainance"){echo 'class="active"';}?>><a class="submenu" href="monthly_maintainance.php?menu=monthly_maintainance"><i class="fa fa-address-book-o" aria-hidden="true"></i><span class="hidden-tablet"> Monthly Maintenance </span></a></li>
                            
                            </ul>  
                              
                        </li>
                          
                        
                        
                        <li <?php if($_REQUEST['menu'] == "society_accounts"){echo 'class="active"';} ?>>
                            
                            <a href="society_accounts.php?menu=society_accounts"><i class="fa fa-calculator" aria-hidden="true"></i>
<span class="hidden-tablet"> Society Accounts</span></a>
                            
                        </li>  
                        
                        <li <?php if($_REQUEST['menu'] == "expense_register"){echo 'class="active"';} ?>>
                            
                            <a href="expense_register_info.php?menu=expense_register"><i class="fa fa-inr" aria-hidden="true"></i>
<span class="hidden-tablet"> Expense Register</span></a>
                            
                        </li>   
                        
                        <li>
                            <a class="dropmenu" href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-tablet"> Club House</span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
                            <ul>
                                <li  <?php if($_REQUEST['menu'] == "clubhouse_facility"){echo 'class="active"';} ?>><a class="submenu" href="clubhouse_facility_info.php?menu=clubhouse_facility"><i class="icon-file-alt"></i><span class="hidden-tablet">Clubhouse Facility</span></a></li>
                                <li  <?php if($_REQUEST['menu'] == "clubhouse_members"){echo 'class="active"';}?>><a class="submenu" href="clubhouse_members_info.php?menu=clubhouse_members"><i class="fa fa-address-book-o" aria-hidden="true"></i><span class="hidden-tablet"> Clubhouse Members</span></a></li>
                                <li  <?php if($_REQUEST['menu'] == "clubhouse_finance"){echo 'class="active"';}?>><a class="submenu" href="clubhouse_finance_info.php?menu=clubhouse_finance"><i class="icon-file-alt"></i><span class="hidden-tablet"> Clubhouse Finance</span></a></li>
                            
                            </ul>  
                              
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><span class="hidden-tablet"> Facility Booking</span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
                            <ul>
                                <li  <?php if($_REQUEST['menu'] == "facility_booking"){echo 'class="active"';} ?>><a class="submenu" href="facility_booking.php?menu=facility_booking"><i class="icon-file-alt"></i><span class="hidden-tablet">Facility List</span></a></li>
                                <li  <?php if($_REQUEST['menu'] == "booked_facility"){echo 'class="active"';}?>><a class="submenu" href="booked_facility.php?menu=booked_facility"><i class="fa fa-address-book-o" aria-hidden="true"></i><span class="hidden-tablet"> Booked Facility</span></a></li>
                                <li  <?php if($_REQUEST['menu'] == "facility_finance"){echo 'class="active"';}?>><a class="submenu" href="facility_finance_info.php?menu=facility_finance"><i class="icon-file-alt"></i><span class="hidden-tablet"> Facility Finance</span></a></li>
                            
                            </ul>  
                              
                        </li>
                          
                        <li <?php if($_REQUEST['menu'] == "society_visitor"){echo 'class="active"';} ?>>
                            
                            <a href="s_visitor_info.php?menu=society_visitor"><i class="fa fa-info-circle" aria-hidden="true"></i>
<span class="hidden-tablet"> Society Visitor Details</span></a>
                            
                        </li>
                        
                        <li>
                            <a class="dropmenu" href="#"><i class="fa fa-archive" aria-hidden="true"></i><span class="hidden-tablet"> Voting</span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
                            <ul>
                                <li  <?php if($_REQUEST['menu'] == "voting_declaration_info"){echo 'class="active"';} ?>><a class="submenu" href="voting_declaration_info.php?menu=voting_declaration_info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                <span class="hidden-tablet">Declare Voting</span></a></li>
                                <li  <?php if($_REQUEST['menu'] == "candidate_info"){echo 'class="active"';}?>><a class="submenu" href="candidate_info.php?menu=candidate_info"><i class="fa fa-address-book-o" aria-hidden="true"></i><span class="hidden-tablet"> Candidates</span></a></li>
                            
                            </ul>  
                              
                        </li>
                        
                        
                          
                        
                    </ul>
                </div>
            </div>