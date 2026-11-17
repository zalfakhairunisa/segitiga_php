<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pola Segitiga Bintang</title>
</head>
<body>

<div class="container">
    <h2>Generator Segitiga Bintang</h2>
    
    <!-- Form input -->
    <form method="POST" action="">
        <input type="number" name="tinggi" placeholder="Masukkan tinggi (1-20)" value="<?= isset($_POST['tinggi']) ? htmlspecialchars($_POST['tinggi']) : ''; ?>">
        <button type="submit" name="proses">Tampilkan</button>
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $input = $_POST['tinggi'];

        // Validasi bilangan bulat 1-20
        $tinggi = filter_var($input, FILTER_VALIDATE_INT);

        if ($tinggi === false || $tinggi < 1 || $tinggi > 20) {
            echo '<div class="error">Input tidak valid! Harap masukkan bilangan bulat antara 1 sampai 20.</div>';
        } else {
            echo '<div class="output-box">';
            echo '<pre>';

            // 1. Bagian Atas (Segitiga Tegak)
               echo "\nSegitiga Tegak:\n";
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($spasi = 1; $spasi <= ($tinggi - $i); $spasi++) {
                    echo " ";
                }
                for ($bintang = 1; $bintang <= $i; $bintang++) {
                    echo "* ";
                }
                echo "\n";
            }
            echo "<br>";
            // 2. Bagian Bawah (Segitiga Terbalik)
               echo "\nSegitiga Terbalik:\n";
            for ($i = $tinggi ; $i >= 1; $i--) {
                for ($spasi = 1; $spasi <= ($tinggi - $i); $spasi++) {
                    echo " ";
                }
                for ($bintang = 1; $bintang <= $i; $bintang++) {
                    echo "* ";
                }
                echo "\n";
            }

            // 3. Segitiga rata kiri
            echo "\nSegitiga dari kiri:\n";
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($bintang = 1; $bintang <= $i; $bintang++) {
                    echo "* ";
                }
                echo "\n";
            }

            // 4. Segitiga rata kanan
            echo "\nSegitiga dari kanan:\n";
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($spasi = 1; $spasi <= ($tinggi - $i); $spasi++) {
                    echo "  ";
                }
                for ($bintang = 1; $bintang <= $i; $bintang++) {
                    echo "* ";
                }
                echo "\n";
            }

            echo '</pre>';
            echo '</div>';
        }
    }
    ?>
</div>

</body>
</html>