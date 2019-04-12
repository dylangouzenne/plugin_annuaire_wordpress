<?php

// Information générale du plugin 

/**
 * @package Annuaire-eval-cms
 * @version 1.0
 */
/*
Plugin Name: Annuaire-eval-cms
Plugin URI: http://wordpress.org/plugins/annuaire-eval-cms/
Description: Application annuaire 
Author: Dylan Gouzenne
Version: 1.0
Author URI: https://dylangouzenne.fr
*/


// fonction shortcode [Annuaire]
function shortcode_annuaire_eval_cms(){

    global $wpdb;

    // Interrogation de la base de données
    $resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}annuaire") ;
    // Parcours des resultats obtenus
    foreach ($resultats as $annuaire) {
        echo $annuaire->prenom ;
        echo '<br/>' ;
        echo $annuaire->nom ;
        echo '<br/>' ;
        echo $annuaire->mail ;
        
    }
}

add_shortcode('Annuaire', 'shortcode_annuaire_eval_cms');



