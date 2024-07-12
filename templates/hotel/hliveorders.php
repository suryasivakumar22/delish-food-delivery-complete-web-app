<?php 
session_start();
$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
$oui = "SELECT * FROM rliveorders where status<>'declined' and status<>'prepared'";
$okli = mysqli_query($conn,$oui);
$kuop = mysqli_fetch_all($okli,MYSQLI_ASSOC);
foreach ($kuop as $bal) {
?>
<div class="hliveorders" id="<?php echo $bal['ordernumber'] ?>">
	<h4>
	Order Number: <?php echo $bal['ordernumber']; ?>
	</h4>
	<table>
			<tr>
			<th>Name</th>
			<th style="padding-left: 100px;">Quantity</th>
		</tr><?php 
		$quu = "SELECT * FROM o".$bal['ordernumber'];
		$rqo = mysqli_query($conn,$quu);
		$por = mysqli_fetch_all($rqo,MYSQLI_ASSOC); 
		foreach ($por as  $qool) { ?>
		<tr>
			<td><?php echo $qool['products']; ?></td>
			<td style="padding-left: 100px;"><?php echo $qool['qnty']; ?></td>
		</tr>
	<?php } ?>
	</table>
	<div class="rouk">
	<?php if ($bal['status'] != 'accepted') {?>
	<button class="holk" style="outline: none;" id="<?php echo $bal['ordernumber']."a" ?>">Accept</button>
	<button class="kouk" style="outline: none;" id="<?php echo $bal['ordernumber']."b" ?>">Decline</button>
	<button class="kuluk" style="outline: none;display: none;" id="<?php echo $bal['ordernumber']."c" ?>">Ready!!</button>
	<?php }else{ ?>
		<button class="kuluk" style="outline: none;" id="<?php echo $bal['ordernumber']."c" ?>">Ready!!</button>
	<?php } ?>
	</div>	
</div>
<script type="text/javascript">
  $(".kouk").click(function(){
  let jkio = $(this).attr("id");
  let oipo = "#";
  let uler = oipo.concat(jkio);
  let lphi = uler.substring(0, uler.length-1);
  let asdf = "q";
  let kkrp = lphi.concat(asdf);
  let juoi = jkio.substring(0,jkio.length-1);
  $(lphi).hide();
  $.post("hdecline.php",
					{
					  id:juoi,		
					});
  });
  $(".holk").click(function(){
  	let heio = $(this).attr("id");
  	let jeiop = heio.substring(0,heio.length-1);
  	let ark = "#";
  	let krkk = ark.concat(jeiop);
  	let hmk = "b";
  	let hmkk = krkk.concat(hmk);
  	let jkk = ark.concat(heio)
  	console.log(jkk);
  	$(jkk).hide();
  	$(hmkk).hide();
  	$(".kuluk").show();
  	$.post("haccept.php",
					{
					  id:jeiop,		
					});

  });
  $(".kuluk").click(function() {
  	 let odjsed = $(this).attr("id");
  	 let jaiko = odjsed.substring(0,odjsed.length-1);
  	 let koko = "#";
  	 let ehst = koko.concat(jaiko);
  	 console.log(ehst)
  	 $(ehst).hide();
  	 $.post("hprepared.php",
					{
					  id:jaiko,		
					});
  });
</script>
<?php } ?>
