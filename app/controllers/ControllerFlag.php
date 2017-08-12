<?php
 
class ControllerFlag
{
 
    private $db;
    private $pdo;
    function __construct() 
    {
        
        // connecting to database
        $this->db = new DB_Connect();
        $this->pdo = $this->db->connect();
    }
 
    function __destruct() { }
 
    public function insertFlag($itm) 
    {
        $stmt = $this->pdo->prepare('INSERT INTO tbl_itemfinder_flags( 
                                        review, 
                                        user_id,
                                        item_id, 
                                        created_at, 
                                        updated_at ) 

                                    VALUES(
                                        :review, 
                                        :user_id, 
                                        :item_id,
                                        :created_at, 
                                        :updated_at)');

        $result = $stmt->execute(
                            array('review' => $itm->review,
                                    'user_id' => $itm->user_id,
                                    'item_id' => $itm->item_id,
                                    'created_at' => $itm->created_at,
                                    'updated_at' => $itm->updated_at) );
        
        return $result ? true : false;

    }
 
    public function getFlagsByItemId($item_id) 
    {
        $stmt = $this->pdo->prepare('SELECT * 
                                        FROM tbl_itemfinder_flags 
                                        WHERE is_deleted = 0 AND item_id = :item_id ORDER BY flag_id DESC');
        
        $result = $stmt->execute(
                            array('item_id' => $item_id) );

        $array = array();
        $ind = 0;
        foreach ($stmt as $row) 
        {
            $itm = new Flag();
            $itm->flag_id = $row['flag_id'];
            $itm->review = $row['review'];
            $itm->user_id = $row['user_id'];
            $itm->item_id = $row['item_id'];
            $itm->created_at = $row['created_at'];
            $itm->updated_at = $row['updated_at'];
            $itm->is_deleted = $row['is_deleted'];


            $array[$ind] = $itm;
            $ind++;
        } 
        
        return $array;
    }

    public function getFlagsByUserId($user_id) 
    {
        $stmt = $this->pdo->prepare('SELECT * 
                                        FROM tbl_itemfinder_flags 
                                        WHERE is_deleted = 0 AND user_id = :user_id ORDER BY flag_id DESC');
        
        $result = $stmt->execute(
                            array('user_id' => $user_id) );

        $array = array();
        $ind = 0;
        foreach ($stmt as $row) 
        {
            $itm = new Flag();
            $itm->flag_id = $row['flag_id'];
            $itm->review = $row['review'];
            $itm->user_id = $row['user_id'];
            $itm->item_id = $row['item_id'];
            $itm->created_at = $row['created_at'];
            $itm->updated_at = $row['updated_at'];
            $itm->is_deleted = $row['is_deleted'];


            $array[$ind] = $itm;
            $ind++;
        } 
        
        return $array;
    }

    public function deleteFlag($flag_id, $is_deleted) 
    {
        $stmt = $this->pdo->prepare('UPDATE tbl_itemfinder_flags 
                                        SET is_deleted = :is_deleted 
                                        WHERE flag_id = :flag_id ');
        
        $result = $stmt->execute(
                            array('flag_id' => $flag_id, 
                                    'is_deleted' => $is_deleted) );

        return $result ? true : false;
    }

}
 
?>