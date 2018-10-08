<?php
    class modelServices extends CI_Model{
        function  getAllServices(){
            $sql = $this->db->query("");
            return $sql->result();
        }
}
?>