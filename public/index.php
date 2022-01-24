<!DOCTYPE html>
<html lang="en">
    <?php include("extentions/head.php"); ?>
    <?php 

    include("extentions/defines.php");
    include("extentions/functions.php"); 
    include("extentions/sql_functions.php"); 
    if (isset($_POST['createUrl'])) {

        $sufix = $_POST['sufixField'];
        $og_url = $_POST['ogUrlField'];
    
        $result = getUrl($sufix);
        if (isset($result->sufix)) {
            array_push($logs, "Sufix already in database!");
        }
        if (valid_url($og_url) == false) {
            array_push($logs, "URL is not valid!");
        }
        // Finally, register entry if there are no errors in the form
        if (count($logs) == 0) {
            insertUrl($sufix, $og_url, 0, date('Y-m-d H:i:s'), true);
            array_push($logs, "short url has been added");
        }else{
            
        }
    }
    ?>
    <body>
        <header>
            <a href="/"><h1>sh.araz.dev</h1></a>
            <h2>just another url shortner - coming soon</h2>
        </header>
        <main>
            
            <?php $sufix = generate_sufix(5);?>
            <form action="/" method="post" enctype="multipart/form-data">
                <input type="text" name="sufixField" id="sufixField" value="<?php echo $sufix; ?>">
                <input type="text" name="ogUrlField" id="ogUrlField" value="sh.araz.dev">
                <input type="submit" value='Create' name='createUrl'>
            </form>

            <?php include("extentions/logs.php"); ?>
            <hr>
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
    <?php $_POST = array(); ?>
    </body>
</html>