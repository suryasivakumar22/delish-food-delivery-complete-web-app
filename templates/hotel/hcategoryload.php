<?php
session_start();
$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
#$conn = mysqli_connect('localhost','root','rootpw','9999999999a');
$query6 = 'select * from mycategories';
$m = mysqli_query($conn, $query6);
$envv = mysqli_fetch_all($m,MYSQLI_ASSOC);
#var_dump($envv);
$env = $envv;
$e2 = 0 ;
#echo count($env);
if (isset($_POST['edit'])) {
		$_SESSION['catna'] = $_POST['edit'];
		header('location: hmenu.php'); 
   
}?>

<table class="table  table-sm" id="tab">
						 <label>
							 <h3>
								 <strong>All Categories</strong>
							 </h3>
						 </label>
																	<tr>
											<th scope="col">Category Name</th>
											<th scope="col">Edit</th>
											<th scope="col">Delete</th>
										</tr>
							
							<div class="container">
							
                             <?php 
								foreach ($env as $value) {?>
									
                             			<tr id='ajaxcontent' class="heuly">		
                             				
                             					<td scope="row" id="tig" class="heuly"><?php echo $value['categories']; ?></td>
											<td >
												<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
													<button id="btn1" class="edit" name='edit' value="<?php echo $value['categories']; ?>" style="outline: none;">Edit</button>
												</form>
											<td >
												<button id="btn2" class="delete" name='delete' value="Delete" onclick="deleteRow(this,'<?php echo $value['categories']; ?>')" style="outline: none;">Delete</button>	
											</td>	
										</tr> 
										
                                <?php }?> 
							
					</table>
           
