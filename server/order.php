<?php 
    function getPizzaList() {
        global $conn;

        $sql = "SELECT * FROM `pizza`";

        $result = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_assoc($result);
        CheckQuary($result);
        if (mysqli_num_rows($result) == 0) {
            echo "No rows found, nothing to print so am exiting";
            exit;
        }
        while ($row = mysqli_fetch_assoc($result)) {
             
            echo "<tr><th scope='row'>{$row['id']}</th>
            <td>{$row['name']}</td>
            <td>{$row['category']}</td>
            <td>{$row['price']}</td>
            <td><div class='btn-group' role='group' aria-label='Basic example'>
            <button type='button' class='btn btn-secondary'>small</button>
            <button type='button' class='btn btn-secondary'>Midium</button>
            <button type='button' class='btn btn-secondary'>large</button>
            </div></td>
            </tr>";     
    
        }
    }
?>