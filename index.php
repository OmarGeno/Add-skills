<?php

include "./logic.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Skills</title>
</head>

<body>
    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand text-secondary" href="index.php">Skills</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2 mr-4" type="search" placeholder="Search" aria-label="Search" name="search-value">
                <button class="btn btn-info" type="submit" name="search">Search</button>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="text-center w-75 m-auto ">
            <?php if (isset($_REQUEST['info'])) { ?>
                <?php if ($_REQUEST['info'] == 'added') { ?>
                    <div class="alert alert-success" role="alert">
                        New skill has been added
                    </div>
                <?php } ?>
                <?php if ($_REQUEST['info'] == 'updated') { ?>
                    <div class="alert alert-info" role="alert">
                        Skill has been added
                    </div>
                <?php } ?>
                <?php if ($_REQUEST['info'] == 'deleted') { ?>
                    <div class="alert alert-danger" role="alert">
                        Skill has been removed
                    </div>
                <?php } ?>
            <?php } ?>
        </div>

        <div class="standard-btn m-auto">
            <a href="create.php" class="links">+ Add a new skill</a>
        </div>


        <div class="row">
            <?php foreach ($query as $q) { ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center text-center">
                    <div class="card  skill mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-text"><?php echo substr($q['content'], 0, 50); ?></h3>
                            <p class="card-title"><?php echo $q['title']; ?></p>
                            <div class="d-flex ">
                                <a href="edit.php?id=<?php echo $q['id'] ?>" class="btn standard-btn edit m-1 col-lg-5">Edit <span class="text-danger"></span></a>
                                <form method='post'>
                                    <input type="text" hidden name="id" value="<?php echo $q['id'] ?>">
                                    <button class="btn del m-1 col-lg-8" name="delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>