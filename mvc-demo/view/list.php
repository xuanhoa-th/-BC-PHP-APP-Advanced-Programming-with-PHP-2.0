<h2>Danh sách khách hàng</h2>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Email</th>
        <th>Adress</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $key => $customer): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $customer->name ?></td>
        <td><?php echo $customer->email ?></td>
        <td><?php echo $customer->address ?></td>
        <td><img width="50px" src="<?php  echo 'uploads/'.$customer->image ?>" alt=""></td>

        <td> <a href="./index.php?page=delete&id=<?php echo $customer->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <?php endforeach; ?>
    </tbody>
</table>
