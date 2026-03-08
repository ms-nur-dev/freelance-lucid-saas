<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LocaleLanguageController extends AbstractController
{
    public function detect(Request $request): Response
    {
        // 1. Detect if the browser is English. If not, fallback to French.
        $locale = $request->getPreferredLanguage(['fr', 'en']) ?? 'fr';

        // 2. Redirect to the homepage with the detected locale
        return $this->redirectToRoute('app_home', ['_locale' => $locale]);
    }
}