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
    <th style="width:40%">Shop</th> 

    <th style="width:10%" class="text-center">Total revenue</th>
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
        <td data-th="Subtotal" class="text-center">200.000.000 VND</td> 
    </tr> 


    <tr> 
        <td data-th="Product"> 
            <div class="row"> 
            <div class="col-sm-10"> 
            <h4 class="nomargin">ATN HoChiMinh Shop</h4> 
            <p>360, Nguyen Van Linh street, Phu Nhuan , HCM city</p> 
            </div> 
            </div> 
        </td> 
        <td data-th="Subtotal" class="text-center">500.000.000 VND</td> 
    </tr> 

    <tr> 
        <td data-th="Product"> 
            <div class="row"> 
            <div class="col-sm-10"> 
            <h4 class="nomargin">ATN HaNoi Shop</h4> 
            <p>360B, 30/4 street, Hoang Kiem, Hanoi</p> 
            </div> 
            </div> 
        </td> 
        <td data-th="Subtotal" class="text-center">300.000.000 VND</td> 
    </tr> 

        <tr> 
        <td data-th="Product"> 
            <div class="row"> 
            <div class="col-sm-10"> 
            <h4 class="nomargin">ATN DaNang Shop</h4> 
            <p>360A, De Tham  street, Son Tra, DaNang</p> 
            </div> 
            </div> 
        </td> 
        <td data-th="Subtotal" class="text-center">100.000.000 VND</td> 
    </tr> 
  
  </tbody>
  <tfoot>  
   <tr> 
    <td><a href="?page=index" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a>
    </td> 
    <td class="hidden-xs text-center"><strong>Total 11.000.000.000 VND</strong>
    </td> 
    <td><a href="#" class="btn btn-success btn-block">Ok <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
</div>
<?php
    }
    ?>