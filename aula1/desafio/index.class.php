<?php

class Post {

    public int $like = 0;
    public array $comentarios = [];
    public string $autor;


    public function __construct($qtdLikes = 0) {
        echo 'Teste </br>';
        $this->likes = $qtdLikes;
    }

    public function aumentarLikes() {
        echo 'abc </br>';
        $this->likes++;
    }
}

$post1 = new Post(25);

$post2 = new Post();

$post1->aumentarLikes(25);

echo "Post 1".$post1->likes."</br>";
echo "Post 2".$post2->likes."</br>";
