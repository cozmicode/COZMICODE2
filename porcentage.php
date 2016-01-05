
<html lang="en">
  <head>
   <?php  include('resourses.php');

 
    include('classes/porcentage.php'); 
   ?>
  </head>
  <body>

	<div class="row">
		
   <?php  include('menu.php');?>
	
<div class="row">
	

	<div class="col-sm-2"></div><div class="col-sm-8">
<table class="table table-condensed table-bordered " id="datatable">
				<thead>
					<tr>
						<th>
							porcentage
						</th>
						<th>
							nombre
						</th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php 

     $porcentage = new porcentage(); 
    $roww = $porcentage->saca_user();
					foreach ($roww as $row): ?> 

            <tr> 
                <td><?php echo $row['id']; ?></td> 
                <td><?php echo $row['name']; ?></td> 
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>   
					
					<tr >
						
						
					</tr>
				</tbody>
			</table></div>
</div>
    
  </body>
</html>
