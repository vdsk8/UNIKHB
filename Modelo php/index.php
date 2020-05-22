<?php include 'header.php';?>
<!--==== BODY INDEX ====-->
<!-- HERO SLIDER AND DROPDOWN -->
<div class="card border-0 mb-5">
    <!-- HERO SLIDER -->
    <div id="slide-hero-indicators" class="carousel slide" data-ride="carousel">
        <!-- INDICATORS -->
        <ol class="carousel-indicators mb-5 pb-5">
            <li data-target="#slide-hero-indicators" data-slide-to="0" class="active"></li>
            <li data-target="#slide-hero-indicators" data-slide-to="1"></li>
            <li data-target="#slide-hero-indicators" data-slide-to="2"></li>
        </ol>

        <!-- CAROUSEL -->
        <div class="carousel-inner">
            <div class="carousel-item active view">
                <img class="hero-img d-block w-100 w-100img" src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="..." />
                <div class="mask bg-gradient-dark d-flex align-self-center">
                    <div class="carousel-caption container">
                        <h2 class="text-left font-weight-bold">First slide label: consectetur adipiscing elit</h2>
                        <h5 class="text-left font-weight-light">Nulla vitae elit libero</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item view">
                <img class="hero-img d-block w-100 w-100img" src="https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=755&q=80" alt="..." />
                <div class="mask bg-gradient-dark d-flex align-self-center">
                    <div class="carousel-caption container">
                        <h2 class="text-left font-weight-bold">First slide label: consectetur adipiscing elit</h2>
                        <h5 class="text-left font-weight-light">Nulla vitae elit libero</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item view">
                <img class="hero-img d-block w-100 w-100img" src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" alt="..." />
                <div class="mask bg-gradient-dark d-flex align-self-center">
                    <div class="carousel-caption container">
                        <h2 class="text-left font-weight-bold">First slide label: consectetur adipiscing elit</h2>
                        <h5 class="text-left font-weight-light">Nulla vitae elit libero</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FORMULÁRIO DE BUSCA - DROPDOWN-->
    <div class="card-body border-0 dropdown-index container bg-primary py-2 align-self-center">
        <form class="form-inline">
            <div class="row mx-3 flex-fill">
                <!-- CATEGORIA -->
                <select id="categoria" class="form-control rounded-0 flex-fill m-2 font-weight-bold">
                    <option>CATEGORIA</option>
                </select>
                <!-- LOCALIZAÇÃO -->
                <input id="localizacao" type="text" class="form-control rounded-0 flex-fill m-2 font-weight-bold" placeholder="LOCALIZAÇÃO">
                <!-- VALOR -->
                <select id="valor" class="form-control rounded-0 flex-fill m-2 font-weight-bold">
                    <option>VALOR</option>
                </select>
                <!-- BUSCAR -->
                <button id="buscar" type="submit" class="btn btn-info rounded-0 flex-fill m-2 font-weight-bold">BUSCAR</button>
            </div>
        </form>
    </div>
</div>

<!-- SLIDE PRODUCT -->
<div class="container my-5">
	<h1 class="main-title text-center">Lançamentos</h1>
	<div id="products-carousel" class="carousel slide" data-ride="carousel">
		<!-- INDICATORS ORANGE -->
		<ol class="carousel-indicators">
			<li data-target="#products-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#products-carousel" data-slide-to="1"></li>
			<li data-target="#products-carousel" data-slide-to="2"></li>
		</ol>
		<!-- PRODUCTS -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="row">
					<!-- CARD 1 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas
									Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
					<!-- CARD 2 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas
									Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
					<!-- CARD 3 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
					<!-- CARD 1 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas
									Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
					<!-- CARD 2 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas
									Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
					<!-- CARD 3 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas
									Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CAROSEL CONTROLS -->
		<a class="carousel-control-prev d-lg-flex d-none" href="#products-carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next d-lg-flex d-none" href="#products-carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<!-- HR -->
<hr />

