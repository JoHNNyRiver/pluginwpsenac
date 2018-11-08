<?php
/*
* Plugin name: Terror por hora
* Plugin URI: http://sp.senac.br
* Description: Esse plugin serve para cadastrar filmes de terror o gênero é imutalvel.
* version: 1.0
* Author: Maria Jose Martins, João Ribeiro
* Author URI: http://sp.senac.br
* Licence: MIT
*/

add_action('admin_menu', 'menuPlugin');

function menuPlugin()
{
	add_menu_page('Terror por hora', 'Terror por hora', 'administrator',
					'terror-por-hora-setting',
					'terrorplugin',
					'dashicons-layout');
}

function terrorplugin()
{

	require 'public/html/index.php';

}
