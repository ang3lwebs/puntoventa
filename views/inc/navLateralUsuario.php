
<section class="full-width navLateral scroll" id="navLateral">
		</div>
		<div class="full-width tittles navLateral-body-tittle-menu has-text-centered is-uppercase">
			<i class="fas fa-th-large fa-fw"></i> &nbsp; <?php echo APP_NAME; ?>
		</div>
		<nav class="full-width">
			<ul class="full-width list-unstyle menu-principal">
				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-shopping-cart fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							VENTAS
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-cart-plus fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nueva venta
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de ventas
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search-dollar fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar venta
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width mt-5">
					<a href="<?php echo APP_URL."logOut/"; ?>" class="full-width btn-exit" >
						<div class="navLateral-body-cl">
							<i class="fas fa-power-off"></i>
						</div>
						<div class="navLateral-body-cr">
							Cerrar sesión
						</div>
					</a>
				</li>

			</ul>
		</nav>
	</div>
</section>