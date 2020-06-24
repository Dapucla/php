<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Document</title>
</head>

<body>
   <header>
      <ul class="header__menu">
         <li><a href="#"><img src="images/logo.png" class="logo" width="50px" height="50px"></a></li>
         <li><a href="#">Главная</a></li>
         <li><a href="#">Информация</a></li>
         <li><a href="#">О нас</a></li>
         <li><a href="#">Контакты</a></li>

      </ul>
   </header>
<main>

<div class="holder">
  <?php 
         
       $columns = 4;

       function getTR($data) {
           global $rows;
           global $columns;
           $arr = explode('*', $data);
           $ret = '<tr>';
           for ($i=0; $i < $columns; $i++) {
               $ret .= '<td>'.$arr[$i].'<td>';  
               if ($columns == 0) {
               break;
               }
           }
           return $ret.'</tr>';
       }

       function outTable($structure) {

          if ($structure[$i] == ''){
            echo 'В таблице нет строк';
          } else {
           $strings = explode('#', $structure);
           $datas = '';  
           for ($i=0; $i < count($strings); $i++){
               $datas .= getTr($strings[$i]);
           }
           if ($datas) {
               echo '<table>'.$datas.'</table>';
           }
         }
       }

       $structure = array(
           'C1*C2*C3*C4#C5*C6*C7*C8', 
           'C7*C8*C9#C10*C11*C12',
           'C13*C14*C15#C16*C17*18',
           'C13*C14*C15#C16*C17*18',
           '',
       );
        
       for ($i=0; $i<count($structure); $i++) {
           if ($columns == 0) {
           echo 'Неправильное число колонок';
           break;
           }
           echo '<div>'.'<h2>Таблица №'.$i.'</h2></div>';
           outTable($structure[$i]);
       }       
?>

</div>

</main>

   <footer>
      <div class="footer__container">

      </div>
   </footer>
</body>

</html>
