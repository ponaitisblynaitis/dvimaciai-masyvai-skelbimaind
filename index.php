<?php

$square = array(
    array(2, 9, 4),
    array(7, 5, 3),
    array(6, 1, 8)
);

$sum = 0;
$sumDiag1 = 0;

foreach ($square as $row) {
    foreach ($row as $num) {
        $sum += $num;
    }
}

$sumRow = 0;
$sumCol = 0;
$diag2 = 0;
$diag1 = 0;
$y = count($square) - 1;

for ($i = 0; $i < count($square); $i++) {

    $diag2 += $square[$i][$y--];
    $diag1 += $square[$i][$i];

    for ($a = 0; $a < count($square[$i]); $a++) {
        $sumRow += $square[$i][$a];
        $sumCol += $square[$a][$i];
    }

    $results[] = $sumRow;
    $results[] = $sumCol;

    $sumCol = 0;
    $sumRow = 0;
}

$results[] = $diag2;
$results[] = $diag1;

if (count(array_unique($results)) > 1) {
    $result = "not magical Like Gandalf";
}

if (count(array_unique($results)) < 2) {
    $result = "magical like Gandalf";
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2D Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">2D Arrays</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="./index.php">HW1</a>
                    <a class="nav-link" href="./skelbimai.php">HW2</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="content-md">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-info text-center mt-5 ms-5">
                    <div class="card-header bg-primary-subtle">
                        <span class="fw-bold">The square is:</span>
                    </div>
                    <div class="card-body bg-info-subtle">
                        <?php if (isset($result)) {?>
                            <?= $result ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>