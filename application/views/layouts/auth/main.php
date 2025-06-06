<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : "Default Title" ?></title>

    <?php if (!empty($meta_tags)): ?>
        <?php foreach ($meta_tags as $name => $content): ?>
            <meta name="<?= $name ?>" content="<?= $content ?>">
        <?php endforeach; ?>
    <?php endif; ?>

	<script>
		var web_base_url = "<?= base_url() ?>";
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
    
    <!-- ==============================================
     Fonts
    =============================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        let localS = localStorage.getItem('theme');
        let themeToSet = localS ? localS : (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        themeToSet = 'dark'
        document.documentElement.setAttribute('data-theme', themeToSet);
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

	<div class="" id="theme-switcher">
    </div>

	<!-- Back to Top -->
	<a href="#" id="back-to-top"></a>

	<div class="vine-wrapper">
		
	    <?php $this->load->view($content); ?>
		
		<?php $this->load->view('layouts/footer.php'); ?>
	</div> <!-- End Vine Wrapper -->



	<!-- ==============================================
	Scripts
	=============================================== -->
	<script src="<?= base_url() ?>assets/vendors/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/bootstrap/bootstrap.bundle.js"></script>
	<script src="<?= base_url() ?>assets/vendors/popper/popper.min.js"></script>	
	<script src="<?= base_url() ?>assets/vendors/simplebar/simplebar.min.js"></script>
	<script src="<?= base_url() ?>assets/vendors/aos/aos.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"></script>
	<script src="<?= base_url() ?>assets/js/main.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        document.addEventListener('contextmenu', event => {
            event.preventDefault();
        });
        
        document.querySelectorAll('.disabled').forEach(element => {
            element.style.pointerEvents = 'none';
        });
    </script>

    <?php if (!empty($scripts)): ?>
        <?php foreach ($scripts as $script): ?>
            <script src="<?= base_url($script) ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>
