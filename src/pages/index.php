<!DOCTYPE html>
<html lang="en">
    <?php include("extentions/head.php"); ?>
    <?php include("extentions/functions.php"); ?>
    <?php include("extentions/sql_functions.php"); ?>
    <body>
        <header>
            <h1>sh.araz.dev</h1>
            <h2>just another url shortner - coming soon</h2>
        </header>
        <main>
            <a href="/qRFzA">sh.araz.dev/qRFzA</a>
            <?php $sufix = generate_sufix(5);
                //insertUrl(generate_sufix(5), "https://www.araz.dev", 0, date('Y-m-d H:i:s'), true) 
            ?>
            <h3><?php echo $sufix; ?></h3>
            <form action="" method="post">
                <input type="text" name="newUrl" id="newUrl">
            </form>
        </main>
    <?php include("extentions/footer.php"); ?>
    </body>
</html>