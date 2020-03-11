<?php 
    $valid=array();
    $error=array();
    if ($_POST) {
        $title=$_POST['title'];
        if (!$title)
        {
            $errors['title']="Името е задължително поле";
        }
        elseif(strlen('title')>150)
        {
            $errors['title']="Името трябва да бъде не повече от 150 символа";
        }
        else
        {
            $valid['title']=$title;
        }
        
        $name=$_POST['name'];
        if (!$name)
        {
            $errors['name']='Името е задължително поле';
        }
        elseif(strlen($name)>200)
        {
            $errors['name']="Името трябва да бъде не повече от 200 символа";

        }
        else
        {
            $valid['name']=$name;
        }

        $description=$_POST['description'];
        if (!$description)
        {
            $errors['description']='Описанието е задължително поле';
        }
        elseif(strlen($description)<10)
        {
            $errors['description']="Описанието трябва да бъде не по-малко от 10 символа";

        }
        else
        {
            $valid['description']=$description;
        }

        $group=$_POST['group'];
        if (!$description)
        {
            $errors['group']='Групата е задължително поле';
        }
        else
        {
            $valid['group']=$group;
        }

        $credits=$_POST['credits'];
        if (!$description)
        {
            $errors['credits']='Групата е задължително поле';
        }
        else
        {
            $valid['credits']=$credits;
        }
    }
        if(isset($_POST['submit']))
        {
            $courseTitle = $_POST['title'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $group=$_POST['group'];
            $credits = $_POST['credits'];
            $text = $courseTitle . ", " . $name . "," . $description . ", " . $group . ", " . $credits . "\n";
            $fp = fopen('data.txt', 'a+');
             if(fwrite($fp, $text)) 
             {
                     echo 'saved';
             }
            fclose ($fp);    
         }
?>
