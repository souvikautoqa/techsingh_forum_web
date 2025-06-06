
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($title) ? $title : "Default Title" ?></title>
    <?php if (!empty($meta_tags)): ?>
        <?php foreach ($meta_tags as $meta_name => $meta_content): ?>
            <meta name="<?= $meta_name ?>" content="<?= $meta_content ?>">
        <?php endforeach; ?>
    <?php endif; ?>

	<script>
		//Check local storage
		let localS = localStorage.getItem('theme')
		themeToSet = localS

		// If local storage is not set, we check the OS preference	
		if (!localS) {
			themeToSet = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
			themeToSet = 'dark'
		}

		//Set the correct theme
		document.documentElement.setAttribute('data-theme', themeToSet);

		var web_base_url = "<?=base_url()?>";
	</script>
	<!-- ==============================================
	 CSS Styles
	=============================================== -->
	<link rel="stylesheet" href="<?=base_url()?>assets/vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendors/simplebar/simplebar.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendors/aos/aos.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/external.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
	<!-- test -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
		integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!-- ==============================================
	 Fonts
	=============================================== -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Karla&amp;display=swap" rel="stylesheet">

	<script src="https://cdn.larapush.com/scripts/popup-4.0.0.min.js"></script>
	<script>
	function LoadLaraPush(){ if (typeof LaraPush === "function") {new LaraPush(JSON.parse(atob('eyJmaXJlYmFzZUNvbmZpZyI6eyJwcm9qZWN0SWQiOiJsYXJhcHVzaGVram9zaCIsIm1lc3NhZ2luZ1NlbmRlcklkIjoiNDM2MzQwNjM3MTkwIiwiYXBwSWQiOiIxOjQzNjM0MDYzNzE5MDp3ZWI6ZTc1OGU5ZjJiZTViZGM3NzU0NGQ4NyIsImFwaUtleSI6IkFJemFTeUMzQ1ZHUWlmd0I3Y2tONFZpMEMyUHNBMGNrWU9ZZTZSayJ9LCJkb21haW4iOiJ0ZXN0YWJjLmtleWFubnRlY2guY29tIiwic2l0ZV91cmwiOiJodHRwczpcL1wvdGVzdGFiYy5rZXlhbm50ZWNoLmNvbVwvIiwiYXBpX3VybCI6Imh0dHBzOlwvXC9wdXNobGFyYTk5MDAzLnRlY2hzaW5naDEyMy5jb21cL2FwaVwvdG9rZW4iLCJzZXJ2aWNlV29ya2VyIjoiaHR0cHM6XC9cL3Rlc3RhYmMua2V5YW5udGVjaC5jb21cL2ZpcmViYXNlLW1lc3NhZ2luZy1zdy5qcyIsInZhcGlkX3B1YmxpY19rZXkiOiJCREoyN2hGUjVWY3Rlb2F3YW1iQnZ2VndGNXhYaTQ4ZlRneU1nbW5SRmpvMHpxQVI1QmZyUjBJSUlsZk1LTi1OMEUwZUNVdHJMZktqcTRtSEpQeUVHMUUiLCJyZWZlcnJhbENvZGUiOiJJR0ZUQksifQ==')), JSON.parse(atob('eyJsb2dvIjoiaHR0cHM6XC9cL2Nkbi5sYXJhcHVzaC5jb21cL3VwbG9hZHNcL2JlbGwtbG9nby5qcGciLCJoZWFkaW5nIjoiVGVzdGFiYyB3YW50IHRvIG5vdGlmeSB5b3UgYWJvdXQgdGhlIGxhdGVzdCB1cGRhdGVzIiwic3ViaGVhZGluZyI6IllvdSBjYW4gdW5zdWJzY3JpYmUgZnJvbSBub3RpZmljYXRpb25zIGFueXRpbWUuIiwidGhlbWVDb2xvciI6IiMwMDdiZmYiLCJhbGxvd1RleHQiOiJBbGxvdyIsImRlbnlUZXh0IjoiRGVueSIsImRlc2t0b3AiOiJlbmFibGUiLCJtb2JpbGUiOiJkaXNhYmxlIiwibW9iaWxlTG9jYXRpb24iOm51bGwsImRlbGF5IjoiMCIsInJlYXBwZWFyIjoiMCIsImJvdHRvbUJ1dHRvbiI6ImRpc2FibGUiLCJidXR0b25Ub1Vuc3Vic2NyaWJlIjpudWxsLCJsb2NrUGFnZUNvbnRlbnQiOiJkaXNhYmxlIiwiYmFja2Ryb3AiOiJkaXNhYmxlIiwicG9wdXBfdHlwZSI6Im1hbnVhbCJ9')));}}LoadLaraPush();
	</script>

	<?php if (!empty($styles)): ?>
        <?php foreach ($styles as $style): ?>
            <link rel="stylesheet" href="<?= base_url($style) ?>">
        <?php endforeach; ?>
    <?php endif; ?>

	<?php if (!empty($head_scripts)): ?>
        <?php foreach ($head_scripts as $head_script): ?>
            <script src="<?= base_url($head_script) ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

