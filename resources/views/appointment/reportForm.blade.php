<div class="card shadow p-4 mb-5 bg-white rounded">
    <h4 align="center" id="demo">Add Case history for </h4>
    <div class="card-body">
       <form action="/volunteer/report/generateReport" method="post">
        @csrf
        <div class="row">
            <div class="form-group  col-lg-2">
                <label for="appointment_id">Appointment ID</label>
                <input type="text" class="form-control" name="appointment_id" id="appointment_id" aria-describedby="appointment_idHelp" value="" autocomplete="off" readonly>
                @error('appointment_id')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group  col-lg-4">
                <label for="appointment_id">Name</label>
                <input type="text" class="form-control" name="appointment_name" id="appointment_name" aria-describedby="appointment_nameHelp" value="" autocomplete="off" readonly>
                @error('appointment_id')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group  col-lg-6">
                <label for="appointment_id">Email</label>
                <input type="text" class="form-control" name="appointment_email" id="appointment_email" aria-describedby="appointment_emailHelp" value="" autocomplete="off" readonly>
                @error('appointment_id')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        



        <div class="form-group">
            <label for="remarks">Enter remarks</label>
            <textarea type="textarea" class="form-control" name="remarks" id="remarks" placeholder="Your remarks about the session" rows="5"></textarea>
            <small>Note: Enter Your Remarks about the session separated by newline</small>
            @error('remarks')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
            <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Generate Report</button></center>
       </form>
    </div>
</div>