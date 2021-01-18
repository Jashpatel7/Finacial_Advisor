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
                   <form action="MF_Index_Insert_Query.php" method="POST">
                        <div class="form-group">
                            <label for="mccode">Client Code:</label>
                            <input type="text" class="form-control" placeholder="Enter Client's Code..." name="mccode" required>
                        </div>
                       <div class="form-group">
                            <label for="mcname">Client Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Client's Name..." name="mcname" required>
                        </div>
                       <div class="form-group">
                            <label for="msname">Scheme Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Scheme Name..." name="msname" required>
                        </div>
                        <div class="form-group">
                            <label for="iamt">Invested Amount:</label>
                            <input type="text" class="form-control" placeholder="Enter Invested Amount..." name="iamt" required>                            
                        </div>
                       <div class="form-group">
                            <label for="doi">Date Of Invest</label>
                            <input type="date" class="form-control" placeholder="Enter Date Of Invest..." name="doi" required>
                        </div>
                       <div class="form-group">
                            <label for="status">Status:</label>
                            <input type="text" class="form-control" placeholder="Enter Status(Active/Closed)..." name="status" required>
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