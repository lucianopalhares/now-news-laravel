<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->

        <link rel="stylesheet" href="{{ asset('css/site.css') }}" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

				<div id="header-wrapper">
					<div class="container">

							<header id="header">
								<div class="inner">

										<h1><a href="index.html" id="logo">{{ config('app.name', 'Laravel') }}</a></h1>

										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="index.html">Home</a></li>
												<li>
													<a href="#">Dropdown</a>
													<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Magna phasellus</a></li>
														<li>
															<a href="#">Phasellus consequat</a>
															<ul>
																<li><a href="#">Lorem ipsum dolor</a></li>
																<li><a href="#">Phasellus consequat</a></li>
																<li><a href="#">Magna phasellus</a></li>
																<li><a href="#">Etiam dolore nisl</a></li>
															</ul>
														</li>
														<li><a href="#">Veroeros feugiat</a></li>
													</ul>
												</li>
												<li><a href="left-sidebar.html">Left Sidebar</a></li>
												<li><a href="right-sidebar.html">Right Sidebar</a></li>
												<li><a href="no-sidebar.html">No Sidebar</a></li>
											</ul>
										</nav>

								</div>
							</header>

							<div id="banner">
								<h2><strong>Now News:</strong> Noticia em primeira mão!
								<br />
								Feito com Laravel 8 </h2>
                                <form>
                                <div class="row">                                    
                                    <div class="col-3"></div>
							        <div class="col-4">                                
                                        
                                        <input type="text" name="newslater" placeholder="Buscar noticia">
                                        
                                    </div>
                                    <div class="col-2">
                                
                                        <button type="button">Buscar</button>

                                    </div>
                                    <div class="col-3"></div>                  
                                    
                                </div>
								</form>
							</div>

					</div>
                </div>


                @yield('content')

				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<section>
									<h2>Sobre a empresa</h2>
									<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
								</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

									<section>
										<h2>Links Uteis</h2>
										<ul class="divided">
											<li><a href="#">Link 1</a></li>
											<li><a href="#">Link 2</a></li>
											<li><a href="#">Link 3</a></li>
											<li><a href="#">Link 4</a></li>
										</ul>
									</section>

							</div>
							<div class="col-6 col-12-medium imp-medium">

									<section>
                                        <h2>Rede Social</h2>                                        
										<div>
											<div class="row">
												<div class="col-6 col-12-small">
													<dl class="contact">
														<dt>Twitter</dt>
														<dd><a href="#">@meu-twitter</a></dd>
														<dt>Facebook</dt>
														<dd><a href="#">facebook.com/test</a></dd>
														<dt>WWW</dt>
														<dd><a href="#">meusite-com.br</a></dd>
														<dt>Email</dt>
														<dd><a href="#">meuemail@email.com</a></dd>
													</dl>
												</div>
												<div class="col-6 col-12-small">
													<dl class="contact">
														<dt>Endereco</dt>
														<dd>
															Rua 58<br />
															Sao Paulo, SP<br />
															Brasil
														</dd>
														<dt>Telefone</dt>
														<dd>(11)6949595959</dd>
													</dl>
												</div>
											</div>
										</div>
									</section>

							</div>
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Todos os Direitos Reservados</li><li>Feito por: <a target="_blank" href="http://luciano.desenvolve.tk">Luciano O Desenvolvedor</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

		</div>

			<script src="{{ asset('/') }}/js/jquery.min.js"></script>
			<script src="{{ asset('/') }}/js/jquery.dropotron.min.js"></script>
			<script src="{{ asset('/') }}/js/browser.min.js"></script>
			<script src="{{ asset('/') }}/js/breakpoints.min.js"></script>
			<script src="{{ asset('/') }}/js/util.js"></script>
			<script src="{{ asset('/') }}/js/main.js"></script>

	</body>
</html>
                


