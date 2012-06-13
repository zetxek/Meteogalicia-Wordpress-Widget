<?php
/*
Plugin Name: MeteoGalicia
Plugin URI: http://www.adrianmoreno.info
Description: Recupera a información meteoróxica dunha localidade de MeteoGalicia
Author: Adrián Moreno
Author URI: http://www.adrianmoreno.info
Version: 1.0

Copyright 2012  Adrián Moreno Peña  (email : zetxek at gmail dot com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function widget_MeteoGalicia_init() {
	if ( !function_exists('register_sidebar_widget') ) return;	
	
	
	$stationNames = array();
$stationIds = array(); 

$stationNames[]="A Gándara"; $stationIds[]="10153";
$stationNames[]="A Granxa"; $stationIds[]="19045";
$stationNames[]="Abradelo"; $stationIds[]="10098";
$stationNames[]="Aldea Nova"; $stationIds[]="10141";
$stationNames[]="Alto do Rodicio"; $stationIds[]="10057";
$stationNames[]="Amiudal"; $stationIds[]="10109";
$stationNames[]="Ancares"; $stationIds[]="10062";
$stationNames[]="Areas"; $stationIds[]="19055";
$stationNames[]="Areeiro "; $stationIds[]="19060";
$stationNames[]="As Eiras"; $stationIds[]="19047";
$stationNames[]="Baltar"; $stationIds[]="10110";
$stationNames[]="Borreiros"; $stationIds[]="10162";
$stationNames[]="Bóveda"; $stationIds[]="10099";
$stationNames[]="Burela"; $stationIds[]="10118";
$stationNames[]="Cabeza de Manzaneda"; $stationIds[]="10131";
$stationNames[]="Caldas de Reis"; $stationIds[]="10127";
$stationNames[]="Calvos "; $stationIds[]="19042";
$stationNames[]="Camariñas"; $stationIds[]="10800";
$stationNames[]="Campus Lugo"; $stationIds[]="10053";
$stationNames[]="Castro R. de Lea"; $stationIds[]="10146";
$stationNames[]="Castro Vicaludo"; $stationIds[]="10091";
$stationNames[]="Castrove"; $stationIds[]="10067";
$stationNames[]="Cequeliños"; $stationIds[]="19048";
$stationNames[]="Cespón"; $stationIds[]="19012";
$stationNames[]="CIS Ferrol"; $stationIds[]="10050";
$stationNames[]="Conchada"; $stationIds[]="10100";
$stationNames[]="Corno do Boi"; $stationIds[]="10101";
$stationNames[]="Corón"; $stationIds[]="10085";
$stationNames[]="Corrubedo"; $stationIds[]="10049";
$stationNames[]="Coruña"; $stationIds[]="10152";
$stationNames[]="Coruña Dique"; $stationIds[]="14000";
$stationNames[]="Corzos"; $stationIds[]="19037";
$stationNames[]="Coto Muiño"; $stationIds[]="10139";
$stationNames[]="Courel"; $stationIds[]="10102";
$stationNames[]="Entrimo"; $stationIds[]="10111";
$stationNames[]="Fontecada"; $stationIds[]="10087";
$stationNames[]="Fornelos de Montes"; $stationIds[]="10086Foz"; $stationIds[]="10103";
$stationNames[]="Fragavella"; $stationIds[]="10088";
$stationNames[]="Gandarela"; $stationIds[]="10112";
$stationNames[]="Guitiriz"; $stationIds[]="10055";
$stationNames[]="Illas Cíes"; $stationIds[]="10125";
$stationNames[]="Labrada"; $stationIds[]="19015";
$stationNames[]="Lardeira"; $stationIds[]="10130";
$stationNames[]="Larouco"; $stationIds[]="19030";
$stationNames[]="Laza"; $stationIds[]="19038";
$stationNames[]="Lesende"; $stationIds[]="19010";
$stationNames[]="Lira"; $stationIds[]="10135";
$stationNames[]="Louredo"; $stationIds[]="19052";
$stationNames[]="Lourenzá"; $stationIds[]="19025";
$stationNames[]="Lourizán"; $stationIds[]="10064";
$stationNames[]="Mabegondo"; $stationIds[]="10045";
$stationNames[]="Malpica"; $stationIds[]="10093";
$stationNames[]="Marco da Curra"; $stationIds[]="10046";
$stationNames[]="Marroxo"; $stationIds[]="10056";
$stationNames[]="Meder"; $stationIds[]="19057";
$stationNames[]="Melide"; $stationIds[]="10089";
$stationNames[]="Míllara"; $stationIds[]="19022";
$stationNames[]="Monte Aloia"; $stationIds[]="10060";
$stationNames[]="Monte Medo"; $stationIds[]="10113";
$stationNames[]="Mourelle"; $stationIds[]="19020";
$stationNames[]="Mouriscade"; $stationIds[]="10061";
$stationNames[]="Muralla"; $stationIds[]="10052";
$stationNames[]="O Cebreiro"; $stationIds[]="10132";
$stationNames[]="O Invernadeiro"; $stationIds[]="10048";
$stationNames[]="O Viso"; $stationIds[]="10154";
$stationNames[]="O Xipro"; $stationIds[]="10136";
$stationNames[]="Oímbra "; $stationIds[]="19028";
$stationNames[]="Olas"; $stationIds[]="10094";
$stationNames[]="Olveda"; $stationIds[]="19024";
$stationNames[]="Ons"; $stationIds[]="10126";
$stationNames[]="Ourense"; $stationIds[]="10148";
$stationNames[]="Ourense-Ciencias"; $stationIds[]="10123";
$stationNames[]="Pazo de Fontefiz"; $stationIds[]="19031";
$stationNames[]="Pazo de Galegos"; $stationIds[]="19003";
$stationNames[] = "Pedro Murias"; $stationIds[]="10047";
$stationNames[]="Penedo do Galo "; $stationIds[]="10104";
$stationNames[]="Pereira"; $stationIds[]="10120";
$stationNames[]="Petarelas (As)"; $stationIds[]="10114";
$stationNames[]="Pol"; $stationIds[]="10105";
$stationNames[]="Ponte Boga"; $stationIds[]="19033";
$stationNames[]="Pontenova (A)"; $stationIds[]="10106";
$stationNames[]="Portomarín"; $stationIds[]="10108";
$stationNames[]="Punta Candieira"; $stationIds[]="10092";
$stationNames[]="Queimadelos"; $stationIds[]="10063";
$stationNames[]="Raído-Arzúa"; $stationIds[]="10144";
$stationNames[]="Rebordelo"; $stationIds[]="10121";
$stationNames[]="Remuíño"; $stationIds[]="19044";
$stationNames[]="Río do Sol"; $stationIds[]="10096";
$stationNames[]="Riós"; $stationIds[]="19039";
$stationNames[]="Sabón"; $stationIds[]="10140";
$stationNames[]="Sálvora"; $stationIds[]="10128";
$stationNames[]="Sambreixo"; $stationIds[]="10107";
$stationNames[]="San Clodio"; $stationIds[]="19023";
$stationNames[]="San Fiz"; $stationIds[]="19021";
$stationNames[]="San Xoán de Río"; $stationIds[]="10117";
$stationNames[]="Santiago-EOAS"; $stationIds[]="10124";
$stationNames[]="Sanxenxo"; $stationIds[]="10129";
$stationNames[]="Sergude"; $stationIds[]="10095";
$stationNames[]="Serra da Faladoira"; $stationIds[]="10097";
$stationNames[]="Serra do Eixe"; $stationIds[]="10115";
$stationNames[]="Serra do Faro"; $stationIds[]="10122";
$stationNames[]="Sobrecedo"; $stationIds[]="19019";
$stationNames[]="Soutomaior"; $stationIds[]="19058";
$stationNames[]="Torrequintáns"; $stationIds[]="19056";
$stationNames[]="Tremoedo"; $stationIds[]="19046";
$stationNames[]="Ventosa"; $stationIds[]="10137";
$stationNames[]="Verín-Vilamaior"; $stationIds[]="10058";
$stationNames[]="Verín-Vilela"; $stationIds[]="10500";
$stationNames[]="Viana do Bolo"; $stationIds[]="10116";
$stationNames[]="Vigo"; $stationIds[]="10142";
$stationNames[]="Vigo-Campus"; $stationIds[]="10161";
$stationNames[]="Vigo-IIMarinas"; $stationIds[]="10160";
$stationNames[] = "Vilamor"; $stationIds[]="19014";
$stationNames[]="Xares"; $stationIds[]="10138";
$stationNames[]="Xesteiras"; $stationIds[]="10133";
$stationNames[]="Xurés"; $stationIds[]="10119";
	

	function widget_MeteoGalicia($args) {
		extract($args);
		$options = get_option('widget_MeteoGalicia');
		echo $before_widget;
		echo "<!-- estacion: ".$options['station']."-->";
		echo "<h3>".$options['title']."</h3>";
		echo "<div id='meteogalicia-widget'>";
		echo "</div>";
		$url =  plugins_url( '/meteogalicia/proxy.php')."?id=".$options['station'];
		$script = "<script>
		            
		            var icono_ceo;
		            var temperatura;
		            var icono_temp;
		            var sensacion_termica;
		            var icono_vento;
		            
		            jQuery(document).ready(function(){
    					console.log('Loading MeteoGalicia Wordpress Widget by Adrián Moreno');
    					jQuery.get('".$url."',function(data){
    						    console.log('MeteoGalicia data received, processing');
    						    
    						    jQuery(data).find('icono_ceo').each(function(info){
    						       console.log('Icono ceo: ' + jQuery(this).attr('valor') ); 
    						       icono_ceo =  jQuery(this).attr('valor') ;
    						    });
    						    jQuery(data).find('temperatura').each(function(){
    						        console.log('Temperatura: ' + jQuery(this).attr('valor') ); 
    						        temperatura = jQuery(this).attr('valor');
    						    });
    						    jQuery(data).find('icono_temp').each(function(){
    						        console.log('Icono temp: ' + jQuery(this).attr('valor') ); 
    						        icono_temp = jQuery(this).attr('valor');
    						    }); 
    						    jQuery(data).find('sensacion_termica').each(function(){
    						        console.log('Sensacion termica: ' + jQuery(this).attr('valor') ); 
    						        sensacion_termica = jQuery(this).attr('valor');
    						    });  
    						    jQuery(data).find('icono_vento').each(function(){
    						        console.log('Icono vento: ' + jQuery(this).attr('valor') ); 
    						        icono_vento = jQuery(this).attr('valor');
    						    });
    						    
    						    var img_url = '".plugins_url( '/meteogalicia/imgs/')."'+icono_ceo+'.png';
    						    console.log('URL img: ' + img_url);
    						    jQuery('#meteogalicia-widget').append('<img src=\"'+img_url+'\" alt=\"Estado do ceo\" />');
    						    jQuery('#meteogalicia-widget').append('<p class=\"meteogalicia-data\"><abbr title=\"Sensación térmica: '+ sensacion_termica +' ºC\">' + temperatura + ' ºC</<bbr></p>');
    					    });
    					    
					});
					</script>";
		echo $script;
		echo "Datos de <a href='http://www.meteogalicia.es'>MeteoGalicia</a>";
		echo $after_widget;
	}
	function widget_MeteoGalicia_control() {
        
        global $stationNames, $stationIds;
	    
		$options = get_option('widget_MeteoGalicia');
		if ( !is_array($options) ){
			$options = array(
                'title' => 'MeteoGalicia',
                'station' => '10124'
            );
  		}
 ?>
  <p>
    <label for="meteogalicia-WidgetTitle">Título: </label>
    <input type="text" id="meteogalicia-WidgetTitle" name="meteogalicia-WidgetTitle" value="<?php echo $options['title'];?>" />
    <br/>
    <!--<?php echo "Número: ".count($stationNames); ?>-->
    <label for="meteogalicia-Station">Estación: </label>
    <input type="text" id="meteogalicia-Station" name="meteogalicia-Station" value="<?php echo $options['station'];?>" />
    <br><em>As estacións dispoñibles pódense consultar en <a href="http://www.meteogalicia.es/datosred/infoweb/meteo/docs/rss/Identificadores.pdf">MeteoGalicia</a>. Debes copiar o "identificador" que desexes usar.</em>

    
    <input type="hidden" id="MeteoGalicia-Submit" name="MeteoGalicia-Submit" value="1" />    
  </p>
<?php 		
		if ( $_POST['MeteoGalicia-Submit'] ) {
		    $options['title'] = htmlspecialchars($_POST['meteogalicia-WidgetTitle']);
			$options['station'] = htmlspecialchars($_POST['meteogalicia-Station']);
			update_option('widget_MeteoGalicia', $options);
		}
	}
	register_sidebar_widget(array('MeteoGalicia', 'widgets'), 'widget_MeteoGalicia');
	register_widget_control(array('MeteoGalicia', 'widgets'), 'widget_MeteoGalicia_control', 300, 100);
}
add_action('widgets_init', 'widget_MeteoGalicia_init')
?>