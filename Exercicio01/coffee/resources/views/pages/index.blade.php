@extends('template.index')

@section('contents')
            <!-- Start review Area -->
			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Que tipo de café servimos para você</h1>
								<p>Que estão extremamente apaixonados pelo sistema ecológico.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-review">
							<img src="img/r1.png" alt="">
							<div class="title d-flex flex-row">
								<h4>Café Orgânico</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
                            O café orgânico é cultivado sem o uso de pesticidas sintéticos, herbicidas ou fertilizantes químicos. 
							</p>
						</div>	
						<div class="col-lg-6 col-md-6 single-review">
							<img src="img/r2.png" alt="">
							<div class="title d-flex flex-row">
								<h4>Café de Sombra</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
                            O café de sombra é cultivado sob árvores nativas ou plantadas, proporcionando um ambiente mais semelhante ao habitat natural das plantas de café. 
							</p>
						</div>	
					</div>
					<div class="row counter-row">
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2536</h1>
							<p>Cliente Feliz</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">7562</h1>
							<p>Total de projetos</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2013</h1>
							<p>Copos de café</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">10536</h1>
							<p>Total enviado</p>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End review Area -->
@endsection