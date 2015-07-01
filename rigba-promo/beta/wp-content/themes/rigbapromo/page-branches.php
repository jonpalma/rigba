<?php get_header(); ?>

<div class="fixed-bg-generic" style="background: url(<?php echo CFS()->get('backgroundimage'); ?>) no-repeat center center fixed;"></div>

<div id="branches">
	<div class="container">
		<div class="vertmargin-big">
			<h1 class="opensans bold"><?php echo CFS()->get('branches-header'); ?></h1>
			<h3 class="opensans"><?php echo CFS()->get('branches-subheader'); ?></h3>
		</div>
		<div class="row negativemargin">
			<div class="col-sm-3">
				<h2 class="red-orange opensans bold left-align">Selecciona una Sucursal</h2>
				<!-- BEGIN CONTROLS -->
					<div class="center-block nav nav-tabs branchescontrol">
						<a href="#chihuahua" role="tab" data-toggle="tab">
							<div class="branch-states active">
								<div>
									<img src="<?php bloginfo('template_url'); ?>/img/content/branches/chihuahua.png" alt="Chihuahua">
								</div>
								<p class="white uppercase">Chihuahua</p>
							</div>
						</a>
						<a href="#nuevo-leon" role="tab" data-toggle="tab">
							<div class="branch-states">
								<div>
									<img src="<?php bloginfo('template_url'); ?>/img/content/branches/nuevo-leon.png" alt="Nuevo León">
								</div>
								<p class="white uppercase">Nuevo León</p>
							</div>
						</a>
						<a href="#coahuila" role="tab" data-toggle="tab">
							<div class="branch-states">
								<div>
									<img src="<?php bloginfo('template_url'); ?>/img/content/branches/coahuila.png" alt="Coahuila">
								</div>
								<p class="white uppercase">Coahuila</p>
							</div>
						</a>
						<a href="#sonora" role="tab" data-toggle="tab">
							<div class="branch-states">
								<div>
									<img src="<?php bloginfo('template_url'); ?>/img/content/branches/sonora.png" alt="Sonora">
								</div>
								<p class="white uppercase">Sonora</p>
							</div>
						</a>
						<a href="#durango" role="tab" data-toggle="tab">
							<div class="branch-states">
								<div>
									<img src="<?php bloginfo('template_url'); ?>/img/content/branches/durango.png" alt="Durango">
								</div>
								<p class="white uppercase">Durango</p>
							</div>
						</a>
						<a href="#sinaloa" role="tab" data-toggle="tab">
							<div class="branch-states">
								<div>
									<img src="<?php bloginfo('template_url'); ?>/img/content/branches/sinaloa.png" alt="Sinaloa">
								</div>
								<p class="white uppercase">Sinaloa</p>
							</div>
						<a href="#usa" role="tab" data-toggle="tab">
							<div class="branch-states">
								<div>
									<img src="<?php bloginfo('template_url'); ?>/img/content/branches/usa.png" alt="USA">
								</div>
								<p class="white uppercase">USA</p>
							</div>
						</a>
						<a href="#china" role="tab" data-toggle="tab">
							<div class="branch-states">
								<div>
									<img src="<?php bloginfo('template_url'); ?>/img/content/branches/china.png" alt="China">
								</div>
								<p class="white uppercase">China</p>
							</div>
						</a>
					</div>
				<!-- END CONTROLS -->
			</div>
			<div class="col-sm-9">
				<!-- BEGIN SUCURSALES MAPS -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="chihuahua">
						<div class="map">
							<iframe width='100%' height='557px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/mixen.mfncobnc/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoibWl4ZW4iLCJhIjoiMWZlY2QzMzg0ZDk4YzdhNTA5ZDVhNzQxYjNhNDM5NTYifQ.JwnhsKIP5UnO-2WFreNSNQ'></iframe>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<ul class="plain-list">
									<li><strong><span class="orange">Sucursal Berlín</span></strong></li>
									<li><strong>Colonia:</strong></li>
									<li>Mirador</li>
									<li><strong>Calle:</strong></li>
									<li>Berlín #2206</li>
									<li><strong>Teléfono:</strong></li>
									<li>01-800- 74422-77<br>(614) 413-5044</li>
									<li><strong>C.P.</strong></li>
									<li>31205</li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul class="plain-list map-data border">
									<li><strong><span class="orange">Sucursal Industrias</span></strong></li>
									<li><strong>Colonia:</strong></li>
									<li>Industrial Nombre de Dios</li>
									<li><strong>Calle:</strong></li>
									<li>Av. de las Industrias 3707</li>
									<li><strong>Teléfono:</strong></li>
									<li>(614) 413-0856<br>(614) 413-9978<br>(614) 413-9962<br>(614) 413-7839</li>
									<li><strong>C.P.</strong></li>
									<li>31150</li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul class="plain-list">
									<li><strong><span class="orange">Sucursal Juárez</span></strong></li>
									<li><strong>Colonia:</strong></li>
									<li>La Cuesta</li>
									<li><strong>Calle:</strong></li>
									<li>Cordillera de los Andes #5740</li>
									<li><strong>Teléfono:</strong></li>
									<li>(656) 398-0069<br>(656) 398-0037<br>(656) 623-6371</li>
									<li><strong>C.P.</strong></li>
									<li>32650</li>
								</ul>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane fade" id="nuevo-leon">
						<div class="map">
							<iframe width='100%' height='557px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/mixen.mfo2l8h0/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoibWl4ZW4iLCJhIjoiMWZlY2QzMzg0ZDk4YzdhNTA5ZDVhNzQxYjNhNDM5NTYifQ.JwnhsKIP5UnO-2WFreNSNQ'></iframe>
						</div>
						<ul class="plain-list">
							<li><strong><span class="orange">Sucursal Nuevo León</span></strong></li>
							<li><strong>Colonia:</strong></li>
							<li>Lomas de San Francisco</li>
							<li><strong>Calle:</strong></li>
							<li>Loma Redonda #2700 Int.A</li>
							<li><strong>Teléfono:</strong></li>
							<li>(81) 1968-1089<br>(81) 8143-1202</li>
							<li><strong>C.P.</strong></li>
							<li>64710</li>
						</ul>
					</div>

					<div role="tabpanel" class="tab-pane fade" id="coahuila">
						<div class="map">
							<iframe width='100%' height='557px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/mixen.mfo2i6l9/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoibWl4ZW4iLCJhIjoiMWZlY2QzMzg0ZDk4YzdhNTA5ZDVhNzQxYjNhNDM5NTYifQ.JwnhsKIP5UnO-2WFreNSNQ'></iframe>
						</div>
						<ul class="plain-list">
							<li><strong><span class="orange">Sucursal Coahuila</span></strong></li>
							<li><strong>Colonia:</strong></li>
							<li>Zona Industrial Torreón,</li>
							<li><strong>Calle:</strong></li>
							<li>Manuel San Felipe García #240</li>
							<li><strong>Teléfono:</strong></li>
							<li>01 (800) 890 0428<br>(871) 752-6365<br>(871) 752-6100<br>(871) 752-6938</li>
							<li><strong>C.P.</strong></li>
							<li>27019</li>
						</ul>						
					</div>

					<div role="tabpanel" class="tab-pane fade" id="sonora">
						<div class="map">
							<iframe width='100%' height='557px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/mixen.mfo30816/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoibWl4ZW4iLCJhIjoiMWZlY2QzMzg0ZDk4YzdhNTA5ZDVhNzQxYjNhNDM5NTYifQ.JwnhsKIP5UnO-2WFreNSNQ'></iframe>
						</div>
						<ul class="plain-list">
							<li><strong><span class="orange">Sucursal Sonora</span></strong></li>
							<li><strong>Colonia:</strong></li>
							<li>El Llano</li>
							<li><strong>Calle:</strong></li>
							<li>Calle: Severiano Talamante #11 Entre Av. Tecnológico y Blvd. García Morales</li>
							<li><strong>Teléfono:</strong></li>
							<li>01 (800) 890 0429<br>(662) 260-2637<br>(662) 218-9681<br> (662) 216-4114</li>
							<li><strong>C.P.</strong></li>
							<li>83210</li>
						</ul>						
					</div>

					<div role="tabpanel" class="tab-pane fade" id="durango">
						<div class="map">
							<iframe width='100%' height='557px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/mixen.mfo2og19/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoibWl4ZW4iLCJhIjoiMWZlY2QzMzg0ZDk4YzdhNTA5ZDVhNzQxYjNhNDM5NTYifQ.JwnhsKIP5UnO-2WFreNSNQ'></iframe>
						</div>
						<ul class="plain-list">
							<li><strong><span class="orange">Sucursal Durango</span></strong></li>
							<li><strong>Colonia:</strong></li>
							<li>Ote. Zona Centro</li>
							<li><strong>Calle:</strong></li>
							<li>Blvd. Felipe Pescador #202-C</li>
							<li><strong>Teléfono:</strong></li>
							<li>(618) 811-5609<br>(618) 837-0294<br>(618) 837-0316</li>
							<li><strong>C.P.</strong></li>
							<li>34000</li>
						</ul>						
					</div>

					<div role="tabpanel" class="tab-pane fade" id="sinaloa">
						<div class="map">
							<iframe width='100%' height='557px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/mixen.mfo31k71/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoibWl4ZW4iLCJhIjoiMWZlY2QzMzg0ZDk4YzdhNTA5ZDVhNzQxYjNhNDM5NTYifQ.JwnhsKIP5UnO-2WFreNSNQ'></iframe>
						</div>
						<ul class="plain-list">
							<li><strong><span class="orange">Sucursal Sinaloa</span></strong></li>
							<li><strong>Colonia:</strong></li>
							<li>San Rafael</li>
							<li><strong>Calle:</strong></li>
							<li>C. Fray Marcos de Niza # 4196</li>
							<li><strong>Teléfono:</strong></li>
							<li>(667) 170-5108<br>(667) 170-4225<br>(667) 170-4221</li>
							<li><strong>C.P.</strong></li>
							<li>80150</li>
						</ul>
					</div>

					<div role="tabpanel" class="tab-pane fade" id="usa">
						<div class="map">
							<iframe width='100%' height='557px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/mixen.mfo364i3/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoibWl4ZW4iLCJhIjoiMWZlY2QzMzg0ZDk4YzdhNTA5ZDVhNzQxYjNhNDM5NTYifQ.JwnhsKIP5UnO-2WFreNSNQ'></iframe>
						</div>
						<ul class="plain-list">
							<li><strong><span class="orange">Sucursal El Paso</span></strong></li>
							<li><strong>Ciudad:</strong></li>
							<li>El Paso, TX.</li>
							<li><strong>Calle:</strong></li>
							<li>820 Hawkins Blvd. Suite O</li>
							<li><strong>Teléfono:</strong></li>
							<li>+1 (915) 239 10 70<br>+1 (915) 328 35 15</li>
							<li><strong>C.P.</strong></li>
							<li>79915</li>
						</ul>
					</div>

					<div role="tabpanel" class="tab-pane fade" id="china">
						<div class="map">
							<iframe width='100%' height='557px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/mixen.mfo338nm/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoibWl4ZW4iLCJhIjoiMWZlY2QzMzg0ZDk4YzdhNTA5ZDVhNzQxYjNhNDM5NTYifQ.JwnhsKIP5UnO-2WFreNSNQ'></iframe>
						</div>
						<ul class="plain-list">
							<li><strong><span class="orange">Sucursal China</span></strong></li>
							<li><strong>Ciudad:</strong></li>
							<li>HuLi District,Xiamen City, Fujian Province.</li>
							<li><strong>Calle:</strong></li>
							<li>206 Jinxia Technology Building(#A), No. 1505 Fanghu Bei 2 Road</li>
							<li><strong>Teléfono:</strong></li>
							<li>+86 (592) 509.2171</li>
							<li><strong>C.P.</strong></li>
							<li>361009</li>
						</ul>
					</div>
				</div>

<!-- END SUCURSALES MAP -->		
			</div>
		</div>
	</div>
</div>
<br class="vertmargin">

<?php get_footer(); ?>