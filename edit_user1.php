<?php
include "header.php";
include "../user/connection1.php";
$id=$_GET["id"];
$firstname="";
$lastname="";
$username="";
$password="";
$status="";
$role="";
$res= mysqli_query($link, "select * from user_registration1 where id=$id");
while($row=mysqli_fetch_array($res))
{
        $firstname=$row["firstname"];
        $lastname=$row["lastname"];
        $username=$row["username"];
        $password=$row["password"];
        $img=$row["img"];
       
}
?>

<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Edit user</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
            <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Speakers-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Name" name="firstname" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Title" name="lastname" />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Talk Title :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Talk Tilte" name="username" />
              </div>
            </div>
              <!-- comment -->
            <div class="control-group">
              <label class="control-label">Profile Link</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Profile Link" name="password" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Upload Image</label>
              <div class="controls">
                <input type="file"  class="span11" placeholder="Upload Image" name="file" />
               
              </div>
            </div>
              
            
            
            
            <div class="alert alert-danger" id="error" style="display:none">
                This Username Already Exist! Please Try Another.
            
            </div>
           
            
            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">Save</button>
            </div>
              
             <div class="alert alert-success" id="success" style="display:none"><!--Since by we dont need to display-->
                Record Inserted Successfully!
            
            </div>
              
            
              
          </form>
        </div>
          
                    
          
      </div>
      
     
    </div>
        </div>

    </div>
</div>


<?php
if(isset($_POST["submit1"]))
{
        $files= $_FILES['file'];
        $filename=$files['name'];
        $fileerror=$files['error'];
        $filetmp=$files['tmp_name'];
        $destinationfile='uplaod/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
    
    
    mysqli_query($link, "update user_registration1 set firstname='$_POST[firstname]', lastname='$_POST[lastname]', username='$_POST[username]', password='$_POST[password]', image='$destinationfile' where id=$id") or die(mysqli_error($link));
?>
    <script type="text/javascript">
            
            document.getElementById("success").style.display="block";
            setTimeout(function(){
                window.location="add_new_speakers.php";
            },3000);

        </script> 
        <?php
}

?>


<?php
include "footer.php";

?>
