<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["works"])) {
    $works = $_POST["works"];

    foreach ($works as $work) {
        echo '
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="' . htmlspecialchars($work["src"]) . '" alt="' . htmlspecialchars($work["label"]) . '" class="w-full h-48 object-cover">
            <div class="p-4 text-black text-sm font-medium">
                ' . htmlspecialchars($work["label"]) . '
            </div>
        </div>
        ';
    }
} else {
    echo "<p class='text-center text-red-500'>No works to display.</p>";
}
?>
