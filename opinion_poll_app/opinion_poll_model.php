<?php
    class Opinion_poll_model {
        private $db_handle;
        private $host = 'localhost';
        private $db = 'test';
        private $uid = 'root';
        private $pwd = '';

        public function __construct() {
            $this -> db_handle = mysqli_connect($this->host,$this->uid,$this->pwd);
            if(!$this->db_handle)
                die("Can't connect to MySQL: " . mysqli_error($this->db_handle));
            if(!mysqli_select_db($this->db_handle,$this->db))
                die("Can't select database: " . mysqli_error());
        }

        private function execute_query($sql_stmt) {
            $result = mysqli_query($this->db_handle,$sql_stmt);
            return !$result ? FALSE : TRUE;
        }

        public function select($sql_stmt) {
            $result = mysqli_query($this->db_handle,$sql_stmt);
            if(!$result)
                die("Can't access database: " . mysqli_error($this->db_handle));
            $rows = mysqli_num_rows($result);
            $data = array();
            if($rows) {
                while($row = mysqli_fetch_array($result)) {
                    $data = $row;
                }
            }
            return $data;
        }

        public function insert($sql_stmt) {
            return $this-> execute_query($sql_stmt);
        }

        public function __destruct() {
            mysqli_close($this->db_handle);
        }
    }

?>

