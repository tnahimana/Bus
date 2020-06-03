<?php
session_start();
$conn=mysqli_connect("localhost", "root", "","level") or die("cant connect");
$user = $_POST['user'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $sql = "SELECT * FROM login WHERE user='$user' AND password='$password'";

    $results = mysqli_query($conn, $sql);
   
   if(mysqli_num_rows($results)==1){

    //jika berhasil akan bernilai 1
        $qry = mysqli_fetch_array($results);
        $_SESSION['user'] = $qry['user'];
        $_SESSION['nama'] = $qry['nama'];
        $_SESSION['level'] = $qry['level'];
        if($qry['level']=="Admin"){
            header("location:home_admin.php");
        }else if($qry['level']=="user"){
            header("location:home_user.php");
        }
    }else{
        ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
            document.location='index.html';
        </script>
        <?php
    }
}else if($op=="out"){
    unset($_SESSION['user']);
    unset($_SESSION['level']);
    header("location:index.html");
}
?>