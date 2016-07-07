<!DOCTYPE html>
<html ng-app="projectRecords">
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<link rel="stylesheet" type="text/css" href="css/projects.css">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       
</head>
<body>
	<div class="navbar">
		<img src="header.png">
		<!--h1> Welcome, {{ Auth::user()->first_name }}!</h1-->
		<h1> Welcome, User!</h1>
		<div class="menu">
			<a  class="btn1">Logout</a>
			<a  ng-href="#/" class="btn1">Home</a>	
		</div>
	</div>	
	<div class="container" ng-controller="HomeController">
		<div class="button_container" >
				<button class="btn1" ng-click="toggle()">Create Project</button>
				<a href="{{ url('persons/create') }}" class="btn1">Create Person</a>
			</div>
			<div class="projects">
				<table>
					<tr>
						<th>Project Name</th>
						<th>Budget</th>
						<th>Tasks</th>
					</tr>
					
					<tr ng-repeat="proj in project.project"> 

						<td> {{proj.p_name}} </td>
						<td class="left"> &#8369 {{proj.p_budget | number}} </td>
						<td> <a ng-href="#/api/v1/projects/assign"> Assignments </a> </td>
					</tr>
				</table>
				
			</div>
		<div class="modal" id="myModal" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		          	<div class="modal-header">
		          		<h4>Add New Project</h4>
		         	</div>
		         	<form name="frmProjects" novalidate>
		          		<div class="modal-body">
			            	<div class="form-group">
			    				<div class="col-lg-25 space"> 
			    					<label class="col-sm-3 form-control-label">Code</label>
									<input type="text" name="code" ng-model="item.p_code" ng-required="true">
								</div>
								<div class="col-lg-25 space"> 
			    					<label class="col-sm-3 form-control-label ">Name</label>
									<input type="text" name="name" ng-model="item.p_name" ng-required="true"> 
								</div>

								<div class="col-lg-25  space"> 
			    					<label class="col-sm-3 form-control-label ">Budget</label>
									<input type="number" name="budget" ng-model="item.p_budget" ng-required="true"> 
								</div>

								<div class="col-lg-25 space"> 
			    					<label class="col-sm-3 form-control-label ">Remarks</label>
									<textarea name="remarks" rows="4" cols="32" ng-model="item.p_remarks" ng-required="true"></textarea>
								</div>
							</div>
						</div>
		            </form>
		            <div class="modal-footer">
				        <button class="btn1" ng-click="save()" ng-disabled="frmProjects.$invalid">Submit</button>
			        </div>
		          </div>
		        </div>
		    </div>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
	<script src="<?= asset('/app.js') ?>"></script>
    <script src="<?= asset('/controllers/projects.js') ?>"></script>
</body>
</html>