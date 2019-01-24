<?php wp_footer() ?>
        <footer>
            <div class="footer-all">
                <div class="img-footer">
                    <div class="logo-footer">
                        <img src="<?= bloginfo('template_url');?>/images/logo-2.png" alt="logo">
                    </div>
                    <div class="icon-social-footer">
                        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="https://www.pinterest.fr" target="_blank"><i class="fab fa-pinterest-p fa-2x"></i></a>
                        <a href="https://www.instagram.com/?hl=fr" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://plus.google.com/discover" target="_blank"><i class="fab fa-google-plus-g fa-2x"></i></a>
                    </div>
                </div>
                <div class="menu-footer">
                    <p>Menu</p>
                    <?php wp_nav_menu(array( 'theme_location' => 'menu-footer')); ?>
                </div>
                <div class="contact-footer">
                    <p><?php the_field('footer-title','option') ;?></p>
                    <p><?php the_field('footer-adresse','option') ;?></p>
                    <p><?php the_field('footer-freephone','option') ;?></p>
                    <p><?php the_field('footer-telephone','option') ;?></p>
                    <p><?php the_field('footer-fax','option') ;?></p>
                    <a href="mailto:<?php the_field('footer-mail','option') ;?>">info@realhome.com</a>
                </div>
            </div>
        </footer>
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
		<script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = 48.105730419609586;
			var lon = -1.6784663199723582;
			var macarte = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 14,
                    maxZoom: 20
                }).addTo(macarte);
                // Nous ajoutons un marqueur
                var marker = L.marker([lat, lon]).addTo(macarte);
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
		</script>
    </body>
</html>