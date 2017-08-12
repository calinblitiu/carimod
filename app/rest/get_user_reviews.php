<?php

    require '../header_rest.php';

    $controllerRest = new ControllerRest();
    $controllerUser = new ControllerUser();
    
    $user_id = 0;
    if(!empty($_GET['user_id']))
        $user_id = $_GET['user_id'];

    $api_key = "";
    if(!empty($_GET['api_key']))
        $api_key = $_GET['api_key'];

    header ("content-type: text/json");
    header("Content-Type: application/text; charset=ISO-8859-1");

    if(Constants::API_KEY == $api_key && $user_id > 0) {

        
        $user = $controllerUser->getUserByUserId($user_id);



        echo "{ \"user\" : {
                            \"user_id\" : \"$user->user_id\", 
                            \"username\" : \"$user->username\", 
                            \"full_name\" : \"$user->full_name\", 
                            \"photo_url\" : \"$user->photo_url\", 
                            \"thumb_url\" : \"$user->thumb_url\", 
                            \"last_logged\" : \"$user->last_logged\",
                            \"created_at\" : \"$user->created_at\",
                            \"updated_at\" : \"$user->updated_at\"

                            },";

        echo "\"user_reviews\" : [";

        $resultItems = $controllerRest->getResultReviewsByParentStoreId($user_id);
        $no_of_rows = $resultItems->rowCount();
        $ind = 0;
        $inner_ind = 0;
        
        $count = $resultItems->columnCount(); 
        foreach ($resultItems as $row) 
        {
            echo "{";
            $inner_ind = 0;

            foreach ($row as $columnName => $field) 
            {
                $val = trim(strip_tags($field));
                if($columnName == "review") {
                    $val = preg_replace('~[\r\n]+~', '', $val);
                    $val = htmlspecialchars(trim(strip_tags($val)));
                }

                if(!is_numeric($columnName)) {
                    echo "\"$columnName\" : \"$val\"";

                    if($inner_ind < $count - 1)
                      echo ",";

                    ++$inner_ind;
                }
            }

            echo "}";

            if($ind < $no_of_rows - 1)
              echo ",";

            ++$ind;
        }



        echo "]}";
    }
    else {

        $json = "{
                \"status\" : {
                                \"status_code\" : \"3\",
                                \"status_text\" : \"Invalid Access.\"
                            }
                }";

        echo $json;
    }

?>