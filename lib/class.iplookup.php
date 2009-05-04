<?php

	Class IPLookup{

		private static $_countrycodes = array(

			'ZW' => 'ZIM',
			'ZM' => 'ZAM',
			'ZA' => 'SOU',
			'YE' => 'YEM',
			'WS' => 'SAM',
			'VN' => 'VIE',
			'VI' => 'VIR',
			'VG' => 'VIR',
			'VE' => 'VEN',
			'VC' => 'SAI',
			'VA' => 'HOL',
			'UZ' => 'UZB',
			'US' => 'UNI',
			'US' => 'UN',
			'UR' => 'URU',
			'UK' => 'UKR',
			'UG' => 'UGA',
			'TZ' => 'UNI',
			'TW' => 'TAI',
			'TU' => 'TUV',
			'TU' => 'TUR',
			'TU' => 'TUN',
			'TT' => 'TRI',
			'TL' => 'TIM',
			'TK' => 'TUR',
			'TK' => 'TOK',
			'TJ' => 'TAJ',
			'TH' => 'THA',
			'TG' => 'TOG',
			'TC' => 'CHA',
			'SY' => 'SYR',
			'SY' => 'SEY',
			'SW' => 'SWE',
			'SW' => 'SWA',
			'SV' => 'SLO',
			'SU' => 'SUR',
			'ST' => 'SAO',
			'SO' => 'SOM',
			'SM' => 'SAN',
			'SL' => 'SOL',
			'SL' => 'SIE',
			'SL' => 'EL',
			'SG' => 'SIN',
			'SE' => 'SEN',
			'SD' => 'SUD',
			'SC' => 'SER',
			'SA' => 'SAU',
			'RW' => 'RWA',
			'RU' => 'RUS',
			'RO' => 'ROM',
			'RE' => 'REU',
			'QA' => 'QAT',
			'PY' => 'FRE',
			'PS' => 'PAL',
			'PR' => 'PUE',
			'PR' => 'POR',
			'PR' => 'PAR',
			'PO' => 'POL',
			'PN' => 'PAP',
			'PL' => 'PAL',
			'PH' => 'PHI',
			'PE' => 'PER',
			'PA' => 'PAN',
			'PA' => 'PAK',
			'OM' => 'OMA',
			'NZ' => 'NEW',
			'NR' => 'NAU',
			'NP' => 'NEP',
			'NO' => 'NOR',
			'NL' => 'NET',
			'NI' => 'NIU',
			'NI' => 'NIC',
			'NG' => 'NIG',
			'NE' => 'NIG',
			'NC' => 'NEW',
			'NA' => 'NAM',
			'MY' => 'MAY',
			'MY' => 'MAL',
			'MW' => 'MAL',
			'MU' => 'MAU',
			'MT' => 'MAR',
			'MR' => 'MAU',
			'MO' => 'MOZ',
			'MN' => 'NOR',
			'MN' => 'MON',
			'MM' => 'MYA',
			'ML' => 'MAL',
			'MK' => 'THE',
			'ME' => 'MEX',
			'MD' => 'REP',
			'MD' => 'MAL',
			'MD' => 'MAD',
			'MC' => 'MON',
			'MA' => 'MOR',
			'MA' => 'MAC',
			'LV' => 'LAT',
			'LU' => 'LUX',
			'LT' => 'LIT',
			'LK' => 'SRI',
			'LI' => 'LIE',
			'LC' => 'SAI',
			'LB' => 'LIB',
			'LB' => 'LEB',
			'LA' => 'LAO',
			'KW' => 'KUW',
			'KO' => 'REP',
			'KN' => 'SAI',
			'KI' => 'KIR',
			'KH' => 'CAM',
			'KG' => 'KYR',
			'KE' => 'KEN',
			'KA' => 'KAZ',
			'JP' => 'JAP',
			'JO' => 'JOR',
			'JA' => 'JAM',
			'IT' => 'ITA',
			'IS' => 'ISR',
			'IS' => 'ICE',
			'IR' => 'ISL',
			'IR' => 'IRE',
			'IR' => 'IRA',
			'IO' => 'BRI',
			'IN' => 'IND',
			'ID' => 'IND',
			'HU' => 'HUN',
			'HT' => 'HAI',
			'HR' => 'CRO',
			'HN' => 'HON',
			'HK' => 'HON',
			'GU' => 'GUY',
			'GU' => 'GUA',
			'GU' => 'FRE',
			'GT' => 'GUA',
			'GR' => 'GRE',
			'GN' => 'GUI',
			'GN' => 'EQU',
			'GL' => 'GUA',
			'GI' => 'GUI',
			'GI' => 'GIB',
			'GH' => 'GHA',
			'GE' => 'GEO',
			'GB' => 'UNI',
			'GA' => 'GAB',
			'FR' => 'FRA',
			'FR' => 'FAR',
			'FL' => 'FAL',
			'FJ' => 'FIJ',
			'FI' => 'FIN',
			'ET' => 'ETH',
			'ES' => 'SPA',
			'ES' => 'EST',
			'ER' => 'ERI',
			'EG' => 'EGY',
			'EC' => 'ECU',
			'DZ' => 'ALG',
			'DO' => 'DOM',
			'DN' => 'DEN',
			'DM' => 'DOM',
			'DJ' => 'DJI',
			'DE' => 'GER',
			'CZ' => 'CZE',
			'CY' => 'CYP',
			'CY' => 'CAY',
			'CU' => 'CUB',
			'CR' => 'COS',
			'CP' => 'CAP',
			'CO' => 'THE',
			'CO' => 'COO',
			'CO' => 'CON',
			'CO' => 'COL',
			'CM' => 'CAM',
			'CI' => 'COT',
			'CH' => 'SWI',
			'CH' => 'CHI',
			'CA' => 'CEN',
			'CA' => 'CAN',
			'BW' => 'BOT',
			'BR' => 'BRU',
			'BR' => 'BRA',
			'BR' => 'BAR',
			'BO' => 'BOL',
			'BM' => 'BER',
			'BL' => 'BEL',
			'BI' => 'BOS',
			'BH' => 'BAH',
			'BG' => 'BUL',
			'BG' => 'BAN',
			'BF' => 'BUR',
			'BE' => 'BEN',
			'BE' => 'BEL',
			'BD' => 'BUR',
			'AZ' => 'AZE',
			'AU' => 'AUS',
			'AT' => 'ANT',
			'AS' => 'AME',
			'AR' => 'UNI',
			'AR' => 'ARM',
			'AR' => 'ARG',
			'AN' => 'NET',
			'AN' => 'AND',
			'AL' => 'ALB',
			'AI' => 'ANG',
			'AG' => 'ANG',
			'AF' => 'AFG',
			'AB' => 'ARU'

		);
		
		public static function lookup($ip){	
			

			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "http://api.hostip.info/country.php?ip=$ip");
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			
			$result = curl_exec($ch);
			$info = curl_getinfo($ch);

			curl_close($ch);

			if ($result === false || $info['http_code'] != 200) {
				return;
			}
		
			return (isset(self::$_countrycodes[$result]) ? self::$_countrycodes[$result] : NULL);
		}
		
	}

