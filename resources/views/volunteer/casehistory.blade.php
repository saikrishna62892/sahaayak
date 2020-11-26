<style>
    .column {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>



<div class="container" style="border-style: solid;border-color: black;">
    <center><div class="upn"></div></center>
    <div class="row">
        <div class="card" style="padding: 20 20 20 20">
            <div class="card-header" style="color: grey;">
                <h1 align="center">NITC-Sahaayak</h1>
                <h5 align="center">we share bcoz we care</h5>
            </div>
            <div class="card-body">
                <h2 align="center">Report for {{ $user->name }}</h2>
                <div class="row">
                    <div class="column">
                    <center>
                        <h3 style="color: #5768ad;">User Details</h3>
                        <p>Name: {{ $user->name }}</p>
                        <p>College ID: {{ $user->rollnum }}</p>
                    </center>
                    </div>
                    <div class="column">
                        <center>
                        <h3 style="color: #5768ad;">Report Details</h3>
                        <p>Issued by: {{ $counsellor->name }}</p>
                        <p>Issued on: {{ Carbon\Carbon::now()->format('d-M-Y g:h:i A') }}</p>
                    </center>
                    </div>
                </div>
                <h3 align="center" style="color: #5768ad;">Previous Session Details</h3>  
                <table style="width:100%">
                <tr>
                    <th>Date</th>
                    <th>Slot</th>
                    <th>Counsellor Name</th>
                    <th>About</th>
                    <th>Remarks from Counsellor</th>
                </tr>
                @forelse($user->appointments as $key => $appointment)
                    @if(!is_null($appointment))
                    <tr align="center">
                        <td>{{ $appointment->date }}</td>
                        @if($appointment->slot==1)
                            <td>8AM - 9AM</td>
                        @elseif($appointment->slot==2)
                            <td>9AM - 10AM</td>
                        @elseif($appointment->slot==3)
                            <td>10AM - 11AM</td>
                        @elseif($appointment->slot==4)
                            <td>11AM - 12PM</td>
                        @elseif($appointment->slot==5)
                            <td>12PM - 1PM</td>
                        @elseif($appointment->slot==6)
                            <td>1PM - 2PM</td>
                        @elseif($appointment->slot==7)
                            <td>2PM - 3PM</td>
                        @elseif($appointment->slot==8)
                            <td>3PM - 4PM</td>
                        @elseif($appointment->slot==9)
                            <td>4PM - 5PM</td>
                        @else
                            <td> ------ </td>
                        @endif
                        <?php $counsellor_details = App\Counsellor::find($appointment->counsellor_name); ?>
                        <td>{{ $counsellor_details->name }}</td>
                        <td>{{ $appointment->message }}</td>
                        <?php $casehistory = App\Casehistory::where('appointment_id',$appointment->id)->first(); ?>
                        @if(!is_null($casehistory))
                        <td align="justify" style="padding: 5px 10px 5px 10px;">{{ $casehistory->remarks }}</td>
                        @else
                        <td>-- Not Yet Made --</td>
                        @endif
                    </tr>
                    @endif
                @empty
                    <td colspan="5">User Data Not Present</td>
                @endforelse

                </table>
                <br>
                <small><center><a href="https://sahaayak.co.in/login" target="_blank">Click here to login</a></center></small>
                <p align="center" style="white-space: pre-line;color: grey;">&#169; copyright to sahaayak,All rights reserved</p>
              </div>
            </div>
    </div>
</div>


