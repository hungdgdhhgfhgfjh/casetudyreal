<h2 class="text-center" style="margin-top: 142px;">Cart Page</h2>
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:30%">Products Image</th>
                <th style="width:20%">Products Name</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Into Money</th>
                <th style="width:10%">delete</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($products as $key =>$product): ?>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-6"><img src="<?php echo $product->image_product; ?>"
                                alt="Sản phẩm 1" class="img-responsive">
                        </div>
                        </td>
                        <td data-th="Product">
                        <div class="col-sm-10">
                            <h4 class="nomargin"></h4>
                            <p style="margin-left: -17px;"><?php echo $product->product; ?></p>
                        </div>
                    </div>
                </td>
                <td data-th="Price"><?= number_format($product->price); ?></td>
                <td data-th="Quantity">1
                </td>
                <td data-th="Subtotal" class="text-center"><?= number_format($product->price); ?></td>
                <td class="actions" data-th="">
                    <a href="deleteCart.php?id=<?=$product->id;?>" type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        <tfoot>
            <tr >
                <td class="text-center">
                    <b><?= "Full name: " . $userLogin->fullName;?></b>
                    <br>
                    <br>
                    <b><?= "Email : ". $userLogin->email;?></b>
                    <br>
                    <br>
                    <b><?= "Number Phone : " . $userLogin->numberPhone; ?></b>
                </td>
                <td>
                    <form action="" method="post">
                        <b style="margin-left: 229px;">Order Date</b><input style="width: 185px;"
                            value="<?=date('Y/m/d');?>" type="text" name="order_date">
                        <strong class="alert-danger"><?= $erroorDer_date; ?></strong>
                        <b style="margin-left: 229px;">required Date</b><input style="width: 185px;" type="date"
                            name="required_date">
                        <strong class="alert-danger"><?= $erroorRequired_date; ?></strong>
                        <b style="margin-left: 229px;">address</b>
                        <input style="width: 185px;" type="text" name="address">
                        <strong class="alert-danger"><?= $erroaddress; ?></strong>
                </td>
            </tr>
            <tr class="visible-xs">
                <td class="text-center"><strong><?php echo number_format($totalPrices->totalPrice) ; ?></strong>
                </td>
            </tr>
            <tr>
                <td><a href="homeuser.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                        shopping</a>
                </td>
                <td colspan="2" class="hidden-xs"> </td>
                <td class="hidden-xs text-center"><strong></strong>
                </td>
                <td><button type="submit" onclick="return confirm('Please check the information carefully before buying') " class="btn btn-success btn-block">pay now<i
                            class="fa fa-angle-right"></i></button>
                </td>
                </form>
            </tr>
        </tfoot>
    </table>
</div>