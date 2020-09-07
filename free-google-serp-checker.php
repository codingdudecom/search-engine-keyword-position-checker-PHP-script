<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{
			font-family: arial,sans-serif;
			font-size: 18px;
			max-width: 850px;
			margin: 0 auto;
		}
		input,select,label{
			margin: 5px 10px;
			font-family: arial,sans-serif;
			font-size: 18px;
			padding:3px 5px;
		}
		label{
			position: absolute;
		}
		select{
			margin-left: 140px;
		}
		input[type="text"] {
			width: 100%;
		}
		input[type="submit"] {
		    background-color: #0087FF;
		    color: #FFF;
		    border: none;
		    padding: 10px 20px;
		    width: 100%;
		    text-transform: uppercase;
		    font-weight: bold;
		}		
		ul{
			list-style: none;
			margin: 40px auto;
			max-width: 800px;
		}
		li{
			margin-bottom: 26px;
			margin-left: 26px;
			position: relative;
		}
		li.other{
			opacity: 0.5;
		}
		.title{
			color:rgb(26, 13, 171);
			font-family: arial, sans-serif;
			font-size: 18px;
			line-height: 21.6px;
			cursor: pointer;
			clear: both;
			display: block;
		}
		.title:hover{
			text-decoration: underline;
		}
		.link{
			color: #006621;
			font-family: arial, sans-serif;
			font-size: 14px;
			line-height: 16px;
			clear: both;
			display: block;
		}
		.snippet{
			color: rgb(84, 84, 84);
			font-family: arial, sans-serif;
			font-size: 13px;
			line-height: 18.2px;
		}
		.rank{
			font-family: arial,sans-serif;
		    font-size: 24px;
		    position: absolute;
		    left: -60px;
		    text-align: center;
		    color: #FFF;
		    padding: 22px 15px 10px;
		    background-color: #0087FF;
		    border-radius: 10px;
		}
		.rank:before{
			content: "Google Position";
		    font-size: 8px;
		    position: absolute;
		    top: 5px;
		    text-align: center;
		    left: 0;
		    width: 90%;
		    margin: 0 auto;
		}

	</style>
</head>
<body>
	<form action="" method="POST">
		<h1>SERP Checker PHP Script <small>by coding-dude.com</small></h1>
		
		<input name="query" type="text" placeholder="keyword" size="40" required/>
		<input name="domain" type="text" placeholder="domain.com" size="40" required/>
		<br/>
		<label for="gl">Country:</label>
		<select name="gl">
