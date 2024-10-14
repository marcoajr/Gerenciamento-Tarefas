 <!-- Navigat   ion-->
    <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <img src="{{asset('img/logoheader.jpg')}}" style="width: 75px;" alt="logo site">
                <h3 class="navbar-brand">Start Gerenciamento</h3>
               
            </div>
            <div> 
                <a class="btn btn-primary" href="#signup">login</a>
                <a class="btn btn-primary" href="#signup">Registro</a>
            </div>
    </nav>
        <!-- Masthead-->
        <header class="masthead">
                <div class="container position-relative">
                    <div class="row ">
                        <div class="col-xl-6">
                            <div class="text-center text-white">
                            <!-- Page heading-->
                             
                            <h1 class="mb-5">Organize suas tarefas e aumente sua produtividade</h1>
                            <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Email address input-->
                                  <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Email" data-sb-validations="required,email" />
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-primary btn-lg " id="submitButton" type="submit">
                                            Faça seu Cadastro. É Gratis</button></div>
                                </div>
                               
                               
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                               
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>