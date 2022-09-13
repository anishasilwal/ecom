<?php
$db=mysqli_connect("localhost","root","ecom");



function getUserIP(){
    switch(true){
        case(!empty($_SERVER['HTTP_X_REAL_IP'])): return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_CLIENT_IP'])): return $_SERVER['HTTP_CLIENT_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])): return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER ['REMOTE_ADDR'];
    }
}

function addCart(){
    global $db;
    if(isset($_GET['add_cart'])){
        $ip_add=getUserIP();
        $p_id=$_GET['add_cart'];
        $product_qty=$_POST['product_qty'];
        $production_farm=$_POST['production_farm'];
        $check_product="select * from cart where ip_add='$ip_add'AND p_id='$ p_id'";
        $run_check=mysqli_query($db,$check_product);
        if(mysqli_num_rows($run_check)>0){
            echo "<script>('This product is already added in the cart') </script>";
            echo"<script>window.open('details.php?pro_id=$p_id','_self')</script>";
        }else{
            $query="insert into cart(p_id,ip_add,qty,farm)values('$p_id','$ip_add','$product_qty','$production_farm')";
            $run_query=mysqli_query($db,$query);
            echo"<script>window.open('details.php?pro_id=$p_id','_self')</script>";
        }
        }

    }

    function item(){
        global $db;
        $ip_add=getUserIP();
        $get_items="select * from cart where ip_add='$ip_add'";
        $run_item=mysqli_query($db,$get_items);
        $count=mysqli_num_rows($run_item);
        echo $count;

    }
?>