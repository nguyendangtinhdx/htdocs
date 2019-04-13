<html>
  <head>
    <title>Class and Object Methods</title>
  </head>
  <body>
    <p>
      <?php
        class Person {
          public $isAlive = true;
          
          function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "I'm dancing!";
          }
        }
        
        $me = new Person("Shane");
        if (is_a($me, "Person")) {
          echo "I'm a person, ";
        }
        if (property_exists($me, "name")) {
          echo "I have a name, ";
        }
        if (method_exists($me, "dance")) {
          echo "and I know how to dance!";
        }
      ?>

      <?php
      class Person{
          public static function say(){
              echo "Here are my thoughts!";}
          }
         class Blogger extends Person    // mở rộng class Person
         {
            const cats = 50;
        }
       echo Blogger::say();
       echo Blogger::cats();
      ?>
    </p>
  </body>
</html>