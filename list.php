<!doctype html>
<html lang="en">
<head>
    <title>REGISTERED LIST</title>
</head>

<body>
       <center>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                        <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                       
                                                        <th class="border-0"> Name</th>
                                                    <th class="border-0">PHONE NUMBER  </th>
                                                    <th class="border-0">EMAIL ID  </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                        <?php 
	
	mysql_connect("localhost","root","")or die("connection error");
mysql_select_db("reg")or die("database error");
$query="select name,phone_no,email from reg";
$res=mysql_query($query);  
$ff=1;
			 while($row=mysql_fetch_array($res))
			  {
                                              ?>
                                              <tr>
                                            
                                              <td><?php echo $row['name'] ?></td>
                                              <td><?php echo $row['phone_no']?></td>
                                              <td><?php echo $row['email']?></td>
                                                </tr>
                                                     <?php
			  $ff++;
			  } 

			  ?>
                           </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>
    </body>
</html>