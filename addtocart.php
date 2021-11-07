<link rel="stylesheet" href="csscart.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php
    if(!isset($_SESSION['us'])){
        echo '<script>alert("You must login to access Manage profit");</script>';
        echo '<meta http-equiv="Refresh" content="0;URL=?page=login">';
        }
    else
    {
?>


<div class="container" style="width: 900px;"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:20%">Shop</th> 
    <th style="width:20%">Address</th> 
    <th style="width:3%">Total quantity sale</th> 
    <th style="width:18%" class="text-center">Total</th>
   </tr> 
  </thead> 
  <tbody>
      <tr> 
        <td data-th="Product"> 
            <div class="row"> 
            <div class="col-sm-10"> 
            <h4 class="nomargin">ATN CanTho Shop</h4> 
            <p>360, 30/4 street, Ninh Kieu, Can Tho</p> 
            </div> 
            </div> 
        </td> 
        <td data-th="Price">200.000 VND</td> 
        <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
        </td> 
        <td data-th="Subtotal" class="text-center">200.000 VND</td> 
    
    </tr> 

  </tbody>
  <tfoot> 
   <tr class="visible-xs"> 
    <td class="text-center"><strong>Total 200.000 VND</strong>
    </td> 
   </tr> 
   <tr> 
    <td><a href="?page=index" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continute to buy</a>
    </td> 
    <td class="hidden-xs text-center"><strong>Total 500.000 VND</strong>
    </td> 
    <td><a href="#" class="btn btn-success btn-block">Payment <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
</div>
<?php
    }
    ?>