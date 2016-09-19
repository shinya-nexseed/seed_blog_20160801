<?php
    // echo 'routes.phpを通りました';
    // echo '<br>';

    // explode関数:第二引数の文字列を、第一引数の文字列で分割し、配列で返す関数。
    $params = explode('/', $_GET['url']);
    // echo '<pre>';
    // var_dump($params);
    // echo '</pre>';

    // パラメータの分解
    $resource = $params[0];
    $action = $params[1];
    // echo $resource;
    // echo '<br>';
    // echo $action;
    // echo '<br>';

    // コントローラの呼び出し
    require('controllers/' . $resource . '_controller.php');
?>
