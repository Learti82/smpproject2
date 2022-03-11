<?php
    include "inc/header.php";
?>
    <!-- End of Header-->
    <!--Main Part-->
    <main class="container page">
       
        <article class="maininfo">
            <h2 class="title">SMP Projekti Pershkrimi</h2>
            <p>
                Sistemi për menaxhimin e projekteve mundëson një kompanie menaxhimin e punëve nga punëtorët e saj
                për projektet që ajo ka. Sistemi ofron menaxhimin e stafit: shtimin, modifikimin fshirjen,
                paraqitjen e stafit, menaxhimin e projekteve: shtimin, modifikimin fshirjen, paraqitjen e projekteve
                dhe menaxhimin e punëve ë bën stafi në kuadër të projekteve.
            </p>
        </article>


        <!-- Sidebar Part -->
        <?php
            include "inc/sidebar.php";
        ?>
        
        <section id="content" class="box">
            <h3 class="title">Stafi ne projekte</h4>
            <?php
                $dbConn=mysqli_connect('localhost','root','','smp');
                //mysqli_select_db($dbConn,'smp')
                if(!$dbConn){
                    die("Deshtoi lidhja me bazen e shenimeve".mysqli_error($dbConn));
                }
                $sql="INSERT INTO antaret(emri, mbiemri, telefoni, email, fjalekalimi) ";
                $sql.=" VALUES ('Drilon','Rexha','045898701','drilonr@gmail.com','123456')";
                $anetari=mysqli_query($dbConn,$sql);
                if($anetari){
                    echo "Anetari u regjistrua me sukses";
                }else{
                    die("Deshtoi shtimi i anetarit" . mysqli_error($dbConn));
                }
            ?>
            <table id="members">
                <tr>
                    <th>Emri dhe Mbiemri</th>
                    <th>Telefoni</th>
                    <th>Email</th>
                    <th>Detyrat</th>
                    <th>Pervoj pune</th>
                </tr>
                <tr>
                    <td>Berat Perçuku</td>
                    <td>044/000000</td>
                    <td>berat.percuku@probit-kos.com</td>
                    <td>Programer ne WEB</td>
                    <td>3 vite</td>
                </tr>
                <tr class="alt">
                    <td>Burim Avdiu</td>
                    <td>044/000000</td>
                    <td>burim.avdiu@probit-kos.com</td>
                    <td>Programer ne Java</td>
                    <td>3 vite</td>
                </tr>
                <tr>
                    <td>Armend Shabani</td>
                    <td>044/000000</td>
                    <td>armend.shabani@probit-kos.com</td>
                    <td>Programer ne WEB</td>
                    <td>3 vite</td>
                </tr>
                <tr class="alt">
                    <td>Berat Perçuku</td>
                    <td>044/000000</td>
                    <td>berat.percuku@probit-kos.com</td>
                    <td>Programer ne WEB</td>
                    <td>3 vite</td>
                </tr>
                <tr>
                    <td>Burim Avdiu</td>
                    <td>044/000000</td>
                    <td>burim.avdiu@probit-kos.com</td>
                    <td>Programer ne Java</td>
                    <td>3 vite</td>
                </tr>
                <tr class="alt">
                    <td>Armend Shabani</td>
                    <td>044/000000</td>
                    <td>armend.shabani@probit-kos.com</td>
                    <td>Programer ne WEB</td>
                    <td>3 vite</td>
                </tr>
                <tr>
                    <th>Emri dhe Mbiemri</th>
                    <th>Telefoni</th>
                    <th>Email</th>
                    <th>Detyrat</th>
                    <th>Pervoj pune</th>
                </tr>
            </table>

        </section>
    </main>
   <?php
    include "inc/footer.php"
   ?>