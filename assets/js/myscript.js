const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal({
		title: 'Congratulation your account has been created. Please Login!',
		text: 'Berhasil' + flashData,
		type: 'success'
	});
}
