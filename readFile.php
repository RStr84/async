<?php
$fileName = $_POST['fileName'] ?? '';
// io-Funktion (input/output) braucht try-catch
$content = '';

try {
    if (!$fileName || !file_exists('./txt/' . $fileName)) {
        throw new Exception('Fehler: Ungültiger Dateiname oder Datei nicht gefunden!');
    }
    $content = file_get_contents('./txt/' . $fileName);
    if ($content === false) {
        throw new Exception('Fehler beim Lesen der Datei!');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
echo $content;




