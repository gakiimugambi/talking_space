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
	<div class="login">
        <!-- col -->
        <div class="col-md-6">
		    <h3>Posts</h3>
            <ul>
            <?php

                    $sql = "SELECT * FROM posts ORDER BY date DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                           
                                ?>
                                    <li class="li-1" style="list-style:none;"> 
                                        <?php
                                            echo "<span class='badge badge-primary'>@".$row['username'].": </span><br/>";
                                            echo $row['post'];
                                            echo "<hr/>";
                                            echo "<span class='bg-secondary px-2'> on ".$row['date']." at ".$row['time']."</span>";
                                            echo "<br/>";
                                          
                                        ?>
                                        <br/>
                                        <form  style="display:none;" id="comment<?php echo $row['id']; ?>" action="comment.php" method="POST">
                                            
                                            <div class="form-inline">
                                                <input  type="text"  name="comment" placeholder="Comment" class="form-control"/>
                                                <input type="hidden" name="postid" value="<?php echo $row['id']; ?> "/>
                                                <button class="btn btn-success m-2"     type="submit">Enter</button>
                                                <button class="btn btn-secondary m-2"   type="reset"> Clear</button>
                                            </div>
                                        </form>
                                        <br/>
                                        <a class="btn btn-warning" href="view-post.php?id=<?php echo $row['id'];?>"> <i class="far fa-eye"></i> View Post</a>
                                        <a class="btn btn-info" id="cb<?php echo $row['id']; ?>" >
                                        

                                         <?php

                                            $sqlxc = "SELECT * FROM comments WHERE postid=".$row['id'];
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
                                        <a class="btn btn-danger" href="like.php?post-id='<?php echo $row['id']?>'&user-name='<?php  echo $_SESSION['username'];  ?>'">
                                        <script>
                                            $( "#cb<?php echo $row['id']; ?>" ).click(function() {
                                            $( "#comment<?php echo $row['id']; ?>" ).toggle( "slow" );
                                            });
                                        </script>
                                        <?php

                                            $sqlx = "SELECT * FROM likes WHERE postid=".$row['id'];
                                            $resultx = $conn->query($sqlx);
                                            if ($resultx->num_rows > 0) {
                                                // output data of each row
                                                $count=0;
                                                while($rowx = $resultx->fetch_assoc()) 
                                                {
                                                    $count++;
                                                }
                                                echo '<i class="far fa-thumbs-up"></i> '.$count;
                                            } else {
                                                echo '<i class="far fa-thumbs-up"></i>';
                                            }

                                        ?>
                                        </a> 
                                        <br>  
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
        <div class="col-md-3">
        <h3>Trending <i class="fas fa-chart-line"></i></h3>
        <?php

            $sqlp = "SELECT title, COUNT(*) AS magnitude FROM posts GROUP BY title ORDER BY magnitude DESC";
            $resultp = $conn->query($sqlp);

            if ($resultp->num_rows > 0) {
                // output data of each row
                $count = 0;
                while($rowp = $resultp->fetch_assoc()) 
                {
                    $count++;
                    ?>

                    <?php echo $count; ?>. <a href="#" class="text-primary">        #<?php echo $rowp['title']; ?>      </a>
                    <br/>

                    <?php
                    
                    
                }
            } else {
                echo "0 results";
            }

        ?>
        </div>
        <!-- col -->

        <!-- col -->
        <div class="col-md-3">
            <h3>People</h3>
            <?php

            $sqlp = "SELECT * FROM users";
            $resultp = $conn->query($sqlp);

            if ($resultp->num_rows > 0) {
                // output data of each row
                $count = 0;
                while($rowp = $resultp->fetch_assoc()) 
                {
                    ?>

                    <a href="profile.php?id=<?php echo $rowp['username']; ?>" class="badge badge-info"><?php echo $rowp['name']; ?></a>
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



<?php

#include('footer.php');
?>