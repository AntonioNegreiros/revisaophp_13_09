<?php
$titulo = "Notícias do meu site";
include "header.php";
?>
<main>
    <h1>Notícias</h1>
    <div class="container">
        <?php
        $maximo = 3;
        $i = 0;
        $noticias = [
            "Notícia 1",
            "Notícia 2",
            "Notícia 3",
            "Notícia 4",
            "Notícia 5",
        ];
        /// while($i < $maximo){
            while($i < count($noticias)){
            // echo $i;
            echo '<h1>';
            echo $noticias[$i];
            echo '<h1>';
            $i++;
        }

        include __DIR__ . "/config/db.php";
        // AGORA EU CONHEço PDO \o/
        $sql = "SELECT * FROM noticias";
        $resultado = $pdo->query($sql);
        // echo '<pre>';
        while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            $id = $row['id_not'];
            echo '<div>';
            echo '<a href="noticia.php?idnot='.$row['id_not'].'">';
            echo $row['titulo'];
            echo '</a>';
            echo '</div>';
            // echo '<p>';
            // echo $row['descricao'];
            // echo "</p>";
        }
        //echo '<pre>';
        ?>
    </div>
</main>
<?php
include "footer.php";
?>