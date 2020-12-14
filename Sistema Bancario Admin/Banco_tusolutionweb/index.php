

<?php 
// Descargado de la pagina http://tusolutionweb.blogspot.pe/
//SIGUENOS
//Siguenos en twitter
//https://twitter.com/tusolutionweb
//Vista nuestra pagina web
//http://tusolutionweb.blogspot.com/
//Siguenos en facebook
//https://www.facebook.com/CodigofuenteGratis/

if(isset($_REQUEST['submitBtn'])){
    include '_inc/dbconn.php';
    $username=$_REQUEST['uname'];
    
    //salting of password
    $salt="@g26jQsG&nh*&#8v";
    $password= sha1($_REQUEST['pwd'].$salt);
  
    $sql="SELECT email,password FROM customer WHERE email='$username'";
    $result=mysql_query($sql) or die(mysql_error());
    $rws=  mysql_fetch_array($result);
    
    $user=$rws[0];
    $pwd=$rws[1];    
    
    if($user==$username){
        session_start();
        $_SESSION['customer_login']=1;
        $_SESSION['cust_id']=$username;
    header('location:customer_account_summary.php'); 
    }
   
else{
    header('location:index.php');  
}}
?>
<?php 
session_start();
        
if(isset($_SESSION['customer_login'])) 
    header('location:customer_account_summary.php');   
?>

<!DOCTYPE html>

<html>
    <head>
        
        <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>    
        
        
        <meta charset="UTF-8">
        <title>tusolutionweb</title>
        <link rel="stylesheet" href="newcss.css">
    </head>
    <body>
        <div class="wrapper">
            
        <div class="header">
            <img src="header.jpg" height="100%" width="100%"/>
            </div>
            <div class="navbar">
                
            <ul>
            <li><a href="index.php">Principal </a></li>
            <li><a href="features.php">Caracteristicas </a></li>
            <li id="last"><a href="contact.php">Contactanos</a></li>
            <li><a href="adminlogin.php">administrador</a></li>
            <li><a href="staff_login.php">Personal</a></li>
            <li><a href="http://tusolutionweb.blogspot.pe/">mas sistemas gratis</a></li>
            </ul>
            </div>
            
        <div class="user_login">
            <form action='' method='POST'>
        <table align="left">
            <tr><td><span class="caption">Inicio de sesión seguro</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Nombre de usuario:</td></tr>
            <tr><td><input type="text" name="uname" required></td> </tr>
            <tr><td>Password:</td></tr>
            <tr><td><input type="password" name="pwd" required></td></tr>
            
            <tr><td class="button1"><input type="submit" name="submitBtn" value="Log In" class="button"></td></tr>
        </table>
                </form>
            </div>
        
        <div class="image">
            <img src="home.jpg" height="100%" width="100%"/>
            <div class="text">
                
                <a href="safeonlinebanking.php"><h3>Haga clic para leer consejos sobre banca en línea seguros</h3></a>
    <a href="t&c.php"><h3>Términos y Condiciones</h3></a>
    <a href="faq.php"><h3>FAQ'S</h3></a>
    
    
  </div>
            </div>
            
            <div class="left_panel">
                <p>Nuestro portal de banca por Internet brinda servicios bancarios personales que le brindan control completo sobre todas sus demandas bancarias en línea.</p>
                <h3>Caracteristicas</h3>
                <ul>
                    <li>Registro para banca en línea</li>
                    <li>Agregar cuenta de beneficiario</li>
                    <li>Transferencia de fondos</li>
                    <li>Último registro de acceso</li>
                    <li>Mini declaración</li>
                    <li>Cajero automático y chequera</li>
                    <li>Aprobación del personal Característica</li>
                    <li>Estado de cuenta por fecha</li>
                    
                    
                </ul>
                </div>
            
            <div class="right_panel">
                
                    <h3>BANCA PERSONAL</h3>
                    <ul>
                        <li>La aplicación de Banca personal proporciona funciones para administrar y administrar cuentas no personales en línea.</li>
                        <li>El phishing es un intento fraudulento, generalmente realizado a través de correo electrónico, llamadas telefónicas, SMS, etc. buscando su información personal y confidencial.</li>
                        <li>Online Bank o cualquiera de sus representantes nunca le envía correos electrónicos / SMS o lo llama por teléfono para obtener su información personal, contraseña o una contraseña de SMS (alta seguridad) por única vez.</li>
                        <li>Cualquier correo electrónico o SMS o llamada telefónica es un intento de retirar dinero de manera fraudulenta de su cuenta a través de Internet Banking. Nunca responda a dicho correo electrónico / SMS o llamada telefónica. Informe inmediatamente sobre el informe si recibe dicho correo electrónico / SMS o llamada telefónica. Por favor, bloquee su acceso de usuario de inmediato.

</li>
                    </ul>
                </div>
                    <?php include 'footer.php' ?>