<!-- SLIDE PRODUCT -->
<div class="container my-5">
	<h1 class="main-title text-center">mais vistos</h1>
	<div id="products-carousel" class="carousel slide" data-ride="carousel">
		<!-- INDICATORS ORANGE -->
		<ol class="carousel-indicators">
			<li data-target="#products-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#products-carousel" data-slide-to="1"></li>
			<li data-target="#products-carousel" data-slide-to="2"></li>
		</ol>
		<!-- PRODUCTS -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="row">
					<!-- CARD 1 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas
									Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
					<!-- CARD 2 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas
									Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
					<!-- CARD 3 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
					<!-- CARD 1 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas
									Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
					<!-- CARD 2 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas
									Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
					<!-- CARD 3 -->
					<div class="card col-lg-4 col-md-6 col-12 border-0 card-gallery mb-4">
						<div class="card border-0 mb-3 img-gallery">
							<a class="mais-vistos-card" href="#">
								<img class="card-img border-0 img-gallery"
									src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
								<div class="hover-card card-img-overlay bg-gradient-dark">
									<!-- BANHEIROS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M20.021,345.689v41.259c0,47.682,35.043,87.329,80.727,94.549V512h30.001v-29.325h250.5V512h30.001v-30.503c45.684-7.22,80.727-46.867,80.727-94.549v-41.259H20.021z"/><path d="M50.022,255.639V82.556c0-28.979,23.577-52.555,52.556-52.555c26.838,0,49.026,20.224,52.161,46.23c-31.24,7.036-54.651,34.987-54.651,68.321v20.004H240.18v-20.004c0-33.574-23.748-61.692-55.323-68.476C181.536,33.575,145.916,0,102.578,0C57.056,0,20.021,37.034,20.021,82.556v173.083H0.006v60.049h511.988v-60.049H50.022z"/>
										</svg>
										2 Banheiros
									</p>
									<!-- TAMANHO -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve"><polygon points="499.076,83.903 499.076,52.836 446.922,52.836 446.922,-0.422 415.922,-0.422 415.922,52.836 83.884,52.836 83.884,1.206 52.883,1.206 52.883,52.836 0.923,52.836 0.923,83.903 52.883,83.903 52.883,417.726 0.923,417.726 0.923,448.792 52.883,448.792 52.883,500.422 83.884,500.422 83.884,448.792 415.922,448.792 415.922,498.795 446.922,498.795 446.922,448.792 499.076,448.792 499.076,417.726 446.922,417.726 446.922,83.903 "/>
										</svg>
										240 m<sup>2</sup>
									</p>
									<!-- QUARTOS -->
									<p class="card-text text-white">
										<svg class="card-hover-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M53.333,202.667h53.333c-3.285,0-6.379-1.515-8.405-4.096c-2.027-2.581-2.731-5.952-1.941-9.152l6.635-26.517c3.563-14.272,16.341-24.235,31.04-24.235h68.672c17.643,0,32,14.357,32,32V192c0,5.888-4.779,10.667-10.667,10.667h64c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-17.643,14.357-32,32-32h68.672c14.699,0,27.477,9.963,31.04,24.235l6.635,26.517c0.811,3.179,0.085,6.571-1.941,9.152c-2.027,2.581-5.12,4.096-8.405,4.096h53.333c5.888,0,10.667-4.779,10.667-10.667v-64c0-29.397-23.936-53.333-53.333-53.333H96c-29.397,0-53.333,23.936-53.333,53.333v64C42.667,197.888,47.445,202.667,53.333,202.667z"/><path d="M458.667,224H53.333C23.936,224,0,247.936,0,277.333v149.333c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667v-32h469.333v32c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667V277.333C512,247.936,488.064,224,458.667,224z M490.667,373.333H21.333V352h469.333V373.333z"/>
										</svg>
										2 Quartos
									</p>
									<hr class="border-light hr-hover mb-0" />
									<p class="card-text text-uppercase text-white">
										<svg class="card-white-svg" version="1.1" id="Layer_1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
											xml:space="preserve">
											<path
												d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
										</svg>
										<small>Juiz de Fora, Minas Gerais</small>
									</p>
								</div>
					
							</a>
						</div>
						<div class="card-body border-0 p-1">
							<p class="card-text text-uppercase text-gallery text-muted"><small>Juiz de Fora, Minas
									Gerais</small></p>
							<h5 class="card-title font-weight-bold title-gallery">Product Name</h5>
							<h5 class="card-title font-weight-bold text-info title-gallery">R$30.000</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CAROSEL CONTROLS -->
		<a class="carousel-control-prev d-lg-flex d-none" href="#products-carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next d-lg-flex d-none" href="#products-carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<!-- HR -->
<hr />

<!-- BANNER CARDS -->
<div class="container">
	<div class="row my-5">
		<!-- CARD1 -->
		<div class="col-lg-6">
			<div class="card banner-card gradient-card">
				<img class="card-img"
					src="https://images.unsplash.com/photo-1532974297617-c0f05fe48bff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" />
				<!-- CONTENT -->
				<div class="card-img-overlay text-white d-flex align-items-end bg-gradient-primary">
					<div>
						<h4>Quis auctor elit sed vulputate mi sit amet mauris</h4>
						<p>Lorem ipsum dolor sit amet</p>
						<a href="#" class="btn btn-outline-light rounded-pill px-4 mt-3">LOREM</a>
					</div>
				</div>
			</div>
		</div>
		<!-- CARD2 -->
		<div class="col-lg-6">
			<div class="card banner-card gradient-card">
				<img class="card-img"
					src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" />
				<!-- CONTENT -->
				<div class="card-img-overlay text-white d-flex align-items-end bg-gradient-dark">
					<div>
						<h4>Quis auctor elit sed vulputate mi sit amet mauris</h4>
						<p>Lorem ipsum dolor sit amet</p>
						<a href="#" class="btn btn-outline-light rounded-pill px-4 mt-3">LOREM</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- TESTEMONIAL -->
