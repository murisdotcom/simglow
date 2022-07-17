<footer>
	<div style="text-align: center;">
		Copyright &copy; <?= date('Y'); ?>
		<a href="https://colorlib.com">muris.com
			All Rights Reserved</a>
	</div>
	<div class="clearfix"></div>
</footer>

</div>
</div>
<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/'); ?>vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/'); ?>vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url('assets/'); ?>vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?= base_url('assets/'); ?>vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?= base_url('assets/'); ?>vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?= base_url('assets/'); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url('assets/'); ?>vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?= base_url('assets/'); ?>vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.time.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?= base_url('assets/'); ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?= base_url('assets/'); ?>vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/'); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url('assets/'); ?>vendors/moment/min/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= base_url('assets/'); ?>build/js/custom.min.js"></script>

<!-- Sweatalert custome -->
<script src="<?= base_url('assets/dist/sweetalert2.all.min.js'); ?>"></script>
<script src="<?= base_url('assets/dist/myscript.js'); ?>"></script>

<script>
	$('.table').ready(function() {
		$('#tableBarang').DataTable();
	});

	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	});


	$('.form-check-input').on('click', function() {
		const menuId = $(this).data('menu');
		const roleId = $(this).data('role');

		$.ajax({
			url: "<?= base_url('admin/changeAccess'); ?>",
			type: 'post',
			data: {
				menuId: menuId,
				roleId: roleId
			},
			success: function() {
				document.location.href = "<?= base_url('admin/roleAccess/'); ?>" + roleId;
			}
		});
	});

	$(document).ready(function() {
		$('#barcode').select2();
	});
</script>

<!-- Script CSS Data table -->
<script type="text/javascript" src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>

</html>
