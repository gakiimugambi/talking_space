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

        $sql = "SELECT * FROM users WHERE username = '". $_SESSION['username']."'";
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
                    <form action="update-bio.php" method="POST">
                    <?php

                    $sql = "SELECT * FROM bio WHERE user = '". $_SESSION['username']."'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            $course = $row['course'];
                            $faculty = $row['faculty'];
                            $class_of = $row['class_of'];
                            $current_workplace = $row['current_workplace'];
                            $bio = $row['about'];
                        }
                    } else 
                    {
                        $course = "";
                        $faculty = "";
                        $class_of = "";
                        $current_workplace = "";
                        $bio = "";
                    }
                    ?>
                        <input type="hidden" name="user" value="<?php echo $_SESSION['username'];?>" />
                        <input type="text" name="course" class="form-control my-2" placeholder="Course" value="<?php echo $course; ?>"/>
                        <input type="text" name="faculty" class="form-control my-2" placeholder="Faculty" value="<?php echo $faculty; ?>"/>
                        <input type="text" name="year" class="form-control my-2" placeholder="Class Of.." value="<?php echo $class_of; ?>"/>
                        <input type="text" name="current_workplace" class="form-control my-2" placeholder="Current Work-Place" value="<?php echo $current_workplace; ?>"/>
                        <p class="text-left">About Me.</p>
                        <textarea class="form-control" name="bio" value="<?php echo $bio; ?>">
                        <?php echo $bio; ?>
                        </textarea>
                        <button class="btn btn-secondary my-1" type="sybmit"> <i class="fas fa-pen-alt"></i> Update Bio</button>
                    </form>
                    <hr/>
                    <a href="posts.php" class="btn btn-danger"><i class="fas fa-hand-point-left"></i> Back</a>

                    <?php
               
                
            }
        } else 
        {
            ?>
            <h1>Sorry, Nothing here.</h1>
            <?php
        }
        ?>
        
        

		</div>
        <!-- col -->

        
	</div>



<?php

#include('footer.php');
?>