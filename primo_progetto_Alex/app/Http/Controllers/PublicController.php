<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function Homepage() {
    return view('welcome');
}

public function persone() {
    $autori = [
        ['nome'=>'Michele' , 'cognome'=> 'Rossi' , 'eta'=>'31','img'=>'/img/img1.jpg'],
        ['nome'=>'Matteo' , 'cognome'=> 'Blu' , 'eta'=>'22','img'=>'/img/img1.jpg'],
        ['nome'=>'Giulia' , 'cognome'=> 'Bianco' , 'eta'=>'38','img'=>'/img/img1.jpg'],
        ['nome'=>'Marika' , 'cognome'=> 'Verdi' , 'eta'=>'44','img'=>'/img/img1.jpg'],
        ['nome'=>'Giorgio' , 'cognome'=> 'zhou' , 'eta'=>'25','img'=>'/img/img1.jpg'],
        ['nome'=>'Salvatore' , 'cognome'=> 'Lii' , 'eta'=>'30','img'=>'/img/img1.jpg'],
    ];
    return view('chiSiamo',['chiSiamo'=> $autori]);
}

public function articolo() {
    $articolo = [
        ['nome'=>'Il caso...' , 'scritto da'=> '1' , 'parla di'=>'questo è un articolo che parla dei primi articoli del nostro articolo 1'],
        ['nome'=>'La lotta contro' , 'scritto da'=> '2' , 'parla di'=>'questo è un articolo che parla dei primi articoli del nostro articolo 2'],
        ['nome'=>'Un caso di' , 'scritto da'=> '3' , 'parla di'=>'questo è un articolo che parla dei primi articoli del nostro articolo 3'],
        ['nome'=>'Il nemico' , 'scritto da'=> '4' , 'parla di'=>'questo è un articolo che parla dei primi articoli del nostro articolo 4'],
        ['nome'=>'La nuova ferrari' , 'scritto da'=> '5' , 'parla di'=>'questo è un articolo che parla dei primi articoli del nostro articolo 5'],
        ['nome'=>'Quanta sfortuna' , 'scritto da'=> '6' , 'parla di'=>'questo è un articolo che parla dei primi articoli del nostro articolo 6'],
    ];

    return view('Articol',['Articol' => $articolo]);

}

public function visual ($title){

    $articoliCompleti = [
        ['nome'=>'Il caso...' , 'articolo'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deserunt cum veritatis dolor labore impedit! Ullam quae aperiam et, ad reiciendis voluptatum nemo veniam similique velit quidem eligendi aliquid possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium corrupti deserunt praesentium modi eaque? Laborum ab alias possimus dolor, sapiente cum recusandae? Tenetur facere nesciunt ex dicta placeat molestiae? Expedita.'],
        ['nome'=>'La lotta contro' , 'articolo'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deserunt cum veritatis dolor labore impedit! Ullam quae aperiam et, ad reiciendis voluptatum nemo veniam similique velit quidem eligendi aliquid possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium corrupti deserunt praesentium modi eaque? Laborum ab alias possimus dolor, sapiente cum recusandae? Tenetur facere nesciunt ex dicta placeat molestiae? Expedita.'],
        ['nome'=>'Un caso di' , 'articolo'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deserunt cum veritatis dolor labore impedit! Ullam quae aperiam et, ad reiciendis voluptatum nemo veniam similique velit quidem eligendi aliquid possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium corrupti deserunt praesentium modi eaque? Laborum ab alias possimus dolor, sapiente cum recusandae? Tenetur facere nesciunt ex dicta placeat molestiae? Expedita.'],
        ['nome'=>'Il nemico' , 'articolo'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deserunt cum veritatis dolor labore impedit! Ullam quae aperiam et, ad reiciendis voluptatum nemo veniam similique velit quidem eligendi aliquid possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium corrupti deserunt praesentium modi eaque? Laborum ab alias possimus dolor, sapiente cum recusandae? Tenetur facere nesciunt ex dicta placeat molestiae? Expedita.'],
        ['nome'=>'La nuova ferrari' , 'articolo'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deserunt cum veritatis dolor labore impedit! Ullam quae aperiam et, ad reiciendis voluptatum nemo veniam similique velit quidem eligendi aliquid possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium corrupti deserunt praesentium modi eaque? Laborum ab alias possimus dolor, sapiente cum recusandae? Tenetur facere nesciunt ex dicta placeat molestiae? Expedita.'],
        ['nome'=>'Quanta sfortuna' , 'articolo'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deserunt cum veritatis dolor labore impedit! Ullam quae aperiam et, ad reiciendis voluptatum nemo veniam similique velit quidem eligendi aliquid possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium corrupti deserunt praesentium modi eaque? Laborum ab alias possimus dolor, sapiente cum recusandae? Tenetur facere nesciunt ex dicta placeat molestiae? Expedita.'],
    ];

    foreach ($articoliCompleti as $item) {
       if ($item['nome'] == $title ) {
        return view('visualPage',['visualPage' => $item]);
       }
    }
}
}
