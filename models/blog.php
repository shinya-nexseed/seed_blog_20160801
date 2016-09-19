<?php
    // echo 'blog通過しました';
    // echo '<br>';

    class Blog {

        // プロパティ
        private $dbconnect = '';

        // コンストラクタ
        function __construct() {
            require('dbconnect.php');
            $this->dbconnect = $db;
        }

        function index() {
            // echo 'Blogモデルクラスのindex()呼び出し';
            // echo '<br>';
            // blogsテーブルの情報を全件取得 (DBとのやりとり)
            $sql = 'SELECT * FROM `blogs` WHERE `delete_flag` = 0';
            $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

            // 戻り値用変数
            $rtn = array();

            while($result = mysqli_fetch_assoc($results)){
              $rtn[] = $result;
            }

            return $rtn;
        }
    }
 ?>
