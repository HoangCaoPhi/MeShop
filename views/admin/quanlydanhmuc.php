<?php include_once 'header.php'?>
<!-- binh luan moi -->
<div class="col-md-10">
   <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
         </ol>
      </nav>
   </h6>
   <table class="table table-hover">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Tên danh mục</th>
            <th scope="col">Số sản phẩm</th>
            <th scope="col">Tác vụ</th>
         </tr>
      </thead>
      <tbody>
         <?php $i = 1; while($danhmuc = $listdanhmuc->fetch_assoc()){ ?>
         <tr>
            <th scope="row"><?php echo $i; $i++ ?></th>
            <td><?php echo $danhmuc['ten'] ?></td>
            <td><?php echo $this->model->countSanPham($danhmuc['id_danhmuc']) ?></td>
            <td>
               <a href="quanly.php?task=sdm&id=<?php echo $danhmuc['id_danhmuc'] ?>"class="btn btn-warning">Sửa</a>
               <a href="quanly.php?task=xdm&id=<?php echo $danhmuc['id_danhmuc'] ?>" class="btn btn-danger">Xóa</a>
            </td>
         </tr>
         <?php } ?>
      </tbody>
   </table>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>