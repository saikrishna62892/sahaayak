<div class="row">
    <div class="card col-lg-12 col-md-12 shadow p-4 mb-5 bg-white rounded">
        <div class="form-group row" style="background-color: #fff;">
        	<input type="text" class="form-control col-lg-9 col-md-9" id="worry" placeholder="Your worries here..."/>
            &emsp;&emsp;
    		<input type="button" class="btn btn-primary col-lg-2 col-md-2" style="background-color: #5768ad;" value ="Add Worry" id="add">
        </div>

        <div>
            <small>Now You can strikeoff your worries to grow the tree</small>
            <form action="/home/user/worrytree" method="post">
                <?php echo csrf_field(); ?>
            <ul id="worriess"> 
                <?php $i=0 ?>
                <?php $__currentLoopData = $user->worries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="text" class="list-group-item" id="<?php echo e($worry->id); ?>" name="worries[][worry]" 
                    value="<?php echo e($worry->worry); ?>" onclick="remove(this.id)">
                    <?php $i++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        	</ul>
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Save Worries</button></center>
            </form>
        </div>
    </div>
</div>

<!--tree-->
<div class="row">
    <p align="center" style="color: #5768ad;">This Worry Tree represents your worries, to have a big tree make your worries less</p>
    <div class="col-lg-1 col-md-1"></div> 
    <canvas id="my_canvas" width="1000" height="800"></canvas>
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
var i=<?php echo e($i); ?>;
tree(i);
if(i>=0 && i<5)
document.getElementById('worry').readOnly = false;
if(i>=5)
document.getElementById('worry').readOnly = true;
document.getElementById("add").onclick  = function() {  
var text = document.getElementById("worry").value;
if(text.length>0) {
var node = document.createElement("input");
node.type="text";
node.className = "list-group-item";
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
if(i>=0 && i<5)
document.getElementById('worry').readOnly = false;
else if(i>=5)
document.getElementById('worry').readOnly = true;
}
else
    alert("please provide some input");
}

function remove(el)
{
    document.getElementById(el).remove();

    ctx.clearRect(0, 0, myCanvas.width, myCanvas.height);
    i--;
    tree(i);
    if(i>=0 && i<5)
        document.getElementById('worry').readOnly = false;
    else if(i>=5)
        document.getElementById('worry').readOnly = true;
}
function tree(i)
{
    if(i==0)
        draw(500, 650, 130, 0, 10);
    else if(i==1)
        draw(500, 600, 120, 0, 10);
    else if(i==2)
        draw(500, 510, 100, 0, 10);
    else if(i==3)
        draw(500, 400, 80, 0, 10);
    else if(i==4)
        draw(500, 320, 50, 0, 10);
    else if(i==5)
        draw(500, 300, 30, 0, 10);
}
</script>
<!--tree end--><?php /**PATH G:\sahayak1\sahaayak\resources\views/worrytree.blade.php ENDPATH**/ ?>