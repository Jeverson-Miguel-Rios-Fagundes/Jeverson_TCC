<?php

/*
Atividade
					
Desenvolva uma aplicação para uma Biblioteca, seguindo as orientações abaixo, codificando as partes faltantes da aplicação.
1 - Crie a classe Livro:
Atributos:
titulo, autor, anoPublicacao, disponivel (indica se o livro está disponível para empréstimo);


Métodos:
__construct($titulo, $autor, $anoPublicacao): Construtor que inicializa os atributos do livro e define disponível como true.
emprestar(): Método que marca o livro como não disponível (false), caso esteja disponível.
devolver(): Método que marca o livro como disponível (true).
exibirDetalhes(): Método que retorna uma string com os detalhes do livro (título, autor, ano de publicação e status de disponibilidade).
exibirTitulo(): Método que retorna uma string contendo o título do livro.
2 - Codifique o método que está faltando na classe Biblioteca:
listarLivros(): Método que lista todos os livros da biblioteca exibindo os detalhes de cada um.




Código - Biblioteca.php

class Biblioteca {
   private $nome;
   private $livros;

   public function __construct($nome) {
       $this->nome = $nome;
       $this->livros = [];
   }

   public function adicionarLivro(Livro $livro) {
       $this->livros[] = $livro;
       echo "Livro '{$livro->exibirTitulo()}' adicionado à biblioteca.<br>";
   }

   public function listarLivros() {
        // CODIFICAR
   }

   public function emprestarLivro($titulo) {
       foreach ($this->livros as $livro) {
           if ($livro->exibirTitulo() == $titulo) {
               $livro->emprestar();
               return;
           }
       }
       echo "Livro '$titulo' não encontrado na biblioteca.<br>";
   }

   public function devolverLivro($titulo) {
       foreach ($this->livros as $livro) {
           if ($livro->exibirTitulo() == $titulo) {
               $livro->devolver();
               return;
           }
       }
       echo "Livro '$titulo' não encontrado na biblioteca.<br>";
   }
}




*/