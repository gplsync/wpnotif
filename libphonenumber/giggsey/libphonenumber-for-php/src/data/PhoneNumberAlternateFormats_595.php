<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return array(
	'id'                            => '',
	'countryCode'                   => 595,
	'internationalPrefix'           => '',
	'sameMobileAndFixedLinePattern' => false,
	'numberFormat'                  =>
		array(
			0 =>
				array(
					'pattern'                              => '(\\d{2})(\\d{2})(\\d{3})',
					'format'                               => '$1 $2 $3',
					'leadingDigitsPatterns'                =>
						array(
							0 => '[26]1|3[289]|4[1246-8]|7[1-3]|8[1-36]',
						),
					'nationalPrefixFormattingRule'         => '',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
			1 =>
				array(
					'pattern'                              => '(\\d{2})(\\d{6,7})',
					'format'                               => '$1 $2',
					'leadingDigitsPatterns'                =>
						array(
							0 => '[26]1|3[289]|4[1246-8]|7[1-3]|8[1-36]',
						),
					'nationalPrefixFormattingRule'         => '',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
			2 =>
				array(
					'pattern'                              => '(\\d{3})(\\d{6})',
					'format'                               => '$1 $2',
					'leadingDigitsPatterns'                =>
						array(
							0 => '2[279]|3[13-5]|4[359]|5[1-5]|6[347]|7[46-8]|85',
						),
					'nationalPrefixFormattingRule'         => '',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
		),
	'intlNumberFormat'              =>
		array(),
	'mainCountryForCode'            => false,
	'leadingZeroPossible'           => false,
	'mobileNumberPortableRegion'    => false,
);