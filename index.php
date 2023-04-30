<?php 
    include_once 'Header.php';
?>

     <section class="about-us">
            <div class="ehnii_bagana">
                <div class="deed">
                    <div id="gallery" class="gallery">
                        <img src="buuz.png" class="image">
                        <img src="mdkue.png" class="image">
                        <img src="gvzee.png" class="image">
                        <img src="naashaa.png" class="image">
                        <img src="buuz.png" class="image">
                    </div>
                </div>
                <div class="dood">
                    <div class="nemdeg">
                        <input class="searchBox" type="search" name="q" placeholder="Хайх"> 
                        <div class="shuudeg" style="float: right; margin-top: 15px;">
                        <label class="Shvvgch" for="Шүүгч"> Шүүлтүүр: </label>
                <select id="calorie" name="calorie">
                  <option value="volvo">Ихээс бага</option>
                  <option value="saab">Багаас их</option></div>

                </select></div>
                <div class="gollogch">
                    
                <p id="Test">  </p>
                </div>
                </div>
                    </div>
                </div>
            </div>
            <h1 style="margin-top: 25px; padding-bottom: 10px;">
                Хүнсний бүтээгдэхүүний төрөл
            </h1>
            <div class="baruun_bagana">
                
                <div class="baruun_suga">
                    
                <button class="button" onclick="doSomething(this.innerText)">ТАЛХ / ҮР ТАРИА</button>
                <p></p>
                <button class="button" onclick="doSomething(this.innerText)" >Мах / Загас</button>
                <p></p>
                <button class="button" onclick="doSomething(this.innerText)" >Жимс жимсгэнэ / Хүнсний ногоо</button>
                <p></p>
                <button class="button" onclick="doSomething(this.innerText)">Сүү / Сүүн бүтээгдэхүүн</button>
                <p></p>
                <button class="button" onclick="doSomething(this.innerText)">Өөх тос / Элсэн чихэр</button>
                <p></p>
                
        
                <script> 
                function doSomething(buttonText) {
                    console.log(buttonText);
  var html = `
      <?php
        $text = '` + buttonText + `';
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hack_bd";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        switch ($text) {
          case "ТАЛХ / ҮР ТАРИА":
            $turulID = 1;
            break;
          case "Мах / Загас":
            $turulID = 2;
            break;
          case "Жимс жимсгэнэ / Хүнсний ногоо":
            $turulID = 3;
            break;
          case "Сүү / Сүүн бүтээгдэхүүн":
            $turulID = 4;
            break;
          case "Өөх тос / Элсэн чихэр":
            $turulID = 5;
            break;
        }
        
        $sql = "SELECT * FROM huns";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo"<div id = sss class='yllagch'style='height: 200px; overflow: auto;'>";
            echo "<input type='text' id='username' name='username' value='" . $row["h_ner"] . "'>";
            echo "<input type='text' id='username' name='username' value='" . $row["h_cals"] . "'>";
            echo "<input type='text' id='username' name='username' value='" . $row["h_energy_ner"] . "'>";
            echo " <button>+</button>"; 
            echo "<br>";
            echo "</div";         }
        } else {
          echo "0 results";
        }
        $conn->close();
      ?>
    </div>`;
  document.getElementById("Test").innerHTML = html;
}
                </script>
                </div>
            </div>
        </section>
        


<?php 
    include_once 'Footer.php';
?>
