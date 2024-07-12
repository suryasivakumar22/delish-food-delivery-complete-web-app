<?php

session_start();
$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
#$conn = mysqli_connect('localhost','root','rootpw','9999999999a');
$query7 = 'select * from '.$_SESSION['catna'];
$m1 = mysqli_query($conn, $query7);
$envv = mysqli_fetch_all($m1,MYSQLI_ASSOC);
if (isset($_POST['edit'])) {
		$_SESSION['edut'] = $_POST['edit'];
		header('location: hmenuedit.php');
	}
?>

<table class="table  table-sm" id="tab">
						 <label>
							 <h3>
								 <strong style="font-weight: bolder;">All menu</strong>
							 </h3>
						 </label>
							
										<tr>
											<th scope="col">Menu item</th>
											<th scope="col">Starttime</th>
											<th scope="col">Endtime</th>
											<th scope="col">Price</th>
											<th scope="col">stock</th>
											<th scope="col">Veg/Nv</th>
											<th scope="col">Edit</th>
											<th scope="col">Delete</th>
										</tr>
							
							
							
							<?php 
								foreach ($envv as $value1) {?>
								<tr id='ajaxcontent' class="heloy">					
											<td scope="row"  ><?php echo $value1['mname']; ?></td>
											<td scope="row" ><?php echo $value1['starttime']; ?></td>
											<td scope="row" ><?php echo $value1['endtime']; ?></td>
											<td scope="row" >₹<?php echo $value1['price']; ?></td>
											<td scope="row" ><?php echo $value1['stock']; ?></td>
											<td scope="row" ><?php echo $value1['cat']; ?></td>
											<td>
												<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
													<button id="btn1" class="edit" style="outline: none;" name='edit' value='<?php echo $value1['id']; ?>'>Edit</button>
												</form>
											</td>
											<td>
												<button id="btn2" class="delete" style="outline: none;" name='delete' value="Delete" onclick="deleteRow(this,'<?php echo $value1['id']; ?>')" >Delete</button>	
											</td>  
										</tr>
										  <?php }?> 
							
					</table>
           