<option value='us'>United States</option>		
<option value='af'>Afghanistan</option>
<option value='al'>Albania</option>
<option value='dz'>Algeria</option>
<option value='as'>American Samoa</option>
<option value='ad'>Andorra</option>
<option value='ao'>Angola</option>
<option value='ai'>Anguilla</option>
<option value='aq'>Antarctica</option>
<option value='ag'>Antigua and Barbuda</option>
<option value='ar'>Argentina</option>
<option value='am'>Armenia</option>
<option value='aw'>Aruba</option>
<option value='au'>Australia</option>
<option value='at'>Austria</option>
<option value='az'>Azerbaijan</option>
<option value='bs'>Bahamas</option>
<option value='bh'>Bahrain</option>
<option value='bd'>Bangladesh</option>
<option value='bb'>Barbados</option>
<option value='by'>Belarus</option>
<option value='be'>Belgium</option>
<option value='bz'>Belize</option>
<option value='bj'>Benin</option>
<option value='bm'>Bermuda</option>
<option value='bt'>Bhutan</option>
<option value='bo'>Bolivia</option>
<option value='ba'>Bosnia and Herzegovina</option>
<option value='bw'>Botswana</option>
<option value='bv'>Bouvet Island</option>
<option value='br'>Brazil</option>
<option value='io'>British Indian Ocean Territory</option>
<option value='bn'>Brunei Darussalam</option>
<option value='bg'>Bulgaria</option>
<option value='bf'>Burkina Faso</option>
<option value='bi'>Burundi</option>
<option value='kh'>Cambodia</option>
<option value='cm'>Cameroon</option>
<option value='ca'>Canada</option>
<option value='cv'>Cape Verde</option>
<option value='ky'>Cayman Islands</option>
<option value='cf'>Central African Republic</option>
<option value='td'>Chad</option>
<option value='cl'>Chile</option>
<option value='cn'>China</option>
<option value='cx'>Christmas Island</option>
<option value='cc'>Cocos (Keeling) Islands</option>
<option value='co'>Colombia</option>
<option value='km'>Comoros</option>
<option value='cg'>Congo</option>
<option value='cd'>Congo, the Democratic Republic of the</option>
<option value='ck'>Cook Islands</option>
<option value='cr'>Costa Rica</option>
<option value='ci'>Cote D'ivoire</option>
<option value='hr'>Croatia</option>
<option value='cu'>Cuba</option>
<option value='cy'>Cyprus</option>
<option value='cz'>Czech Republic</option>
<option value='dk'>Denmark</option>
<option value='dj'>Djibouti</option>
<option value='dm'>Dominica</option>
<option value='do'>Dominican Republic</option>
<option value='ec'>Ecuador</option>
<option value='eg'>Egypt</option>
<option value='sv'>El Salvador</option>
<option value='gq'>Equatorial Guinea</option>
<option value='er'>Eritrea</option>
<option value='ee'>Estonia</option>
<option value='et'>Ethiopia</option>
<option value='fk'>Falkland Islands (Malvinas)</option>
<option value='fo'>Faroe Islands</option>
<option value='fj'>Fiji</option>
<option value='fi'>Finland</option>
<option value='fr'>France</option>
<option value='gf'>French Guiana</option>
<option value='pf'>French Polynesia</option>
<option value='tf'>French Southern Territories</option>
<option value='ga'>Gabon</option>
<option value='gm'>Gambia</option>
<option value='ge'>Georgia</option>
<option value='de'>Germany</option>
<option value='gh'>Ghana</option>
<option value='gi'>Gibraltar</option>
<option value='gr'>Greece</option>
<option value='gl'>Greenland</option>
<option value='gd'>Grenada</option>
<option value='gp'>Guadeloupe</option>
<option value='gu'>Guam</option>
<option value='gt'>Guatemala</option>
<option value='gn'>Guinea</option>
<option value='gw'>Guinea-Bissau</option>
<option value='gy'>Guyana</option>
<option value='ht'>Haiti</option>
<option value='hm'>Heard Island and Mcdonald Islands</option>
<option value='va'>Holy See (Vatican City State)</option>
<option value='hn'>Honduras</option>
<option value='hk'>Hong Kong</option>
<option value='hu'>Hungary</option>
<option value='is'>Iceland</option>
<option value='in'>India</option>
<option value='id'>Indonesia</option>
<option value='ir'>Iran, Islamic Republic of</option>
<option value='iq'>Iraq</option>
<option value='ie'>Ireland</option>
<option value='il'>Israel</option>
<option value='it'>Italy</option>
<option value='jm'>Jamaica</option>
<option value='jp'>Japan</option>
<option value='jo'>Jordan</option>
<option value='kz'>Kazakhstan</option>
<option value='ke'>Kenya</option>
<option value='ki'>Kiribati</option>
<option value='kp'>Korea, Democratic People's Republic of</option>
<option value='kr'>Korea, Republic of</option>
<option value='kw'>Kuwait</option>
<option value='kg'>Kyrgyzstan</option>
<option value='la'>Lao People's Democratic Republic</option>
<option value='lv'>Latvia</option>
<option value='lb'>Lebanon</option>
<option value='ls'>Lesotho</option>
<option value='lr'>Liberia</option>
<option value='ly'>Libyan Arab Jamahiriya</option>
<option value='li'>Liechtenstein</option>
<option value='lt'>Lithuania</option>
<option value='lu'>Luxembourg</option>
<option value='mo'>Macao</option>
<option value='mk'>Macedonia, the Former Yugosalv Republic of</option>
<option value='mg'>Madagascar</option>
<option value='mw'>Malawi</option>
<option value='my'>Malaysia</option>
<option value='mv'>Maldives</option>
<option value='ml'>Mali</option>
<option value='mt'>Malta</option>
<option value='mh'>Marshall Islands</option>
<option value='mq'>Martinique</option>
<option value='mr'>Mauritania</option>
<option value='mu'>Mauritius</option>
<option value='yt'>Mayotte</option>
<option value='mx'>Mexico</option>
<option value='fm'>Micronesia, Federated States of</option>
<option value='md'>Moldova, Republic of</option>
<option value='mc'>Monaco</option>
<option value='mn'>Mongolia</option>
<option value='ms'>Montserrat</option>
<option value='ma'>Morocco</option>
<option value='mz'>Mozambique</option>
<option value='mm'>Myanmar</option>
<option value='na'>Namibia</option>
<option value='nr'>Nauru</option>
<option value='np'>Nepal</option>
<option value='nl'>Netherlands</option>
<option value='an'>Netherlands Antilles</option>
<option value='nc'>New Caledonia</option>
<option value='nz'>New Zealand</option>
<option value='ni'>Nicaragua</option>
<option value='ne'>Niger</option>
<option value='ng'>Nigeria</option>
<option value='nu'>Niue</option>
<option value='nf'>Norfolk Island</option>
<option value='mp'>Northern Mariana Islands</option>
<option value='no'>Norway</option>
<option value='om'>Oman</option>
<option value='pk'>Pakistan</option>
<option value='pw'>Palau</option>
<option value='ps'>Palestinian Territory, Occupied</option>
<option value='pa'>Panama</option>
<option value='pg'>Papua New Guinea</option>
<option value='py'>Paraguay</option>
<option value='pe'>Peru</option>
<option value='ph'>Philippines</option>
<option value='pn'>Pitcairn</option>
<option value='pl'>Poland</option>
<option value='pt'>Portugal</option>
<option value='pr'>Puerto Rico</option>
<option value='qa'>Qatar</option>
<option value='re'>Reunion</option>
<option value='ro'>Romania</option>
<option value='ru'>Russian Federation</option>
<option value='rw'>Rwanda</option>
<option value='sh'>Saint Helena</option>
<option value='kn'>Saint Kitts and Nevis</option>
<option value='lc'>Saint Lucia</option>
<option value='pm'>Saint Pierre and Miquelon</option>
<option value='vc'>Saint Vincent and the Grenadines</option>
<option value='ws'>Samoa</option>
<option value='sm'>San Marino</option>
<option value='st'>Sao Tome and Principe</option>
<option value='sa'>Saudi Arabia</option>
<option value='sn'>Senegal</option>
<option value='cs'>Serbia and Montenegro</option>
<option value='sc'>Seychelles</option>
<option value='sl'>Sierra Leone</option>
<option value='sg'>Singapore</option>
<option value='sk'>Slovakia</option>
<option value='si'>Slovenia</option>
<option value='sb'>Solomon Islands</option>
<option value='so'>Somalia</option>
<option value='za'>South Africa</option>
<option value='gs'>South Georgia and the South Sandwich Islands</option>
<option value='es'>Spain</option>
<option value='lk'>Sri Lanka</option>
<option value='sd'>Sudan</option>
<option value='sr'>Suriname</option>
<option value='sj'>Svalbard and Jan Mayen</option>
<option value='sz'>Swaziland</option>
<option value='se'>Sweden</option>
<option value='ch'>Switzerland</option>
<option value='sy'>Syrian Arab Republic</option>
<option value='tw'>Taiwan, Province of China</option>
<option value='tj'>Tajikistan</option>
<option value='tz'>Tanzania, United Republic of</option>
<option value='th'>Thailand</option>
<option value='tl'>Timor-Leste</option>
<option value='tg'>Togo</option>
<option value='tk'>Tokelau</option>
<option value='to'>Tonga</option>
<option value='tt'>Trinidad and Tobago</option>
<option value='tn'>Tunisia</option>
<option value='tr'>Turkey</option>
<option value='tm'>Turkmenistan</option>
<option value='tc'>Turks and Caicos Islands</option>
<option value='tv'>Tuvalu</option>
<option value='ug'>Uganda</option>
<option value='ua'>Ukraine</option>
<option value='ae'>United Arab Emirates</option>
<option value='uk'>United Kingdom</option>
<option value='um'>United States Minor Outlying Islands</option>
<option value='uy'>Uruguay</option>
<option value='uz'>Uzbekistan</option>
<option value='vu'>Vanuatu</option>
<option value='ve'>Venezuela</option>
<option value='vn'>Viet Nam</option>
<option value='vg'>Virgin Islands, British</option>
<option value='vi'>Virgin Islands, U.S.</option>
<option value='wf'>Wallis and Futuna</option>
<option value='eh'>Western Sahara</option>
<option value='ye'>Yemen</option>
<option value='zm'>Zambia</option>
<option value='zw'>Zimbabwe</option>
		</select>
		<br/>
		<label for="hl">Language:</label>
		<select name="hl">
