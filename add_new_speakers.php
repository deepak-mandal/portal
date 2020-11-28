<?php
include "header.php";
include "../user/connection1.php";
?>

<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Add New Speaker</a></div>
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
      
      <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>User name</th>
                  <th>Password</th>
                  <th>img</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  $res= mysqli_query($link, "select * from user_registration1");
                  while($row= mysqli_fetch_array($res))
                  {
                      ?>
                  
                  <tr>
                  <td><?php echo $row["firstname"]; ?></td>
                  <td><?php echo $row["lastname"]; ?></td>
                  <td><?php echo $row["username"]; ?></td>
                  <td><?php echo $row["password"]; ?></td>        
                  <td> <img src="<?php echo $row["image"]; ?>" height="100px" width="100px"></td>
                  
                  
                  <td><a href="edit_user1.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                  <td><a href="delete_user1.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                  
                </tr>
                  
                  <?php
                  
                  
                  }
                  
                  ?>
                  
                  
                
                
                
              </tbody>
            </table>
          </div>
    </div>
            
            
            
        </div>

    </div>
</div>


<?php
if (isset($_POST["submit1"]))
    //echo "testing OK";
{
    
    $count=0;
    $res= mysqli_query($link, "select * from user_registration1 where username='$_POST[username]'");
    $count= mysqli_num_rows($res);
    
    if ($count>0)
    {
    ?>
        <script type="text/javascript">
            document.getElementById("success").style.display="none";
            document.getElementById("error").style.display="block";
    
        </script>         
        <?php
    }
    else{  
        
        $files= $_FILES['file'];
        $filename=$files['name'];
        $fileerror=$files['error'];
        $filetmp=$files['tmp_name'];
        $destinationfile='uplaod/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
        
        
        mysqli_query($link, "insert into user_registration1 values(NULL, '$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[password]', '$destinationfile')");

   
        
        ?>
        <script type="text/javascript">
            document.getElementById("error").style.display="none";
            document.getElementById("success").style.display="block";
            setTimeout(function(){
                window.location.href=window.location.href;
            },3000);

        </script>
        
        
        <?php
        
    }    
}

        ?>

<?php
include "footer.php";

?>	
