<?php 
    include('header.php');
?>
	<div class="col-md-9 main">
    <form action="process.php" method="POST">
	<!-- register -->
            
                <div class="sign-up-form">
                    <h3 class="tittle">Registration <i class="glyphicon glyphicon-file"></i></h3>
                        
                    <div class="sign-up">
                        <h3 class="tittle reg">Personal Information <i class="glyphicon glyphicon-user"></i></h3>
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4 class="a">Username* :</h4>
                            </div>
                            <div class="sign-up2">
                                    <input type="text" class="text" name = "user_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4 class="b"> Name* :</h4>
                            </div>
                            <div class="sign-up2">
                                        <input type="text" class="text" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" required>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4 class="c">Email Address* :</h4>
                            </div>
                            <div class="sign-up2">
                               <input type="email" placeholder="A-z@strathmore.edu" name = "email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4 class="b"> Gender* :</h4>
                            </div>
                            <div class="sign-up2">
                            
                                        <select class="form-control inpt" name="gender" id="gender" required>
                                        <option value="">Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        
                                    </select>

                    
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <h3 class="tittle reg">Login Information <i class="glyphicon glyphicon-off"></i></h3>
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4 class="d">Password* :</h4>
                            </div>
                            <div class="sign-up2">
                            
                                    <input type="password" class="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>

                    
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4>Confirm Password* :</h4>
                            </div>
                            <div class="sign-up2">
                            
                                    
                                <input type="password" class="Password" name="cpassword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required>
        

                    
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    
                            <input type="submit" value="Register">
                    </div>
                </div>
<!-- //register -->
</form>
<!-- //login-page -->
			<div class="clearfix"> </div>
<?php 
    #include('footer.php'); 
?>