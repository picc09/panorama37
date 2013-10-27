<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
            <div id="contact" class="container">
                <h2>Dove siamo</h2>
            </div>
            <div id="map-canvas"></div>
            <div class="container">
                <h2>Contatti</h2>

                <form class="input-group col-md-6">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control" placeholder="Email"></div>
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control" placeholder="nome"></div>
                    <div class="input-group col-md-12">

                        <input type="text" class="form-control" placeholder="telefono"></div>
                    <div class="input-group col-md-12">

                        <textarea type="text" class="form-control" placeholder="inserisci messggio"></textarea></div>

                    <button type="button" class="btn btn-default">invia</button>
                </form>
                <div class="col-md-6">
                    <ul class="nav nav-tabs">
                        <li class=" active"><a href="#Segreteria" data-toggle="tab">Segreteria</a></li>
                        <li><a href="#Presidenza" data-toggle="tab">Presidenza</a></li>
                        <li><a href="#Tecnico" data-toggle="tab">Tecnico</a></li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="Segreteria">
                            <ul class="list-group">
                                <li class="list-group-item">Contatta la segreteria</li>
                                <li class="list-group-item clearfix">
                                    <div class="col-md-3">
                                        contattaci
                                    </div>
                                    <form class="input-group col-md-9">
                                        <input type="text" class="form-control round-top" placeholder="Email">
                                        <input type="text" class="form-control" placeholder="nome">
                                        <input type="text" class="form-control" placeholder="telefono">
                                        <textarea type="text" class="form-control round-bottom" placeholder="inserisci messggio"></textarea>

                                    </form>
                                    <button type="button" class="btn btn-default">invia</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="Presidenza">
                            <ul class="list-group">
                                <li class="list-group-item">Contatta la presidenza</li>
                                <li class="list-group-item clearfix">
                                    <div class="col-md-3">
                                        contattaci
                                    </div>
                                    <form class="input-group col-md-9">
                                        <input type="text" class="form-control round-top" placeholder="Email">
                                        <input type="text" class="form-control" placeholder="nome">
                                        <input type="text" class="form-control" placeholder="telefono">
                                        <textarea type="text" class="form-control round-bottom" placeholder="inserisci messggio"></textarea>

                                    </form>
                                    <button type="button" class="btn btn-default">invia</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="Tecnico">
                            <ul class="list-group">
                                <li class="list-group-item">Segnala problemi tecnici</li>
                                <li class="list-group-item clearfix">
                                    <div class="col-md-3">
                                        contattaci
                                    </div>
                                    <form class="input-group col-md-9">
                                        <input type="text" class="form-control round-top" placeholder="Email">
                                        <input type="text" class="form-control" placeholder="nome">
                                        <input type="text" class="form-control" placeholder="telefono">
                                        <textarea type="text" class="form-control round-bottom" placeholder="inserisci messggio"></textarea>

                                    </form>
                                    <button type="button" class="btn btn-default">invia</button>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        (function() {
            var map;
            google.maps.event.addDomListener(window, 'load', function initialize() {
                var coords = new google.maps.LatLng(45.961636,12.656359);
                map = new google.maps.Map(document.getElementById('map-canvas'), {
                    zoom: 16,
                    center: coords,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false
                });

                var marker = new google.maps.Marker({
                    position: coords,
                    map: map,
                    title:"Associazione Panorama"
                });
            });
        })();
    </script>
</body>
</html>