<option value='en'>English</option>		
			<option value='af'>Afrikaans</option>
<option value='sq'>Albanian</option>
<option value='sm'>Amharic</option>
<option value='ar'>Arabic</option>
<option value='az'>Azerbaijani</option>
<option value='eu'>Basque</option>
<option value='be'>Belarusian</option>
<option value='bn'>Bengali</option>
<option value='bh'>Bihari</option>
<option value='bs'>Bosnian</option>
<option value='bg'>Bulgarian</option>
<option value='ca'>Catalan</option>
<option value='zh-CN'>Chinese (Simplified)</option>
<option value='zh-TW'>Chinese (Traditional)</option>
<option value='hr'>Croatian</option>
<option value='cs'>Czech</option>
<option value='da'>Danish</option>
<option value='nl'>Dutch</option>

<option value='eo'>Esperanto</option>
<option value='et'>Estonian</option>
<option value='fo'>Faroese</option>
<option value='fi'>Finnish</option>
<option value='fr'>French</option>
<option value='fy'>Frisian</option>
<option value='gl'>Galician</option>
<option value='ka'>Georgian</option>
<option value='de'>German</option>
<option value='el'>Greek</option>
<option value='gu'>Gujarati</option>
<option value='iw'>Hebrew</option>
<option value='hi'>Hindi</option>
<option value='hu'>Hungarian</option>
<option value='is'>Icelandic</option>
<option value='id'>Indonesian</option>
<option value='ia'>Interlingua</option>
<option value='ga'>Irish</option>
<option value='it'>Italian</option>
<option value='ja'>Japanese</option>
<option value='jw'>Javanese</option>
<option value='kn'>Kannada</option>
<option value='ko'>Korean</option>
<option value='la'>Latin</option>
<option value='lv'>Latvian</option>
<option value='lt'>Lithuanian</option>
<option value='mk'>Macedonian</option>
<option value='ms'>Malay</option>
<option value='ml'>Malayam</option>
<option value='mt'>Maltese</option>
<option value='mr'>Marathi</option>
<option value='ne'>Nepali</option>
<option value='no'>Norwegian</option>
<option value='nn'>Norwegian (Nynorsk)</option>
<option value='oc'>Occitan</option>
<option value='fa'>Persian</option>
<option value='pl'>Polish</option>
<option value='pt-BR'>Portuguese (Brazil)</option>
<option value='pt-PT'>Portuguese (Portugal)</option>
<option value='pa'>Punjabi</option>
<option value='ro'>Romanian</option>
<option value='ru'>Russian</option>
<option value='gd'>Scots Gaelic</option>
<option value='sr'>Serbian</option>
<option value='si'>Sinhalese</option>
<option value='sk'>Slovak</option>
<option value='sl'>Slovenian</option>
<option value='es'>Spanish</option>
<option value='su'>Sudanese</option>
<option value='sw'>Swahili</option>
<option value='sv'>Swedish</option>
<option value='tl'>Tagalog</option>
<option value='ta'>Tamil</option>
<option value='te'>Telugu</option>
<option value='th'>Thai</option>
<option value='ti'>Tigrinya</option>
<option value='tr'>Turkish</option>
<option value='uk'>Ukrainian</option>
<option value='ur'>Urdu</option>
<option value='uz'>Uzbek</option>
<option value='vi'>Vietnamese</option>
<option value='cy'>Welsh</option>
<option value='xh'>Xhosa</option>
<option value='zu'>Zulu</option>
		</select>
		<br/>
		<label for="pages">Check within</label>
		<select name="pages">
			<option value="1">First results page</option>
			<option value="2">First 2 result pages</option>
			<option value="5">First 5 pages</option>
		</select>
