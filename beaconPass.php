<?php
require('lib/PKPass.php');

class beaconPass {

	//__construct just looks so ugly to me.
	function beaconPass() {
		$this->pass = new PKPass\PKPass();	
		$this->debug = false;
		
		$this->teamIdentifier = "9FYTJJHZMF";
		$this->passTypeIdentifier = "pass.baconDemo.thing";
		$this->description = "Bacon Beacon";
	}


	//TODO: get this from the DB i guess
	function generateSerial() {
		return '12345554459';// time();
	}


	//TODO: this should be based on topics from the DB
	function generateBeacons() {
		$beacons = array();
		
		for($i=91; $i<=100; $i++) {
			array_push($beacons, array(
				"proximityUUID" => "E2C56DB5-DFFB-48D2-B064-D0F5A71096E0",
				"relevantText" => "Your beer is near",
				"major" => $i,
				"minor" => 99
			));
		}
	
		return $beacons;
	}


	//the meat
	function generatePass() {

		 // Path to Pass Certificate (.p12 file)
		$this->pass->setCertificate('no_web_access/pass.p12');
		
		// Password for certificate
		$this->pass->setCertificatePassword('qwerty');
		
		//path to your WWDR Intermediate certificate (.pem file)
		$this->pass->setWWDRcertPath('no_web_access/AppleWWDR.pem');

		// Top-Level Keys http://developer.apple.com/library/ios/#documentation/userexperience/Reference/PassKit_Bundle/Chapters/TopLevel.html
		$standardKeys = array(
			'description'        => $this->description,
			'formatVersion'      => 1,
			'organizationName'   => 'Bacon Beacon',		
			'passTypeIdentifier' => $this->passTypeIdentifier,
			'serialNumber'       => $this->generateSerial(),
			'teamIdentifier'     => $this->teamIdentifier
		);
		
		$associatedAppKeys = array();
		
		$relevanceKeys = array(
			"beacons" =>  $this->generateBeacons()
		);

		$styleKeys = array(
			'coupon' => array(
				'primaryFields' => array(
					array(
						'key'   => 'event-name',
						'label' => 'Beer',
						'value' => 'Southern Tier Pumking'
					),				
					array(
						'key'   => 'origin',
						'label' => 'Southern Tier Brewery',
						'value' => 'Pumking'
					),
					array(
						'key'   => 'destination',
						'label' => 'Pony Bar',
						'value' => 'tonight'
					)
				),
				'secondaryFields' => array(
					array(
						"dateStyle" => "PKDateStyleMedium",
						"isRelative" => true,
						"key" => "doors-open",
						"label" => "The Pony Bar",
						"timeStyle" => "PKDateStyleShort",
						"value" => "2013-12-01T5:30-14:00"						
					),
					array(
						"key" => "seating-section",
						"label" => "Special Price",
						"numberStyle" => "PKNumberStyleSpellOut",
						"textAlignment" => "PKTextAlignmentRight",
						"value" => 5					
					),				
					array(
						'key'   => 'gate',
						'label' => 'Gate',
						'value' => 'F12'
					),
					array(
						'key'   => 'date',
						'label' => 'Departure date',
						'value' => '07/11/2012 10:22'
					)
				),
				'backFields' => array(
					array(
						'key'   => 'passenger-name',
						'label' => 'Passenger',
						'value' => 'John Appleseed'
					)
				),
				'transitType' => 'PKTransitTypeAir'
			)
		);
		
		$visualAppearanceKeys = array(
			'barcode'         => array(
				'format'          => 'PKBarcodeFormatQR',
				'message'         => 'Souther Tier Pumking is 10 feet away!!',
				'messageEncoding' => 'iso-8859-1'
			),
			'backgroundColor' => 'rgb(212,160,96)',
			'logoText'        => 'Bacon Beacon'
		);
		
		$webServiceKeys = array();

		// Merge all pass data and set JSON for $this->pass object
		$this->passData = array_merge(
			$standardKeys,
			$associatedAppKeys,
			$relevanceKeys,
			$styleKeys,
			$visualAppearanceKeys,
			$webServiceKeys
		);

		if ($this->debug != false) {
			die(json_encode($this->passData, true));
		}

		$this->pass->setJSON(json_encode($this->passData));

		// Add files to the PKPass package
		$this->pass->addFile('images/icon.png');
		$this->pass->addFile('images/icon@2x.png');
		$this->pass->addFile('images/logo.png');

	   //header('Content-Disposition: attachment; filename="pass.pkpass"');

		if(!$this->pass->create(true)) { // Create and output the PKPass
			echo 'Error: '.$this->pass->getError();
		}

	}
}

?>