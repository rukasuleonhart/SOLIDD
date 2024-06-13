/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Lucas Oliveira  
* DATA: 13/06/2024
*/ 
<?php
// srp_example.php

// Classe que representa um usuário
class User {
    private $id;
    private $name;
    private $email;

    public function __construct($id, $name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

// Classe responsável por salvar usuários no banco de dados
class UserRepository {
    public function save(User $user) {
        // Implementação para salvar usuário no banco de dados
        echo "Saving user {$user->getName()} to the database.\n";
    }
}

// Utilização
$user = new User(1, 'John Doe', 'john@example.com');
$userRepository = new UserRepository();
$userRepository->save($user);
?>

