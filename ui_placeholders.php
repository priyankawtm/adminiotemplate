<?php include './header.php'; ?>
<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Placeholders</h1>

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Placeholders</h5>
									<h6 class="card-subtitle text-muted">Use loading placeholders for your components or pages to indicate something may still
										be loading.</h6>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="card">
												<img src="img/photos/unsplash-1.jpg" class="card-img-top" alt="Unsplash">

												<div class="card-body">
													<h5 class="card-title">Card title</h5>
													<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
														content.</p>
													<a href="#" class="btn btn-primary">Go somewhere</a>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="card" aria-hidden="true">
												<img src="img/photos/unsplash-2.jpg" class="card-img-top" alt="Unsplash">
												<div class="card-body">
													<h5 class="card-title placeholder-glow">
														<span class="placeholder col-6"></span>
													</h5>
													<p class="card-text placeholder-glow">
														<span class="placeholder col-7"></span>
														<span class="placeholder col-4"></span>
														<span class="placeholder col-4"></span>
														<span class="placeholder col-6"></span>
														<span class="placeholder col-8"></span>
													</p>
													<a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Sizing</h5>
									<h6 class="card-subtitle text-muted">The size of <code>.placeholders</code> are based on the typographic style of the parent
										element. Customize them with sizing modifiers: <code>.placeholder-lg</code>, <code>.placeholder-sm</code>, or
										<code>.placeholder-xs</code>.</h6>
								</div>
								<div class="card-body">
									<span class="placeholder col-12 placeholder-lg"></span>
									<span class="placeholder col-12"></span>
									<span class="placeholder col-12 placeholder-sm"></span>
									<span class="placeholder col-12 placeholder-xs"></span>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Colors</h5>
									<h6 class="card-subtitle text-muted">By default, the <code>placeholder</code> uses <code>currentColor</code>. This can be
										overridden with a custom color or utility class.</h6>
								</div>
								<div class="card-body">
									<span class="placeholder col-12"></span>
									<span class="placeholder col-12 bg-primary"></span>
									<span class="placeholder col-12 bg-secondary"></span>
									<span class="placeholder col-12 bg-success"></span>
									<span class="placeholder col-12 bg-danger"></span>
									<span class="placeholder col-12 bg-warning"></span>
									<span class="placeholder col-12 bg-info"></span>
									<span class="placeholder col-12 bg-light"></span>
									<span class="placeholder col-12 bg-dark"></span>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Width</h5>
									<h6 class="card-subtitle text-muted">You can change the <code>width</code> through grid column classes, width utilities, or
										inline styles.</h6>
								</div>
								<div class="card-body">
									<span class="placeholder col-6"></span>
									<span class="placeholder w-75"></span>
									<span class="placeholder" style="width: 25%;"></span>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Animation</h5>
									<h6 class="card-subtitle text-muted">Animate placeholders with <code>.placeholder-glow</code> or
										<code>.placeholder-wave</code> to better convey the perception of something being actively loaded.</h6>
								</div>
								<div class="card-body">
									<p class="placeholder-glow">
										<span class="placeholder col-12"></span>
									</p>
									<p class="placeholder-wave">
										<span class="placeholder col-12"></span>
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
<?php include './footer.php'; ?>