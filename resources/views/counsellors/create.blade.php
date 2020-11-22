<div class="card">
                <div class="card-body">
                   <form action="{{ route('storecounsellor')}}" method="POST" enctype="multipart/form-data">
                    @csrf  

                    @include('counsellors.add')  
                    &emsp;
                        <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" >Submit</button></center>
                   </form>
                </div>
            </div>