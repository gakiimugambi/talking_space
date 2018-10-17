<?php
include('conn.php');
include('header.php');
?>
<style>
.li-1
{
margin-top: 15px;
border-bottom: solid thin black;
padding-bottom: 3px;
}
</style>
<!-- login -->
<div class="col-md-9 main">
	<!-- login-page -->
	<div class="login">
        <!-- col -->
        <div class="col-md-9">
        
        <!-- select -->

        <?php

            $sqlxc = "SELECT * FROM posts WHERE id=".$_GET['id'];
            $resultxc = $conn->query($sqlxc);
            if ($resultxc->num_rows > 0) {
                // output data of each row
               
                while($rowxc = $resultxc->fetch_assoc()) 
                {
                ?>
                <div class="alert alert-success">@<?php echo $rowxc['username']; ?> Says...</div>
                <h1>                <?php echo $rowxc['post']; ?>       </h1>
                <a href="#" style="color:blue;">        #<?php echo $rowxc['title']; ?>      </a>
                    
                   
                <?php
                }
         
            } else {
                echo '0';
            }

        ?>

        <hr/>

        <a class="btn btn-info" >
                                        
        <?php

            $sqlxc = "SELECT * FROM comments WHERE postid=".$_GET['id'];
            $resultxc = $conn->query($sqlxc);
            if ($resultxc->num_rows > 0) {
                // output data of each row
                $count=0;
                while($rowxc = $resultxc->fetch_assoc()) 
                {
                    $count++;
                }
                echo '<i class="far fa-comment"></i> '.$count;
            } else {
                echo '<i class="far fa-comment"></i>';
            }

        ?>
        
        </a>

        <a class="btn btn-danger" >
                                        
        <?php

            $sqlxc = "SELECT * FROM likes WHERE postid=".$_GET['id'];
            $resultxc = $conn->query($sqlxc);
            if ($resultxc->num_rows > 0) {
                // output data of each row
                $count=0;
                while($rowxc = $resultxc->fetch_assoc()) 
                {
                    $count++;
                }
                echo '<i class="far fa-thumbs-up"></i> '.$count;
            } else {
                echo '<i class="far fa-thumbs-up"></i>';
            }

        ?>
        
        </a>

        <!-- select -->

        <!-- view -->
        <div class="row my-3">
            <div class="col-md-7">
                <?php

                $sqlx = "SELECT * FROM comments WHERE postid=".$_GET['id'];
                $resultx = $conn->query($sqlx);
                if ($resultx->num_rows > 0) {
                // output data of each row

                while($rowx = $resultx->fetch_assoc()) 
                {
                ?>
                <span class="badge badge-success">@<?php echo $rowx['from_']; ?></span> 
                commented... 
                <span class="badge badge-primary"><?php echo $rowx['comment']; ?></span>
                <hr/>
                


                <?php
                }

                } else {
                echo '0';
                }

                ?>
            </div>
        </div>
        <!-- view -->

        </div>
        <!-- col -->
	</div>

<!-- login -->


<?php
#include('footer.php');
?>