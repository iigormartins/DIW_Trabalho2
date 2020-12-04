<?php require_once 'header.php' ?>   

<!-- Releases -->
<section id="releases" class="custom-section custom-padding-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="custom-header-section release-header ">
                    <h2 class="text-weight-bold"><b>Lançamentos</b></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-custom" style="min-height: 410px;">
                    <ol class="carousel-indicators" id="LancamentosSeletores" style="margin-bottom: -15px;">
                    <!-- Populado pela API -->
                    </ol>
                    <div class="carousel-inner" id="Lancamentos">
                        <!-- Populado pela API -->
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured -->
<section id="featured" class="custom-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="custom-header-section">
                    <h2 class="text-weight-bold"><b>Em destaque</b></h2>
                </div>
            </div>
            <div class="col">
                <div class="custom-header-section">
                    <div class="dropdown">
                        <button class="btn btn-white btn-category dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categoria: TODOS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Aventura</a>
                            <a class="dropdown-item" href="#">Romance</a>
                            <a class="dropdown-item" href="#">Comédia</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="EmDestaque">
            
        </div>
        <div class="row button-custom-more">
            <div class="col-auto mr-auto"></div>
            <div class="col-auto">
                <button type="button" class="btn btn-dark d-flex align-items-center fas fa-plus" id="carregarEmDestaque">
                    <span>Carregar mais Filmes</span>
                </button>  
            </div>             
        </div>
    </div>
</section>

<!-- Rating -->
<section id="ratings" class="custom-padding-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ratings-header custom-header-section"> 
                    <h2 class="text-weight-bold"><b>Últimas avaliações</b></h2>
                </div>
            </div>
        </div>

        <div class="row custom-rating">
            <div class="col">
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-user-circle" style="font-size: -webkit-xxx-large"></i>
                    </div>
                    <div div class="col-10">
                        <p class=" text-weight-bold">Nome do Avaliador</p>

                        <p><strong>Avaliação:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum eveniet harum nemo nobis! Quasi, deleniti, explicabo dolor ducimus expedita perspiciatis ex molestias nostrum sunt provident quibusdam libero, totam error harum recusandae blanditiis iste repellendus soluta doloribus minima maiores corrupti enim? Fugiat sit sint saepe, delectus non ratione illum omnis quas. </p>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex custom-rating-star">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div>
                                <strong>02/09/2019</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-user-circle" style="font-size: -webkit-xxx-large"></i>
                    </div>
                    <div div class="col-10">
                        <p class=" text-weight-bold">Nome do Avaliador</p>

                        <p><strong>Avaliação:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum eveniet harum nemo nobis! Quasi, deleniti, explicabo dolor ducimus expedita perspiciatis ex molestias nostrum sunt provident quibusdam libero, totam error harum recusandae blanditiis iste repellendus soluta doloribus minima maiores corrupti enim? Fugiat sit sint saepe, delectus non ratione illum omnis quas. </p>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex custom-rating-star">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div>
                                <strong>02/09/2019</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-user-circle" style="font-size: -webkit-xxx-large"></i>
                    </div>
                    <div div class="col-10">
                        <p class=" text-weight-bold">Nome do Avaliador</p>

                        <p><strong>Avaliação:</strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum eveniet harum nemo nobis! Quasi, deleniti, explicabo dolor ducimus expedita perspiciatis ex molestias nostrum sunt provident quibusdam libero, totam error harum recusandae blanditiis iste repellendus soluta doloribus minima maiores corrupti enim? Fugiat sit sint saepe, delectus non ratione illum omnis quas. </p>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex custom-rating-star">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div>
                                <strong>02/09/2019</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row button-custom-more">
            <div class="col-auto mr-auto"></div>
            <div class="col-auto">
                <button type="button" class="btn btn-dark d-flex align-items-center fas fa-plus">
                    <span>Carregar mais Avaliações</span>
                </button>  
            </div>             
        </div>
    </div>
</section>

<!-- Interviews -->
<section id="interviews" class="custom-section custom-padding-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ratings-header custom-header-section"> 
                    <h2 class="text-weight-bold"><b>Entrevistas & Making of</b></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <iframe src="https://www.youtube.com/embed/GvUrp_rLyfU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <p> <strong>Filme:</strong> Perdido em Marte </p>
                        </div>
                        <div>
                            <strong>Diretor:</strong> Ridley Scott
                        </div>
                        <div>
                            <span>
                                <strong>Roteiro:</strong> ‎Drew Goddard
                            </span>
                            <span>
                                <strong>Estreia:</strong> 01/10/2015
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <iframe src="https://www.youtube.com/embed/GvUrp_rLyfU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <p> <strong>Filme:</strong> Perdido em Marte </p>
                        </div>
                        <div>
                            <strong>Diretor:</strong> Ridley Scott
                        </div>
                        <div>
                            <span>
                                <strong>Roteiro:</strong> ‎Drew Goddard
                            </span>
                            <span>
                                <strong>Estreia:</strong> 01/10/2015
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <iframe src="https://www.youtube.com/embed/GvUrp_rLyfU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <p> <strong>Filme:</strong> Perdido em Marte </p>
                        </div>
                        <div>
                            <strong>Diretor:</strong> Ridley Scott
                        </div>
                        <div>
                            <span>
                                <strong>Roteiro:</strong> ‎Drew Goddard
                            </span>
                            <span>
                                <strong>Estreia:</strong> 01/10/2015
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row button-custom-more">
            <div class="col-auto mr-auto"></div>
            <div class="col-auto">
                <button type="button" class="btn btn-dark d-flex align-items-center fas fa-plus">
                    <span>Carregar mais Filmes</span>
                </button>  
            </div>             
        </div>
    </div>
