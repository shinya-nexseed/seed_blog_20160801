<?php
    require('models/blog.php');

    // echo 'blogs_controller通過しました';
    // echo '<br>';

    // クラスをインスタンス化し$controllerオブジェクト作成
    // indexメソッドの呼び出し
    $controller = new BlogsController();

    // アクション名によって、呼び出すメソッドを切り替える
    // $action(グローバル変数)は、routes.phpで定義されたもの
    switch ($action) {
      case 'index':
        $controller->index();
        break;

      // その他メソッドの呼び出しcaseを書き足す

      default:
        # code...
        break;
    }


    class BlogsController {
        // プロパティ
        private $resource = '';
        private $action = '';

        // メソッド
        function __construct() {

        }

        // 記事一覧表示用メソッド
        // indexアクションメソッドを定義
        function index() {
            // echo 'BlogsControllerクラスのindex()呼び出し';
            // echo '<br>';
            // モデルを呼び出す
            $blog = new Blog();
            $viewOptions = $blog->index();
            // アクション名を設定する
            $this->action = 'index';

            include('views/layout/application.php');
        }

        // その他のアクションメソッドも定義
    }
?>
