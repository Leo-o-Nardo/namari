<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $listRandomIMG = [];
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/187968-800-auto?v=637795941156670000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/187969-800-auto?v=637795941447870000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/187970-800-auto?v=637795941534230000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/187946-800-auto?v=637794223715100000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/187947-800-auto?v=637794223832430000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/187917-800-auto?v=637789078986000000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/187919-800-auto?v=637789079131100000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/187828-800-auto?v=637789003275300000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/187829-800-auto?v=637789003342030000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/184978-800-auto?v=637626023501670000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/184979-800-auto?v=637626023637300000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/182693-800-auto?v=637395268699900000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/182696-800-auto?v=637395269310430000&width=800&height=auto&aspect=true');
        array_push($listRandomIMG, 'https://pandorajoias.vtexassets.com/arquivos/ids/183850-800-auto?v=637540087634370000&width=800&height=auto&aspect=true');

        return view('Home', ['logged' => false, 'listRandomIMG' => $listRandomIMG]);
    }
}
