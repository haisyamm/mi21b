<?php 
require_once "Database.php";
class User{
	private $db;

	function __construct(){
        $this->db = new Database();
    }

	function view() {
        // membuka koneksi ke database
        $mysqli = $this->db->connect();
        $sql = "SELECT * FROM user ORDER BY id_user ASC";
        $result = $mysqli->query($sql);
        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }
        // menutup koneksi database
        $mysqli->close();
        // nilai kembalian dalam bentuk array
        return $hasil;
    }

    function insert($username, $email, $level, $department) {
        $mysqli = $this->db->connect();

        $username          = $mysqli->real_escape_string($username);
        $email         = $mysqli->real_escape_string($nama);
        $level = $mysqli->real_escape_string($level);
        $department       = $mysqli->real_escape_string($department);

        // sql statement untuk insert data siswa
        $sql = "INSERT INTO user (username,email,level,department) 
                VALUES ('$username','$email','$level','$department')";

        $result = $mysqli->query($sql);
        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 2 */
            header("Location: ViewUser.php?alert=Success");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=Failed");
        }
        // menutup koneksi database
        $mysqli->close();
    }

    function get_user($id) {
        $mysqli = $this->db->connect();

        // sql statement untuk mengambil data siswa berdasarkan nis
        $sql = "SELECT * FROM user WHERE nis='$id'";

        $result = $mysqli->query($sql);
        $data   = $result->fetch_assoc();

        // menutup koneksi database
        $mysqli->close();
        
        // nilai kembalian dalam bentuk array
        return $data;
    }
    
    function update($username, $email, $level, $department, $id) {
        $mysqli = $this->db->connect();

        $username          = $mysqli->real_escape_string($username);
        $email         = $mysqli->real_escape_string($nama);
        $level = $mysqli->real_escape_string($level);
        $department       = $mysqli->real_escape_string($department);

        // sql statement untuk update data siswa
        $sql = "UPDATE user SET username        = '$username',
                                    email           = '$email',
                                    level           = '$level',
                                    department      = '$department'
                              WHERE id              = '$id'"; 

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 2 */
            header("Location: ViewUser.php?alert=Success");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=Failed");
        }

        // menutup koneksi database
        $mysqli->close();
    }
    
    /* Method untuk menghapus data pada tabel siswa */
    function delete($id) {
       $mysqli = $this->db->connect();


        // sql statement untuk delete data siswa
        $sql = "DELETE FROM user WHERE nis = '$id'";

        $result = $mysqli->query($sql);

        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 2 */
            header("Location: ViewUser.php?alert=Success");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=Failed");
        }

        // menutup koneksi database
        $mysqli->close();
    }
} 

?>