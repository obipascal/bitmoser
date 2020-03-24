<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found!</title>
</head>

<body>
    <div align="center" style="background: white;">
        <h1>Error! 404 Page Not Found On Server.</h1>
        <p> <button type="button" onclick="window.history.back();"> Return Back </button> -or- <a href="<?= base_url(); ?>">Return Back Home</a></p>
        <img src="<?= base_url(); ?>assets/img/errors/bs-404.jpeg" alt="Error 404 Page Not Found" srcset="<?= base_url(); ?>assets/img/errors/bs-404.jpeg">
    </div>

</body>

</html>