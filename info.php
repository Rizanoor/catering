<?php
	include"inc/config.php"; 
	include"layout/header.php";	
?>
<div class="col-md-9">
	<div class="row">
		<?php
			$q = mysqli_query($GLOBALS["___mysqli_ston"], "Select * from info_pembayaran limit 1") or die 
			(mysqli_error($GLOBALS["___mysqli_ston"]));
			$data = mysqli_fetch_object($q);
		?>
		<pre><?php echo $data->info; ?></pre>
	</div>
</div>
<?php
	include "layout/footer.php";
?>