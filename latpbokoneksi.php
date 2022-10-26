<?php
class DbConfig 
{
    //private adalah menyembunyikan/menjaga property dan method agar tidak bisa diakses di luar class
    private $_host = 'localhost';
    private $_username = 'user';
    private $_password = '';
    private $_database = 'dblatpbo';

    protected $connection;

    //public function untuk menyamnbungkan koneksi ke database (method)
    public function __construct()
    {
        //menyambung pada database
        if (!isset($this->connection)){
             
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            //jika tidak terhubung dengan database
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        //untuk kembali pada databasenya
        return $this->connection;
    }
}

$konektion=mysqli_connect("localhost","user","","dblatpbo");
function query($query){
global $konektion;
$result = mysqli_query ($konektion,$query);
$rows= [];
while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
return $rows;
}
?>
