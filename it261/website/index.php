<?php
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
$url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="/it261/website/css/index.css">
</head>

<body>
    <header>
        <img src="/it261/website/images/logo.webp" alt="logo image">
        <nav>
            <ul>
                <li><a href="/it261/index.php">Home</a></li>
                <li><a href="/it261/website/about.php">About</a></li>
                <li><a href="/it261/website/daily.php">Daily</a></li>
                <li><a href="/it261/website/contact.php">Project</a></li>
                <li><a href="/it261/website/contact.php">Contact</a></li>
                <li><a href="/it261/website/contact.php">Gallery</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <img src="/it261/website/images/hero.webp" alt="hero image">
        <div class="content-wrapper">
            <div class="content">

                <h1>Welcome</h1>
                <p>This is a test website for IT261</p>

                <article>
                    <h2>PHP, aka the Hypertext Preprocessor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime adipisci, totam sit vitae minus facere quis iste minima consectetur, nam aliquam nulla modi, voluptas dolorum numquam fuga suscipit dolor quod.</p>
                </article>
            </div>
            <aside>
                <h2>Aside</h2>
                <p>Adipisicing elit. Maxime adipisci, totam sit vitae minus facere quis iste minima consectetur, nam aliquam nulla modi, voluptas dolorum numquam fuga suscipit dolor quod.</p>
            </aside>
        </div>
    </main>
    <footer>
        <ul>
            <li>Copyright &copy; 2024</li>
            <li>All rights reserved</li>
            <li><a href="/it261/">Web design by -_-</a></li>
            <li><a href="https://validator.w3.org/?doc=<?= $url ?>">HTML Validation</a></li>
            <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=<?= $url ?>">CSS Validation</a></li>
        </ul>
    </footer>
</body>

</html>
