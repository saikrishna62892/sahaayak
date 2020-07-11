<?php

namespace App\Traits;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Notifications\QuestionnaireNotification;
use App\Notifications\NewsNotification;
use App\Notifications\PlaylistNotification;
use App\Notifications\InspiremeNotification;
use App\Notifications\TalksNotification;
use App\Notifications\VideosNotification;
use App\Notifications\AppointmentReceivedNotification;
use App\Notifications\AppointmentAcceptedNotification;
use App\User;
use App\Subscription;

trait NotificationTrait{

	public function sendQuestionnaireNotif($notif){
		/*$subscriptions=Subscription::all();

   	 	foreach ($subscriptions as $subscription) {
   	 		$user = $subscription->user;

        	$user->notify(new QuestionnaireNotification($notif));
    	}*/
    	$this->sendNotification(new QuestionnaireNotification($notif));

	}

	public function sendNewsNotif($notif){
		  $this->sendNotification(new NewsNotification($notif));
	}
	public function sendPlaylistNotif($notif){
		$this->sendNotification(new PlaylistNotification($notif));
	}
	public function sendInspiremeNotif($notif){
		$this->sendNotification(new InspiremeNotification($notif));
	}
	public function sendTalksNotif($notif){
		$this->sendNotification(new TalksNotification($notif));
	}
	public function sendVideosNotif($notif){
		$this->sendNotification(new VideosNotification($notif));
	}
	public function sendAppointmentReceivedNotif($notif){
		auth()->user()->notify(new AppointmentReceivedNotification($notif));
	}
	public function sendAppointmentAcceptedNotif($notif1,$notif2){
		$user = User::find($notif1);
		$user->notify(new AppointmentAcceptedNotification($notif2));
	}

	public function sendNotification($a){
		$subscriptions=Subscription::all();

   	 	foreach ($subscriptions as $subscription) {
   	 		$user = $subscription->user;

        	$user->notify($a);
    	}
	}
}