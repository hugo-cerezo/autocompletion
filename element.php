<?php
$conn = new PDO("mysql:host=localhost;dbname=autocompletion;charset=UTF8", "root", "");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM wine WHERE id = $id ";
    $result = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
    <h1><?php echo $result["name"]; ?></h1>
    <table class="col-12" style="width: 100% !important;">
        <thead>
            <tr>
                <th>Type</th>
                <th>Température</th>
                <th>Variétée</th>
                <th>Origine</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $result['wine_type']; ?></td>
                <td><?php echo $result['temp']; ?></td>
                <td><?php echo $result['grape_name']; ?></td>
                <td><?php echo $result['country_name']; ?></td>
            </tr>
        </tbody>
    </table>
<?php
} else if (isset($_GET['country'])) {
    $country = $_GET['country'];
    $sql = "SELECT * FROM wine WHERE country_name = '$country' ";
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

    <table class="col-12">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Température</th>
                <th>Variétée</th>
                <th>Origine</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $result) {
            ?>
                <tr>
                    <td>
                        <h3><a href="index.php?id=<?php echo $result['id']; ?>"><?php echo $result["name"]; ?></a></h3>
                    </td>
                    <td><?php echo $result['wine_type']; ?></td>
                    <td><?php echo $result['temp']; ?></td>
                    <td><?php echo $result['grape_name']; ?></td>
                    <td><?php echo $result['country_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php } else if (isset($_GET['country_all'])) {
    $sql = "SELECT * FROM wine ORDER BY country_name";
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

    <table class="col-12">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Température</th>
                <th>Variétée</th>
                <th>Origine</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $result) {
            ?>
                <tr>
                    <td>
                        <h3><a href="index.php?id=<?php echo $result['id']; ?>"><?php echo $result["name"]; ?></a></h3>
                    </td>
                    <td><?php echo $result['wine_type']; ?></td>
                    <td><?php echo $result['temp']; ?></td>
                    <td><?php echo $result['grape_name']; ?></td>
                    <td><?php echo $result['country_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php }
