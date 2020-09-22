<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');
        $students = array();
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $first->status='Freshman';
        $students['j123'] = $first;
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $second->status='Junior';
        $students['a456'] = $second;
        $third = new Student();
        $third->surname = "Zhong";
        $third->first_name = "YingQi";
        $third->add_email('home', '840545482@qq.com');
        $third->add_email('work', '840545482@qq.com');
        $third->add_grade(88);
        $third->add_grade(88);
        $third->add_grade(80);
        $third->status='Senior';
        $students['b789'] = $third;
        $fourth = new Student();
        $fourth->surname = "Sparrow";
        $fourth->first_name = "Annabelle";
        $fourth->add_email('home', '840545411@qq.com');
        $fourth->add_email('work', '356745482@qq.com');
        $fourth->add_grade(66);
        $fourth->add_grade(70);
        $fourth->add_grade(85);
        $fourth->status='Junior';
        $students['c567'] = $fourth;
        ksort($students); // one of the many sort functions
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
