<?php $volunteer= App\Volunteer::find($data['volunteer_id'])?>

<div class="container" style="border-style: solid;border-color: black;">
	<center><div class="upn"></div></center>
	<div class="row">
		<div class="card" style="padding: 20 20 20 20">
		  <div class="card-body">
		  	<h2 align="center">Report for {{$data['appointment_name']}}</h2>
		  	<p align="right">Issued by: {{$volunteer->name}}</p>
		  	<p align="right">Issued on: {{ Carbon\Carbon::now()->format('d-M-Y') }}</p>
		    <h4 align="center">User details Noted during talk</h4>
			<div align="justify"><p>Speed of Talking : {{$data['speed']}}</p>
            <p>Long Pause while Talking : {{$data['longPause']}}</p>
            <p>Loudness of speech : {{$data['loudness']}}</p></div>
                   
            <h4 align="center">Keywords used while talking</h4>
            <p>{{$data['keywords']}}</p>
                 
		    <h4 align="center">Suggestions:</h4>
		    <p align="justify" style="white-space: pre-line;">{{$data['suggestions']}}</p>
		    <h4 align="center">Remarks:</h4>
		    <p align="justify" style="white-space: pre-line;">{{$data['remarks']}}</p>
		    <small><a href="https://sahaayak.co.in/login" target="_blank">Click here to login</a></small>
		  </div>
		</div>
	</div>
</div>