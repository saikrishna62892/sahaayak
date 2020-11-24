<div class="card">
  <div class="card-body">
    <form action="{{ route('dialyQuote') }}" method="POST" enctype="multipart/form-data">
    	@csrf
      <div class="form-group">
        <label for="formGroupExampleInput">Enter Dialy Quote</label>
        <input type="text" class="form-control" name="quote" id="formGroupExampleInput" required placeholder="Your dialy quote here...">
        @error('author')
         	<small class="text-danger">{{$message}}</small>
        @enderror
     	</div>
      &emsp;
          <center><button type="submit" class="btn btn-primary" style="background-color: #5768ad;" >Post Quote</button></center>
    </form>
  </div>
</div>