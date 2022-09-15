<?php
$db=mysqli_connect("localhost","root","","ecom");



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

    function getPCats(){
        global $db;
        $get_p_cats="select * from product_categories";
        $run_p_cats=mysqli_query($db,get_p_cats);
        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
            $p_cat_id=$row_p_cats['p_cat_id'];
            $p_cat_title=$row_p_cats['p_cat_title'];
            echo "<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>";
        }
    }
    
    /* categories */
    
    function getCat(){
        global $db;
        $get_cat='select * from categories';
        $run_cat=mysqli_query($db,$get_cat);
        while($row_cat=mysqli_fetch_array()){
            $cat_id=$row_cat['cat_id'];
            $cat_title=$row_cat['cat_title'];
            echo "<li><a href='shop.php?cat_id=$cat_id'>$cat_title</a></li>";
        }
    }
    function totalPrice(){
        global $db;
        $ip_add=getUserIP();
        $total=0;
        $select_cat="select* from cart where ip_add='$ip_add'";
        $run_cart=mysqli_query($db, $select_cat);
        while($record=mysqli_fetch_array($run_cart)){
            $pro_id=$record['p_id'];
            $pro_qty=$record['qty'];
            $get_price="select * from products where product_id='$pro_id'";
            $run_price=mysqli_query($db,$get_price);
            while($row=mysqli_fetch_array($run_price)){
                $sub_total=$row['product_price']*$pro_qty;
                $total += $sub_total;
            }
    
        }
        echo $total; 
    }
?>