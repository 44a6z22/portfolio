<?php
    session_start();
// setting the default language to english

    if (isset($_GET['lang'])) {
        $_SESSION['lang'] = $_GET['lang']; // setting the language to whatever language the visitor picked
    } else {
        if (!isset($_SESSION['lang'])) 
        {
            // $_SESSION['lang'] = 'en';
        }
    }
    
    
    // langs array 
    $lang = array(
        'en' => array(
            // infos
            'title' => 'HAMDAOUI Hamza',
            'fullstack' => 'Full-Stack Developer',
            'firstName' => $po->getFirstName(),
            'lastName' => $po->getLastName(),
            'about' => 'about',
            'skills' => 'skills',
            'goback' => 'go back',
            'busy' => "i'm currently working on a project. ",
            'avaliable' => 'i\'m ready to the next project',
            'desc' => $po->desc(),
            'hobbie' => 'Hobbies',
            'browsers' => 'Preferred browser',
            'localisation' => "My location"
        ),
        'fr' => array(
            'title' => 'HAMDAOUI Hamza',
            'firstName' => $po->getFirstName(),
            'lastName' => $po->getLastName(),
            'fullstack' => 'Développeur Full-Stack',
            'about' => 'a propos',
            'skills' => 'competence',
            'goback' => 'l\'acceuil',
            'busy' => 'Je travaille actuellement sur un projet.' ,
            'avaliable' => 'je suis prêt pour le prochain projet',
            'desc' => "Je suis développeur full stack depuis 2 ans. dans chaque nouveau projet, j'applique de nouvelles technologies pour un flux de travail plus efficace ",
            'hobbie' => 'Loisirs',
            'browsers' => 'Navigateur préféré',
            'localisation' => 'ma position'
        )
    );


?>