 
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
            <img src="{{asset('img/logoheader.jpg')}}" style="width: 50px;" alt="logo site">
                <a class="navbar-brand" href="#page-top">Start Gerenciamento</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Comece Gratuitamente</a></li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('register') }}">Registro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
                <div class="container position-relative">
                    <div class="row ">
                        <div class="col-xl-6">
                            <div class="text-center text-white">
                            <h1 class="mb-5">Organize suas tarefas e aumente sua produtividade</h1>
                            <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Email address input-->
                                  <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Email" data-sb-validations="required,email" />
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Endereço de Email não é válido </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-primary btn-lg " id="submitButton" type="submit">
                                            Faça seu Cadastro. É Gratis</button>
                                        </div>
                                </div>
                               
                               
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Menssagem enviada com Sucesso!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                               
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro ao Enviar Menssagem!</div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>