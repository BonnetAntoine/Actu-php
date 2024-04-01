<?php
        $host = '127.0.0.1';
        $db = 'actualités';
        $user = 'root';
        $pass = '';
        $port = 3306;
        $charset = 'utf8mb4';
        require_once('index.php');
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

        class Contact
        {
            public $nom;
            public $email;
            public $message;

            public function __construct(array $values) {
                $this->nom = $values['nom'];
                $this->email = $values['email'];
                $this->message = $values['message'];
            }
        }

    ?>