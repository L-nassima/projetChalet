    <nav id='mainNavigation'>
        <ul>       
            <?php if(isset($customerConnect) && $customerConnect['admin']==1) : ?>
            
                <li><a href='index.php?id=<?=intval($customerConnect['id_customer']); ?>'><img src='img/img_logos/logoChalet-02.png' alt="logo de site" class='logo'>
                <p class='textLogo'>Chalet Vacances </p></a>
                </li>
                <li><a href="index.php?id=<?= intval($customerConnect['id_customer']); ?>">accueil</a></li>
                <li><a href="chaletSelection.php?id=<?= intval($customerConnect['id_customer']); ?>">Catalogue</a></li>
               
                <li class='showMenu'><a href='infoProfileCustomerAdmin.php?id=<?= intval($customerConnect['id_customer']); ?>'>Administration</a>
                               
                        <div class='submenu'>
                            <ul>    
                                <li><a href="addCatalogueChalet.php?id=<?= intval($customerConnect['id_customer']); ?>">Ajouter un chalet</a></li>
                                <li><a href="deletChalet.php?id=<?= intval($customerConnect['id_customer']); ?>">Gestion du chalet</a></li>
                                <li><a href="addVideo.php?id=<?= intval($customerConnect['id_customer']); ?>">Ajouter une video</a></li>
                                <li><a href="adminBlog.php?id=<?= intval($customerConnect['id_customer']); ?>">Admin - Blog</a></li>
                                        
                            </ul> 
                        </div>   
                </li>
                        
                <li class='showMenu'>
                    <a href='customerProfile.php?id=<?= intval($customerConnect['id_customer']); ?>'><span>Bonjour <?= htmlspecialchars($customerConnect['pseudo']); ?></span>
                        <?php if(!empty($customerConnect['profile_picture'])) :?>
                            <img src="img/customers_images/<?= $customerConnect['profile_picture'] ;?>" alt="image du profil de client" class='image_client'>
                          
                        <?php endif; ?>                
                    </a>
                    <div >
                        <div class='submenu'>
                            <ul>       
                                <li><a href="detailsProfileCustomer.php?id=<?= intval($customerConnect['id_customer']); ?>">mon profil</a></li>
                                <li><a href="chaletPromotion.php?id=<?= intval($customerConnect['id_customer']);?>">Nos promotions</a></li>
                                <li> <a href="displayVideo.php?id=<?= intval($customerConnect['id_customer']); ?>">Nos Videos</a></li>
                                <li><a href="loginOut.php">se déconnecter</a></li>       
                            </ul>
                        </div>
                    </div>
                </li>

            <?php elseif(isset($customerConnect['id_customer']) && $customerConnect['admin']==null) : ?>

                <li><a href='index.php' id='logo'><img src='img/img_logos/logoChalet-02.png' alt="logo du site">
                <p class='textLogo'>Chalet Vacances </p></a>
                </li>
                <li><a href="index.php?id=<?= intval($customerConnect['id_customer']); ?>">accueil</a></li>
                <li><a href="chaletSelection.php?id=<?= intval($customerConnect['id_customer']); ?>">Catalogue </a></li>
                <li><a href="chaletPromotion.php?id=<?= intval($customerConnect['id_customer']); ?>">Nos promotions </a></li>
                <li class='showMenu'>
                    <a href='customerProfile.php?id=<?= intval($customerConnect['id_customer']); ?>'><span>Bonjour <?= htmlspecialchars($customerConnect['pseudo']); ?></span>
                        <?php if(!empty($customerConnect['profile_picture'])) :?>
                            <img src="img/customers_images/<?=$customerConnect['profile_picture'];?>" alt="image du profil de client" class='image_client'>
                        <?php else : ?> 
                            <img src="img/customers_images/profil_defaut.png">   
                        <?php endif; ?>                        
                    </a>
                    <div>           
                        <div class='submenu'>
                            <ul>
                                <li> <a href="detailsProfileCustomer.php?id=<?= intval($customerConnect['id_customer']); ?>">mon profil</a></li>
                                <li> <a href="displayVideo.php?id=<?= intval($customerConnect['id_customer']); ?>">Nos Videos</a></li>
                                <li><a href="indexBlog.php?id=<?= intval($customerConnect['id_customer']); ?>">blog</a></li>
                                <li><a href="loginOut.php">se déconnecter</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                                    
            <?php else :?>         
                <li><a href='index.php' class='logo'><img src='img/img_logos/logoChalet-02.png' alt="logo du site">
                <p class='textLogo'>Chalet Vacances </p></a>
                </li>
                <li><a href="index.php">accueil</a></li>
                <li><a href="chaletSelection.php">Catalogue </a></li>
                <li><a href="login.php">espace client</a></li>                           
            <?php endif; ?>           
        </ul>
    </nav>
    