<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Księga Szpontu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        img{
            height: 50px;
        }
    </style>
</head>
<body class="container mt-5">
    <header class="mb-4"><h1>Księga szpontu</h1></header>
    <?php
    // ukryty szpont
        require_once 'config.php';
        $sql = "SELECT id, name, surname, email, phone FROM goscie";
        $stmt = $pdo->query($sql);
        $goscie = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //ktoś tu kurcze szponcił i nie działa
        // if($_POST["phone"] != null){
        //     $numer = $_POST["phone"];
        //     echo $numer;
        // } else { 
        //     echo '<form action="index.php" method="POST">
        //     <table>
        //     <tr>
        //     <td><label for="name">Imię:</label></td><td><input type="text" name="name" required></td>
        //     </tr>
        //     <tr>
        //     <td><label for="nazwisko">Nazwisko:</label></td><td><input type="text" name="surname" required></td>
        //     </tr>
        //     <tr>
        //     <td><label for="email">E-mail:</label></td><td><input type="text" name="email" required></td>
        //     </tr>
        //     <tr>
        //     <td><label for="phone">Numer teflonu:</label></td><td><input type="text" name="phone" required></td>
        //     </tr>
        //     <tr>
        //     <td><input type="submit" name="submit" title="zakończ"></td>
        //     </tr>
        //     </table>    
        //     </form>';
        // }
    ?>
    <form action="add_entry.php" method="POST">

            <div class="mb-3"><label for="name" class="formlabel">Imię:</label>
            <input type="text" class="form-control" name="name" required></div>
            
            <div class="mb-3"><td><label for="nazwisko" class="formlabel">Nazwisko:</label>
            <input type="text" class="form-control" name="surname" required></div>
            
            <div class="mb-3"><label for="email" class="formlabel">E-mail:</label>
            <input type="text" class="form-control" name="email" required></div>
            
            <div class="mb-3"><label for="phone" class="formlabel">Numer teflonu:</label>
            <input type="text" class="form-control" name="phone" required></div>
            
            <div class="mb-3"><button type="submit" class="btn btn-primary">Dodaj wpis</button></div>
                
    </form>
    <br>
    <div class="mb-3">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <th>Id</th>
                <th>Imięęę</th>
                <th>Nazwisko</th>
                <th>E-mail</th>
                <th>Telefon</th>
            </thead>
            <tbody>
                <?php
                // Jakubowski "foricz"
                    foreach($goscie as $gosc) {
                        echo "<tr>";
                        echo "<td>".$gosc["id"]."</td>";
                        echo "<td>".$gosc["name"]."</td>";
                        echo "<td>".$gosc["surname"]."</td>";
                        echo "<td>".$gosc["email"]."</td>";
                        echo "<td>".$gosc["phone"]."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>