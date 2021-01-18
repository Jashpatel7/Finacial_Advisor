<!DOCTYPE html>
<html>
    <head>
        <title>Proofs And Id</title>
        <!--######## Bootstrap Include Files -->
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        alert("If You Uploadead File Than Do not Need To Upload Again(Go to the Index Page)....")
        
    </script>  
    </head>
    <body class="h-100">
<div class="section-1-container section-container">
    <div class="container">
        <div class="row">
            <div class="col section-1 section-description">
                <h3 style="text-align:center"><b>Add Proof</b> </h3>
                <div class="divider-1"><span></span></div>
                </div>
        </div>
        <div class="row">
            <div class="col-6 offset-1 col-lg-4 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
 
                <div class="div-to-align">
               <form action="c_proof_database.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="ccode">Enter Your Code:</label>
                            <input type="text" class="form-control" name="ccode" required>
                        </div> 
                        <div class="form-group">
                            <label for="img1">Aadhar Card:</label>
                            <input type="file" class="file" name="img1" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="img2">PAN Card:</label>
                            <input type="file" class="file" name="img2" accept="image/*" required>
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
