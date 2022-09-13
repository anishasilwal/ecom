<div class ="panel panel-defult sidebar-menu">

<div class="panel-heading">
    <center>
        <img src="customer_images/images.jpg" class="img-responsive">
    </center>
    <br>
    <h3 align="center" class="panel-title">Name:Ram</h3>
</div>

<div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
    <li class="<?php if(isset($_GET['my_order'])){echo"active";}?>">
            <a href="my_account.php?my_order"><i class="fa fa-list"></i>My order</a>
        </li>
        


<li class="<?php if(isset($_GET['my_address'])){echo"active";}?>" >

            <a href="my_account.php?my_address">
                <i class="fa fa-user"></i>My address
            </a>
</li>

<li class="<?php if(isset($_GET['edit_act'])){echo"active";}?>">
            <a href="my_account.php?edit_act">
                <i class="fa fa-pencil"></i>Edit Account
            </a>
</li>

<li class="<?php if(isset($_GET['change_pass'])){echo"active";}?>" >
            <a href="my_account.php?change_pass">
                <i class="fa fa-user"></i>Change Password
            </a>
</li>

</li>



<li class="<?php if(isset($_GET['logout'])){echo"active";}?>">
            <a href="my_account.php?logout">
                <i class="fa fa-sign-out"></i>Log Out
            </a>
</li>


    </ul>

</div>
</div>