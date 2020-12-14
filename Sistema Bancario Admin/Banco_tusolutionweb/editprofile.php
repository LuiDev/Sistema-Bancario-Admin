<!DOCTYPE html>
<?php
// Descargado de la pagina http://tusolutionweb.blogspot.pe/
//SIGUENOS
//Siguenos en twitter
//https://twitter.com/tusolutionweb
//Vista nuestra pagina web
//http://tusolutionweb.blogspot.com/
//Siguenos en facebook
//https://www.facebook.com/CodigofuenteGratis/

include '_inc/dbconn.php';
$sql="SELECT * FROM `admin` WHERE id=1";
$result=  mysql_query($sql) or die(mysql_error());
$rws=  mysql_fetch_array($result);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>TUSOLUTIONWEB</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">           
                
            </div>
            <div class="contentsection">
                
                <form action="alter.php" method="POST" enctype="multipart/form-data">
            <table align="center" border="21" class="table">
                <tr>
                    <td>NOMBRE</td>
                    <td><input type="text" name="name" value="<?php echo $rws[1];?>" required=""/></td>
                </tr>
                <tr>
                    <td>género</td>
                    <td>
                        M<input type="radio" name="gender" value="M" <?php if($rws[2]=="M") echo "checked";?>/>
                        F<input type="radio" name="gender" value="F" <?php if($rws[2]=="F") echo "checked";?>/>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input type="date" name="dob" value="<?php echo $rws[3];?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Candidato</td>
                    <td><input type="text" name="nominee" value="<?php echo $rws[4];?>" required=""/></td>
                </tr>
                <tr>
                    <td>relación</td>
                    <td>
                        <select name="status">
                            <option <?php if($rws[5]=="unmarried") echo "selected";?>>unmarried</option>
                            <option <?php if($rws[5]=="married") echo "selected";?>>married</option>
                            <option <?php if($rws[5]=="divorced") echo "selected";?>>divorced</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>designacion</td>
                    <td>
                        <input type="text" name="designation" value="<?php echo $rws[6];?>"/>
                    </td>
                </tr>
                <tr>
                    <td>departamento</td>
                    <td>
                        <select name="dept">
                            <option <?php if($rws[7]=="revenue") echo "selected";?>>revenue</option>
                            <option <?php if($rws[7]=="developer") echo "selected";?>>developer</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOJ
                    </td>
                    <td>
                        <input type="date" name="doj" value="<?php echo $rws[8];?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Sube tu foto: </td>
                    <td>
                        <input type="file" name="profile"/><br/>
                    </td>
                </tr>
                <tr>
                    <td>Dirección:</td>
                    <td><textarea name="address"><?php echo $rws[10];?></textarea></td>
                </tr>
                <tr>
                    <td>teléfono</td>
                    <td><input type="text" name="phone" value="<?php echo $rws[11];?>" required=""/></td>
                </tr>
                <tr>
                    <td>móvil</td>
                    <td><input type="text" name="mobile" value="<?php echo $rws[12];?>" required=""/></td>
                </tr>

                <tr>
                    <td>email id</td>
                    <td><input type="email" name="email" value="<?php echo $rws[13];?>" required=""/></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="pwd" value="<?php echo $rws[14];?>" required=""/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="alter" value="UPDATE DATA"/></td>
                </tr>
            </table>
        </form>
                
                
                
            </div>
            <div class="footer">
                
                
                
                
                
            </div>
        </div>
    </body>
</html>
