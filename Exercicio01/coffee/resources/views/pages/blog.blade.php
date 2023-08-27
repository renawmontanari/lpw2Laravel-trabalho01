@extends('template.index')

@section('contents')
<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Que tipo de café servimos para você</h1>
								<p>Blog com as ultimas informações sobre café.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="img/b1.jpg" alt="">
							<ul class="post-tags">
                            <li><a href="#">Viagem</a></li>
								<li><a href="#">Café</a></li>
							</ul>
							<a href="#"><h4>Café de Sombra</h4></a>
							<p>
                                O café de sombra é cultivado sob árvores nativas ou plantadas, proporcionando um ambiente mais semelhante ao habitat natural das plantas de café. 
							</p>
							<p class="post-date">
								31 de Agosto, 2023
							</p>
						</div>
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="img/b2.jpg" alt="">
							<ul class="post-tags">
								<li><a href="#">Viagem</a></li>
								<li><a href="#">Café</a></li>
							</ul>
							<a href="#"><h4>Café de Sombra</h4></a>
							<p>
                            O café de sombra é cultivado sob árvores nativas ou plantadas, proporcionando um ambiente mais semelhante ao habitat natural das plantas de café. 
							</p>
							<p class="post-date">
                                02 de Setembro, 2023
							</p>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End blog Area -->
@endsection