<?php
function news($array)
{
    for ($i = 0; $i < count($array); $i++) {
        ?>
        <li>
            <section class="news_section_info">
                <p class="news_date"><?php echo $array[$i][0]; ?></p>

                <p class="news_img"><img src="<?php echo $array[$i][1]; ?>"></p>

                <p class="news_name"><?php echo $array[$i][2]; ?></p>
            </section>
            <section class="news_section_reaction">
                <p class="news_reaction"><?php echo $array[$i][3]; ?></p>
            </section>
        </li>
    <?php
    }
}

function events($array)
{
    for ($i = 0; $i < count($array); $i++) {
        ?>
        <li>
            <p class="event_title"><?php echo $array[$i][0]; ?></p>
            <p class="event_date"><?php echo $array[$i][1]; ?></p>
            <p class="event_location"><?php echo $array[$i][2]; ?></p>
            <p class="event_description"><?php echo $array[$i][3]; ?></p>
        </li>
    <?php
    }
}

function projects($array)
{
    for ($i = 0; $i < count($array); $i++) {
        ?>
        <li>
            <p class="project_title"><?php echo $array[$i][0]; ?></p>
            <p class="project_date"><?php echo $array[$i][1]; ?></p>
            <p class="project_location"><?php echo $array[$i][2]; ?></p>
            <p class="project_description"><?php echo $array[$i][3]; ?></p>
        </li>
    <?php
    }
}

function projects_item($date, $img, $name, $reaction)
{
    return array($date, $img, $name, $reaction);
}

function events_item($title, $date, $location, $description)
{
    return array($title, $date, $location, $description);
}

function news_item($date, $img, $name, $reaction)
{
    return array($date, $img, $name, $reaction);
}

?>