            <div class="card">
                <div class="card-body">
                   <form action="{{ route('storenews')}}" method="POST" enctype="multipart/form-data">
                    @csrf  

                    @include('news.news')  
                    &emsp;
                        <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" >Post News</button></center>
                   </form>
                </div>
            </div>