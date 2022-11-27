    <div class="partnership">
        <h2 class="title titre_de_page">Nos Partenaires</h2>
        <div class="enterprises">
            <div class="enterprise">
                <a href="https://www.semebeach.cm/" target="_blank">
                    <img src="Images/seme-beach.jpg" alt="Logo des sponsors">
                    <h3 class="title">SEME BEACH HOTEL LIMBE</h3>
                </a>
            </div>
            <div class="enterprise">
                <a href="" target="_blank">
                    <img src="Images/Kirito_logo.png" alt="Logo des sponsors">
                    <h3 class="title">PITECH Industries</h3>
                </a>
            </div>
        </div>
    </div>

    <footer>
        <img src="Images/logoUbuntu.png" class="logo" alt="Logo Ubuntu 2k22">
        <strong class="normal" style="color:var(--primary-color)">"Je suis ce que je suis grâce à ce que nous sommes tous"</strong>
        
        <div class="socialMedia">
            <div class="account">
                <a href="https://instagram.com/ubuntu_sj_2k22?igshid=YmMyMTA2M2Y=" target="_blank">
                    <img src="Images/instagram_icon.png" alt="Instagram account">
                    <span>Ubuntu_2k22</span> 
                </a>
            </div>
            <div class="account">
                <?php 
                    if(!isset($_SESSION['connected']) ||$_SESSION['connected'] ==0 ){
                ?>
                    <a href="Index.php">
                        <img src="Images/Facebook_icon.png" alt="Facebook account">
                        <span>Ubuntu 2k22 Officiel</span> 
                    </a>
                <?php 
                    }
                    else{
                ?>    
                    <a href="Index.php?action=deconnection">
                        <span><?php echo $_SESSION['userName'].','; ?></span>
                        <span>(Deconnexion)</span> 
                    </a>
                <?php    
                    }
                ?>    
            </div>
            <div class="account">
                <a href="https://wa.me/+237656771091" target="_blank">
                    <img src="Images/Whatsapp_Icon.png" alt="Whatsapp account">
                    <span>vente des billets</span> 
                </a>
            </div>
        </div>

        <div class="barre"></div>

        <h4 class="title">@copyrights 2022 - All rights reserved PITECH Industries</h4>
    </footer>

    <script src="https://kit.fontawesome.com/e31c3311ab.js" crossorigin="anonymous"></script>
    <script src="Scripts/header-script.js"></script>
</body>
</html>

<?php mysqli_close($conn); ?>