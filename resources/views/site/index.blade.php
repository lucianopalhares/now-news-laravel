@extends('layouts.site.app')

@section('content')

<div id="main-wrapper">
	<div class="wrapper style1">
		<div class="inner">

			<section class="container box feature1">
				<div class="row">
					<div class="col-12">
						<header class="first major">
							<h2>Aqui você encontra as principais noticias</h2>												
						</header>
					</div>
					<div class="col-4 col-12-medium">
					    <section>
							<a href="#" class="image featured"><img src="{{asset('/assets/images/news')}}/pic01.jpg" alt="" /></a>
							<header class="solid">
								<h3>titulo</h3>
								<p>descricao ..</p>
							</header>
						</section>
					</div>
					<div class="col-4 col-12-medium">
						<section>
							<a href="#" class="image featured"><img src="{{asset('/assets/images/news')}}/pic02.jpg" alt="" /></a>
							<header class="second icon solid fa-cog">
								<h3>titulo </h3>
								<p>descricao ..</p>
							</header>
						</section>
					</div>
					<div class="col-4 col-12-medium">
						<section>
							<a href="#" class="image featured"><img src="{{asset('/assets/images/news')}}/pic03.jpg" alt="" /></a>
							<header class="second icon solid fa-chart-bar">
                                <h3>titulo</h3>
                                <p>descricao ...</p>
						    </header>
						</section>
					</div>
				</div>
            </section>
            
		</div>
	</div>
				
	<div class="wrapper style3">
		<div class="inner">
		    <div class="container">
				<div class="row">
				    <div class="col-8 col-12-medium">
										
						<section class="box article-list">
							<h2 class="icon fa-file-alt">Noticias Recentes</h2>

							<article class="box excerpt">
								<a href="#" class="image left"><img src="{{asset('/assets/images/news')}}/pic04.jpg" alt="" /></a>
								<div>
								    <header>
                                        <span class="date">25 Janeiro</span>
                                        <h3><a href="#">titulo</a></h3>
									</header>
									<p>descricao.</p>
								</div>
							</article>
											
							<article class="box excerpt">
								<a href="#" class="image left"><img src="{{asset('/assets/images/news')}}/pic05.jpg" alt="" /></a>
								<div>
									<header>
										<span class="date">01 Janeiro 20</span>
										<h3><a href="#">titulo</a></h3>
									</header>
									<p>descricao.</p>
								</div>
							</article>
											
							<article class="box excerpt">
							    <a href="#" class="image left"><img src="{{asset('/assets/images/news')}}/pic06.jpg" alt="" /></a>
								<div>
									<header>
										<span class="date">14 de Julho</span>
										<h3><a href="#">titulo</a></h3>
									</header>
									<p>descricao.</p>
								</div>
							</article>

						</section>
					</div>
					<div class="col-4 col-12-medium">
									
						<section class="box spotlight">
							<h2 class="icon fa-file-alt">Mais Lida</h2>
							<article>
								<a href="#" class="image featured"><img src="{{asset('/assets/images/news')}}/pic07.jpg" alt=""></a>
                                <header>
                                    <h3><a href="#">Categoria</a></h3>
                                    <p>titulo.</p>
                                </header>
                                <p>descricao.</p>
                                <footer>
                                    <a href="#" class="button alt icon solid fa-file-alt">Continuar Lendo</a>
                                </footer>
                            </article>
					    </section>

				    </div>
				</div>
			</div>
		</div>
    </div>
</div>
@endsection