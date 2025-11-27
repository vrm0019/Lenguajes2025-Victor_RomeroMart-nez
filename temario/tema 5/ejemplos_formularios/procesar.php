<?php
/**
 * Este archivo muestra los datos enviados por un formulario (vía POST o GET).
 * Puedes usarlo como el atributo `action` de un <form> en ejercicios:
 *   <form action="ruta/a/este_archivo.php" method="post"> ... </form>
 * - Detecta primero datos en $_POST; si no hay, intenta $_GET.
 * - Escapa los valores con htmlspecialchars() para evitar inyección de HTML.
 * - Si no se reciben datos, muestra un mensaje indicando que no hay datos.
 *  PHP no es objeto de este módulo, usamos este archivo para ilustrar el funcionamiento de los formularios
 */

 // Imprime un título fijo en HTML indicando que a continuación vienen los datos enviados.
echo "<h2>Datos enviados:</h2>";

// Comprueba si el array superglobal $_POST no está vacío (es decir, si hay datos enviados por POST).
if (!empty($_POST)) {
    // Abre una lista HTML no ordenada para listar los pares nombre => valor recibidos por POST.
    echo "<ul>";
    // Itera sobre cada entrada del array $_POST; $nombre es la clave y $valor es el contenido.
    foreach ($_POST as $nombre => $valor) {
        // Por cada par, imprime un elemento de lista con el nombre en negrita y el valor escapado.
        // htmlspecialchars() evita que se interprete HTML/JS no deseado enviado por el usuario.
        echo "<li><strong>$nombre:</strong> " . htmlspecialchars($valor) . "</li>";
    }
    // Cierra la lista HTML.
    echo "</ul>";
// Si no hay datos en $_POST, comprueba si hay datos en $_GET (envíos por la URL).
} elseif (!empty($_GET)) {
    // Abre una lista HTML no ordenada para listar los pares nombre => valor recibidos por GET.
    echo "<ul>";
    // Itera sobre cada entrada del array $_GET; $nombre es la clave y $valor es el contenido.
    foreach ($_GET as $nombre => $valor) {
        // Imprime cada par clave/valor dentro de un elemento de lista, escapando el valor.
        echo "<li><strong>$nombre:</strong> " . htmlspecialchars($valor) . "</li>";
    }
    // Cierra la lista HTML.
    echo "</ul>";
// Si ni $_POST ni $_GET contienen datos, muestra un mensaje informando que no se recibieron datos.
} else {
    echo "No se recibieron datos.";
}
?>

