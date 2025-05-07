<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/build/css/app.css">
  
    
</head>
<body class="body">
    <div class="dashboard__flex">
        <?php
            include_once __DIR__ .'/templates/dashboard-sidebar.php';  
        ?>

        <main class="dashboard__contenido">
            <?php 
                echo $contenido; 
            ?> 
        </main>
    </div>
    <script src="/build/js/main.min.js" defer></script>
</body>
</html>