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
include '_inc/dbconn.php';
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cambia la contraseña</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content'>
           <?php include 'admin_navbar.php'?>
            <div class='admin_change_pwd'>
            <form action="" method="POST">
                <table align="center">
                    <tr>
                        <td>Ingrese la contraseña anterior</td>
                        <td><input type="password" name="old_password" required=""/></td>
                    </tr>
                    <tr>
                        <td>Introduzca nueva contraseña</td>
                        <td><input type="password" name="new_password" required=""/></td>
                    </tr>
                    <tr>
                        <td>Ingrese de nuevo la contraseña</td>
                        <td><input type="password" name="again_password" required=""/></td>
                    </tr>
                    <tr>
                        
                        <td colspan="2" align='center' style='padding-top:20px'><input type="submit" name="change_password" value="Change Password" class="addstaff_button"/></td>
                    </tr>
                </table>
            </form>
                </div>
            </div>
            <?php
            if(isset($_REQUEST['change_password'])){
            $sql="SELECT * FROM admin WHERE id='1'";
            $result=mysql_query($sql);
            $rws=  mysql_fetch_array($result);
            $old=  mysql_real_escape_string($_REQUEST['old_password']);
            $new=  mysql_real_escape_string($_REQUEST['new_password']);
            $again=  mysql_real_escape_string($_REQUEST['again_password']);
            if($rws[9]==$old && $new==$again){
                $sql1="UPDATE admin SET pwd='$new' WHERE id='1'";
                mysql_query($sql1) or die(mysql_error());
                header('location:admin_hompage.php');
            }
            else{
                
                header('location:change_password.php');
            }
            }
            ?>
            
        </div>
        <?php include 'footer.php';?>