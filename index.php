
<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<title>All users</title>
	<meta charset="UTF-8"> 
	<meta name="description" 
              content="All users file display table that contain users data: name, picture, email,gender and age. 
                       By clicking  on a row you can see user page">
                         
	<meta name="keywords" content="All users, Users, User">
        
        <!-- viewport element gives the browser instructions on how to control the page's dimensions and scaling -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Hila Gomeh Oz">
	<meta name= "last-modified" content="21/11/21">	
        
        <link rel="icon" href="../images/moveo_icon.png">  
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="lib/dirPagination.js"></script>
        <script src="All_users_app.js"></script>
	<style>
                #container{margin-top:20px;}
                
                h1{text-align:center;font-size:40px;margin-top:90px;}

		.search{width:180px;height:35px;display:inline;}
                .sort-icon {font-size: 9px;margin-left: 5px;}
                .sorte{cursor:pointer;}
                tr.user_row{cursor:pointer;}
                
                /* Mobile design*/
                @media screen and (max-width:500px){
                
                        body{min-width:350px;width:100%;height:100%;}
                        #container { width:100%;height:100%;margin-left: auto;margin-right: auto;} 
                        
                        h1{font-size:26px;margin-top:80px;}
                        
                        #usersList{width:100%;}
                        #users{width:100%;font-size:10px;}
       
                }
                @media screen and (min-width:501px) and (max-width:900px){
                
                        body { min-width:800px;width:100%;height:100%;}
                        #container { width:100%;height:100%;margin-left: auto;margin-right: auto;} 
                        
                        h1 { margin-top:100px; }
                        
                        #usersList{width:100%;}
                        #users{width:100%;font-size:10px;}
                        
                }
	</style>     

</head>
<body>
	<form ng-controller="dataCtrl">
		<div id="container" class="col-xs-offset-1 col-xs-10 col-xs-offset-1">
                        
			<h1>All users</h1>
			
                        <!-- Search -->
                                <form class="form-inline">
                                        <div class="form-group">
                                            <label >Search</label>
                                            <div>
                                               <span class="glyphicon glyphicon-search"></span>
                                               <input type="text" ng-model="search" class="form-control search" placeholder="Search...">
                                            </div>
                                        </div>
                                </form>

                        <!-- User list -->
			<div id="usersList">	
                                <table id="users" class="table table-border table-striped">
                                   <thead>
					<tr>
						<th></th>
						<th>Picture</th>
                                                <th ng-click="sort('name.first')" class="sorte">Full name
                                                    <span class="glyphicon sort-icon" ng-show="sortKey=='name.first'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                                                </th>
                                                <th>Email</th>
                                                <th ng-click="sort('gender')" class="sorte">Gender
                                                    <span class="glyphicon sort-icon" ng-show="sortKey=='gender'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                                                </th>
						<th ng-click="sort('dob.age')" class="sorte">Age
                                                    <span class="glyphicon sort-icon" ng-show="sortKey=='dob.age'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                                                </th>
							
					</tr>
                                   </thead>
                                   <tbody>
					<tr class="user_row" dir-paginate="u in users|itemsPerPage:10|orderBy:sortKey:reverse|filter:search" ng-click="userDetails(u)">

						<td>{{ $index+1 }}</td>						
                                                <td><img style="width:80px;border-radius:50%;"ng-src="{{ u.picture.thumbnail}}" class="img-rounded rounded-circle img-responsive"></td>
                                                <td>{{ u.name.first[0] }} {{u.name.last}}</td>
                                                <td><a href="mailto:"{{ u.email }}>{{ u.email }}</a></td>
                                                <td>{{ u.gender }}</td>
						<td>{{ u.dob.age }}</td>
					</tr>
                                  </tbody>
                                  
                                  <!-- Pagination controls -->
                                  <dir-pagination-controls
                                        max-size="5"
                                        direction-links="true"
                                        boundary-links="true" >
                                  </dir-pagination-controls>
                               </table>
			</div>
		</div>
	</form>
</body>
</html>
