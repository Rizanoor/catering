</div> <!-- /container -->
</div> <!-- /container -->

<hr>
<div class="container footer" style="margin-top:73px; 
						width: 100%;
						box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.35);
 						border-radius: 20px 20px 0px 0px;">
	<br />
	<footer class="text-center">
		<div class="col-md-12" style="font-family: Poppins, sans-serif;">Copyright ©2021
			<br>
			<br>
		</div>
	</footer>
</div>


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo $url ?>assets/js/jquery.js"></script>
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<script src="<?php echo $url ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

<script>
	$('.carousel').carousel({
		interval: 5000 //changes the speed
	})
</script>

<script src="<?php echo $url ?>assets/bootstrap/js/moment.js"></script>
<script src="<?php echo $url ?>assets/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
	$(function() {
		$('#datetimepicker').datetimepicker({
			format: 'YYYY-MM-DD HH:mm',
		});

		// $('#datepicker').datetimepicker({
		// format: 'DD MMMM YYYY',
		// });

		// $('#timepicker').datetimepicker({
		// format: 'HH:mm'
		// });
	});
</script>
</body>

</html>