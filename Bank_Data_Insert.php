<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <title>Insert</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
	
<body class="h-100">
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
                   <form action="Bank_Data_Insert_Query.php" method="POST">
                        <div class="form-group">
                            <label for="ccode">Client Code:</label>
                            <input type="text" class="form-control" id="c_code" placeholder="Enter Client's Code..." name="ccode" required>
                        </div>
                       <div class="form-group">
                            <label for="cname">Client Name:</label>
                            <input type="text" class="form-control" id="c_name" placeholder="Enter Client's Name..." name="cname" required>
                        </div>
                       <div class="form-group">
                            <label for="bname">Bank Name:</label>
                            <input type="text" class="form-control" id="b_name" placeholder="Enter Bank Name..." name="bname" required>
                        </div>
                        <div class="form-group">
                            <label for="brname">Branch Address:</label>
                            <textarea class="form-control" id="br_name" rows="3" name="brname" placeholder="Enter Branch Address..." required></textarea>
                        </div>
                       <div class="form-group">
                            <label for="acc">Account No:</label>
                            <input type="text" class="form-control" id="a_cc" placeholder="Enter Accoount No..." name="acc" required>
                        </div>
                       <div class="form-group">
                            <label for="ifsc">IFSC Code:</label>
                            <input type="text" class="form-control" id="i_fsc" placeholder="Enter IFSC Code..." name="ifsc" required>
                        </div>
                       <div class="form-group">
                            <label for="scheme">Scheme Name:</label>
                            <input type="text" class="form-control" id="s_cheme" placeholder="Enter Scheme Name..." name="scheme" required>
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