<h1 style="margin-top: 114px;color: aqua;" >smart phone</h1>
<div style="margin-top: 108px;">
    <div style="display:flex;margin-top: -97px">
            <?php foreach ( $smartPhones as $number => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
                    <a href="productUser.php?id=<?php echo $product->id; ?>" class="mua">mua</a>
    
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    <h1 style="margin-top: 114px;color: aqua;" >lap top</h1>
<div style="margin-top: 108px;">
    <div style="display:flex;margin-top: -97px">
            <?php foreach ( $laptops as $number => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
                    <a href="productUser.php?id=<?php echo $product->id; ?>" class="mua" >mua</a>
    
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    <h1 style="margin-top: 114px;color: aqua;" >Accessorys</h1>
<div style="margin-top: 108px;">
    <div style="display:flex;margin-top: -97px">
            <?php foreach ( $accessorys as $number => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
                    <a href="productUser.php?id=<?php echo $product->id; ?>" class="mua">mua</a>
    
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    <h1 style="margin-top: 114px;color: aqua;" >PC</h1>
<div style="margin-top: 108px;">
    <div style="display:flex;margin-top: -97px">
            <?php foreach ( $PCs as $number => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
                    <a href="productUser.php?id=<?php echo $product->id; ?>" class="mua" >mua</a>
    
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    <h1 style="margin-top: 114px;color: aqua;" >IPad</h1>
<div style="margin-top: 108px;">
    <div style="display:flex;margin-top: -97px">
            <?php foreach ( $Ipads as $number => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
                    <a href="productUser.php?id=<?php echo $product->id; ?>" class="mua">mua</a>
    
              </div>
            <?php endforeach; ?>
        </div>
    </div>