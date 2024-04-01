<?php
        $host = '127.0.0.1';
        $db = 'actualités';
        $user = 'root';
        $pass = '';
        $port = 3306;
        $charset = 'utf8mb4';
        require_once('index.php');
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

        class Actualite{

            public $titre;
            public $corps;
            public $date_publication;
            public $date_revision;
            public $auteur;
            public $tags;
            public $sources;
            public $id;
            public $image_url;
            
            public function __construct(array $values) {

                $this->titre = $values['titre'];
                $this->corps = $values['corps'];
                $this->date_publication = $values['date_publiaction'];
                $this->date_revision = $values['date_revision'];
                $this->auteur = $values['auteur'];
                $this->tags = $values['tags'];
                $this->sources = $values['sources'];
                $this->id = $values['id'];
                $this->image_url = $values['image_url'];
            }

            public function titre() :string
            {
                return $this->titre;
            }

            public function corps() :string
            {
                return $this->corps;
            }

            public function date_publication() :string
            {
                return $this->date_publication;
            }

            public function date_revision() :string
            {
                return $this->date_revision;
            }

            public function auteur() :string
            {
                return $this->auteur;
            }
            public function tags() :string
            {
                return $this->tags;
            }

            public function sources() :string
            {
                return $this->sources;
            }

            public function id() :string
            {
                return $this->id;
            }

            public function image_url() :string
            {
                return $this->image_url;
            }
        }
?>