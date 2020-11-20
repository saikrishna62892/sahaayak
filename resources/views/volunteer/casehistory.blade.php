@foreach($user->appointments as $key => $appointment)
            <div class="card mt-4 shadow p-4 mb-5 bg-white rounded" >
                <div class="card-header"></div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                
                                <div>{{$appointment->casehistory->remarks}}</div>
                            </li>
                        </label>
                
                        </ul>
                    </div>
            </div>
            @endforeach