<?php
class ViewNews
{

    public static function newsByCategory($arr)
    {
        foreach ($arr as $value) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['picture']) . '" width=150 /><br>';
            echo "<h2>" . $value['title'] . "</h2>";
            Controller::commentsCount($value['id']);
            echo "<a href='news?id=" . $value['id'] . "'>Edasi</a><br>";
        }
    }

    public static function allNews($arr)
    {
        foreach ($arr as $value) {
            echo "<li>" . $value['title'];
            Controller::commentsCount($value['id']);
            echo "<a href='news?id=" . $value['id'] . "'>Edasi</a></li><br>";
        }
    }

    public static function readNews($n)
    {
        echo "<h2>" . $n['title'] . "</h2>";
        Controller::commentsCountWithAnchor($n['id']);
        echo '<br><img src="data:image/jpeg;base64,' . base64_encode($n['picture']) . '" width=150/><br>';
        echo "<p>" . $n['text'] . "</p>";
    }

   
}