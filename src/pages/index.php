<!DOCTYPE html>
<html lang="en">
    <?php include("extentions/head.php"); ?>
    <?php 

include("extentions/defines.php");
include("extentions/functions.php");
include("extentions/sql_functions.php");
    
    ?>
    <body>
        <header>
            <a href="/"><h1>sh.araz.dev</h1></a>
            <h2>just another url shortner - coming soon</h2>
        </header>
        <main>
            
            <?php $sufix = generate_sufix(5);?>
            <form action="process.php" method="post" enctype="multipart/form-data">
                <input type="text" name="sufixField" id="sufixField" value="<?php echo $sufix; ?>">
                <input type="text" name="ogUrlField" id="ogUrlField" value="sh.araz.dev">
                <input type="submit" value="Create" name="createUrl" id="createUrlBtn">
            </form>

            <?php include("extentions/logs.php"); ?>

            <?php 
                $userUrls = getUserUrls(0);
            ?>
            <?php  if (count($userUrls) > 0) : ?>
                <hr>
                    <?php foreach ($userUrls as $userUrl) : ?>
                        <a href="/<?php echo $userUrl->sufix ?>"><?php echo $userUrl->og_url ?></a>
                        <br>
                    <?php endforeach ?>
                <hr>
            <?php  endif ?>
        </main>
    <?php include("extentions/footer.php"); ?>
    </body>
</html>