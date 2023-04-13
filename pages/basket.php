<?php
include "../backend/checkAuthentication.php";
include "../backend/basket.php";
include "../backend/writeFile.php";
include "../backend/writeMail.php";
?>

<html>
    <head>
        <title>Работа</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body topmargin="0" bottommargin="0" rightmargin="0"  leftmargin="0"   background="../images/back_main.gif">
        <table cellpadding="0" cellspacing="0" border="0"  align="center" width="583" height="614">
            <tr>
                <td valign="top" width="583" height="208" background="../images/row1.gif">
                    <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif">    </div>
                    <div style="margin-left:50px; margin-top:69px ">
                        <a href="../index.php">Главная<img src="../images/m1.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="20" height="10">
                        <a href="order.php">Заказ<img src="../images/m2.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="basket.php">Корзина<img src="../images/m3.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="index-3.php">О компании<img src="../images/m4.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="index-4.php">Контакты<img src="../images/m5.gif" border="0" ></a>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <form action="basket.php">

                <td valign="top" width="583" height="338"  bgcolor="#FFFFFF">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="top" height="338" width="42"></td>
                            <td valign="top" height="338" width="492">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td width="492" valign="top" height="106">

                                            <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                                <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                                <div style="margin-left:95px "><font class="title">Корзина</font><br>

                                                    
                                                    
                                                    
                                                    
                                                </div> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="492" valign="top" height="232">
                                            <table cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td valign="top" height="232" width="248">
                                                        <div style="margin-left:6px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:6px; margin-top:7px; "><img src="../images/1_w2.gif"></div>

                                                    <?php
                                                    if($flagOrderDone){
                                                        echo '
                                                            <h4>Информация о заказе</h4>
                                                            <p>Имя: '. $_SESSION['name'] . '</p>
                                                            <p>Номер телефона: '. $_SESSION['phone'] .'</p>
                                                            <p>Почта: '. $_SESSION['email'] .'</p>
                                                            <p>Тип путешествия: '. $arrType[$_SESSION['type']]['name'] .'</p>
                                                            <p>Вид питания: '. $arrEat[$_SESSION['eat']]['name'] .'</p>
                                                            <p>Страна: '. $arrCountryNames[$_SESSION['country']].'</p>
                                                            <p>Кол-во дней: '. $_SESSION['Days'] . '</p>
                                                            <p>Дополнения: <br>

                                                            ';
                                                        $c = 1;
                                                        for ($i = 0; $i < count($_SESSION['Dops']); $i++){
                                                            if ( $_SESSION['Dops'][$i] != 'true') continue;
                                                            echo $c++. ') ' . $arrDops[$_SESSION['type']]['n'. $i + 1]['name'] . '<br>';
                                                        }
                                                        echo '</p>

                                                        <img src="../pic/'. $_SESSION['type'] . '.jpg' .'" alt=" ' . $_SESSION['type'] . ' " style ="width: 100%;">
                                                       ';
                                                    }
                                                    ?>

                                                        
             




                                                    <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                                    <td valign="top" height="215" width="243">
                                                        <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                                        <div style="margin-left:22px; margin-top:13px; ">


                                                    <?php
                                                    if($flagOrderDone){
                                                        echo '
                                                            <h4>Итоговая сумма: </h4>
                                                            <p>'. $_SESSION['cost'] .'</p>';
                                                        }
                                                    ?>
                                                            
<br><br><br><br>
                                                   
                                                        </div>
                                                        <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w4.gif"></div>
                                                        <div style="margin-left:22px; margin-top:9px; ">

<?php
if($flagOrderDone){
    echo '
                                                            <input type="submit" value="Записать в файл" name="file">
                                                            <input type="submit" value="Отправить письмо и записать в файл" name="mail">
                                                            '
    ;}
?>
                                                            
                                                                </div> 
                                                            </div>



                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top" height="338" width="49"></td>
                        </tr>
                    </table>
                </td>
                </form>
            </tr>
            <tr>
                <td valign="top" width="583" height="68" background="../images/row3.gif">
                    <div style="margin-left:51px; margin-top:31px ">
                        <a href="#"><img src="../images/p1.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="26" height="9">
                        <a href="#"><img src="../images/p2.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="30" height="9">
                        <a href="#"><img src="../images/p3.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="149" height="9">
                        <a href="index-5.php"><img src="../images/copyright.gif" border="0"></a>
                    </div>
                </td>
            </tr>

        </table>
    </body>
</html>
