const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		title: 'Success',
		text: flashData,
		type: 'submit',
		position: 'center',
		icon: 'success',
		showConfirmButton: false,
		timer: 2000
	});
}

//button delete
$('.button-delete').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Yakin ingin hapus?',
		text: 'Jika ya, anda tidak dapat mengembalikan lagi!',
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});

//button logout
$('.button-logout').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin?',
		text: 'Jika klik "Logout", anda akan keluar dari halaman ini.',
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#089c1e',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Logout'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
