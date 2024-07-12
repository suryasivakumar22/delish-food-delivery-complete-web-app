<?php

session_start();
#$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
$conn = mysqli_connect('localhost','root','rootpw','9999999999a');
$query7 = 'select * from '.$_SESSION['catna'];
$m1 = mysqli_query($conn, $query7);
$envv = mysqli_fetch_all($m1,MYSQLI_ASSOC);
#var_dump($envv);
#echo count($env);
?>

<table class="table table-hover table-sm" id="tab">
						 <label>
							 <h3>
								 <strong>All Categories</strong>
							 </h3>
						 </label>
							<thead>
										<tr>
											<th scope="col">Menu item</th>
											<th scope="col">Starttime</th>
											<th scope="col">Endtime</th>
											<th scope="col">Price</th>
											<th scope="col">Image File Name</th>
											<th scope="col">Edit</th>
											<th scope="col">Delete</th>
										</tr>
							</thead>
							<div class="container">
							<tbody id = 'tid'>	
							<?php 
								foreach ($envv as $value1) {?>
								<tr id='ajaxcontent'>							
											<th scope="row" ><?php echo $value1['mname']; ?></th>
											<th scope="row" ><?php echo $value1['starttime']; ?></th>
											<th scope="row" ><?php echo $value1['endtime']; ?></th>
											<th scope="row" ><?php echo $value1['price']; ?></th>
											<th scope="row" ><?php echo $value1['imagename']; ?></th>
											<td>
													<button id="btn1" class="btn btn-success btn-sm" name='edit' value='Edit'>Edit</button>
											<td>
												<button id="btn2" class="btn btn-danger btn-sm" name='delete' value="Delete" onclick="deleteRow(this)" >Delete</button>	
											</td>  
										</tr>
										  <?php }?> 
							</tbody>
					</table>
           
