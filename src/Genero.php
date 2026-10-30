<?php

//Genero.php: terá o enum com os gêneros dos filmes.

/* enum Genero: cria uma enumeração chamada Genero.
case: define uma opção que pode ser utilizada.
Genero::Terror: representa a opção Terror dessa enumeração. */
enum Genero
{
    case Acao;
    case Comedia;
    case Terror;
    case Romance;
    case FiccaoCientifica;
}