<!DOCTYPE html>

<html>
    <head>
        <title>Portfolio</title>

        <style>
            h1{
                color:blue;
            }
            </style>
    </head>

 <body>
    <h1>Ini halaman portfolio</h1>

    <h3>Halo, <?php echo $nama ?></h3>

    <ol>
      <?php foreach ($nilai as $n) : ?>
        <li><?php echo $n ?></li>
        <?php endforeach ?>  
    </ol>
 </body>   
</html>