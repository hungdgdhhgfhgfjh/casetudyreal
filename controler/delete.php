<?php
session_start();
include "db.php";
$id = $_GET['id'];
try {
    $sql2 = "SELECT * FROM book WHERE category_id='$id' ";
    $result = $connect->query($sql2);
    $result->setFetchMode(PDO::FETCH_OBJ);
    $row2    = $result->fetchAll();
    // var_dump($row2);
    // die();
    if ($row2) {
        throw new Exception();
    }
    $delete = "DELETE FROM category WHERE id=" . $id . "";
    $stmt   = $connect->query($delete);
    $_SESSION['success'] = 'Đã xóa thành công !';
} catch (Exception $e) {
    $error = 'Không thể xóa do dính khóa ngoại !';
    $_SESSION['error'] = $error;
}
header("location:.././index.php");
11:14
file index.php
?>
<?php
session_start();
include "./Category/db.php";
// echo '<pre>';
// print_r($connect);
// echo '</pre>';
//lấy tất cả dữ liệu từ bảng
$sql = "SELECT * FROM category";
//thực hiện truy vấn
$stmt = $connect->query($sql);
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$rows   = $stmt->fetchAll();
// lấy 1 kết quả duy nhất từ thể loại dựa vào id_danh_muc
$sql    = "SELECT * FROM category";
$stmt   = $connect->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$row    = $stmt->fetchAll();
//  echo "<pre>";
//  print_r($row);
//  echo "</pre>";
?>
<?php include "Layouts/header.php" ?>
<?php
if (isset($_SESSION['error'])) : ?>
    <div class="alert alert-danger" >
        <?= $_SESSION['error'];
        unset($_SESSION['error']); ?>
    </div>
<?php endif; ?>
<?php if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success" >
        <?= $_SESSION['success'];
        unset($_SESSION['success']); ?>
    </div>
<?php endif; ?>
<table class="table">
    <thead class="table-light">
        <tr class="table-danger">
            <th>Code</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($row as $key => $category) : ?>
            <tr>
                <td>
                    <?php echo $category->id; ?>
                </td>
                <td>
                    <?php echo $category->name; ?>
                </td>
                <td>
                    <a class="btn btn-primary" href="./Category/editcategory.php?id=<?= $category->id; ?>">Update</a><a class="btn btn-danger" href="./Category/delete.php?id=<?= $category->id; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>