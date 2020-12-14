<?php 
// Descargado de la pagina http://tusolutionweb.blogspot.pe/
//SIGUENOS
//Siguenos en twitter
//https://twitter.com/tusolutionweb
//Vista nuestra pagina web
//http://tusolutionweb.blogspot.com/
//Siguenos en facebook
//https://www.facebook.com/CodigofuenteGratis/

session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
include '_inc/dbconn.php';
$name=$_SESSION['name'];
$account_no=$_SESSION['login_id'];
$option=$_REQUEST['atm'];

$atm_status=$cheque_book_status="NOT REQUESTED";
if($option=='ATM')
    $atm_status="PENDING";
else
    $cheque_book_status="PENDING";
    

    $sql="SELECT * FROM cheque_book WHERE account_no='$account_no'";
    $result=mysql_query($sql) or die(mysql_error());
    $rws=mysql_fetch_array($result);
    $c_status=$rws[3];
    $c_id=$rws[2];
    
    $sql="SELECT * FROM atm WHERE account_no='$account_no'";
    $result=  mysql_query($sql) or die(mysql_error());
    $rws=  mysql_fetch_array($result);
    $a_status=$rws[3];
    $a_id=$rws[2];
    
    
    if(($option=='ATM' && (($a_status=='PENDING')||($a_status=='ISSUED'))) || ($option=='CHEQUE' && (($c_status=='PENDING')||($c_status=='ISSUED'))))           
    {
        echo '<script>alert("Ya has hecho una solicitud!");';
   echo 'window.location= "customer_issue_atm.php";</script>';
}
  
elseif($option=='ATM'){
$sql="insert into atm values('','$name','$account_no','$atm_status')";
mysql_query($sql) or die(mysql_error());

echo '<script>alert("Solicitud exitosa. Recibirá la confirmación de la sucursal muy pronto.");';
echo 'window.location= "customer_issue_atm.php";</script>';
}
else {
$sql="insert into cheque_book values('','$name','$account_no','$cheque_book_status')";
mysql_query($sql) or die(mysql_error());

echo '<script>alert("Solicitud exitosa. Recibirá la confirmación de la sucursal muy pronto.");';
echo 'window.location= "customer_issue_atm.php";</script>';
}

// Descargado de la pagina http://tusolutionweb.blogspot.pe/
//SIGUENOS
//Siguenos en twitter
//https://twitter.com/tusolutionweb
//Vista nuestra pagina web
//http://tusolutionweb.blogspot.com/
//Siguenos en facebook
//https://www.facebook.com/CodigofuenteGratis/

?>