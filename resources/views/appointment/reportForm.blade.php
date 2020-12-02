<div class="card shadow p-4 mb-5 bg-white rounded">

    <h4 align="center" id="demo"> </h4>
    <div class="card-body">
       <form action="/counsellor/addCasehistory" method="post">
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
                <label for="appointment_name">Name</label>
                <input type="text" class="form-control" name="appointment_name" id="appointment_name" aria-describedby="appointment_nameHelp" value="" autocomplete="off" readonly>
                @error('appointment_name')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group  col-lg-4">
                <label for="appointment_email">Email</label>
                <input type="text" class="form-control" name="appointment_email" id="appointment_email" aria-describedby="appointment_emailHelp" value="" autocomplete="off" readonly>
                @error('appointment_email')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="remarks">Enter Remarks/Findings </label>
            <textarea type="textarea" class="form-control" name="remarks" id="remarks" placeholder="Your remarks about the session" rows="5" required></textarea>
            <small>Note: Enter Your Remarks about the session separated by newline</small>
            @error('remarks')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
            <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Submit</button></center>
       </form>
    </div>
</div>