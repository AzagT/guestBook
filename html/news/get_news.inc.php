<?php
$result = $news->getNews();
if(!is_array($result)){
    $errMsg = 'Произошла ошибка при выводе ленты.';
}else{
    echo '<p>Всего последних новостей: ' . count($result);
    foreach($result as $item){
        $id = $item['id'];
        $title = $item['title'];
        $cat = $item['category'];
        $desc = nl2br($item['description']);
        $dt = date('d-m-Y H:i:s', $item['datetime']);
        echo <<<LABEL
        <hr>
        <h3>$title</h3>
        <p>$desc<br>[$cat] @ $dt</p>
        <p align='right'>
            <a href='news.php?del=$id'>Удалить</a>
        </p>
LABEL;
}
}
?>