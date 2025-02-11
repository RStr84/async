<?php
$writeFileName = $_POST['writeFileName'] ?? '';
$content = $_POST['content'] ?? '';

file_put_contents('./txt/' . $writeFileName, $content);
