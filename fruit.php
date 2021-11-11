<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dinhdang1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="responsive.css">
    <title>ATNshop</title>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    
  </head>
    <body>
    <br>   
                <script language="javascript">
                    function deleteConfirm()
                    {
                        if (confirm("Are you sure to delete"))
                            {
                                return true;
                            }
                        else{
                                return false;
                            }
                    }
                </script>
        <?php
            if (!isset($_SESSION['admin'])or $_SESSION['admin']==0)
            {
            echo "<script>alert('You are not an adminstrator')</script>";
            echo '<meta http-equiv="refresh" content="0;URL=?page=login"/>';
            }
            else
            {
            ?>

<form name="frm" method="post" action="">
        <h1 align="center">Manage Customer</h1>
        <p>
        <img src="image/add.png" alt="Add new" width="16" height="16" border="0" /> 
        <a href="?page=register"> Add</a>
        </p>
        <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Fullname</strong></th>
                    <th><strong>Adress</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Phone</strong></th>
                    <th><strong>Username</strong></th>
                  
                </tr>
             </thead>
             <tbody>
      
            <?php
                $No = 1;
                $result = pg_query($conn, "SELECT * FROM public.account");
                while($row = pg_fetch_array($result,NULL ,PGSQL_ASSOC))
                {
                ?>  
			<tr>
              <td class="cotCheckBox"><?php echo $No; ?></td>
              <td><?php echo $row["cusname"]; ?></td>
              <td><?php echo $row["address"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["telephone"]; ?></td>
              <td><?php echo $row["username"]; ?></td>
            </tr>
            <?php
                $No++;
                }
            ?>
        </tbody>
    </table>  
               
                <div class="col-md-12"></div>
       
    </form>

    <?php
    }
    ?>

    </body>
</html>