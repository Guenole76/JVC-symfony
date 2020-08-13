<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
	/**
     * @Route("/", name="accueil")
     */
	public function accueil()
    {
		 return $this->render('truc/notifications.html.twig',
		 [
            'user_first_name' => "Nicolas",
            'notifications' => 42,
			'cafe' => 74,
			'users' => [
				'Raphaël',
				'Guenole',
				'Alexandre'
			],
            'images' => [
                 'https://www.pokepedia.fr/images/thumb/1/17/Dracaufeu-RFVF.png/250px-Dracaufeu-RFVF.png',
                'https://www.pokepedia.fr/images/thumb/4/42/Florizarre-RFVF.png/250px-Florizarre-RFVF.png',
                'https://www.pokepedia.fr/images/thumb/2/24/Tortank-RFVF.png/250px-Tortank-RFVF.png',
                'https://img.resized.co/dexerto-fr/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL2ltYWdlcy5kZXhlcnRvLmZyXFxcL3VwbG9hZHNcXFwvMjAyMFxcXC8wN1xcXC8yNDE4MzA0NFxcXC95b25lLWFubm9uY2UtY29tbWUtMTUwZS1jaGFtcGlvbi1sb2wtY2FwYWNpdGVzLWV0LWRhdGUtZGUtc29ydGllLmpwZ1wiLFwid2lkdGhcIjo2MjAsXCJoZWlnaHRcIjozNDcsXCJkZWZhdWx0XCI6XCJodHRwczpcXFwvXFxcL3d3dy5kZXhlcnRvLmNvbVxcXC9hc3NldHNcXFwvaW1nXFxcL3BsYWNlaG9sZGVyLmpwZ1wiLFwib3B0aW9uc1wiOltdfSIsImhhc2giOiI5ZmY4ZDVmMTcyMmNkOGY4OTg1N2Q2ZDFmMWVmYTU4YmU1OWU0YzRlIn0=/yone-annonce-comme-le-150e-champion-de-lol-capacites-et-date-de-sortie.jpg',
                'https://www.dailyesports.gg/wp-content/uploads/2020/07/Lillia-Splash-800x400.jpg',
                'https://estnn.com/wp-content/uploads/2020/07/SettBaseSplash_FINAL.jpg',
                'https://images.dexerto.fr/uploads/2020/02/16103339/pentakill-accidentel-league-of-legends-montre-a-quel-point-aphelios-puissant.jpg',                
                'https://i.pinimg.com/originals/31/9e/0a/319e0a65e818f477d00a48784cbfca38.jpg'
            ],

            'articles' => [
                'key1' => 'Pokemon',
                'key2' =>'Yugioh',
                'key3' =>'Hearthstone'
           ]
        ]);
    }
	
}
?>