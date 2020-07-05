<?php
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} 
$conn = new PDO("mysql:host=localhost;dbname=autocompletion;charset=UTF8", "root", "");
$sql = "SELECT id, name FROM wine WHERE name LIKE '%$search%'";
$result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <td class="link"><input class="form-control" id="closeSearch" type="button" value="x"></td>
    <?php
    foreach ($result as $data) {
        echo '<tr class="list"><td><a class="" href=index.php?id=' . $data['id'] . '>' . $data['name'] . ' </a></td></tr>';
    }
    ?>
</table>