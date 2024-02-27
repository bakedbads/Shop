<div class="container">
            <h2>Shop</h2>
            <form id="bestellform" action="">
                <!-- hier fängt schleife von php an -->
                <?php for ($i=0; $i<count($artikel); $i++) {
                ?>

                <div class="row">
                    <div class="col-md-3">
                        <p>
                            <?php echo $artikel[$i]; ?>
                        </p>

                    </div>

                    <div class="col-md-3">
                        <p id="artikelpreis">
                            <?php echo number_format($preis[$i], 2) ; ?>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <input id="<?php echo 'artikelsumme' .$i; ?>" type="number" value="0" min="0">
                    </div>

                    <div class=" col-md-3">
                        <p></p>
                    </div>
                </div>

                <!-- php schleife für row -->
                <?php 
                }
                ?>

                <div class=" row">
                    <div class="offset-md-9 col-md-3">
                        <p id="nettosumme">0.00</p>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-md-9 col-md-3">
                        <button type="submit">Bestellen</button>
                    </div>
                </div>
            </form>

</div>