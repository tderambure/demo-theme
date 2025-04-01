<?php

namespace App\Tests;

use App\DemoTheme;
use PHPUnit\Framework\TestCase;

class ContextTest extends TestCase
{
    public function testAddToContext()
    {
        // Instancier la classe DemoTheme
        $theme = new DemoTheme();

        // Créer un contexte de test vide
        $context = [];

        // Appeler la fonction add_to_context()
        $modifiedContext = $theme->add_to_context($context);

        // Vérifier que les clés attendues sont présentes dans le contexte modifié
        $this->assertArrayHasKey('stuff', $modifiedContext);
        $this->assertArrayHasKey('notes', $modifiedContext);
        $this->assertArrayHasKey('menu', $modifiedContext);
        $this->assertArrayHasKey('site', $modifiedContext);

        // Vérifier les valeurs des clés
        $this->assertEquals('I am a value set in your functions.php file', $modifiedContext['stuff']);
        $this->assertEquals('These values are available everytime you call Timber::context();', $modifiedContext['notes']);

        // Vérifier que la clé 'site' est une instance de DemoTheme
        $this->assertInstanceOf(DemoTheme::class, $modifiedContext['site']);
    }
}
