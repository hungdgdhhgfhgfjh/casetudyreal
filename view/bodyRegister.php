<strong class="strong1">Register</strong>
<div style="height: 503px;background: white;width: 385px;margin-left: 494px;border-radius:10px ;margin-top: 45px;border: 10px black;">
    <div class="container">
        <form action="" method="POST">
            <?php
if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger">
                <?= $_SESSION['error'];
        unset($_SESSION['error']); ?>
            </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success">
                <?= $_SESSION['success'];
        unset($_SESSION['success']); ?>
            </div>
            <?php endif; ?>
            <strong class="alert-success"><?= $news; ?></strong>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
                <strong class="alert-danger" style="color:red"><?=$erroemail;?></strong>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password">
                <strong class="alert-danger" style="color:red"><?=$erropassword;?></strong>
                <div class="form-group">
                    <label for="pwd">number Phone:</label>
                    <input type="text" class="form-control" placeholder="Enter numberPhone" id="pwd" name="numberPhone">
                    <strong class="alert-danger" style="color:red"><?=$erronumberPhone;?></strong>
                </div>
                <div class="form-group">
                    <label for="pwd">full name</label>
                    <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="fullName">
                    <strong class="alert-danger" style="color:red"><?=$erroname;?></strong>
                </div>
                  <a href="login.php">Login</a>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div>
        <h1 style="width: 400px;display: block;margin-left: -446px;margin-top: -521px;color: yellowgreen;image-rendering: auto;">WELL COME TO SHOP</h1>
        <h1 style="margin-left: -339px;margin-top: -5px;color: darkorange;">Hưng</h1>
        <h1 style="width: 15px;margin-left: -226px;margin-top: -55px;color: darkorange;">Randy</h1>
    </div>