<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
						
				<li><a href="{{ url('/home') }}"><span class="glyphicon glyphicon-dashboard m-sm-5"></span>Dashboard</a></li>
				
				<li class="treeview">
				  <a href="#">
					<span class="glyphicon glyphicon-dashboard m-sm-5"></span>
					<span>Admission</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{ url('/admission-form') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Create Admission</a></li>
					<li><a href="{{ url('student-import') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Multiple Import</a></li>
					<li><a href="{{ url('category') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Category</a></li>
				  </ul>
				</li>
				
					<li class="treeview">
				  <a href="#">
					<span class="glyphicon glyphicon-user m-sm-5"></span>
					<span>Student Details</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{ url('student-list') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Student List</a></li>
					
				 </ul>
				</li>
				
				<li class="treeview">
				  <a href="#">
				<span class="glyphicon glyphicon-user m-sm-5"></span>
					<span>Employee Management</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{ url('employees') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Employee List</a></li>
					<li><a href="{{ url('department') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Department</a></li>
					<li><a href="{{ url('designation') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Designation</a></li>
					<li><a href="{{ url('add-employee') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Employee</a></li>
				 </ul>
				</li>
	
<li class="treeview">
				  <a href="#">
					<i class="fa fa-id-card-o" aria-hidden="true"></i> 
					<span>Card Management</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="id-card-template.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Id Card Templete</a></li>
					<li><a href="student-id-card.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Student Id Card</a></li>
					<li><a href="employee-id-card.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Employee Id Card</a></li>
					<li><a href="admit-card-template.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Admit Card Templete</a></li>
					<li><a href="generate-admit-card.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Generate Admit Card</a></li>
					<li><a href="escort-card-template.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Escort Card Templete</a></li>
					<li><a href="generate-escort-card.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Generate Escort Card</a></li>
				 </ul>
				</li>
				
				<li class="treeview">
				  <a href="#">
					<i class="fa fa-certificate" aria-hidden="true"></i> 
					<span>Certificates</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="certificate-template.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Certificate Templete</a></li>
					<li><a href="index2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Generate Student</a></li>
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Generate Employee</a></li>
				
				 </ul>
				</li>


				<li class="treeview">
				  <a href="#">
					<i class="fa fa-tasks" aria-hidden="true"></i> 
					<span>Class Management</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{ url('section') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Section</a></li>
					<li><a href="{{ url('student-class') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Class</a></li>
					<li><a href="{{ url('class-teacher-allocation') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Assign Class Teacher</a></li>
					<li><a href="{{ url('class-subject')  }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Subjects</a></li>
					<li><a href="{{ url('class-assign') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Class Assign</a></li>
				 </ul>
				</li>
		
	<li class="treeview">
				  <a href="#">
						<i class="fa fa-book" aria-hidden="true"></i> 
					<span>Academic Planner</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
	
	 <ul class="treeview-menu">
					<li><a href="teacher-curriculum.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Teachers-Curriculum</a></li>
					<li><a href="parent-roaster.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Parents-Roster</a></li>
					<li><a href="worksheet.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Worksheets</a></li>
					<li><a href="school-activity.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>School Activity & Celebration</a></li>
					<li><a href="parent-activity.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Parent Activity & Celebration</a></li>
					<li><a href="activity-video.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Activity Videos</a></li>
					
				 </ul>	
	</li>

<li class="treeview">
				  <a href="#">
					<i class="fa fa-hourglass-start" aria-hidden="true"></i> 
					<span>Schedule</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="class-schedule.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Class Schedule</a></li>
					<li><a href="teacher-schedule.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Teacher Schedule</a></li>
					
			 </ul>
				</li>
	<li><a href="promotion.php"><i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>Promotion</a></li>	
	

	<li class="treeview">
				  <a href="#">
				<i class="fa fa-headphones" aria-hidden="true"></i> 
					<span>Live Class Rooms</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="live-classes.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Live Class Rooms</a></li>
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Live Class Reports</a></li>
			 </ul>
				</li>

			<li class="treeview">
				  <a href="#">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
					<span>Homework</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Homework</a></li>
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Evaluation Report</a></li>
				 </ul>
				</li>


		<li class="treeview">
				  <a href="#">
					<i class="fa fa-cloud-download" aria-hidden="true"></i> 
					<span>Digital Learning</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="digital-books.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Book</a></li>
					<li><a href="digital-videos.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Video</a></li>
				 </ul>
				</li>
				
				
			<li class="treeview">
				  <a href="#">
					<i class="fa fa-question-circle" aria-hidden="true"></i> 
					<span>Exam Master</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				  <li><a href="index2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Evaluation Sheet</a></li>
					<li><a href="exam-term.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Exam Term</a></li>
					<li><a href="exam-setup.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Exam Setup</a></li>
						<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Distribution</a></li>
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Exam Schedule</a></li>
					
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Marks</a></li>
					<li><a href="grade-range.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grades Range</a></li>
				 </ul>
				</li>

<li class="treeview">
				  <a href="#">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Attendance</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="student-attendence.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Students</a></li>
					<li><a href="employee-attendence.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Employees</a></li>
					
					 </ul>
				</li>
			
<li class="treeview">
				  <a href="#">
					<i class="fa fa-money" aria-hidden="true"></i> 
					<span>Student Accounting</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{ url('fees-type') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fees Type</a></li>
					<li><a href="{{ url('fine-setup') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fine Setup</a></li>
					<li><a href="{{ url('fee-pay') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fees Pay / Invoice</a></li>
					<li><a href="{{ url('fee-reminder') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fees Reminder</a></li>
					
					 </ul>
				</li>	
				
	<li class="treeview">
				  <a href="#">
					<i class="fa fa-money" aria-hidden="true"></i> 
					<span>Office Accounting</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="account.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Account</a></li>
					<li><a href="deposit-list.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Deposit </a></li>
					<li><a href="expenses.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Expenses </a></li>
					<li><a href="all-transactions.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Transactions</a></li>
						<li><a href="vouchure.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vouchure </a></li>
					 </ul>
				</li>
				
			<li class="treeview">
				  <a href="#">
					<i class="fa fa-book" aria-hidden="true"></i> 
					<span>Library</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="book-category.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Books Category</a></li>
					<li><a href="books-library.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Books</a></li>
					<li><a href="issued-books.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Issued Book</a></li>
					 </ul>
				</li>			
				



<li class="treeview">
				  <a href="#">
					<i class="fa fa-bus" aria-hidden="true"></i> 
					<span>Transport</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="route-master.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Route Master</a></li>
					<li><a href="vehicle-master.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vehicle Master</a></li>
					<li><a href="assign-vehicle.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Assign Vehicle</a></li>
					<li><a href="allocation-report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Allocation Report</a></li>
					 </ul>
				</li>

	<li class="treeview">
				  <a href="#">
					<i class="fa fa-building" aria-hidden="true"></i> 
					<span>Facility Management</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="facility.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Facility</a></li>
					
				 </ul>
				</li>

<li class="treeview">
				  <a href="#">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i> 
					<span>Ecommerce</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
					<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Orders</a></li>
					
				 </ul>
				</li>
				
				<li class="treeview">
				  <a href="#">
					<i class="fa fa-building" aria-hidden="true"></i> 
					<span>Inventory Management</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Available Products</a></li>
					
				 </ul>
				</li>
				
<li class="treeview">
				  <a href="#">
					<i class="fa fa-calendar" aria-hidden="true"></i> 
					<span>Events</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="event-type.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Event Type</a></li>
					<li><a href="event.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Events</a></li>
					<li><a href="event-enquiry.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Events Enquiry</a></li>
				 </ul>
				</li>
				
				
	<li class="treeview">
				  <a href="#">
					<i class="fa fa-users" aria-hidden="true"></i> 
					<span>Human Resource</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li class="treeview"><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Payroll <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span></a>
					 <ul class="treeview-menu">
					<li><a href="salary-template.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Salary Template</a></li>
					<li><a href="salary-assign.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Salary Assign</a></li>
					<li><a href="pay-roll.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Salary Payment	</a></li>
					 </ul>
					 </li>
					 
			 
			 	<li class="treeview"><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advance Salary <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span></a>
					 <ul class="treeview-menu">
					<li><a href="advance-salary.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Application</a></li>
				 </ul>
					 </li>
					 
					 
					 	<li class="treeview"><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Leave<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span></a>
					 <ul class="treeview-menu">
					<li><a href="leave.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Category</a></li>
					<li><a href="leave-application.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Application</a></li>
				 </ul>
					 </li>
					 
					<li><a href="award.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Awards</a></li>
				 </ul>
				</li>
<li class="treeview">
				  <a href="#">
					<i class="fa fa-bell" aria-hidden="true"></i> 
					<span>Notifications</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				  <li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Notifications</a></li>
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bulk SMS/Email</a></li>
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Reports</a></li>
					
					 </ul>
				</li>
	<li class="treeview">
				  <a href="#">
					<i class="fa fa-list" aria-hidden="true"></i> 
					<span>Reports</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li class="treeview"><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fees Reports <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span></a>
					 <ul class="treeview-menu">
					<li><a href="student-fee-report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Student Fees Report</a></li>
					<li><a href="fee-payment-history.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fees Payment History</a></li>
					<li><a href="due-fee-report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Due Fees Report</a></li>
					<li><a href="fine-report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fine Report	</a></li>
					 </ul>
					 </li>
				
				<li class="treeview"><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Financial Reports <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span></a>
					 <ul class="treeview-menu">
					<li><a href="income-report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Income Reports</a></li>
					<li><a href="expense-report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Expense Repots</a></li>
					<li><a href="transition-report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Transition Report</a></li>
					<li><a href="balance-sheet.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Balance Sheet</a></li>
			
					</ul>
					 </li>
	
				<li class="treeview"><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Attendence Reports <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span></a>
					 <ul class="treeview-menu">
					<li><a href="student-attendence-report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Student Reports</a></li>
					<li><a href="employee-attendence-report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Employee Reports</a></li>
				 </ul>
				</li>
				
				

<li class="treeview"><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Human Resource <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span></a>
					 <ul class="treeview-menu">
					<li><a href="payroll-summary.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Payroll Summary</a></li>
					<li><a href="leave-report.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Leave Reports</a></li>
				 </ul>
				</li>
	
<li class="treeview"><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Examination <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span></a>
					 <ul class="treeview-menu">
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Report Card</a></li>
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabulation Sheet</a></li>
				 </ul>
				</li>	
					 </ul>
				</li>			
		



		<li><a href="meal-menu.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Meal Menu</a></li>
					<li><a href="holiday-list.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Annual Holidays List</a></li>
					
		<li class="treeview">
				  <a href="#">
					<i class="fa fa-cogs" aria-hidden="true"></i> 
					<span>Settings</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="role-permission.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Role Permission</a></li>
					
				 </ul>
				</li>			
				 	     
			  </ul>
		  </div>
		</div>
    </section>
	<div class="sidebar-footer">
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><span class="icon-Settings-2"></span></a>
		<a href="mailbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><span class="icon-Mail"></span></a>
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
	</div>
  </aside>