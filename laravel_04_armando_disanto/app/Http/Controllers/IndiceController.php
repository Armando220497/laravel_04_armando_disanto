<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndiceController extends Controller
{
    // Dati degli articoli
    protected $articoli = [
        [
            'id' => 1,
            'titolo' => 'L’importanza della sostenibilità ambientale',
            'contenuto' => 'La sostenibilità ambientale è diventata un tema centrale in molti settori, dall’energia all’agricoltura. Sempre più aziende e governi stanno investendo in tecnologie verdi per ridurre l’impatto ambientale.'
        ],
        [
            'id' => 2,
            'titolo' => 'Il futuro del lavoro: telelavoro e smart working',
            'contenuto' => 'Il telelavoro è diventato una realtà per milioni di persone durante la pandemia, e molte aziende stanno valutando di adottare modelli di lavoro flessibile a lungo termine, con vantaggi sia per i lavoratori che per i datori di lavoro.'
        ],
        [
            'id' => 3,
            'titolo' => 'Intelligenza artificiale: opportunità e sfide',
            'contenuto' => 'L’intelligenza artificiale sta rivoluzionando molti settori, dalla medicina all’automazione industriale. Tuttavia, ci sono anche sfide etiche e sociali da affrontare, come la perdita di posti di lavoro e la privacy dei dati.'
        ],
        [
            'id' => 4,
            'titolo' => 'Crisi climatica: come affrontarla',
            'contenuto' => 'La crisi climatica è una delle più grandi sfide globali del nostro tempo. Gli scienziati avvertono che è necessario ridurre drasticamente le emissioni di CO2 per evitare danni irreversibili al pianeta.'
        ],
        [
            'id' => 5,
            'titolo' => 'Tecnologie emergenti nel settore della salute',
            'contenuto' => 'Le tecnologie emergenti, come la telemedicina e l’uso di big data, stanno migliorando la qualità dell’assistenza sanitaria. Questi progressi offrono nuove opportunità per diagnosi più rapide e cure personalizzate.'
        ]
    ];

    public function indiceArticoli()
    {
        $articoliData = $this->articoli; // Usare direttamente $this->articoli

        return view('articoli.indiceArticoli', ['articoli' => $articoliData]);
    }

    public function detailArt($articleId)
    {
        $articolo = null;

        foreach ($this->articoli as $item) {
            if ($item['id'] == $articleId) {
                $articolo = $item;
                break;
            }
        }

        if (!$articolo) {
            abort(404);
        }

        return view('articoli.detailArt', ['articolo' => $articolo]);
    }
}
