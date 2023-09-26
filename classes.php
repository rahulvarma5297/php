<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Objects</title>
</head>
<body>
    <?php
        class Book{
            var $title;
            var $author;
            var $pages;

            function __construct($title, $author, $pages){
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
            }

            function hasMorePages(){
                if($this->pages > 400){
                    return "Yes";
                }
                return "No";
            }
        }

        class Student extends Book{
            var $gpa;

            function __construct($gpa){
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if($this->gpa >= 3.5){
                    return "Yes";
                }
                return "No";
            }
        }
        

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        echo $book1->title . "<br>";
        echo $book1->author . "<br>";
        echo $book1->pages . "<br>";

        $book2 = new Book("Lord of the Rings", "Tolkien", 700);

        echo $book1 -> hasMorePages();
        echo $book2 -> hasMorePages();
    ?>
</body>
</html>