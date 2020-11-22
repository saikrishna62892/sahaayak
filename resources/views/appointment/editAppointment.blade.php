<div class="card shadow p-4 mb-5 bg-white rounded">

    <h4 align="center" id="demo1"></h4>
    <div class="card-body">
       <form action="/counsellor/rescheduleAppointment" method="post">
        @csrf
            <div class="row">
                <div class="form-group  col-lg-4">
                    <label for="appointment_id">Appointment ID</label>
                    <input type="text" class="form-control" name="appointment_id" id="appointment_id" aria-describedby="appointment_idHelp" value="" autocomplete="off" readonly>
                    @error('appointment_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group  col-lg-4">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" id="date" name="date" aria-describedby="dateHelp" placeholder="Choose Your Date" onfocus="(this.type='date')"autocomplete="off" >
                    @error('date')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group  col-lg-4">
                    <label for="slot">Date</label>
                    <select  name="slot" class="form-control" aria-describedby="slotHelp">
                        <option value="" selected disabled hidden>Choose Your Slot</option>
                        <option value="1">8AM - 9AM</option>
                        <option value="2">9AM - 10AM</option>
                        <option value="3">10AM - 11AM</option>
                        <option value="4">11AM - 12PM</option>
                        <option value="5">12PM - 1PM</option>
                        <option value="6">1PM - 2PM</option>
                        <option value="7">2PM - 3PM</option>
                        <option value="8">3PM - 4PM</option>
                        <option value="9">4PM - 5PM</option>
                    </select>
                </div>
            </div>
            <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Submit</button></center>
       </form>
    </div>
</div>