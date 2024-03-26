<?php

class Controller
{

    public static function startSite()
    {
        $arr = News::getLast3News();
        include_once 'view/start.php';
    }

    public static function allCategory()
    {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function allNews()
    {
        $arr = News::getAllNews();
        include_once 'view/allnews.php';
    }

    public static function newsByCatID($id)
    {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/catnews.php';
    }

    public static function newsByID($id)
    {
        $n = News::getNewsByID($id);
        include_once 'view/readnews.php';
    }

    public static function error404()
    {
        include_once 'view/error404.php';
    }

    public static function insertComment($c, $id)
    {
        Comments::insertComment($c, $id);
        header('Location:news?id=' . $id . '#ctable');
    }

    public static function comments($newsid)
    {
        $arr = Comments::getCommentByNewsID($newsid);
        ViewComments::commentsByNews($arr);
    }

    public static function commentsCount($newsid)
    {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::commentsCount($arr);
    }

    public static function commentsCountWithAnchor($newsid)
    {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::commentsCountWithAnchor($arr);
    }

    public static function registerForm()
    {
        include_once('view/formRegister.php');
    }
    public static function registerUser()
    {
        $result = Register::registerUser();
        include_once('view/answerRegister.php');
    }
}  // End class