<?php include('inc/head.php'); //Nav ?>
    <title>Sond'Anim</title>
    <meta name="description" content="Répondez aux différents sondages concernant vos animés préférés et gagnez des points pour devenir premier au classement !">
<head>
<body>
    <header>
        <h1>Sond'Anim</h1>
        <?php include('inc/nav.php'); //Nav ?>
    </header>
    <main>
        <section nouvSondage>
            <h2>Sondage</h2>
            <ul class="menu2">
                <a href="#"><li>Nouveautés</li></a>
                <a href="#"><li>One Piece</li></a>
                <a href="#"><li>Hunter x Hunter</li></a>
                <a href="#"><li>My Hero Academia</li></a>
                <a href="#"><li  class="bord">Demon Slayer</li></a>
            </ul>

            <div class="conteneur">
                <div class="boxsondage">
                    <a href="demonTanjiro.php">
                        <img src="img/demonSlayer/demonTanjiro.png" alt="Demon Tanjiro">
                        <p>
                            <span>10 points</span>
                            <br><br>
                            Est ce que Tanjiro Kamado va devenir un démon ?
                            <br>
                            <i class="fas fa-arrow-right"></i>
                        </p>
                    </a>
                </div>
                <div class="boxsondage">
                    <a href="demonTanjiro.php">
                        <img src="img/onePiece/equipage.png" alt="Equipage de luffy">
                        <p>
                            <span>12 points</span>
                            <br><br>
                            Est ce qu'un nouveau membre va intégrer l'équipage ?
                            <br>
                            <i class="fas fa-arrow-right"></i>
                        </p>
                    </a>
                </div>
                <div class="boxsondage">
                    <a href="demonTanjiro.php">
                        <img src="img/MHA/uraraka.png" alt="Uraraka">
                        <p>
                            <span>11 points</span>
                            <br><br>
                            Ochaco va t'elle avouer ses sentiments à Izuku ?
                            <br>
                            <i class="fas fa-arrow-right"></i>
                        </p>
                    </a>
                </div>

                <div class="boxsondage">
                    <a href="demonTanjiro.php">
                        <img src="img/MHA/todomido.png" alt="Combat entre todoroki et midoriya">
                        <p>
                            <span>24 points</span>
                            <br><br>
                            Quel grand combat est à prévoir avec Izuku ? 
                            <br>
                            <i class="fas fa-arrow-right"></i>
                        </p>
                    </a>
                </div>
                <div class="boxsondage">
                    <a href="demonTanjiro.php">
                        <img src="img/HxH/briguad.png" alt="Brigade fantome">
                        <p>
                            <span>15 points</span>
                            <br><br>
                            Gon et Killua vont-ils se battre contre la brigade fantôme ? 
                            <br>
                            <i class="fas fa-arrow-right"></i>
                        </p>
                    </a>
                </div>
                <div class="boxsondage">
                    <a href="demonTanjiro.php">
                        <img src="img/demonSlayer/couple.png" alt="Zenitsu et Nezuko">
                        <p>
                            <span>10 points</span>
                            <br><br>
                            Est ce que Zenitsu et Nezuko vont sortir ensemble ? 
                            <br>
                            <i class="fas fa-arrow-right"></i>
                        </p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>Site web crée par Karen Azoulay dans le cadre d'un projet scolaire</p>
        <br>
        <div>
            <img src="img/logo/iim.png" alt="Logo IIM">
            <img src="img/logo/pole.png" alt="Logo Pole léonard de vinci">
        </div>     
    </footer>
</body>
</html>