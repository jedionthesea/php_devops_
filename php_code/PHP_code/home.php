<?php require "functions.php" ?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/megyek.css">
    <title>Megyek reprezentalasa</title>
</head>
<body>
    <nav></nav>
    <header></header>
    <main>
        <h2>Válasszon egy elemet:</h2>
        <select id="elemek">
        <option value="">Válasszon...</option>
      <?php 
                $megyek = getMegyek();
            ?>

            <?php 
                foreach($megyek as $megye){
            ?>
                <a href=""><?php echo ucfirst($megye['megye']) ?></a>

            <?php 
                }
            ?>
    </select>
    
    <form>
        <label>Válasszon megyét</label>
        <intput type="text" name="megye" /><br />
        <select>
            <?php
                $megyek = mysqli_query(dbConnect(), "Select megye From megyek");
                while($megye = mysqli_fetch_array($megyek)){
            ?>
            <option value="<?php echo $megye['megye']?>"></option>
            <?php   }
            ?>
            </select>
    </form>
            
            
    </main>
    <footer></footer>
</body>
</html>