@extends('layouts.layout')
@section('content')
<div class="container w-100 h-100">
<div class="row">
<div class="column left">
<div class="card">
    <div class="card-header">
    	<input type='text' id = 'worry' />
		<input type='button' value = 'add' id = 'add'>
    </div>

    <div class="card-body">
        <form action="/home/user/worrytree" method="post">
            @csrf
        <ul id= 'worriess'> 
            <?php $i=0 ?>
            @foreach($user->worries as $worry)
            <input type="text" class="list-group-item" id="{{$worry->id}}" name="worries[][worry]" 
            value="{{$worry->worry}}" onclick="remove(this.id)">
            <?php $i++ ?>
            @endforeach
    	</ul>
            <button  type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
</div>
</div>

<!--tree-->
<div class="column right">
    <canvas id="my_canvas" width="800" height="800"></canvas>
</div>
</div>
</div>
    <script>
    var myCanvas = document.getElementById("my_canvas");
    var ctx = myCanvas.getContext("2d");
    function draw(startX, startY, len, angle, branchWidth) {
        ctx.lineWidth = branchWidth;

        ctx.beginPath();
        ctx.save();

        ctx.strokeStyle = "green";
        ctx.fillStyle = "green";

        ctx.translate(startX, startY);
        ctx.rotate(angle * Math.PI/180);
        ctx.moveTo(0, 0);
        ctx.lineTo(0, -len);
        ctx.stroke();

        ctx.shadowBlur = 15;
        ctx.shadowColor = "rgba(0,0,0,0.8)";

        if(len < 10) {
            ctx.restore();
            return;
        }

        draw(0, -len, len*0.8, angle-15, branchWidth*0.8);
        draw(0, -len, len*0.8, angle+15, branchWidth*0.8);

        ctx.restore();
    }
    var i={{ $i }};
    tree(i);

    document.getElementById("add").onclick  = function() {   
    var node = document.createElement("input");
    node.type="text";
    node.className = "list-group-item";
    var text = document.getElementById("worry").value;
    node.id=++i;
    node.name="worries[][worry]";
    node.value=text;
    var textnode=document.createTextNode(text);
    node.appendChild(textnode);
    ctx.clearRect(0, 0, myCanvas.width, myCanvas.height);
    tree(i);
    node.addEventListener('click', function() {
    remove(node.id);
    }, false);

    document.getElementById("worriess").appendChild(node);
    document.getElementById('worry').value="";
    }

    function remove(el)
    {
        document.getElementById(el).remove();

        ctx.clearRect(0, 0, myCanvas.width, myCanvas.height);
        i--;
        tree(i);
    }
    function tree(i)
    {
        if(i==0)
            draw(400, 600, 130, 0, 10);
        else if(i==1)
            draw(400, 600, 120, 0, 10);
        else if(i==2)
            draw(400, 510, 100, 0, 10);
        else if(i==3)
            draw(400, 370, 80, 0, 10);
        else if(i==4)
            draw(400, 320, 50, 0, 10);
        else if(i==5)
            draw(400, 300, 30, 0, 10);
    }
    </script>
<!--tree end-->

@endsection
