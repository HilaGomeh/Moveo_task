<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<title>User details</title>
	<meta charset="UTF-8"> 
	<meta name="description" 
                content="User details file contain a table with user data: picture, name, email, gender and age.
                         It also displays a map with the user's address ">
                         
	<meta name="keywords" content="User details, User data">
        
        <!-- viewport element gives the browser instructions on how to control the page's dimensions and scaling -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Hila Gomeh Oz">
	<meta name= "last-modified" content="21/11/21">	
        
        <link rel="icon" href="../images/moveo_icon.png">  
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="User_details_app.js"></script>
	<style>
                #container{margin-top:20px;}
                
                h1{text-align:center;font-size:40px;margin-top:90px;}
                
                /* Mobile design*/
                @media screen and (max-width:500px){
                
                        body{min-width:350px;width:100%;height:100%;}
                        #container { width:100%;height:100%;margin-left: auto;margin-right: auto;} 
                        
                        h1{font-size:26px;margin-top:80px;}
                        
                        #userTable{width:100%;}
                        #user{width:100%;font-size:10px;}
                        
                }
                @media screen and (min-width:501px) and (max-width:900px){
                
                        body { min-width:800px;width:100%;height:100%;}
                        #container { width:100%;height:100%;margin-left: auto;margin-right: auto;} 
                        
                        h1 { margin-top:100px; }
                        
                        #userTable{width:100%;}
                        #user{width:100%;font-size:10px;}
                        
                }
	</style>     

</head>
<body>
	<form ng-controller="dataCtrl">
		<div id="container" class="col-xs-offset-1 col-xs-10 col-xs-offset-1">
                        
			<h1>User Details</h1>
                        
                        <!-- User table -->
			<div id="userTable">	
                                <table id="user" class="table table-border table-striped">
					<tr>
						<th>Picture</th>
                                                <th>Full name</th>
                                                <th>Email</th>
                                                <th>Gender</th>
						<th>Age</th>
							
					</tr>
					<tr class="user_row">

                                                <td><img style="width:80px;border-radius:50%;"ng-src="{{ user.picture.thumbnail}}" class="img-rounded rounded-circle img-responsive"></td>
                                                <td>{{ user.name.first[0] }} {{ user.name.last }}</td>
                                                <td><a href="mailto:"{{ user.email }}>{{ user.email }}</a></td>
                                                <td>{{ user.gender }}</td>
						<td>{{ user.dob.age }}</td>
					</tr>
				</table>
                                
                                <!--User address on a map-->
                                <div class="container">
                                   <h3>Address</h3>
                                   <div id="mapholder" style="width:400px;height:300px;"></div>
                                </div>
			</div>
		</div>
	</form>
</body>
</html>