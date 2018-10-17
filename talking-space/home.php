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
        <div class="col-md-4">
		    <form action="post.php" method="POST">

                <p>What's on your mind, <?php echo $_SESSION['name']; ?>? </p>
                <br/>
                <p>Title</p>
                <br>
                <input type="text" class="form-control" name="title"/>
                <br>
                <p>Message</p>
                <br>
                <textarea class="form-control" name="msg" placeholder="">
                </textarea>
                <hr/>
                <!-- buttons -->
                <button class="btn btn-primary my-2"    type="submit">  Enter</button>
                <button class="btn btn-secondary my-2"  type="reset">   Clear</button>
                <!-- buttons -->
            </form>
        </div>
        <!-- col -->

        <!-- col -->
        <div class="col-md-4">
		    <h3>My Posts</h3>
            <ul>
            <?php

                    $sql = "SELECT * FROM posts WHERE username = '". $_SESSION['username']."'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                           
                                ?>
                                    <li class="li-1"> 
                                        <?php 
                                            echo $row['post'];
                                            echo "<br/>";
                                            echo " on ".$row['date']." at ".$row['date'];
                                        ?> 
                                    </li>
                                <?php
                            
                            
                        }
                    } else {
                        echo "0 results";
                    }

            ?>
            <ul>
        </div>
        <!-- col -->


        <!-- col -->
        <div class="col-md-4">
            <h3>Messages</h3>
            <?php

            $sqlp = "SELECT * FROM messages WHERE to_ = '".$_SESSION['username']."'";
            $resultp = $conn->query($sqlp); 

            if ($resultp->num_rows > 0) {
                // output data of each row
                $count = 0;
                while($rowp = $resultp->fetch_assoc()) 
                {
                    ?>
                    <div class="alert alert-light mb-3">
                        <a href="profile.php?id=<?php echo $rowp['from_']; ?>" class="badge badge-info">@<?php echo $rowp['from_']; ?></a> says.. <span class="badge badge-warning"><?php echo $rowp['msg'];?></span>
                    </div>
                    <br/>

                    <?php
                    
                    
                }
            } else {
                echo "0 results";
            }

            ?>
        </div>
        <!-- col -->



	</div>
<!-- //login-page -->
			<div class="clearfix"> </div>
	
	<div class="clearfix"> </div>
<!-- login -->


<?php
#include('footer.php');
?>