<input type="submit" value="Start"/>		
	</form>

<?php
if (isset($_POST["domain"]) && isset($_POST["query"])){


	$GOOGLE_API_KEY = 'Insert your Google API Key';
	$GOOGLE_CSE_CX = 'Insert your Custom Search Engine ID';


	$query = urlencode($_POST["query"]);
	$domain = $_POST["domain"];

	//gl - google host - https://developers.google.com/custom-search/docs/xml_results_appendices#countryCodes
	//hl - user language - https://developers.google.com/custom-search/docs/xml_results_appendices#interfaceLanguages
	//pages - how many pages should the search extend


	$pages = isset($_POST["pages"])?$_POST["pages"]:1;
	$gl = isset($_POST["gl"])?$_POST["gl"]:"us";
	$hl = isset($_POST["hl"])?$_POST["hl"]:"en";



	$found = false;
	echo "<ul>";
	for ($page = 1;$page <= $pages && $found == false;$page++){
		$apiurl = sprintf('https://www.googleapis.com/customsearch/v1?q=%s&cx=%s&key=%s&hl=%s&gl=%s&start=%d',$query,$GOOGLE_CSE_CX,$GOOGLE_API_KEY,$hl,$gl,($page-1)*10+1);
		// echo $apiurl;
		$json = file_get_contents($apiurl);
		// $json = file_get_contents('http://localhost/wordpress/serp-checker/test.json');
		$obj = json_decode($json);

		
		foreach ($obj->items as $idx=>$item) {
			if (strpos($item->link, $domain) ){
				$found = true;
				echo "<li>";
			} else{
				echo "<li class='other'>";
			}
				echo "<span class='rank'>".($idx + ($page-1)*10 +1)."</span>";
				echo "<span class='title'>".$item->htmlTitle."</span>";
				echo "<span class='link'>".$item->link."<small>&#x25BC;</small></span>";
				echo "<span class='snippet'>".$item->htmlSnippet."</span>";
				echo "</li>";
			
		}
	}
	if ($found !== true){
		echo "<li>";
			echo "<span class='title'>".$domain." not found</span>";
		echo "</li>";
	}
	echo "</ul>";

}
?>

</body>
</html>
