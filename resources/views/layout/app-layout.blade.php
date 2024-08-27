<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookshop-@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <section class="section__1">
            <div class="header__superior">

                <div class="monedas">
                    <select class="valor">
                        <option value="">USD $</option>
                        <option value="">EUR €</option>
                        <option value="">GBP £</option>
                    </select>
                    <p>Default welcome msj!</p>
                </div>
                              
                <div class="usuario">
                    <a href="#"><i class="fa-solid fa-key fa-rotate-270"></i> Sign in</a>
                    <div class="separador"></div>
                    <a href="#"><i class="fa-solid fa-user-plus"></i> Create an account</a>

                    <div class="lenguaje__menu">
                        <div class="seleccionar__leng"></div>
                        <div>
                            <ul>
                                <li><a href="#" class="es">ES</a></li>
                                <li><a href="#" class="en">EN</a></li>
                                <li><a href="#" class="fr">FR</a></li>
                                <li><a href="#" class="cn">CN</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        
        <section class="section__2">

            <div class="logo__search">

                <div class="logo">
                    <img src="/imagenes/logo-estilo2.jpg" alt="">
                    <b><h2>book</b><br>shop</h2>
                </div>

                <div class="search">
                    <div class="borde">
                        <select class="categ">
                            <option value="">ALL CATEGORIES</option>
                            <option value="">Sample 1</option>
                            <option value="">Sample 2</option>
                            <option value="">Sample 3</option>
                        </select>
                        <div class="separador"></div>
                        <form>
                            <input type="search" class="buscador"  placeholder="Enter search your key" >
                            <button class="btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <a href="/mycart">
                        <button class="btn-cart"><i class="fa-solid fa-cart-shopping"></i>  My cart: 0 item</button>
                    </a>
                    
                </div>
                
            </div>
        </section>
        
        <nav>
            <div class="container__menu">
                <div class="menu__principal"> 
                    <ul>
                        <li><a id="fist_category" href="#"><i class="fa-solid fa-bars"></i> category</a>
                            <div class="categorias">
                                <ul>
                                    <li><a href="/category/electronic">Electronics<i class="fa-solid fa-angle-right"></i></a>
                                        <div class="sub__categorias">
                                            <ul>
                                                <li><h4><b>CLOTHING</b></h4></li>
                                                <li><a href="#">Coats & Jackets</a></li>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Raincoats</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <br>
                                                <li><h4><b>ACCESSORIES</b></h4></li>
                                                <li><a href="#">Watch Fashion</a></li>
                                                <li><a href="#">Bags Fashion</a></li>
                                                <li><a href="#">Lingerie</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                            <div class="img__select"><img src="/libros/electronic.jpg" alt=""></div>
                                        </div>
                                    </li>
                                    <li><a href="/category/Apparel">Apparel<i class="fa-solid fa-angle-right"></i></a>
                                        <div class="sub__categorias">
                                            <ul>
                                                <li><h4><b>CLOTHING</b></h4></li>
                                                <li><a href="#">Coats & Jackets</a></li>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Raincoats</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <br>
                                                <li><h4><b>ACCESSORIES</b></h4></li>
                                                <li><a href="#">Watch Fashion</a></li>
                                                <li><a href="#">Bags Fashion</a></li>
                                                <li><a href="#">Lingerie</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                            <div class="img__select"><img src="/libros/apparel.jpg" alt=""></div>
                                        </div>
                                    </li>
                                    <li><a href="/category/Auto & Bike">Auto & Bike</a></li>
                                    <li><a href="/category/Fiction" class="fiction">Fiction<i class="fa-solid fa-angle-right"></i></a>
                                        <div class="sub__categorias">
                                            <ul>
                                                <li><h4><b>CLOTHING</b></h4></li>
                                                <li><a href="#">Coats & Jackets</a></li>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Raincoats</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <br>
                                                <li><h4><b>ACCESSORIES</b></h4></li>
                                                <li><a href="#">Watch Fashion</a></li>
                                                <li><a href="#">Bags Fashion</a></li>
                                                <li><a href="#">Lingerie</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                            <div class="img__select"><img src="/libros/robinhood.jpg" alt=""></div>
                                        </div>
                                    </li>
                                    <li><a href="/category/Mystery">Mystery<i class="fa-solid fa-angle-right"></i></a>
                                        <div class="sub__categorias">
                                            <ul>
                                                <li><h4><b>CLOTHING</b></h4></li>
                                                <li><a href="#">Coats & Jackets</a></li>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Raincoats</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <br>
                                                <li><h4><b>ACCESSORIES</b></h4></li>
                                                <li><a href="#">Watch Fashion</a></li>
                                                <li><a href="#">Bags Fashion</a></li>
                                                <li><a href="#">Lingerie</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                            <div class="img__select"><img src="/libros/mystery.jpg" alt=""></div>
                                        </div>
                                    </li>
                                    <li><a href="/category/Home & Garden">Home & Garden</a></li>
                                    <li><a href="/category/Beauty & Health">Beauty & Health</a></li>
                                    <li><a href="/category/Technology">Technology</a></li>
                                    <li><a href="/category/Health & Fitness">Health & Fitness</a></li>
                                    <li><a href="/category/History">History</a></li>
                                    <li><a href="/category/Politics & Affairs">Politics & Affairs</a></li>
                                    <li><a href="/category/Shapewear">Shapewear</a></li>
                                </ul>

                            </div>
                        </li> 
                        <li><a href="/home">Home</a></li>
                        <li><a href="/nav/about_us">about us</a></li>
                        <li><a href="/nav/contact_us">contact us</a></li>
                        <li><a href="/nav/blog">blog</a></li>
                    </ul>
                </div>
    
                <div class="telefono">
                    <a href="#"><i class="fa-solid fa-phone"></i>+ 020.566.6666</a>
                </div>
            </div>
        </nav>
        
    </header>

    @yield('content')

    <footer>
        <br/><br/>
		<div class="container__footer">
			<div class="columna">
				<h1 class="logo__footer">Book<span>Shop</span></h1>
				<p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p>

				<div class="social">
					<a class="social-btn"><i class="fab fa-twitter"></i></a>
					<a class="social-btn"><i class="fab fa-facebook"></i></a>
					<a class="social-btn"><i class="fab fa-youtube"></i></a>
					<a class="social-btn"><i class="fab fa-linkedin-in"></i></a>
				</div>

			</div>
			<div class="columna">
				<h5>Direccion</h5>
				<p><i class="fa fa-map-marker-alt me-3"></i>Ave. Duarte NO.234 Santo Dgo. DN</p>
				<p><i class="fa fa-phone-alt me-3"></i>+020.566.6666</p>
				<p><i class="fa fa-envelope me-3"></i>info@example.com</p>
			</div>
			<div class="columna">
				<h5>Enlaces</h5>
				<a class="btn btn-link">About Us</a>
				<a class="btn btn-link">Contact Us</a>
				<a class="btn btn-link">Our Services</a>
				<a class="btn btn-link">Term &amp; Condition</a>
				<a class="btn btn-link">Support</a>

			</div>
			<div class="columna">
				<h5>Newsletter</h5>
				<p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
				<div class="input__footer">
					<input class="input" type="text" placeholder="Your Email"/>
					<button type="button" class="signbtn">SignUp</button>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<br/><br/>
		<div class="container-fluid">
			<div class="container">
                <div class="columna-2">
                    <p class="footb">Design By <a href="#">Hamlet Santana</a> All Right Reserved.</p>
                </div>
			    <div class="clearfix"></div>
		    </div>
		</div>
		<br/><br/>
    </footer>
</body>
</html>