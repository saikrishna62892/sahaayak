<div class="card">
  <div class="card-body">
    <form action="/admin/home" method="POST" enctype="multipart/form-data">
    	@csrf
       	@include('quotes.quote') 
        &emsp;
          <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;">Post Quote</button></center>
    </form>
  </div>
</div>