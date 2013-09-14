<?php
$title = $news->clearStr($_POST['title']);
$category = $news->clearInt($_POST['category']);
$description = $news->clearStr($_POST['description']);
$source = $news->clearStr($_POST['source']);

if(empty($title) or empty($description)){
    $errMsg = 'Заполните обязательные поля!';
}else{
    if(!$news->saveNews($title, $category, $description, $source)){
        $errMsg = 'Ошибка при записи.';
    }else{
        header('Location: news.php');
        exit;
    }
}
?>