<?php

class CModel { // Create a class and move it to a variable
    public function GetData(){
        $host = '127.0.0.1';
        $db = 'blog';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,   
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);

        $result = $pdo->query('SELECT * FROM news');
        $arrayResult = $result->fetchAll();

        //$mysqli = new mysqli('localhost', 'root', '','blog');
        // //connect to mysqli

        // if(mysqli_connect_errno()) {
        //     print_f('Cоединение не установлено');
        //     exit();
        // }
        // //if not connectted mysqli

        // $mysqli->set_charset('utf8');
        // //Cyrillic check

        // $query = "Select * From News";
        // //query and select from table

        // $result = $mysqli->query($query);
        // $arrayResult = $result->fetch_all(MYSQLI_ASSOC);//result


        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '22.03.2020',
        //     'AUTHOR' => 'VolDeMort',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egestas lorem elit libero.'

        //  );
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '21.10.2021',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egestas lorem elit libero.'
        //  );
         return $arrayResult;
    }
}