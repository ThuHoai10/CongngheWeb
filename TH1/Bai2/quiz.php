 <?php
$filename = "./Quiz.txt";
$content = file_get_contents($filename);

// Tách câu hỏi thành từng khối bằng 1 dòng trống
$blocks = preg_split("/\n\s*\n/", trim($content));

$questions = [];

foreach ($blocks as $block) {
    $lines = explode("\n", $block);
      
    if (count($lines) < 6) {
        continue;
    }

    $q = [
        "question" => $lines[0],
        "A" => $lines[1],
        "B" => $lines[2],
        "C" => $lines[3],
        "D" => $lines[4],
        "answer" => trim(str_replace("ANSWER:", "", $lines[5]))
    ];

    $questions[] = $q;
}
?> 

