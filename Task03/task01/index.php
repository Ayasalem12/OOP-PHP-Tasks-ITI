<?php
    class Author{
        private string $name;
        private string $email;
        private string $gender;

        function __construct(string $name, string $email, string $gender) {
            $this->name = $name;
            $this->email = $email;
            $this->gender = $gender;
        } 
        function getName():string{
            return $this->name;
        }
        function getGender():string{
            return $this->gender;
        }
        function setEmail($email):void{
            $this->email = $email;
        }
        function getEmail():string{
            return $this->email;
        }
        function toString():string{
            return "Name: ".$this->getName().", Email: ".$this->getEmail().", Gender: ".$this->getGender();
        }
        
    }

    class Book {
        private array $authors;
        private string $name;
        private float $price;
        private int $qty;
        
        function __construct(string $name ,float $price, int $qty=0){
            $this->name = $name;
            $this->price = $price;
            $this->qty = $qty;
            $this->authors = [];
        }
        function getName():string{
            return $this->name;
        }
        function getAuthors():array{
            return $this->authors;
        }
        function addAuthors(Author $authors):void{
            // array_push($this->authors, $authors);
            $this->authors[] =$authors; 
        }
        function setPrice(float $price):void{
            $this->price = $price;
        }
        function getPrice():float{
            return $this->price;
        }
        function setQty(int $qty):void{
            $this->qty = $qty;
        }
        function getQty():int{
            return $this->qty;
        }
        function toString():string{
            $authorsDetails= array_map(fn($author) => $author->toString(),$this -> authors);
            $authorsList = implode("|",$authorsDetails);
            return "Book Name: ".$this->getName().", Auhtors:[ ".$authorsList."], Price: ".$this->getPrice().", Quantity: ".$this->getQty();
        }
    }
    $author1 = new Author("Aya", "aya@gmail.com", "F");
    $author2 = new Author("Ali", "ali@gmail.com", "M");
    $book = new Book("Book PHP Beginner", 100,20);
    $book->addAuthors($author1);
    $book->addAuthors($author2);

    echo $book->toString()
?>