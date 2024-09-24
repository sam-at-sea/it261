<?php
$path = './weeks';
$weeks = array_slice(scandir($path), 2);
$files = array();
foreach ($weeks as $week) {
    $files[$week] = array_slice(scandir($path . '/' . $week), 2);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header>
        <h1>Sam's Portal</h1>
        <nav>
            <ul>
                <li><a href="/it261/website/">Switch</a></li>
                <li><a href="troubleshoot.php">Troubleshoot</a></li>
                <li><a href="calculator.php">Calulator</a></li>
                <li><a href="email.php">Email</a></li>
                <li><a href="database.php">Database</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="content">
            <h1>About me</h1>
            <p>Dolor sit amet, consectetur adipisicing elit. Maxime adipisci, totam sit vitae minus facere quis iste minima consectetur, nam aliquam nulla modi, voluptas dolorum numquam fuga suscipit dolor quod.</p>
            <img src="/it261/images/me.png" alt="my image">
        </div>
        <aside>
            <h2>Weekly Class Exercises</h2>
            <nav>
                <?php foreach ($weeks as $folder): ?>
                    <div>
                        <?= $folder; ?>
                        <ol>
                            <?php foreach ($files[$folder] as $file): ?>
                                <li><a href="/it261/weeks/<?= $folder . '/' . $file; ?>"><?= $file; ?></a></li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                <?php endforeach; ?>
            </nav>
        </aside>
    </main>
    <footer>
        <ul>
            <li>Copyright &copy; 2024</li>
            <li>All rights reserved</li>
            <li><a href="/it261/">Web design by -_-</a></li>
            <li><a href="https://validator.w3.org/?doc=<?= $url ?>">HTML Validation</a></li>
            <li><a href="https://jigsaw.w3.org/css-validator/?uri=<?= $url ?>">CSS Validation</a></li>
        </ul>
    </footer>
</body>

</html>
