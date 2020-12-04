$(document).ready(async() => {
    const filmesEmDestaque = await getFilmesPopulares();
    await insereDestaques(filmesEmDestaque);
    const filmesLancamento = await getFilmesLancamentos();
    await insereLancamentos(filmesLancamento);

    $('#carregarEmDestaque').click(function(){
        botaoCarregarDestaques();
    })
});

// ================================================================================================================
// API FUNCTION
const token = "eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI4YThmYzgwNjYwNjZmNjkxMWJlMzRkOTA1NWU1ZDJhOCIsInN1YiI6IjVmYjQzYzFjZWM0NTUyMDAzZGZhOWZkNCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.B7ph4rUJhE47FnWoYXKx32KiOkTmWq5KAmoGR4F1e00";

// Requisições API
async function getTheMovieDB(url) {
    try {
        const responsePromiss = await fetch("https://api.themoviedb.org/3/" + url, {
            method: "GET",
            headers: getHeaders()
        });

        const response = await responsePromiss.json();
        return response;

    } catch (error) {
        return null;
    }
}

const getHeaders = () => {
    const headers = new Headers();
    headers.append("Authorization", "Bearer "+ token);
    headers.append("Content-Type", "application/json");

    return headers;
}
// ================================================================================================================

// ================================================================================================================
// Get
async function getDetalheFilme(filmeId) {
    try{
        const movie = await getTheMovieDB(`/movie/${filmeId}?region=BR&language=pt-BR`);

        return movie;
    } catch(err) {
        return null;
    }
}

async function getCategorias(categorias) {
    let html = "";

    categorias.forEach((category, index) => {
        const flag = `
            <div class="flag${index !== 0 ? " ml-2" : ""}"> 
                <div class="inner-flag">
                    ${category.name}
                </div>
            </div>
        `;

        html+= flag;
    });

    return html;
}

async function getFilmesPopulares() {
    try{
        const response = await getTheMovieDB("/movie/popular?language=pt-BR");
        const popular = response.results;

        return popular;
    } catch(err) {
        return null;
    }
}

async function getFilmesLancamentos() {
    try{
        const response = await getTheMovieDB("/movie/now_playing?region=BR&language=pt-BR");
        const nowPlaying = response.results;

        return nowPlaying;
    } catch(err) {
        return null;
    }
}
// ================================================================================================================

// ================================================================================================================
// Em Destaque Function
function insereDestaques(filmesEmDestaque) {
    const container = $("#EmDestaque");
    var contador = 0;

    filmesEmDestaque.forEach(async(filme) => {
        const filmeDetalhes = await getDetalheFilme(filme.id);

        if(filme.poster_path && filmeDetalhes.homepage) {
            let anoLancamento = new Date(filme.release_date).getFullYear();
            const column = `
                            <div class="col-sm-3 ${contador  < 3 ? "ativo" : "oculto"}" id="EmDestaque_${contador}">
                                <figure class="figure">
                                    <a href="https://www.imdb.com/title/${filmeDetalhes.imdb_id}" target="_blank">
                                        <img src="https://image.tmdb.org/t/p/w500${filme.poster_path}" class="figure-img img-fluid rounded" alt="${filme.title}" style="min-height: 390px;">
                                    </a>
                                    <figcaption class="figure-caption"><b>${filme.title}</b> (${anoLancamento})</figcaption>
                                </figure>
                            </div>`;

            container.append(column);
            if(contador > 3) Mudarestado(`EmDestaque_${contador}`);
            contador++;
        }
    });
}

// Lancamento Function
function insereLancamentos(filmesLancamento){
    const container = $("#Lancamentos");
    const containerSeletores = $("#LancamentosSeletores");

    filmesLancamento.forEach(async(filme, index) => {
        const filmeDetalhes = await getDetalheFilme(filme.id);

        if(filme.poster_path && filme.overview) {
            let anoLancamento = new Date(filme.release_date).getFullYear();
            let dataLancamento = new Date(filme.release_date).toLocaleDateString();
            let categorias = "";
            filmeDetalhes.genres.forEach((categoria, index) => {
                categorias =  categorias +" "+ categoria.name+",";
            });

            const carouselContainer = `<div class="carousel-item ${index === 0 ? " active" : ""}">
                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-3">
                                            <figure class="figure">
                                                <a href="#" target="_blank">
                                                    <img src="https://image.tmdb.org/t/p/w500${filme.poster_path}" class="figure-img img-fluid rounded" alt="${filme.title}">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col">
                                                <h2 class="text-weight-bold">${filme.title} (${anoLancamento})</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <p><i class="far fa-calendar-alt"></i>   ${dataLancamento}</p>
                                                </div>
                                                <div class="col-auto">
                                                    <p><i class="far fa-bookmark"></i>   ${categorias.substring(0,categorias.length -1)}</p>
                                                </div>
                                                <div class="col-auto">
                                                    <p><i class="far fa-clock"></i>  ${filmeDetalhes.runtime} m</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="d-flex">
                                                        <div class="custom-rating-star">
                                                            <i class="${filme.vote_average >= 1 ? "fas" : "far"} fa-star"></i>
                                                            <i class="${filme.vote_average >= 2 ? "fas" : "far"} fa-star"></i>
                                                            <i class="${filme.vote_average >= 3 ? "fas" : "far"} fa-star"></i>
                                                            <i class="${filme.vote_average >= 4 ? "fas" : "far"} fa-star"></i>
                                                            <i class="${filme.vote_average >= 5 ? "fas" : "far"} fa-star"></i>
                                                            <i class="${filme.vote_average >= 6 ? "fas" : "far"} fa-star"></i>
                                                            <i class="${filme.vote_average >= 7 ? "fas" : "far"} fa-star"></i>
                                                            <i class="${filme.vote_average >= 8 ? "fas" : "far"} fa-star"></i>
                                                            <i class="${filme.vote_average >= 9 ? "fas" : "far"} fa-star"></i>
                                                            <i class="${filme.vote_average >= 10 ? "fas" : "far"} fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <p>${filme.vote_average}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="carrousel-custom-text">
                                                        <span><b>Sinopse:</b></span><p>${filme.overview}</p>
                                                    </div> 
                                                </div>
                                            </div>
                                            
                                        </div> 
                                    </div>
                                </div>`;

            const carouselSeletores = `<li data-target="#carouselExampleIndicators" data-slide-to="${index}" ${index} === 0 ? class="active" : ""></li>`;
            
    
            container.append(carouselContainer);
            containerSeletores.append(carouselSeletores);
        }
    });
}

// Ocultar Contudo Pagina
function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    if(display == "none")
        document.getElementById(el).style.display = 'block';
    else
        document.getElementById(el).style.display = 'none';
}

function botaoCarregarDestaques(){
    const qtdItens = $('#EmDestaque .col-sm-3').length;
    const qtdItensAtivos =  $('#EmDestaque .ativo').length;

    if(qtdItensAtivos < qtdItens){
        let qtdContainer = 0;

        if(qtdItens - qtdItensAtivos > 4) qtdContainer = 4;
        else qtdContainer = qtdItens - qtdItensAtivos -1;

        for(var i = 1 ; i <= qtdContainer; i++){
            Mudarestado(`EmDestaque_${qtdItensAtivos+i}`);
            $(`#EmDestaque_${qtdItensAtivos+i}`).removeClass('oculto');
            $(`#EmDestaque_${qtdItensAtivos+i}`).addClass('ativo');
        }
    }
}