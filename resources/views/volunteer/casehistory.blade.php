@foreach($user->appointments as $key => $appointment)
<div class="card mt-4 shadow p-4 mb-5 bg-white rounded" >
    <div class="card-header"></div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">
                    @if(!is_null($appointment->casehistory ))
                        <div>{{$appointment->casehistory->remarks}}</div>
                    @endif
                </li>
            </label>
            <div class="header__logo">
                <a href="{{ url('/') }}"><imge src="/img/logo.png" width="240" height="60"></a>
            </div>
            <div class="header__logo">
                <a href="http://www.nitc.ac.in/"><imge src="/img/nitc.png" width="240" height="60"></a>
            </div>
            <form>
                <h2 style="color: #5768ad;">Counsellor</h2>
                <label for="c_name">Name:</label><br>
                <input type="text" id="c_name" name="c_name"><br>
                <label for="c_id">ID:</label><br>
                <input type="text" id="c_id" name="c_id">
                <h2 style="color: #5768ad;">User</h2>
                <label for="u_name">Name:</label><br>
                <input type="text" id="u_name" name="u_name"><br>
                <label for="u_id">ID:</label><br>
                <input type="text" id="u_id" name="u_id">
            </form>
            <h2 style="color: #5768ad;">Previous Sessions</h2>
            <table style="width:100%">
            <tr>
                <th>Date</th>
                <th>Counsellor Name</th>
                <th>Remarks</th>
            </tr>
            <tr>
                <td>Date-1</td>
                <td>Counsellor Name-1</td>
                <td>Remarks-1</td>
            </tr>
            <tr>
                <td>Date-2</td>
                <td>Counsellor Name-2</td>
                <td>Remarks-2</td>
            </tr>
            </table>


            </ul>
        </div>
@endforeach