<!DOCTYPE html>
<html>
    <head>
        <title> Aaron Martin's Blog </title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
        <p>
        <?php //PHP Comment
            class Person {
                public $isAlive = true;
                public $firstname;
                public $lastname;
                public $age;

                public function __construct ($firstname, $lastname, $age) {
                    $this->firstname = $firstname;
                    $this->lastname = $lastname;
                    $this->age = $age;
                }
                public function greet() {
                    return "Hello, my name is " . $this->firstname . " " .
                    $this->lastname . ". Nice to meet you! :-)";
                }
            }
            $me = new Person('Aaron', 'Martin', 24);

            echo $me->greet();
            ?>
        </p>
    </body>
</html>