</head>

<body>

	<!-- Switcher Icon -->

	<div class="" id="theme-switcher">

	</div>

	<!-- Back to Top -->
	<a href="#" id="back-to-top"></a>

	<div class="vine-wrapper">

		<?php $this->load->view('layouts/header.php'); ?>

		<!-- ==============================================
		 Hero
		=============================================== -->
		<?php $this->load->view($content); ?>
		
		<?php $this->load->view('layouts/footer.php'); ?>


	</div><!--/vine-wrapper-->

	<!-- ==============================================
	Scripts
	=============================================== -->
	<script src="<?=base_url()?>assets/vendors/jquery/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/vendors/bootstrap/bootstrap.bundle.js"></script>
	<script src="<?=base_url()?>assets/vendors/popper/popper.min.js"></script>
	<script src="<?=base_url()?>assets/vendors/simplebar/simplebar.min.js"></script>
	<script src="<?=base_url()?>assets/vendors/aos/aos.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js" integrity="sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"></script>
	<!-- <script src = "https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.5.1/socket.io.js",></script> -->
	<script src="https://cdn.socket.io/4.5.4/socket.io.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="<?=base_url()?>assets/js/main.js"></script>
	<script>
		document.addEventListener('contextmenu', event => {
			event.preventDefault();
		});

		document.querySelectorAll('.disabled').forEach(element => {
			element.style.pointerEvents = 'none';
		});
	</script>



	<script>
		// Re-enable right-click
		document.addEventListener("contextmenu", function (event) {
			event.stopPropagation(); // Allow right-click menu to work
		}, true);

		// Re-enable keyboard shortcuts
		document.addEventListener("keydown", function (event) {
			event.stopPropagation(); // Allow all key events to pass through
		}, true);

		$("#clear-notification-btn").on('click', function(){
			$.ajax({
				type: "POST",
				url: "<?=base_url()?>clear-notification",
				data: {},
				dataType: 'json',
				success: function(res){
					if(res && res.status == "success"){
						$("#notification-count").text(0);
						$("#notification-list").html('');
					}
				}
			})
		});

	</script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const toggleBtn = document.getElementById('search-toggle');
			const searchForm = document.getElementById('search-form');

			toggleBtn.addEventListener('click', function () {
			searchForm.classList.toggle('d-none');
			searchForm.querySelector('input').focus();
			});

			// Optional: hide when clicking outside
			document.addEventListener('click', function (e) {
			if (!document.getElementById('search-container').contains(e.target)) {
				searchForm.classList.add('d-none');
			}
			});
		});
	</script>

    <?php if (!empty($scripts)): ?>
        <?php foreach ($scripts as $script): ?>
            <script src="<?= base_url($script) ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>


	

</body>


</html>