<div class="bg-secondary pb-5">
	<div class="container my-auto">

		<h1 class="main-title text-center">porque a <span class="font-weight-bold">unik</span>
		</h1>
		<div id="products-carousel" class="carousel slide" data-ride="carousel">
			<!-- INDICATORS ORANGE -->
			<ol class="carousel-indicators">
				<li data-target="#products-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#products-carousel" data-slide-to="1"></li>
				<li data-target="#products-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="mt-1 mb-1 col-lg-4 col-12">
							<div class="testimonial-wrapper">
								<div class="testimonial">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
									</p>
								</div>
								<div class="row">
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="img/testimonial.jpg">
										</div>
									</div>
									<div class="media-body mt-4">
										<div class="name font-weight-bolder">
											<p>Jeremy H.</p>
										</div>
										<div class="details">
											<p>Manager</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mt-1 mb-1 col-lg-4 col-12">
							<div class="testimonial-wrapper">
								<div class="testimonial">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
									</p>
								</div>
								<div class="row">
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="img/testimonial.jpg">
										</div>
									</div>
									<div class="media-body mt-4">
										<div class="name font-weight-bolder">
											<p>Jeremy H.</p>
										</div>
										<div class="details">
											<p>Manager</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mt-1 mb-1 col-lg-4 col-12">
							<div class="testimonial-wrapper">
								<div class="testimonial">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
									</p>
								</div>
								<div class="row">
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="img/testimonial.jpg">
										</div>
									</div>
									<div class="media-body mt-4">
										<div class="name font-weight-bolder">
											<p>Jeremy H.</p>
										</div>
										<div class="details">
											<p>Manager</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- PARCEIRO -->
<div class="container my-5">
	<h1 class="main-title text-center">parceiro</h1>
	<div id="products-carousel" class="carousel slide" data-ride="carousel">
		<!-- INDICATORS ORANGE -->
		<ol class="carousel-indicators">
			<li data-target="#products-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#products-carousel" data-slide-to="1"></li>
			<li data-target="#products-carousel" data-slide-to="2"></li>
		</ol>
		<!-- LOGO CAROUSEL -->
		<div class="carousel-inner">
			<div class="carousel-item active mb-5">
				<div class="d-flex justify-content-center">
                    <img class="img-card parceiro-img" src="img/Logomarca_Alterada.png">
                </div>
			</div>
		</div>
		<!-- CAROSEL CONTROLS -->
		<a class="carousel-control-prev d-lg-flex d-none" href="#products-carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next d-lg-flex d-none" href="#products-carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<!-- HR -->
<hr />

<!-- BLOG CARDS -->
<div class="container my-5">
	<h1 class="main-title text-center">blog</h1>
	<div class="row">
		<!-- CARD 1 -->
		<div class="blog-img card border-0 col-md-4 m-auto">
			<a class="text-black-50" href="#">
				<img class="card-img-top" src="https://images.unsplash.com/photo-1499914485622-a88fac536970?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"/>
				<div class=" d-flex justify-content-center">
					<div class="blog-abstract card-body bg-white position-absolute align-self-center">
						<h6 class="text-uppercase font-weight-bold">Lorem ipsum</h6>
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>		
			</a>
		</div>
		<!-- CARD 2 -->
		<div class="blog-img card border-0 col-md-4 m-auto">
			<a class="text-black-50" href="#">
				<img class="card-img-top" src="https://images.unsplash.com/photo-1507208773393-40d9fc670acf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80"/>
				<div class=" d-flex justify-content-center">
					<div class="blog-abstract card-body bg-white position-absolute align-self-center">
						<h6 class="text-uppercase font-weight-bold">Lorem ipsum</h6>
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>		
			</a>
		</div>
		<!-- CARD 3 -->
		<div class="blog-img card border-0 col-md-4 m-auto">
			<a class="text-black-50" href="#">
				<img class="card-img-top" src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"/>
				<div class=" d-flex justify-content-center">
					<div class="blog-abstract card-body bg-white position-absolute align-self-center">
						<h6 class="text-uppercase font-weight-bold">Lorem ipsum</h6>
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>		
			</a>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
