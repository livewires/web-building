<?php

  $content = array(
    'title' => 'Monopoly',
    'heading' => array(
      'main' => 'Monopoly',
      'sub' => 'Everything you may need to know about the properties'
    )
  );

  include_once('includes/html_header.php');
  include_once('includes/body_header.php');
  include_once('includes/navigation.php');
?>

        <section>

            <div class="container">
                <h2>Kings Cross</h2>

                <p>The Kings Cross side of the board is the first side a player will go along. It's properties are brown and light blue.</p>

                <a href="brown.php#oldkentroad">
                    <div class="property property--brown">
                        <img src="assets/img/oldkentroad.jpg" />
                        <div class="property__info">
                            <h3>Old Kent Road</h3>
                            <p class="property__cost">£60</p>
                        </div>
                    </div>
                </a>

                <a href="brown.php#whitechapel">
                    <div class="property property--brown">
                        <img src="assets/img/whitechapel.jpg" />
                        <div class="property__info">
                            <h3>Whitechapel Road</h3>
                            <p class="property__cost">£60</p>
                        </div>
                    </div>
                </a>

                <a href="lightblue.php#theangel">
                <div class="property property--lightblue">
                    <img src="assets/img/angel.jpg" />
                    <div class="property__info">
                        <h3>The Angel, Islington</h3>
                        <p class="property__cost">£100</p>
                    </div>
                </div>
                </a>

                <a href="lightblue.php#eustonroad">
                    <div class="property property--lightblue">
                        <img src="assets/img/eustonroad.jpg" />
                        <div class="property__info">
                            <h3>Euston Road</h3>
                            <p class="property__cost">£100</p>
                        </div>
                    </div>
                </a>

                <a href="lightblue.php#pentonvilleroad">
                    <div class="property property--lightblue">
                        <img src="assets/img/pentonville-road.jpg" />
                        <div class="property__info">
                            <h3>Pentonville Road</h3>
                            <p class="property__cost">£120</p>
                        </div>
                    </div>
                </a>


            </div>
        </section>


<?php
  include_once('includes/html_footer.php');
?>
