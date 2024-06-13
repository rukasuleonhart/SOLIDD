/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Lucas Oliveira 
* DATA: 13/06/2024
*/ 
<?php
// isp_example.php

// Interface para gerenciamento de documentos
interface DocumentManagement {
    public function store($document);
    public function retrieve($documentId);
}

// Interface para busca de documentos
interface SearchableDocument {
    public function search($query);
}

// Implementação de gerenciamento de documentos
class DocumentManager implements DocumentManagement, SearchableDocument {
    public function store($document) {
        echo "Storing document.\n";
    }

    public function retrieve($documentId) {
        echo "Retrieving document with ID {$documentId}.\n";
    }

    public function search($query) {
        echo "Searching for documents with query: {$query}.\n";
    }
}

// Utilização
$documentManager = new DocumentManager();
$documentManager->store("Document content");
$documentManager->retrieve(123);
$documentManager->search("keyword");
?>
