<?php

    class Annonce{

        public function add_annonce()
        {
           

        
            if($_SERVER['REQUEST_METHOD']=='POST'){

                $title = $_POST['title'];    
                $description = $_POST['description'];          
             
                $contact = $_POST['contact'];

                if(
                    isset($title) && !empty($title) &&
                    isset($description) && !empty($description) && 
                    
                    isset($contact) && !empty($contact)
                )
                {
                    require_once 'app/database/models.php';
                    require_once 'app/utils/methods.php';
                    require_once 'app/config.php';

                    $image = file_upload($MEDIA_ROOT, 'myimage');

                    $model = new Model();

                    $table = 'annonce';
                    $field = 'title, description, image, contact';
                    $values = '?,?,?,?';
                    $data = array($title, $description, $image, $contact);

                    $model->add($table, $field, $values, $data);



                }

            }

        }

    }
?>