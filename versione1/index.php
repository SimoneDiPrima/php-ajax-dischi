<?php include 'includes/discs.php'?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <title>SPOTIFY</title>
    </head>
    <body>
        <div id="MainDisks">
            <div class="container py-5">
                <div class="Disks-list d-flex">
                    <?php if(isset($discs)) : ?>
                        <div class="container offset-1 col-10 text-white">
                            <ul class="d-flex flex-wrap justify-content-between text-center">
                                <?php foreach($discs as $disc) : ?>
                                    <li class="col-4 p-4">
                                    <img src="<?php echo $disc['poster']?>" alt="<?php $disc['title']?>" />
                                    <h2><?php echo $disc['title'] ?></h2>
                                    <h3><?php echo $disc['author'] ?></h3>
                                    <h4><?php echo $disc['year'] ?></h4>
                                    <h6><?php echo $disc['genre'] ?></h6>
                                </li>
                                    <? endforeach; ?>
                            </ul>
                        </div> 
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
    </html>
