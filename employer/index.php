<?php 
include ('../page/top.php');

?>

<html>


<body>
<div id="number">
    <input type="text"  v-model="message" placeholder="input">
    <a >{{message}}</a>
</div>
<?php echo'hello world' ?>
<script>
    var f=new Vue({
        el:"#number",
        data:{
            message:"",
            
            }
           });
</script>
        
</body>
</html>