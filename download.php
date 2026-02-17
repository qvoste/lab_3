<?php
// Получаем имя файла из GET, если нет — молча выходим
if (!isset($_GET['file']) || empty($_GET['file'])) {
    exit;
}

$file = $_GET['file']; // Имя файла
$ip = $_SERVER['REMOTE_ADDR']; // IP клиента
$date = date('Y-m-d H:i:s'); // Дата/время

// Строка для лога
$logLine = "$file;$date;$ip;\n";

// Пишем в файл clicks.log
file_put_contents('clicks.log', $logLine, FILE_APPEND);

header("Location: $file");
exit; // Завершаем
?>