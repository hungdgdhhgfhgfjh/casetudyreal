<h2 class="text-center text-primary" style="margin-top: 142px;">Purchased Product</h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:30%">Customer</th>
    <th style="width:10%">address</th> 
    <th style="width:10%">status</th> 
    <th style="width:10%">Price</th> 
    <th style="width:8%">Quantity</th> 
    <th style="width:22%" class="text-center">order Date</th> 
    <th style="width:10%">required date</th> 
   </tr> 
  </thead> 

  <tbody>
     <?php foreach($orders as $key =>$product): ?>
      <tr> 
   <td data-th="Product"> 
     <div class="col-sm-10"> 
      <h4 class="nomargin"></h4> 
      <p><?php echo $userLogin->fullName; ?></p> 
     </div> 
    </div> 
   </td>
   <td><?php echo $product->address; ?></td> 
   <td><?php echo $product->status; ?></td>
   <td data-th="Price"><?= number_format($product->totalPrice); ?></td> 
   <td data-th="Quantity">1
   </td> 
   <td data-th="Subtotal" class="text-center"><?= $product->order_date; ?></td> 
   <td class="actions" data-th="">
   <?=$product->required_date ?>
   </td> 
  </tr> 
  <?php endforeach; ?>
 <tfoot> 
     <tr class="visible-xs">
            <td class="text-center">
                <b><?= "Full name: " . $userLogin->fullName;?></b>
                <br>
                <br>
                <b><?= "Email : ". $userLogin->email;?></b>
                <br>
                <br>
                <b><?= "Number Phone : " . $userLogin->numberPhone; ?></b>
            </td>
     </tr>
   <tr class="visible-xs"> 
    <td class="text-center"><strong><?= "Total Money". number_format($totalPrice->totalPrice);?></strong>
    </td> 
   </tr> 
   <tr> 
    <td><a href="homeuser.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue shopping</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong><a class="btn btn-success" href="OrderDetail.php">Order Detail</a></strong>
    </td> 
    <td><a href="checkout.php" class="btn btn-success">thank you so much<i class="fas fa-hand-holding-heart"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
</div>