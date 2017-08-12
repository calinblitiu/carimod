<?php
  require '../header_rest.php';
  $controllerRest = new ControllerRest();
  $controllerUser = new ControllerUser();
  $controllerFlag = new ControllerFlag();
  $controllerItem = new ControllerItem();

  $item_id = 0;
  if(!empty($_POST['item_id']) )
    $item_id = $_POST['item_id'];

  $user_id = 0;
  if(!empty($_POST['user_id']) )
    $user_id = $_POST['user_id'];

  $login_hash = 0;
  if(!empty($_POST['login_hash']) )
    $login_hash = $_POST['login_hash'];

  $review = "";
  if(!empty($_POST['review']) )
    $review = $_POST['review'];

  if( !empty($user_id) && !empty($login_hash) && !empty($review) ) {

      if(!$controllerUser->isUserIdExistAndHash($user_id, $login_hash)) {
          $arrayStatus = array( "status_code" => "3", "status_text" => "Invalid Access");
          $arrayJSON['status'] = $arrayStatus;
          echo json_encode($arrayJSON);
      }
      else {

          $itm = new Flag();
          $itm->review = $review;
          $itm->item_id = $item_id; 
          $itm->user_id = $user_id;
          $itm->created_at = time();
          $itm->updated_at = time();
          $controllerFlag->insertFlag($itm);

          $controllerItem->flagItem($item_id, 1);

          $arrayStatus = array( "status_code" => "-1", "status_text" => "Success.");
          $arrayJSON['status'] = $arrayStatus;
          echo json_encode($arrayJSON);
      }
  }
  else {
      $arrayStatus = array( "status_code" => "3", "status_text" => "Invalid Access");
      $arrayJSON['status'] = $arrayStatus;
      echo json_encode($arrayJSON);
  }
?>