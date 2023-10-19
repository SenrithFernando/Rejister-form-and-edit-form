<?php
include "conn.php";


// Start session
session_start();

$uname='Senrith123';

//-----------------------------------------------------session login details---------------------------------------------------------------------


 

    $selectcareer="SELECT * FROM `seller` WHERE `UserName`='$uname'";
    
    $result=mysqli_query($conn,$selectcareer);
 
    if($result){
      while($row=mysqli_fetch_assoc($result)){

          $selid=$row['SellerID'];
          $fname=$row['First_Name'];
          $lname=$row['Last_Name'];
        //   $pw=$row['Password'];
          $adrs=$row['Address'];
          $tel=$row['Telephone'];
          $email=$row['Email'];
        //   $uname=$row['UserName'];
        
          
    
  
    }}
    
   
    ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register_styles.css">
    <link rel="stylesheet" href="editProfile.css">
    <title>Edit Profile</title>
    <style>


    </style>
</head>
<body>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



  <div class="create_profile_section">


                        <div class="form">

                            

                            <div class="tab-content">




                                <div id="signup">
                                    <h1>Edit An Account</h1>

                                    <form action="updateForm.php" method="post">


                                        <div class="avatar-upload">
                                            <!-- <div class="avatar-edit">
                                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" required/>
                                                <label for="imageUpload"></label>
                                            </div> -->
                                            <div class="avatar-preview">
                                                <div id="imagePreview" style="background-image: url('https://i.imgur.com/sR5Tw3p.png');">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="top-row">
                                            <div class="field-wrap">
                                                
                                                <span class="details">First Name</span>
                                                <input type="text" name="First_Name1" value="<?php echo $fname ?>" required autocomplete="none" />
                                            </div>

                                            <div class="field-wrap">
                                                
                                                <span class="details">Last Name</span>
                                                <input type="text" name="Last_Name1" value="<?php echo $lname ?>" autocomplete="none"/>
                                            </div>
                                        </div>

                                        <div class="field-wrap">
                                            
                                            <span class="details">E-mail</span>
                                            <input type="email" name="Email1" value="<?php echo $email ?>" required autocomplete="none"/>
                                        </div>

                                        <div class="field-wrap">
                                            
                                            <span class="details">Phone Number</span>
                                            <input type="tel" name="Telephone1" value="<?php echo $tel ?>" required autocomplete="none"/>
                                        </div>
                                        <div class="field-wrap">
                                        <span class="details">Address</span>
                                            <input type="text" name="Address1" value="<?php echo $adrs ?>" autocomplete="none"/>
                                        </div>
                                        

                                        <button type="submit" id="signup-submit" class="button button-block">Update</button>
                                        <button type=""  id="delete" class="buttons button-block signups"><a class="deletebtn" href="delete.php? deleteid=<?php echo $selid; ?>">Delete</button></a></button>

                                    </form>

                                </div>



                            </div><!-- tab-content -->

                        </div> <!-- /form -->

                    </div>


                    <script>
                        
$('.form').find('input, textarea').on('keyup blur focus', function (e) {

var $this = $(this),
    label = $this.prev('label');

  if (e.type === 'keyup') {
    if ($this.val() === '') {
        label.removeClass('active highlight');
      } else {
        label.addClass('active highlight');
      }
  } else if (e.type === 'blur') {
    if( $this.val() === '' ) {
      label.removeClass('active highlight');
    } else {
      label.removeClass('highlight');
    }
  } else if (e.type === 'focus') {

    if( $this.val() === '' ) {
      label.removeClass('highlight');
    }
    else if( $this.val() !== '' ) {
      label.addClass('highlight');
    }
  }

});


                    </script>
</body>
</html>