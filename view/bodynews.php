<h1 style="margin-top: 114px;color: aqua;" >new product</h1>
<div style="margin-top: 108px;">
    <div style="display:flex;margin-top: -97px">
            <?php foreach ( $newProducts as $number => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
                    <p style="margin-top: 6px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
                    <a href="product.php?id=<?php echo $product->id; ?>" class="mua">Buy</a>
    
              </div>
            <?php endforeach; ?>
        </div>
    </div>
<h3 style="background: aqua;margin-left: -1003px;">smart phone</h3>
<div style="margin-top: 108px;">
    <div style="display:flex;margin-top: -97px">
            <?php foreach ( $smartPhones as $number => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
                    <p style="margin-top: 6px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
                    <a href="product.php?id=<?php echo $product->id; ?>" class="mua">Buy</a>
    
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    <h3 style="background: aqua;margin-left: -1107px;margin-top: 54px;">lap top</h3>
<div style="margin-top: 108px;">
    <div style="display:flex;margin-top: -97px">
            <?php foreach ( $laptops as $number => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
                    <p style="margin-top: 6px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
                    <a href="product.php?id=<?php echo $product->id; ?>" class="mua" >Buy</a>
              </div>
            <?php endforeach; ?>
        </div>
    </div>