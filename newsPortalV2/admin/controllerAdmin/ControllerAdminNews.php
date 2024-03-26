<?php
class ControllerAdminNews
{
    // list News
    public static function newsList()
    {
        $arr = ModelAdminNews::getNewsList();
        include_once 'viewAdmin/newsList.php';
    }

    // add
    public static function newsAddForm()
    {
        $arr = ModelAdminCategory::getCategoryList();
        include_once('viewAdmin/newsAddForm.php');
    }

    public static function newsAddResult()
    {
        $test = ModelAdminNews::getNewsAdd();
        include_once('viewAdmin/newsAddForm.php');
    }

    // edit
    public static function newsEditForm($id)
    {
        $arr = ModelAdminCategory::getCategoryList();
        $detail = ModelAdminNews::getNewsDetail($id);
        include_once('viewAdmin/newsEditForm.php');
    }

    public static function newsEditResult($id)
    {
        $test = ModelAdminNews::getNewsEdit($id);
        include_once('viewAdmin/newsEditForm.php');
    }

    // delete
    public static function newsDeleteForm($id)
    {
        $arr = ModelAdminCategory::getCategoryList();
        $detail = ModelAdminNews::getNewsDetail($id);
        include_once('viewAdmin/newsDeleteForm.php');
    }

    public static function newsDeleteResult($id)
    {
        $test = ModelAdminNews::getNewsDelete($id);
        include_once('viewAdmin/newsDeleteForm.php');
    }
}  // class
