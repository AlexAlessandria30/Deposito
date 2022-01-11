<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function Homepage()
    {
        return view('welcome');
    }

    public function persone()
    {
        $dottori = [
            ['nome' => 'Michele', 'cognome' => 'Rossi', 'eta' => '31', 'img' => '/img/immagineD.jpg'],
            ['nome' => 'Matteo', 'cognome' => 'Blu', 'eta' => '22', 'img' => '/img/immagineD.jpg'],
            ['nome' => 'Giulia', 'cognome' => 'Bianco', 'eta' => '38', 'img' => '/img/immagineD.jpg'],
            ['nome' => 'Marika', 'cognome' => 'Verdi', 'eta' => '44', 'img' => '/img/immagineD.jpg'],
            ['nome' => 'Giorgio', 'cognome' => 'zhou', 'eta' => '25', 'img' => '/img/immagineD.jpg'],
            ['nome' => 'Salvatore', 'cognome' => 'Lii', 'eta' => '30', 'img' => '/img/immagineD.jpg'],
        ];
        return view('chiSiamo', ['chiSiamo' => $dottori]);
    }

    public function servizio()
    {
        $servizi = [
            ['nome' => 'Pulizia dentale', 'operazione' => 'Ti doniamo un sorriso brillante', 'img' => '/img/servizi.jpg'],
            ['nome' => 'Controllo dentale', 'operazione' => 'Controlliamo che la tua dentatura sia ottima', 'img' => '/img/servizi.jpg'],
            ['nome' => 'Intervento dentale', 'operazione' => 'Ricordi il dente che ti faceva tanto male fissa un appuntamento e opereremo', 'img' => '/img/servizi.jpg'],
            ['nome' => 'Installazione o rimozione Apparecchio',   'operazione' => 'Stabiliremo se è il caso di montare o rimuovere l\'apparecchio', 'img' => '/img/servizi.jpg'],

        ];

        return view('servizi', ['servizi' => $servizi]);
    }

    public function visual($title)
    {

        $articoloCompleto = [
            ['nome' => 'Pulizia dentale', 
            'operazione' => "La pulizia dei denti professionale detta anche igiene dentale o detartrasi serve a mantenere sana la dentatura naturale rimuovendo completamente tartaro e placca dentale in modo da prevenire patologie importanti come carie e parodontite (malattia delle gengive); inoltre, una buona igiene è indispensabile a far durare nel tempo il lavoro del dentista evitando di spendere altro denaro per il futuro.
            La pulizia dei denti quotidiana che si fa a casa non basta a rimuovere tutta la placca e il tartaro sopra gengivale e di scuro non riesce a rimuovere quello sotto gengivale che molto spesso rappresenta la causa principale di alcune malattie gengivali come parodontite e ", 
            'img' => '/img/servizi.jpg'],
            ['nome' => 'Controllo dentale', 
            'operazione' => "In cosa consiste una visita odontoiatrica?
            Prima di tutto è importante trovare un dentista con cui ci si trovi a proprio agio. Una volta trovato il dentista bisogna fissare un appuntamento per una visita di controllo, allo scopo di prevenire eventuali problemi o diagnosticarli prima che peggiorino.
            Durante la prima visita il dentista farà uno studio completo dello stato di salute della vostra bocca. Assicuratevi di comunicare al dentista, nelle visite successive, eventuali cambiamenti dello stato di salute della vostra bocca.
            Molte visite sono semplicemente di controllo. Controlli regolari (idealmente ogni sei mesi) aiuteranno i vostri denti a mantenersi puliti, a durare di più e a prevenire lo sviluppo di problemi fastidiosi.
            Una pulizia completa
            Spesso i controlli includono una completa pulizia dei denti, da parte del dentista o dell'igienista dentale. Con l'utilizzo di strumenti appositi, l'igienista gratta sotto il margine gengivale rimovendo la placca che si è formata e il tartaro che causa problemi gengivali, carie, alitosi e altri problemi. L'igienista o il dentista potrebbe inoltre lucidare i denti o passare il filo interdentale.
            Un esame completo
            Il dentista esegue un esame completo dei denti, delle gengive e della bocca per cercare segni di malattie o altri problemi, per aiutarvi a mantenere una buona salute orale e per evitare che eventuali problemi diventano più seri, diagnosticandoli e curandoli il prima possibile.", 
            'img' => '/img/servizi.jpg'],
            
        
            ['nome' => 'Intervento dentale', 
            'operazione' => 'Un impianto dentale è un dispositivo protesico fisso, utilizzato per la copertura dello spazio lasciato libero da uno o più denti mancanti o estratti. 
              Impianti dentaliLe parti che costituiscono gli impianti dentali sono sostanzialmente tre: la vite endossea, l\'abutment e la protesi dentaria.
             La vite endossea mima la radice di un dente vero, pertanto deve inserirsi nel tessuto osseo mandibolare o mascellare. L\'abutment è l\'elemento di raccordo tra la vite endossea e la protesi dentaria; è detto anche componente transmucosa, perché è in stretto rapporto con la mucosa gengivale. Infine, la protesi dentaria è ciò che prende il posto dei denti mancanti; quindi, è una dentatura artificiale. 
             L\'installazione di un impianto dentale è un intervento chirurgico a tutti gli effetti, che prevede generalmente l\'anestesia locale e una modesta sedazione. Come in ogni intervento chirurgico, c\'è un certo rischio di complicanze.
             Il materiale d\'elezione degli impianti dentali è il titanio nella sua forma pura; negli ultimi tempi, tuttavia, sta prendendo piede anche l\'utilizzo di impianti dentali in zirconia.
             Se gestito nella maniera adeguata, un impianto dentale ben installato può durare tranquillamente 10-15 anni. La prognosi, quindi, tende a essere favorevole.', 
             
             'img' => '/img/servizi.jpg'],

            ['nome' => 'Installazione o rimozione Apparecchio',   
            'operazione' => 'I denti storti possono essere un vero problema, non importa quanti anni hai o in che condizioni si trova la tua bocca. Solitamente l’autostima della persona viene intaccata da questa situazione.
            Solitamente i dentisti tengono sotto controllo la crescita dei denti nei bambini. Non appena i denti permanenti iniziano ad emergere, è possibile seguirne la crescita e la formazione. Questo serve per essere sicuri che siano sani e che non ci siano problemi. Nei bambini i denti storti possono essere sistemati in modo più veloce. Per questo è consigliabile iniziare ad andare dal dentista già dai 5 anni. I tessuti a quest’età sono più malleabili e flessibili rispetto all’età adulta. Oltre al lato pratico, è meglio sistemare i denti il prima possibile per evitare difficoltà sociali ed emotive.
            Molti adolescenti temono il momento il cui il dentista potrebbe consigliare di mettere l’apparecchio. Alcuni arrivano a rifiutare totalmente di metterlo. Sebbene gli apparecchi moderni siano molto meno evidenti dei vecchi modelli, sono ancora visibili. Questo a volte causa problemi negli adolescenti che stanno passando una fase delicata della loro vita. È possibile evitare questo problema occupandosi dei denti fin dalla tenera età. Visite regolari aiutano a trovare il problema il prima possibile.',
            
            'img' => '/img/servizi.jpg'],
        ];

        foreach ($articoloCompleto as $item) {
            if ($item['nome'] == $title) {
                return view('visualPage', ['visualPage' => $item]);
            }
        }
    }

  public function visualPP($title){
    $dottore= [
        ['nome' => 'Michele', 'cognome' => 'Rossi', 'eta' => '31', 'img' => '/img/presentazione.jpg','presentazione'=>'Ciao '],
        ['nome' => 'Matteo', 'cognome' => 'Blu', 'eta' => '22', 'img' => '/img/presentazione.jpg','presentazione'=>'Ciao '],
        ['nome' => 'Giulia', 'cognome' => 'Bianco', 'eta' => '38', 'img' => '/img/presentazione.jpg','presentazione'=>'Ciao '],
        ['nome' => 'Marika', 'cognome' => 'Verdi', 'eta' => '44', 'img' => '/img/presentazione.jpg','presentazione'=>'Ciao '],
        ['nome' => 'Giorgio', 'cognome' => 'zhou', 'eta' => '25', 'img' => '/img/presentazione.jpg','presentazione'=>'Ciao '],
        ['nome' => 'Salvatore', 'cognome' => 'Lii', 'eta' => '30', 'img' => '/img/presentazione.jpg','presentazione'=>'Ciao '],
    ];
    foreach ($dottore as $item) {
       if($item['nome']== $title){
           return view('visualPP',['visualPP'=>$item]);
       }
    }
  }
}
