<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sahaayak | <?php echo $__env->yieldContent('name'); ?></title>
	<link rel="icon" type="image/png" href="/img/icon.png"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--==============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/login.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171070217-1"></script>

	<!-- ManyChat Plugin -->
    <script src="//widget.manychat.com/101206188315883.js" async="async"></script>
    
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-171070217-1');
	</script>

	
	<!-- Recaptcha -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body style="background-color: #f5f6fa;">
	<?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Session::has('alert-' . $msg)): ?>
            <center><p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?></p></center>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<?php echo $__env->yieldContent('content'); ?>

<!--===============================================================================================-->	
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>

	<script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    <!-- Terms & conditions && privcy policy modal -->
    <script>
	// Get the modal
	var modal1 = document.getElementById("myTerms");
	var modal2 = document.getElementById("myPrivacy");


	// Get the <span> element that closes the modal
	var span1 = document.getElementsByClassName("close1")[0];
	var span2 = document.getElementsByClassName("close2")[0];

	// When the user clicks the button, open the modal 
	document.getElementById("terms_conditions").onclick = function() {
	  modal1.style.display = "block";
	}

	document.getElementById("privacy_policy").onclick = function() {
	  modal2.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span1.onclick = function() {
	  modal1.style.display = "none";
	}
	span2.onclick = function() {
	  modal2.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal1) {
	    modal1.style.display = "none";
	  }
	  if (event.target == modal2) {
	    modal2.style.display = "none";
	  }
	}
	</script>

</body>
</html><?php /**PATH D:\Sahaayak\sahaayak\resources\views/layouts/reg_forms_layout.blade.php ENDPATH**/ ?>