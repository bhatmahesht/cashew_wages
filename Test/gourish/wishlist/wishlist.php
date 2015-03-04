<html>
    <head>
        <title>Kaladhar CashewWish List of <?php echo $_GET["user"]; ?></title>
    </head>
    <body>
        Wish List of
        <?php echo $_GET["user"]."<br/>";
        require_once("Includes/db.php");
        $db = new WishDb;
        $wisherID = $db->get_wisher_id_by_name($_GET["user"]);
        if (!$wisherID) {
            die("The person " .$_GET["user"]. " is not found. Please check the spelling and try again" );
        }
        ?>
        <table border="black">
            <tr><th>Item</th><th>Due Date</th></tr>
            <?php
            $result = $db->get_wishes_by_wisher_id($wisherID);
            while($row = mysql_fetch_array($result)) {
                echo "<tr><td>" . $row["description"]."</td>";
                echo "<td>".$row["due_date"]."</td></tr>\n";
            }
            ?>
        </table>
    </body>
</html>
