<?php
$titulo = "Notícia";
include "header.php";

?>

<main>
    <?php
    include __DIR__ . "/config/db.php";

    echo '<pre>';
    print_r($_GET);
    echo '<pre>';

    $idNot = $_GET['idnot'];
    $sql = "SELECT * from noticias WHERE id_not = :idNot";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idNot', $idNot);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    if($resultado){
        echo '<h1>';
        echo $resultado['titulo'];
        echo '</h1>';
        echo '<p>';
        echo $resultado['descricao'];
        echo '</p>';
    }


    
    
    ?>
    <h1>Titulo da Noticia</h1>
    <p>Descrição da notícia</p>
</main>

<?php
include "footer.php";
?>