<style type="text/css">
    * {
        font-family: "DejaVu Sans";
        font-size: 8px;
    }
    .upn {
      background-image:url("<?php echo e(asset('img/logo.png')); ?>");
      background-repeat:no-repeat;
      width:700px;
      height:342px;
      position:absolute;
   }
</style>

<?php $volunteer= App\Volunteer::find($data['volunteer_id'])?>

<div class="container" style="border-style: solid;border-color: black;">
	<center><div class="upn"></div></center>
	<div class="row">
		<div class="card" style="padding: 20 20 20 20">
		  <div class="card-body">
		  	<h2 align="center">Report for <?php echo e($data['appointment_name']); ?></h2>
		  	<p align="right">Issued by: <?php echo e($volunteer->name); ?></p>
		  	<p align="right">Issued on: <?php echo e(Carbon\Carbon::now()->format('d-M-Y')); ?></p>
		    <h4 align="center">User details Noted during talk</h4>
			<div align="justify"><p>Speed of Talking : <?php echo e($data['speed']); ?></p>
            <p>Long Pause while Talking : <?php echo e($data['longPause']); ?></p>
            <p>Loudness of speech : <?php echo e($data['loudness']); ?></p></div>
                   
            <h4 align="center">Keywords used while talking</h4>
            <p><?php echo e($data['keywords']); ?></p>
                 
		    <h4 align="center">Suggestions:</h4>
		    <p align="justify"><?php echo e($data['suggestions']); ?></p>
		    <h4 align="center">Remarks:</h4>
		    <p align="justify"><?php echo e($data['suggestions']); ?></p>
		    <small><a href="https://sahaayak.co.in/login" target="_blank">Click here to login</a></small>
		  </div>
		</div>
	</div>
</div><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/appointment/generateReport.blade.php ENDPATH**/ ?>