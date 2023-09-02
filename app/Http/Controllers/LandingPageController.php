<?php


namespace App\Http\Controllers;


use ButterCMS\ButterCMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;


class LandingPageController extends Controller
{
    private static $apiToken = 'c3c37caed6eaa3141e464fc82cab8f83cae7925f';
    private $client;
    public function __construct() {
        $this -> client = new ButterCMS(LandingPageController::$apiToken);
      }


    public function showPage(string $type, string $pageSlug): View
    {
        $menuParams = [
            'page' => '1',
            'page_size' => '10',
            'locale' => 'es-es',
            'preview' => 1
        ];
        $menuCollection =  $this->client->fetchContentFields(['saasnavigation'], $menuParams);
        var_dump($menuCollection);
        $params = [
            'locale' => 'es-es',
            'preview' => 1
        ];
        $page = $this->client->fetchPage($type, $pageSlug, $params);


        return view('landingPage', [
            'pageHero' => $page->getFields()['saasherocomponent'],
            'pageFeatures' => $page->getFields()['saasfeaturescomponent'],
            'pageClients' => $page->getFields()['clientrepeater'][0]['clientreference'],
            'pageTestimonials' => $page->getFields()['quoterepeater'][0]['quotereference'],
            'menus' => $menuCollection['saasnavigation'][0],
            'clientsHeader' => $page->getFields()['clientsheader'],
            'quotesHeader' => $page->getFields()['quotesheader'],
        ]);
    }


    public function showLandingPage(): View
    {
        return $this->showPage('saaslandingpagetype', 'saaslandingpage');
    }


    public function showLandingPageSlug(string $pageSlug): View
    {
        return $this->showPage('laravel_landing_page', $pageSlug);
    }
}
