<?php
	   $conn=mysqli_connect("localhost", "root", "", "mini_project");
        if(!$conn){
            die('Could not Connect My Sql:' .mysql_error());
            }
       $id=$_REQUEST['id'];                             // ##### This 'id' Variable store the Value of Previous Page Update 'id' Value  ######
       $result = mysqli_query($conn, ("SELECT * FROM `client_info` WHERE `c_id`='.$id'"));
       $row=mysqli_fetch_array($result);   
?>
    
<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
        <!--######## Bootstrap Include Files -->
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
    </head>
    <body class="h-100"> 
        <?php session_start();?>
         
<div class="section-1-container section-container">
    <div class="container">
        <div class="row">
            <div class="col section-1 section-description">
                <h3 style="text-align:center"><b>Add New Client Details</b> </h3>
                <div class="divider-1"><span></span></div>
                </div>
        </div>
        <div class="row">
            <div class="col-6 offset-1 col-lg-4 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
 
                <div class="div-to-align">
               <form action="Client_Data_Update_Query.php?id=<?php echo $id; ?>" method="POST">
                       <div class="form-group">
                            <label for="cname">Client Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Client's Name..." name="cname" value="<?php echo $row['client_name'];?>" required>
                        </div>
                      <div class="form-group">
                            <label for="dob">Date Of Birth:</label>
                            <input type="date" class="form-control" id="b_name" placeholder="Enter Bank Name..." name="dob" value="<?php echo $row['dob'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="add">Client Add:</label>
                            <textarea class="form-control" name="add" rows="3" placeholder="Enter Address..." required value="<?php echo $row['client_add'];?>"></textarea>
                        </div>
                       <div class="form-group">
                            <label for="mob">Mobile:</label>
                            <input type="text" class="form-control" id="s_cheme" placeholder="Enter Scheme Name..." name="mob" value="<?php echo $row['client_mob'];?>" maxlength="10" required>
                        </div>
                        <input type="submit" name="submit" style="border-radius:4px; font-weight:bold;">&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="reset" style="border-radius:4px; font-weight:bold;">
                    </form>
                                        
                </div>
            </div>
        </div>
    </div>
    </div>
    
</body>
    <!--################ CSS Design ################ -->
<style>
    body{
        background-color: #DFD297;
    }
    .div-wrapper {
    height: 650px;
    margin-top: 20px;
    margin-left: 33% ;
    background-color: lightcyan;
    border: 2px;
    border-radius: 8px;
}
 
.div-to-align {
    width: 100%;
    padding: 25px; 
    /* .... */
}
</style>
</html>