</section>

<!-- Novidades e Sobre -->
<main id="news" class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <div class="col">
                    <div class="custom-header-section">
                    <h2 class="text-weight-bold"><b>Novidades</b></h2>
                    </div>
                </div>
            </div>
            <div class="row news-custom-div">
                <div class="col-sm-4">
                    <div class="news-card d-flex">
                        <div class="d-flex align-items-center news-custom">
                            <img src="https://core360.com.br/shop/skin/frontend/base/default/lib/jlukic_semanticui/examples/assets/images/wireframe/image.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-flex flex-column justify-content-between">
                        <div class="row">
                            <div class="col news-custom">
                                <h3 class="text-weight-bold"><b>Título da matéria</b></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col news-custom">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, omnis dolorum nulla repudiandae mollitia esse? Eligendi voluptatem eum, quaerat placeat, eveniet molestias ad beatae mollitia eaque et magnam rem aut!</p>
                            </div>
                        </div>
                        <div class="row  no-gutters justify-content-start">
                            <div class="col-auto news-custom">
                                <h5><span class="badge badge-secondary">Hollywood</span></h5>
                            </div>
                            <div class="col-auto news-custom">
                                <h5><span class="badge badge-secondary">Oscar</span></h5>
                            </div>
                            <div class="col-auto news-custom">
                                <h5><span class="badge badge-secondary">Melhor Filme</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row news-custom-div">
                <div class="col-sm-4">
                    <div class="news-card d-flex">
                        <div class="d-flex align-items-center news-custom">
                            <img src="https://core360.com.br/shop/skin/frontend/base/default/lib/jlukic_semanticui/examples/assets/images/wireframe/image.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-flex flex-column justify-content-between">
                        <div class="row">
                            <div class="col news-custom">
                                <h3 class="text-weight-bold"><b>Título da matéria</b></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col news-custom">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, omnis dolorum nulla repudiandae mollitia esse? Eligendi voluptatem eum, quaerat placeat, eveniet molestias ad beatae mollitia eaque et magnam rem aut!</p>
                            </div>
                        </div>
                        <div class="row  no-gutters justify-content-start">
                            <div class="col-auto news-custom">
                                <h5><span class="badge badge-secondary">Hollywood</span></h5>
                            </div>
                            <div class="col-auto news-custom">
                                <h5><span class="badge badge-secondary">Oscar</span></h5>
                            </div>
                            <div class="col-auto news-custom">
                                <h5><span class="badge badge-secondary">Melhor Filme</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row news-custom-div-last">
                <div class="col-sm-4">
                    <div class="news-card d-flex">
                        <div class="d-flex align-items-center news-custom">
                            <img src="https://core360.com.br/shop/skin/frontend/base/default/lib/jlukic_semanticui/examples/assets/images/wireframe/image.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-flex flex-column justify-content-between">
                        <div class="row">
                            <div class="col news-custom">
                                <h3 class="text-weight-bold"><b>Título da matéria</b></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col news-custom">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, omnis dolorum nulla repudiandae mollitia esse? Eligendi voluptatem eum, quaerat placeat, eveniet molestias ad beatae mollitia eaque et magnam rem aut!</p>
                            </div>
                        </div>
                        <div class="row  no-gutters justify-content-start">
                            <div class="col-auto news-custom">
                                <h5><span class="badge badge-secondary">Hollywood</span></h5>
                            </div>
                            <div class="col-auto news-custom">
                                <h5><span class="badge badge-secondary">Oscar</span></h5>
                            </div>
                            <div class="col-auto news-custom">
                                <h5><span class="badge badge-secondary">Melhor Filme</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <!-- About -->
            <div class="row">
                <div class="col">
                    <div class="custom-header-section">
                        <h2 class="text-weight-bold"><b>Sobre</b></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="news-custom-text">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, modi amet autem similique sequi possimus vitae nobis veniam earum recusandae sapiente eum repellat quae ea id suscipit fuga quisquam dolorum harum aliquid, iusto ullam saepe totam. Tempora fugit illo quasi. </p>
                    </div>
                </div>
            </div>
            <!-- Editors -->
            <div class="row">
                <div class="col">
                    <div class="custom-header-section">
                        <h2 class="text-weight-bold"><b>Editorial</b></h2>
                    </div>
                </div>
            </div>            
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <div class="mr-2 mb-2">
                            <i class="fas fa-user"></i>
                        </div>
                        <strong class="mr-2">Redação:</strong> 
                        <span>Nome do Redator(a)</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <div class="mr-2 mb-2">
                            <i class="fas fa-user"></i>
                        </div>
                        <strong class="mr-2">Pesquisa:</strong> 
                        <span>Nome do Pesquisador(a)</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <div class="mr-2 mb-2">
                            <i class="fas fa-user"></i>
                        </div>
                        <strong class="mr-2">Gerente Geral:</strong> 
                        <span>Nome do Editor(a) Chefe</span>
                    </div>
                </div>
            </div>
            <!-- Social -->
            <div class="row">
                <div class="col">
                    <div class="custom-header-section">
                        <h2 class="text-weight-bold"><b>Redes Sociais</b></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center no-gutters">
                <div class="col">
                    <div class="social-custom-button">
                        <button type="button" class="btn d-flex align-items-center fab fa-facebook-square"></button> 
                    </div>
                </div>
                <div class="col">
                    <div class="social-custom-button">
                        <button type="button" class="btn d-flex align-items-center fab fa-twitter-square"></button> 
                    </div>
                </div>
                <div class="col">
                    <div class="social-custom-button">
                        <button type="button" class="btn d-flex align-items-center fab fa-instagram-square"></button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<?php require_once 'footer.php' ?>
