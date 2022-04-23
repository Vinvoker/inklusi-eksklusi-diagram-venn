<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Besar || Matematika Informatika</title>
    <link rel="icon" href="img/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="title">
            <p>
                <span class="title-text">
                    Program Inklusi-Eksklusi 3 Variabel Beserta Diagram Venn
                </span>
            </p>
            <div class="member">
                <p>Kelompok M:</p>
                <p>1121020 - Vincent Christian Laurent</p>
                <p>1121048 - Hansel Raphaelo Kristijanto</p>
                <p>1121054 - Joseph Geraldo</p>
                <p>1121060 - Jonathan Abigael</p>
            </div>
        </div>
        <div class="content">
            <div class="instructions">
                <p>Isilah data yang diketahui pada kolom dibawah ini dan KOSONGKAN data yang ingin dicari!</p>
            </div>
            <div class="paragraph">
                <p>
                    Dalam survey terhadap <span class="bigger">100</span> mahasiswa ITHB, ditemukan bahwa
                </p>
                <p>
                    Ada <input type="text" id="a"> orang yang suka <span class="futsal">Futsal</span>,
                </p>
                <p>
                    Ada <input type="text" id="b"> orang yang suka <span class="badminton">Badminton</span>, dan
                </p>
                <p>
                    Ada <input type="text" id="c"> orang yang suka <span class="basket">Basket</span>.
                </p>
                <p>
                    <input type="text" id="ab"> orang yang suka <span class="futsal">Futsal</span> dan <span class="badminton">Badminton</span>.
                </p>
                <p>
                    <input type="text" id="ac"> orang yang suka <span class="futsal">Futsal</span> dan <span class="basket">Basket</span>.
                </p>
                <p>
                    <input type="text" id="bc"> orang yang suka <span class="badminton">Badminton</span> dan <span class="basket">Basket</span>.
                </p>
                <p>
                    Lalu, ada <input type="text" id="abc"> orang yang <span class="bigger">SUKA</span> ketiganya dan <input type="text" id="notabc"> orang yang <span class="bigger">TIDAK SUKA</span> ketiganya.
                </p>
                <button onclick="hitung()">Hitung!</button>
            </div>
        </div>
        <div class="answer">
            <div class="row">
                <div class="col">
                    <p>
                        <span class="futsal">Futsal</span> = { <span id="ansA"></span> }, <span class="badminton">Badminton</span> = { <span id="ansB"></span> }, <span class="basket">Basket</span> = { <span id="ansC"></span> }
                    </p>
                    <p>
                        <span class="futsal">Futsal</span> &cap; <span class="badminton">Badminton</span> = { <span id="ansAB"></span> }, <span class="futsal">Futsal</span> &cap; <span class="basket">Basket</span> = { <span id="ansAC"></span> }, <span class="badminton">Badminton</span> &cap; <span class="basket">Basket</span> = { <span id="ansBC"></span> }
                    </p>
                    <p>
                        <span class="futsal">Futsal</span> &cap; <span class="badminton">Badminton</span> &cap; <span class="basket">Basket</span> = { <span id="ansABC"></span> }
                    </p>
                    <p>
                        NOT ( <span class="futsal">Futsal</span> &cup; <span class="badminton">Badminton</span> &cup; <span class="basket">Basket</span> ) = { <span id="ansnotABC"></span> }
                    </p>
                    <p>
                        <span class="futsal">Futsal</span> &cup; <span class="badminton">Badminton</span> = { <span id="ansAorB"></span> }, <span class="futsal">Futsal</span> &cup; <span class="basket">Basket</span> = { <span id="ansAorC"></span> }, <span class="badminton">Badminton</span> &cup; <span class="basket">Basket</span> = { <span id="ansBorC"></span> }
                    </p>
                    <p>
                        <span class="futsal">Futsal</span> &cup; <span class="badminton">Badminton</span> &cup; <span class="basket">Basket</span> = { <span id="ansAorBorC"></span> }
                    </p>
                </div>
                <div class="col">
                    <div class="venn">
                        <img src="img/venn_diagram.png" alt="Venn Diagram">
                        <p class="abs a"></p>
                        <p class="abs b"></p>
                        <p class="abs c"></p>
                        <p class="abs ab"></p>
                        <p class="abs ac"></p>
                        <p class="abs bc"></p>
                        <p class="abs abc"></p>
                        <p class="abs notabc"></p>
                        <p class="abs s"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>