    <div data-role="content" > 
        <?php debug($results["data"])  ?>
        <?php
        foreach ($results["data"] as $entry) {
            echo $entry["from"]["name"]." -- ";
            if ($entry["message"]){
                echo $entry["message"]."<br>";  
            }
            else{
                echo $entry["caption"]."<br>";  
            }
            echo "<img src='".$entry["picture"]."'><p>";
        }
        ?>

    </div>