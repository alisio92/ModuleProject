<?php include_once("./inc/php/name.inc.php"); ?>
<?php include_once("./php/data.php"); ?>
<?php include_once("./inc/php/layout_functions.php"); ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Groene Straat</title>
    <link href="css/layout.css" rel="stylesheet"/>
    <!--TODO Meta tags-->
</head>
<body>
<div id="wrapper">
    <div id="content">
        <section id="news" class="section_header">
            <h1 class="section_name"><?php echo $news; ?></h1>
            <ul>
                <?php echo news($newsArray); ?>
            </ul>
        </section>
        <section id="events" class="section_header">
            <h1 class="section_name"><?php echo $future_events; ?></h1>
            <ul>
                <?php echo events($eventsArray); ?>
            </ul>
            <?php
            if (count($eventsArray) >= 2) {
                ?>
                <p class="more_items"><a href=""><?php echo $more_events; ?></a></p>
            <?php
            }
            ?>
        </section>
        <section id="projects" class="section_header">
            <h1 class="section_name"><?php echo $future_events; ?></h1>
            <ul>
                <?php echo projects($projectsArray); ?>
            </ul>
            <?php
            if (count($projectsArray) >= 2) {
                ?>
                <p class="more_items"><a href=""><?php echo $more_projects; ?></a></p>
            <?php
            }
            ?>
        </section>
    </div>
</div>
</body>
</html>