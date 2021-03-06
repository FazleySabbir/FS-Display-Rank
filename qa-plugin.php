<?php
        
/*              
        Plugin Name: FS Display Rank
        Plugin URI: https://github.com/FazleySabbir/FS-Display-Rank
        Plugin Description: This plugin will show the level name everywhere and the 'Asker' in question's comment and answer after the name whether he is the asker of the question or not.
        Plugin Version: 1.0
        Plugin Date: 2020-10-13
        Plugin Author: Fazley Sabbir
        Plugin Author URI: https://github.com/FazleySabbir         
        Plugin License: GPLv2                           
        Plugin Minimum Question2Answer Version: 1.5
        Plugin Update Check URI: https://raw.githubusercontent.com/FazleySabbir/FS-Display-Rank/main/qa-plugin.php
*/                      
                        
                        
        if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
                        header('Location: ../../');
                        exit;   
        }        
       
        qa_register_plugin_layer('fs-display-rank-layer.php', 'FS Display Rank Layer');
        qa_register_plugin_module('module', 'fs-display-rank-admin.php', 'fs_display_rank_admin', 'FS Display Rank Admin');
		
		
                     
                        
/*                              
        Omit PHP closing tag to help avoid accidental output
*/                              
                          

