<?php
include "../backend/checkAuthentication.php";
include "../backend/bill.php";
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
               <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif"></div>

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

               </div>
               <div style="margin-left:400px; margin-top:10px "></div>       
            </td>
         </tr>
         <tr>
            <td valign="top" width="583" height="338"  bgcolor="#FFFFFF">
               <table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                     <td valign="top" height="338" width="42"></td>
                     <td valign="top" height="338" width="492">
<?php
if($flagShowObj && !empty($_SESSION['name'])){
    echo '
                             <table cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                     <td width="492" valign="top" height="106">

                                         <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                             <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                             <div style="margin-left:95px "><font class="title">Дополнения</font><br>
                                                 <table class="type-ord" style="font-size: 10px;">
                                                     <tr>
                                                         <td>
                                                             Тип путевки
                                                         </td>
                                                         <td colspan="3" style="text-align: center">
                                                             Cтрана
                                                         </td>
                                                     </tr>';
                                                     if ($_SESSION['type'] == 'cruise'){
                                                         echo'
                                                     <tr>
                                                         <td>
                                                             Круиз
                                                         </td>
                                                         <td>
                                                             <label for="italy">Италия(+200)<input type="radio" name="country" id="italy" value="italy"></label>
                                                         </td>
                                                         <td>
                                                             <label for="horv">Хорватия(+100)<input type="radio" name="country" id="horv" value="horv"></label>
                                                         </td>
                                                         <td>
                                                             <label for="shvec">Швеция(+300)<input type="radio" name="country" id="shvec" value="shvec"></label>
                                                         </td>
                                                     </tr>
                                                     ';
                                                     }
                                                         else if ($_SESSION['type']== 'safari'){
                                                             echo'
                                                     <tr>
                                                         <td>
                                                             Сафари
                                                         </td>
                                                         <td>
                                                             <label for="ken">Кения(+500)<input type="radio" name="country" id="ken" value="ken"></label>
                                                         </td>
                                                         <td>
                                                             <label for="mar">Марокко(+300)<input type="radio" name="country" id="mar" value="mar"></label>
                                                         </td>
                                                         <td>
                                                             <label for="uar">ЮАР(+800)<input type="radio" name="country" id="uar" value="uar"></label>
                                                         </td>
                                                     </tr>
                                                     ';}
                                                             else {
                                                                 echo '
                                                         
                                                     <tr>
                                                         <td>
                                                             Гастротур
                                                         </td>
                                                         <td>
                                                             <label for="dan">Дания(+50)<input type="radio" name="country" id="dan" value="dan"></label>
                                                         </td>
                                                         <td>
                                                             <label for="norv">Норвегия(+100)<input type="radio" name="country" id="norv" value="norv"></label>
                                                         </td>
                                                         <td>
                                                             <label for="france">Франция(+80)<input type="radio" name="country" id="france" value="france"></label>
                                                         </td>
                                                     </tr>';};
                                                             echo '
                                                 </table>
                                                 <br>

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
                                                                 Тип путевки
                                                             </td>
                                                             ';
                                                if ($_SESSION['type'] == 'cruise'){
                                                         echo'
                                                             <td>
                                                                 Круиз
                                                             </td>';
                                                }
                                                else if($_SESSION['type']== 'safari'){
                                                    echo '
                                           
                                                             <td>
                                                                 Сафари
                                                             </td>';
                                                }
                                                else {
                                                echo '
                                                
                                                             <td>
                                                                 Гастротур
                                                             </td>';}
                                                echo '
                                                         </tr>
                                                         <tr>
                                                             <td>
                                                                 Название
                                                             </td>';
                                                             if ($_SESSION['type'] == 'cruise'){
                                                         echo'
                                                             <td>
                                                                 Развлечени
                                                             </td>';}
                                                             else if($_SESSION['type'] == 'safari'){
                                                             echo '<td>
                                                                 Экскурсии
                                                             </td>';}
                                                        else {
                                                            echo ' 
                                                             <td>
                                                                 Места
                                                             </td>';}
                                                                echo '
                                                         </tr>
                                                         <tr>
                                                             <td>

                                                             </td>';
                                                             if ($_SESSION['type'] == 'cruise'){
                                                         echo'
                                                             <td>
                                                                 <label for="sauna"> Сауна(+50) <input type="checkbox" id="sauna" name="n1"></label>
                                                             </td>';}
                                                        else if($_SESSION['type'] == 'safari'){
                                                            echo '
                                                             <td>
                                                                 <label for="saun"> Кормление животных(+100) <input type="checkbox" name="n1"></label>
                                                             </td>';}
                                                        else {
                                                            echo ' 
                                                             <td>
                                                                 <label for="saun"> Местный рынок(+50) <input type="checkbox" name="n1"></label>
                                                             </td>';}
                                                                echo '
                                                         </tr>
                                                         <tr>
                                                             <td>

                                                             </td>';
                                                            if ($_SESSION['type'] == 'cruise'){
                                                                echo'
                                                             <td>
                                                                 <label for="saun"> Бассейн(+100) <input type="checkbox" name="n2"></label>
                                                             </td>';}
                                                            else if($_SESSION['type'] == 'safari'){
                                                            echo '
                                                             <td>
                                                                 <label for="saun"> Фотоохота(+50) <input type="checkbox" name="n2"></label>
                                                             </td>';}
                                                            else{
                                                                echo '

                                                             <td>
                                                                 <label for="saun"> Приготовление еды(+200) <input type="checkbox" name="n2"></label>
                                                             </td>';}
                                                        echo '
                                                         </tr>
                                                         <tr>
                                                             <td>

                                                             </td>
                                                             ';
if ($_SESSION['type'] == 'cruise'){
    echo'<td>
                                                                 <label for="saun"> Бар(+200) <input type="checkbox" name="n3"></label>
                                                             </td>';}
else if($_SESSION['type'] == 'safari'){
    echo '
                                                             <td>
                                                                 <label for="saun"> Разделывание туши(+200) <input type="checkbox" name="n3"></label>
                                                             </td>';}
else{ echo '
                                                             <td>
                                                                 <label for="saun"> Виноферма(+100) <input type="checkbox" name="n3"></label>
                                                             </td>';}
    echo '
                                                         </tr>
                                                     </table>



                                                 <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                                 <td valign="top" height="215" width="243">
                                                     <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                     <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                                     <div style="margin-left:22px; margin-top:13px; ">


                                                            ';
                                                        if (isset($_POST['type-of-order'])){
                                                        echo '
                                                            <input type="number" name="days" placeholder="Кол-во дней" required>
                                                            ';
                                                        }
                                                        echo '
                                                        


                                                         <br><br><br><br>

                                                     </div>
                                                     <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                                     <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w4.gif"></div>
                                                     <div style="margin-left:22px; margin-top:9px; ">
                                                        <form action="order.php" method="POST">
                                                         <input type="submit" value="Вернуться назад" ">
                                                         </form>
                                                         <form action="basket.php" method="POST">
                                                         <input type="submit" value="Далее">
                                                         </form>
                                                     </div>
                                                     </div>




                                                     </div>
                                                 </td>
                                             </tr>
                                         </table>
                                     </td>
                                 </tr>
                             </table>
                         ';
                        }
                        else {
                            if($flagShowObj){
                                echo '<p>Сделайте первоначальный выбор, Заказ</p>';
                            }
                            else {
                                echo '<p>Сначала нужно авторизоваться </p>
                                                            <form action="../index.php">
                                                            <input type="submit" value="Авторизация">
                                                            </form>';
                            }
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
