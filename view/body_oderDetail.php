<h2 class="text-center" style="margin-top: 142px;">Order Details</h2>
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:30%">Image Product</th>
                <th style="width:20%">Product Name</th>
                <th style="width:20%">Price Each</th>
                <th style="width:8%">Quantity</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($order_details as $key =>$products): ?>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-4"><img style="    width: 154px;"  src="<?php echo $products->image_product; ?>" alt="Sản phẩm 1">
                        </div>
                        </td>
                        <td>
                        <div class="col-sm-10">
                            <h4 class="nomargin"></h4>
                            <p style="margin-left: -23px;"><?php echo $products->product; ?></p>
                        </div>
                    </div>
                </td>
                <td data-th="Price"><?= number_format($products->price_each); ?></td>
                <td data-th="Quantity">1
                </td>
            </tr>
            <?php endforeach; ?>
        <tfoot>
            <tr>
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
                <td class="text-center"><strong><?php echo number_format($totalPrices->totalPrice) ; ?></strong>
                </td>
            </tr>
            <tr>
                <td><a href="homeuser.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                        shopping</a>
                </td>
                <td colspan="2" class="hidden-xs"> </td>
                <td class="hidden-xs text-center"><strong></strong>
            </tr>
        </tfoot>
    </table>
</div>