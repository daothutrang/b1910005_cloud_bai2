<?php
// Tạo một mảng để lưu trữ dữ liệu
$data = array(
    array('id' => 1, 'name' => 'Món 1', 'price' => 10000),
    array('id' => 2, 'name' => 'Món 2', 'price' => 20000),
    array('id' => 3, 'name' => 'Món 3', 'price' => 30000),
    array('id' => 4, 'name' => 'Món 4', 'price' => 40000),
    array('id' => 5, 'name' => 'Món 5', 'price' => 50000)
);

// Tạo bảng để lưu trữ dữ liệu
function createTable($data) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Name</th><th>Price</th></tr>';
    foreach ($data as $row) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['price'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

// Thêm dữ liệu vào mảng
function addData($data, $id, $name, $price) {
    $newRow = array('id' => $id, 'name' => $name, 'price' => $price);
    array_push($data, $newRow);
    return $data;
}

// Hiển thị dữ liệu từ mảng
function displayData($data) {
    echo '<h1>Danh sách món ăn</h1>';
    createTable($data);
}

// Cập nhật dữ liệu trong mảng
function updateData($data, $id, $name, $price) {
    foreach ($data as &$row) {
        if ($row['id'] == $id) {
            $row['name'] = $name;
            $row['price'] = $price;
        }
    }
    return $data;
}

// Xóa dữ liệu khỏi mảng
function deleteData($data, $id) {
    foreach ($data as $key => $row) {
        if ($row['id'] == $id) {
            unset($data[$key]);
        }
    }
    return $data;
}

// Sử dụng các hàm để thao tác với dữ liệu
displayData($data);

$data = addData($data, 6, 'Món 6', 60000);
displayData($data);

$data = updateData($data, 2, 'Món 2 update', 25000);
displayData($data);

$data = deleteData($data, 4);
displayData($data);

?>
