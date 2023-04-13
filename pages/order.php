<?php
include "../backend/checkAuthentication.php";
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
                <td valign="top" width="583" height="338"  bgcolor="#FFFFFF">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="top" height="338" width="42"></td>
                            <td valign="top" height="338" width="492">




                                <?php
                                if($flagShowObj){
                                    echo '
                                <form action="bill.php" method="POST">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td width="492" valign="top" height="106">

                                            <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                                <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                                <div style="margin-left:95px "><font class="title">Заказ</font><br>
                                                 <table class="type-ord">
                                                     <tr>
                                                         <td>
                                                             Тип
                                                         </td>
                                                         <td>
                                                             Цена, базовая
                                                         </td>
                                                         <td>
                                                             Описание
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td>
                                                             Круиз
                                                         </td>
                                                         <td>
                                                             2000
                                                         </td>
                                                         <td>
                                                             На большом теплоходе
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td>
                                                             Сафари
                                                         </td>
                                                         <td>
                                                             3000
                                                         </td>
                                                         <td>
                                                             В жаркой пустыне
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td>
                                                             Гастротур
                                                         </td>
                                                         <td>
                                                             1000
                                                         </td>
                                                         <td>
                                                             Этничекские рестораны
                                                         </td>
                                                     </tr>
                                                 </table>
<br>
                                                    <select name="type-of-order" id="">
                                                        <option value="cruise">Круиз</option>
                                                        <option value="safari">Сафари</option>
                                                        <option value="gastro">Гастротур</option>
                                                    </select>
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
                                                        <table class="type-ord">
                                                            <tr>
                                                                <td style="margin: 0">
                                                                    Вид питания
                                                                </td>
                                                                <td>
                                                                    Стоимость
                                                                </td>
                                                                <td>
                                                                    Время
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Завтрак
                                                                </td>
                                                                <td>
                                                                    10
                                                                </td>
                                                                <td>
                                                                    С 8-00 до 10-00
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Ужин
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td>
                                                                    С 19-00 до 22-00
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Пансион
                                                                </td>
                                                                <td>
                                                                    50
                                                                </td>
                                                                <td>
                                                                    Добавляется обед с 13-00 до 15-00
                                                                </td>
                                                            </tr>
                                                        </table>

                                                        <div class="radios">
                                                        <label for="radio1"> Завтрак <input type="radio" value="breakfast" id="radio1" name="radio" checked></label>
                                                            <label for="radio2"> Ужин <input type="radio" value="dinner" id="radio2" name="radio"></label>
                                                            <label for="radio3"> Пансион <input type="radio" value="lunch" id="radio3" name="radio"></label>
                                                        </div>



                                                    <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                                    <td valign="top" height="215" width="243">
                                                        <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                                        <div style="margin-left:22px; margin-top:13px; ">


                                                            <input type="text" name="name" placeholder="Имя" required>
                                                            <input type="number" name="phone" placeholder="Телефон" required>
                                                            <input type="email" name="email" placeholder="Почта" required>

                                                            
                                                            
<br><br><br><br>
                                                         
                                                        </div>
                                                        <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w4.gif"></div>
                                                        <div style="margin-left:22px; margin-top:9px; ">


                                                            <input type="submit" value="Далее">
                                                            
                                                                </div> 
                                                            </div>

                                


                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                </form>';
                                }
                                    else {
                                    echo '<p>Сначала нужно авторизоваться </p>
                                    <form action="../index.php">
                                    <input type="submit" value="Авторизация">
                                    </form>';
                                }
                                    ?>
                            </td>
                            <td valign="top" height="338" width="49"></td>
                        </tr>
                    </table>
                </td>
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
