<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Zvuko-обработка</title>
    <link rel="shortcut icon" href="images/icon/icon.ico" type="image/x-ico" />
    <link rel="stylesheet" href="styles/navigation.css" />
  </head>

<body>
<header>
      <div class="menu">
        <ul>
          <li><img src="images/icon/icon.ico" alt="Icon" /></li>
          <li><p>Zvuko-обработка</p></li>
          <li><a href="index.html">Главная</a></li>
          <li><a href="sound.html">Что такое звук</a></li>
          <li><a href="sound-process.html">Обработка звука</a></li>
          <li><a href="clock.html">Часы</a></li>
          <li><a href="db.php">База</a></li>
          <li><a href="chat.php">Сообщения</a></li>
          <li><a href="clientxml.html">XML</a></li>
          <li><a href="sources.html">Источники</a></li>
        </ul>
      </div>
    </header>

    <h2>Аудиоредакторы</h1>
    <br>

    <div class="lab4" >
    <table >
        <thead>
			<tr>
				<th>№</th>
				<th>Название</th>
				<th>Цена</th>
				<th>Платформа</th>
				<th>Описание</th>
			</tr>
		</thead>

        <tbody>
            <?php
            include 'conn.php';
			     $query = "select * from sound_programms";
            $result=pg_query($dbCon,$query);
            if (!$result) 
            {
              echo "query failed.";
            }?>
            
           <?php while($array=pg_fetch_row($result)): ?> 
              <tr>
                 <th><?php echo $array[0];?></th>
                 <td><?php echo $array[1];?></td>
                 <td><?php echo $array[2];?></td>
                 <td><?php echo $array[3];?></td>
                 <td><?php echo $array[4];?></td>
              </tr>
         <!--  while($row = $result->pg_fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["prog_id"] . "</td>
                    <td>" . $row["prog_name"] . "</td>
                    <td>" . $row["prog_price"] . "</td>
                    <td>" . $row["prog_platform"] . "</td>
                    <td>" . $row["prog_desc"] . "</td>
                </tr>";
            } -->
            <?php endwhile;?>
        </tbody>
    </table>
    </div>

    <h2>Аудиоэффекты</h1>
    <div class="lab4" >
    <table>
        <thead>
			<tr>
				<th>№</th>
				<th>Название</th>
				<th>Описание</th>
                <th>Тип</th>
                <th>Важность</th>
                <th>Программа</th>
			</tr>
		</thead>

        <tbody>
            <?php
            include 'conn.php';
			$query = "select * from sound_effects join sound_programms on prog_id=fk_prog_id";
			$result = pg_query($dbCon,$query);
            if (!$result) 
            {
              echo "query failed.";
            }?>

           <?php while($array=pg_fetch_row($result)): ?> 
              <tr>
                 <th><?php echo $array[0];?></th>
                 <td><?php echo $array[1];?></td>
                 <td><?php echo $array[2];?></td>
                 <td><?php echo $array[3];?></td>
                 <td><?php echo $array[4];?></td>
                 <td><?php echo $array[5];?></td>
              </tr>
              <?php endwhile;?>
         <!--  // read data of each row
			while($row = $result->pg_fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["effect_id"] . "</td>
                    <td>" . $row["effect_name"] . "</td>
                    <td>" . $row["effect_desc"] . "</td>
                    <td>" . $row["effect_type"] . "</td>
                    <td>" . $row["effect_importance"] . "</td>
                    <td>" . $row["prog_name"] . "</td>
                </tr>";
            }*/-->    
        </tbody>
    </table>
        </div>
    <br>
    <div id="foot">Site made by Andrew Pogoldin</div>
</body>
</html>
