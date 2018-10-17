<?php
include('conn.php');
include('header.php');
include('foot.php');
?>
<style>
.li-1
{
margin-top: 15px;
border-bottom: solid thick black;
padding-bottom: 12px;
}
</style>
<!-- login -->
<div class="col-md-9 main">
	<!-- login-page -->
	<div class="login d-flex justify-content-center">
        <!-- col -->
        <div class="col-md-6 text-center">
        <?php

        $sql = "SELECT * FROM users WHERE username = '". $_GET['id']."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                
                    $username   = $row['username'];
                    $email      = $row['email_address'];
                    $name       = $row['name'];
                    ?>

                    <h1 class="text-danger text-center">     <?php echo $name; ?></h1>
                    <h4 class="text-secondary text-center">    <?php echo $email; ?></h4>
                    <h6 class="text-danger text-center">    @<?php echo $username; ?></h6>
                    <hr/>
                    <form action="sendmsg.php" method="post">
                    <input type="hidden" name="user" value="<?php echo $_GET['id'];?>"/>
                    <label class="text-align-left">Your Message...</label>
                    <textarea class="form-control" name="msg">
                    </textarea>
                    <hr>
                    <button type="submit" class="btn btn-primary"> <i class="fas fa-pen-alt"></i> Send Message</button>
                    </form>
                    
                    <hr/>
                    <a href="posts.php" class="btn btn-danger"><i class="fas fa-hand-point-left"></i> Back</a>

                    <?php
               
                
            }
        } else 
        {
            ?>
            <h1>Chris Muga</h1>
            <?php
        }
        ?>
        
        

		</div>
        <!-- col -->

        
	</div>



<?php

#include('footer.php');
?>