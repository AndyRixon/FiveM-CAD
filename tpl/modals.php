 <?php if($perm == $config['banned']) { 
 return;
} else {
 ?>
 <!-- ADD CHARACTER -->
 <div class="modal fade" id="newChar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Character</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form name="newchar" method="post" action="">
	  <label for="firstname">First Name</label>
       <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter your characters first name">
	   <label for="lastname">Last Name</label>
  <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter your characters last name">
  <label for="dob">Date of Birth</label>
  <input type="text" name="dob" id="dob" class="form-control" placeholder="Enter your characters date of birth in format of DD/MM/YYYY">
  <p class="text-info"><em>PLEASE USE THE FORMAT AS DD/MM/YYYY</em></p>
  <label for="address">Address</label>
  <input type="text" name="address" id="address" class="form-control" placeholder="Enter your characters address">
  <label for="sex">Gender</label>
  <select name="sex" id="sex" class="form-control">
	<option value="3" selected>Choose your characters gender</option>
    <option value="1">Male</option>
    <option value="2">Female</option>
  </select>
  <label for="license">Driving License</label>
  <select name="license" id="license" class="form-control">
	<option value="0" selected>Choose your characters license</option>
    <option value="1">No License</option>
    <option value="2">Valid</option>
	<option value="3">Expired</option>
  </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" name="newchar" id="newchar" value="Save Changes">
		</form>
      </div>
    </div>
  </div>
</div>

<!-- ADD VEHICLE -->
 <div class="modal fade" id="newVeh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Vehicle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form name="newveh" method="post" action="">
	  <label for="make">Make/Model</label>
       <select name="make" id="make" class="form-control">
	   <option value="0" selected>Please select the vehicles make and model</option>
	   <option id='-' disabled>------------ CIVILLIAN VEHICLES ------------</option>
		<option id='(LF-22) Starling'>(LF-22) Starling</option>
<option id='Airport Bus'>Airport Bus</option>
<option id='Airtug'>Airtug</option>
<option id='Albany Alpha'>Albany Alpha</option>
<option id='Albany Buccaneer'>Albany Buccaneer</option>
<option id='Albany Buccaneer'>Albany Buccaneer</option>
<option id='Albany Buccaneer Custom '>Albany Buccaneer Custom </option>
<option id='Albany Cavalcade'>Albany Cavalcade</option>
<option id='Albany Cavalcade II'>Albany Cavalcade II</option>
<option id='Albany Emperor'>Albany Emperor</option>
<option id='Albany Fränken Stange'>Albany Fränken Stange</option>
<option id='Albany Hermes'>Albany Hermes</option>
<option id='Albany Lurcher'>Albany Lurcher</option>
<option id='Albany Manana'>Albany Manana</option>
<option id='Albany Manana'>Albany Manana</option>
<option id='Albany Primo'>Albany Primo</option>
<option id='Albany Primo Custom'>Albany Primo Custom</option>
<option id='Albany Roosevelt'>Albany Roosevelt</option>
<option id='Albany Roosevelt Valor'>Albany Roosevelt Valor</option>
<option id='Albany Virgo'>Albany Virgo</option>
<option id='Albany Washington'>Albany Washington</option>
<option id='Alpha-Z1'>Alpha-Z1</option>
<option id='Annis Elegy Retro Custom'>Annis Elegy Retro Custom</option>
<option id='Annis Elegy RH8'>Annis Elegy RH8</option>
<option id='Annis RE-7B'>Annis RE-7B</option>
<option id='Annis Savestra'>Annis Savestra</option>
<option id='Barracks'>Barracks</option>
<option id='Barrage'>Barrage</option>
<option id='Benefactor Dubsta'>Benefactor Dubsta</option>
<option id='Benefactor Dubsta 6x6'>Benefactor Dubsta 6x6</option>
<option id='Benefactor Feltzer'>Benefactor Feltzer</option>
<option id='Benefactor Glendale'>Benefactor Glendale</option>
<option id='Benefactor Panto'>Benefactor Panto</option>
<option id='Benefactor Schafter'>Benefactor Schafter</option>
<option id='Benefactor Schafter LWB'>Benefactor Schafter LWB</option>
<option id='Benefactor Schafter LWB (Armrd)'>Benefactor Schafter LWB (Armrd)</option>
<option id='Benefactor Schafter V12'>Benefactor Schafter V12</option>
<option id='Benefactor Schafter V12 (Armrd)'>Benefactor Schafter V12 (Armrd)</option>
<option id='Benefactor Schwartzer'>Benefactor Schwartzer</option>
<option id='Benefactor Serrano'>Benefactor Serrano</option>
<option id='Benefactor Stirling GT'>Benefactor Stirling GT</option>
<option id='Benefactor Streiter'>Benefactor Streiter</option>
<option id='Benefactor Surano'>Benefactor Surano</option>
<option id='Benefactor XLS'>Benefactor XLS</option>
<option id='Benefactor XLS (Armored)'>Benefactor XLS (Armored)</option>
<option id='BF Bifta'>BF Bifta</option>
<option id='BF Dune Buggy'>BF Dune Buggy</option>
<option id='BF Dune FAV'>BF Dune FAV</option>
<option id='BF Injection'>BF Injection</option>
<option id='BF Ramp Buggy'>BF Ramp Buggy</option>
<option id='BF Raptor'>BF Raptor</option>
<option id='BF Surfer'>BF Surfer</option>
<option id='BF Surfer (Rusted)'>BF Surfer (Rusted)</option>
<option id='BMX'>BMX</option>
<option id='Bollokan Prairie'>Bollokan Prairie</option>
<option id='Boxville'>Boxville</option>
<option id='Bravado Banshee'>Bravado Banshee</option>
<option id='Bravado Banshee (Topless)'>Bravado Banshee (Topless)</option>
<option id='Bravado Banshee 900R'>Bravado Banshee 900R</option>
<option id='Bravado Bison (not Cowboy)'>Bravado Bison (not Cowboy)</option>
<option id='Bravado Buffalo'>Bravado Buffalo</option>
<option id='Bravado Buffalo S'>Bravado Buffalo S</option>
<option id='Bravado Buffalo Sprunk'>Bravado Buffalo Sprunk</option>
<option id='Bravado Duneloader'>Bravado Duneloader</option>
<option id='Bravado Gauntlet'>Bravado Gauntlet</option>
<option id='Bravado Gresley'>Bravado Gresley</option>
<option id='Bravado Half-track'>Bravado Half-track</option>
<option id='Bravado Paradise'>Bravado Paradise</option>
<option id='Bravado Rat-Loader'>Bravado Rat-Loader</option>
<option id='Bravado Rat-Truck'>Bravado Rat-Truck</option>
<option id='Bravado Redwood Gauntlet'>Bravado Redwood Gauntlet</option>
<option id='Bravado Rumpo'>Bravado Rumpo</option>
<option id='Bravado Rumpo Custom'>Bravado Rumpo Custom</option>
<option id='Bravado Verlierer'>Bravado Verlierer</option>
<option id='Bravado Youga'>Bravado Youga</option>
<option id='Bravado Youga Classic'>Bravado Youga Classic</option>
<option id='Brute Armored Boxville'>Brute Armored Boxville</option>
<option id='Brute Camper'>Brute Camper</option>
<option id='Brute Pony'>Brute Pony</option>
<option id='Brute Stockade'>Brute Stockade</option>
<option id='Buckingham Akula'>Buckingham Akula</option>
<option id='Buckingham Howard NX-25'>Buckingham Howard NX-25</option>
<option id='Buckingham Luxor'>Buckingham Luxor</option>
<option id='Buckingham Luxor Deluxe'>Buckingham Luxor Deluxe</option>
<option id='Buckingham Maverick'>Buckingham Maverick</option>
<option id='Buckingham MilJet'>Buckingham MilJet</option>
<option id='Buckingham Nimbus'>Buckingham Nimbus</option>
<option id='Buckingham Police Maverick'>Buckingham Police Maverick</option>
<option id='Buckingham Pyro'>Buckingham Pyro</option>
<option id='Buckingham Shamal'>Buckingham Shamal</option>
<option id='Buckingham SuperVolito'>Buckingham SuperVolito</option>
<option id='Buckingham SuperVolito Carbon'>Buckingham SuperVolito Carbon</option>
<option id='Buckingham Swift'>Buckingham Swift</option>
<option id='Buckingham Swift Deluxe'>Buckingham Swift Deluxe</option>
<option id='Buckingham Tug'>Buckingham Tug</option>
<option id='Buckingham Valkyrie'>Buckingham Valkyrie</option>
<option id='Buckingham Vestra'>Buckingham Vestra</option>
<option id='Buckingham Volatus'>Buckingham Volatus</option>
<option id='Bus'>Bus</option>
<option id='Caddy'>Caddy</option>
<option id='Caddy (no roof)'>Caddy (no roof)</option>
<option id='Canis Bodhi'>Canis Bodhi</option>
<option id='Canis Crusader'>Canis Crusader</option>
<option id='Canis Kalahari'>Canis Kalahari</option>
<option id='Canis Kalahari (Topless)'>Canis Kalahari (Topless)</option>
<option id='Canis Mesa'>Canis Mesa</option>
<option id='Canis Mesa (Merryweather)'>Canis Mesa (Merryweather)</option>
<option id='Canis Seminole'>Canis Seminole</option>
<option id='Chariot Romero Hearse'>Chariot Romero Hearse</option>
<option id='Cheval Fugitive'>Cheval Fugitive</option>
<option id='Cheval Marshall [RP]'>Cheval Marshall [RP]</option>
<option id='Cheval Picador'>Cheval Picador</option>
<option id='Cheval Surge'>Cheval Surge</option>
<option id='Coil Brawler'>Coil Brawler</option>
<option id='Coil Cyclone'>Coil Cyclone</option>
<option id='Coil Raiden'>Coil Raiden</option>
<option id='Coil Rocket Voltic'>Coil Rocket Voltic</option>
<option id='Coil Voltic Hardtop'>Coil Voltic Hardtop</option>
<option id='Coil Voltic Topless'>Coil Voltic Topless</option>
<option id='Cruiser'>Cruiser</option>
<option id='Dashound'>Dashound</option>
<option id='Declasse Asea'>Declasse Asea</option>
<option id='Declasse Burger Shot Stallion'>Declasse Burger Shot Stallion</option>
<option id='Declasse Burrito'>Declasse Burrito</option>
<option id='Declasse Drift Tampa'>Declasse Drift Tampa</option>
<option id='Declasse Gang Burrito'>Declasse Gang Burrito</option>
<option id='Declasse Granger'>Declasse Granger</option>
<option id='Declasse Mamba'>Declasse Mamba</option>
<option id='Declasse Moonbeam'>Declasse Moonbeam</option>
<option id='Declasse Moonbeam Custom '>Declasse Moonbeam Custom </option>
<option id='Declasse Premier'>Declasse Premier</option>
<option id='Declasse Rancher XL'>Declasse Rancher XL</option>
<option id='Declasse Rhapsody'>Declasse Rhapsody</option>
<option id='Declasse Sabre Turbo'>Declasse Sabre Turbo</option>
<option id='Declasse Sabre Turbo Custom'>Declasse Sabre Turbo Custom</option>
<option id='Declasse Stallion [RP]'>Declasse Stallion [RP]</option>
<option id='Declasse Tampa'>Declasse Tampa</option>
<option id='Declasse Tornado'>Declasse Tornado</option>
<option id='Declasse Tornado Cnvrtbl.'>Declasse Tornado Cnvrtbl.</option>
<option id='Declasse Tornado Custom'>Declasse Tornado Custom</option>
<option id='Declasse Tornado Hardtop'>Declasse Tornado Hardtop</option>
<option id='Declasse Tornado Rat Rod'>Declasse Tornado Rat Rod</option>
<option id='Declasse Vigero'>Declasse Vigero</option>
<option id='Declasse Voodoo'>Declasse Voodoo</option>
<option id='Declasse Voodoo Custom '>Declasse Voodoo Custom </option>
<option id='Declasse Weaponized Tampa'>Declasse Weaponized Tampa</option>
<option id='Declasse Yosemite'>Declasse Yosemite</option>
<option id='Dewbauch. Mass. (Racecar)'>Dewbauch. Mass. (Racecar)</option>
<option id='Dewbauchee Exemplar'>Dewbauchee Exemplar</option>
<option id='Dewbauchee JB 700'>Dewbauchee JB 700</option>
<option id='Dewbauchee Massacro'>Dewbauchee Massacro</option>
<option id='Dewbauchee Rapid GT'>Dewbauchee Rapid GT</option>
<option id='Dewbauchee Rapid GT (Topless)'>Dewbauchee Rapid GT (Topless)</option>
<option id='Dewbauchee Rapid GT Classic'>Dewbauchee Rapid GT Classic</option>
<option id='Dewbauchee Seven-70'>Dewbauchee Seven-70</option>
<option id='Dewbauchee Specter'>Dewbauchee Specter</option>
<option id='Dewbauchee Specter Custom'>Dewbauchee Specter Custom</option>
<option id='Dewbauchee Vagner'>Dewbauchee Vagner</option>
<option id='Dinka Akuma'>Dinka Akuma</option>
<option id='Dinka Blista'>Dinka Blista</option>
<option id='Dinka Blista Compact [RP]'>Dinka Blista Compact [RP]</option>
<option id='Dinka Double-T'>Dinka Double-T</option>
<option id='Dinka Enduro'>Dinka Enduro</option>
<option id='Dinka Jester'>Dinka Jester</option>
<option id='Dinka Jester (Racecar)'>Dinka Jester (Racecar)</option>
<option id='Dinka Marquis'>Dinka Marquis</option>
<option id='Dinka Thrust'>Dinka Thrust</option>
<option id='Dinka Vindicator'>Dinka Vindicator</option>
<option id='Docktug'>Docktug</option>
<option id='Dodo'>Dodo</option>
<option id='Duke O'Death'>Duke O'Death</option>
<option id='Dundreary Landstalker'>Dundreary Landstalker</option>
<option id='Dundreary Regina'>Dundreary Regina</option>
<option id='Dundreary Stretch'>Dundreary Stretch</option>
<option id='Dundreary Virgo Classic'>Dundreary Virgo Classic</option>
<option id='Dundreary Virgo Classic Custom'>Dundreary Virgo Classic Custom</option>
<option id='Emperor ETR1'>Emperor ETR1</option>
<option id='Emperor Habanero'>Emperor Habanero</option>
<option id='Endurex Race Bike'>Endurex Race Bike</option>
<option id='Enus Cognoscenti'>Enus Cognoscenti</option>
<option id='Enus Cognoscenti (Armored)'>Enus Cognoscenti (Armored)</option>
<option id='Enus Cognoscenti 55'>Enus Cognoscenti 55</option>
<option id='Enus Cognoscenti 55 (Armored)'>Enus Cognoscenti 55 (Armored)</option>
<option id='Enus Cognoscenti Cabrio'>Enus Cognoscenti Cabrio</option>
<option id='Enus Huntley S'>Enus Huntley S</option>
<option id='Enus Super Diamond'>Enus Super Diamond</option>
<option id='Enus Windsor'>Enus Windsor</option>
<option id='Enus Windsor Drop'>Enus Windsor Drop</option>
<option id='Fathom FQ 2'>Fathom FQ 2</option>
<option id='FH-1 Hunter'>FH-1 Hunter</option>
<option id='Gallivanter Baller'>Gallivanter Baller</option>
<option id='Gallivanter Baller II'>Gallivanter Baller II</option>
<option id='Gallivanter Baller LE'>Gallivanter Baller LE</option>
<option id='Gallivanter Baller LE (Armored)'>Gallivanter Baller LE (Armored)</option>
<option id='Gallivanter Baller LE LWB'>Gallivanter Baller LE LWB</option>
<option id='Gallivanter Baller LE LWB (Armrd)'>Gallivanter Baller LE LWB (Armrd)</option>
<option id='Grotti Bestia GTS'>Grotti Bestia GTS</option>
<option id='Grotti Brioso R/A'>Grotti Brioso R/A</option>
<option id='Grotti Carbonizzare'>Grotti Carbonizzare</option>
<option id='Grotti Cheetah'>Grotti Cheetah</option>
<option id='Grotti Cheetah Classic'>Grotti Cheetah Classic</option>
<option id='Grotti Stinger (Softtop)'>Grotti Stinger (Softtop)</option>
<option id='Grotti Stinger (Topless)'>Grotti Stinger (Topless)</option>
<option id='Grotti Stinger GT'>Grotti Stinger GT</option>
<option id='Grotti Turismo Classic'>Grotti Turismo Classic</option>
<option id='Grotti Turismo R'>Grotti Turismo R</option>
<option id='Grotti Vigilante'>Grotti Vigilante</option>
<option id='Grotti Visione'>Grotti Visione</option>
<option id='Grotti X80 Proto'>Grotti X80 Proto</option>
<option id='Hijack Ruston'>Hijack Ruston</option>
<option id='Hijak Khamelion'>Hijak Khamelion</option>
<option id='HVY APC'>HVY APC</option>
<option id='HVY Barracks Semi'>HVY Barracks Semi</option>
<option id='HVY Biff'>HVY Biff</option>
<option id='HVY Chernobog'>HVY Chernobog</option>
<option id='HVY Dozer'>HVY Dozer</option>
<option id='HVY Dump'>HVY Dump</option>
<option id='HVY Forklift'>HVY Forklift</option>
<option id='HVY Insurgent'>HVY Insurgent</option>
<option id='HVY Insurgent (Covered)'>HVY Insurgent (Covered)</option>
<option id='HVY Insurgent Pick-up Custom'>HVY Insurgent Pick-up Custom</option>
<option id='HVY Nightshark'>HVY Nightshark</option>
<option id='Imponte Deluxo'>Imponte Deluxo</option>
<option id='Imponte Dukes [RP]'>Imponte Dukes [RP]</option>
<option id='Imponte Nightshade'>Imponte Nightshade</option>
<option id='Imponte Phoenix'>Imponte Phoenix</option>
<option id='Imponte Ruiner'>Imponte Ruiner</option>
<option id='Imponte Ruiner 2000'>Imponte Ruiner 2000</option>
<option id='Inverto Coq. Classic (Hardtop)'>Inverto Coq. Classic (Hardtop)</option>
<option id='Inverto Coq. Classic (Topless)'>Inverto Coq. Classic (Topless)</option>
<option id='Inverto Coquette (Hardtop)'>Inverto Coquette (Hardtop)</option>
<option id='Inverto Coquette (Topless)'>Inverto Coquette (Topless)</option>
<option id='Inverto Coquette BlackFin'>Inverto Coquette BlackFin</option>
<option id='JoBuilt Hauler'>JoBuilt Hauler</option>
<option id='JoBuilt Mammatus'>JoBuilt Mammatus</option>
<option id='JoBuilt P-996 LAZER'>JoBuilt P-996 LAZER</option>
<option id='JoBuilt Phantom'>JoBuilt Phantom</option>
<option id='JoBuilt Phantom Wedge'>JoBuilt Phantom Wedge</option>
<option id='JoBuilt Velum'>JoBuilt Velum</option>
<option id='JoBuilt Velum 5-Seater'>JoBuilt Velum 5-Seater</option>
<option id='Karin Asterope'>Karin Asterope</option>
<option id='Karin BeeJay XL'>Karin BeeJay XL</option>
<option id='Karin Dilettante'>Karin Dilettante</option>
<option id='Karin Futo'>Karin Futo</option>
<option id='Karin Intruder'>Karin Intruder</option>
<option id='Karin Kuruma'>Karin Kuruma</option>
<option id='Karin Kuruma (Armored)'>Karin Kuruma (Armored)</option>
<option id='Karin Rebel (clean)'>Karin Rebel (clean)</option>
<option id='Karin Rebel (rusty)'>Karin Rebel (rusty)</option>
<option id='Karin Sultan'>Karin Sultan</option>
<option id='Karin Sultan RS'>Karin Sultan RS</option>
<option id='Karin Technical'>Karin Technical</option>
<option id='Karin Technical Aqua'>Karin Technical Aqua</option>
<option id='Karin Technical Custom'>Karin Technical Custom</option>
<option id='Kraken [RP]'>Kraken [RP]</option>
<option id='Lampadati Casco'>Lampadati Casco</option>
<option id='Lampadati Felon'>Lampadati Felon</option>
<option id='Lampadati Felon GT'>Lampadati Felon GT</option>
<option id='Lampadati Furore GT'>Lampadati Furore GT</option>
<option id='Lampadati Pigalle'>Lampadati Pigalle</option>
<option id='Lampadati Toro'>Lampadati Toro</option>
<option id='Lampadati Tropos Rallye'>Lampadati Tropos Rallye</option>
<option id='Lawn Mower'>Lawn Mower</option>
<option id='LCC Avarus'>LCC Avarus</option>
<option id='LCC Hexer'>LCC Hexer</option>
<option id='LCC Innovation'>LCC Innovation</option>
<option id='LCC Sanctus'>LCC Sanctus</option>
<option id='Maibatsu Frogger'>Maibatsu Frogger</option>
<option id='Maibatsu Manchez'>Maibatsu Manchez</option>
<option id='Maibatsu Mule (Livery)'>Maibatsu Mule (Livery)</option>
<option id='Maibatsu Mule (Plain)'>Maibatsu Mule (Plain)</option>
<option id='Maibatsu Penumbra'>Maibatsu Penumbra</option>
<option id='Maibatsu Sanchez'>Maibatsu Sanchez</option>
<option id='Maibatsu Sanchez (Livery)'>Maibatsu Sanchez (Livery)</option>
<option id='Maibatsu Sanchez (Livery)'>Maibatsu Sanchez (Livery)</option>
<option id='Maibatsu Sanchez 2'>Maibatsu Sanchez 2</option>
<option id='Mammoth Hydra'>Mammoth Hydra</option>
<option id='Mammoth Mogul'>Mammoth Mogul</option>
<option id='Mammoth Patriot'>Mammoth Patriot</option>
<option id='Mammoth Thruster'>Mammoth Thruster</option>
<option id='MTL Brickade'>MTL Brickade</option>
<option id='MTL Dune'>MTL Dune</option>
<option id='MTL Packer'>MTL Packer</option>
<option id='MTL Pounder'>MTL Pounder</option>
<option id='MTL Wastelander'>MTL Wastelander</option>
<option id='Nagasaki BF400'>Nagasaki BF400</option>
<option id='Nagasaki Blazer'>Nagasaki Blazer</option>
<option id='Nagasaki Blazer Aqua'>Nagasaki Blazer Aqua</option>
<option id='Nagasaki Blazer Lifeguard'>Nagasaki Blazer Lifeguard</option>
<option id='Nagasaki Buzzard Attack Chppr.'>Nagasaki Buzzard Attack Chppr.</option>
<option id='Nagasaki Carbon RS'>Nagasaki Carbon RS</option>
<option id='Nagasaki Chimera'>Nagasaki Chimera</option>
<option id='Nagasaki Dinghy'>Nagasaki Dinghy</option>
<option id='Nagasaki Havok'>Nagasaki Havok</option>
<option id='Nagasaki Hot Rod Blazer'>Nagasaki Hot Rod Blazer</option>
<option id='Nagasaki Shotaro'>Nagasaki Shotaro</option>
<option id='Nagasaki Street Blazer'>Nagasaki Street Blazer</option>
<option id='Nagasaki Ultralight'>Nagasaki Ultralight</option>
<option id='Obey 9F'>Obey 9F</option>
<option id='Obey 9F Cabrio'>Obey 9F Cabrio</option>
<option id='Obey Omnis'>Obey Omnis</option>
<option id='Obey Rocoto'>Obey Rocoto</option>
<option id='Obey Tailgater'>Obey Tailgater</option>
<option id='Ocelot Ardent'>Ocelot Ardent</option>
<option id='Ocelot F620'>Ocelot F620</option>
<option id='Ocelot Jackal'>Ocelot Jackal</option>
<option id='Ocelot Lynx'>Ocelot Lynx</option>
<option id='Ocelot Pariah'>Ocelot Pariah</option>
<option id='Ocelot Penetrator'>Ocelot Penetrator</option>
<option id='Ocelot Stromberg'>Ocelot Stromberg</option>
<option id='Ocelot XA-21'>Ocelot XA-21</option>
<option id='Överflöd Autarch'>Överflöd Autarch</option>
<option id='Overflod Entity XF'>Overflod Entity XF</option>
<option id='P-45 Nokota'>P-45 Nokota</option>
<option id='Pegassi Bati 801'>Pegassi Bati 801</option>
<option id='Pegassi Bati 801RR'>Pegassi Bati 801RR</option>
<option id='Pegassi Esskey'>Pegassi Esskey</option>
<option id='Pegassi Faggio'>Pegassi Faggio</option>
<option id='Pegassi Faggio Mod'>Pegassi Faggio Mod</option>
<option id='Pegassi Faggio Sport'>Pegassi Faggio Sport</option>
<option id='Pegassi FCR 1000'>Pegassi FCR 1000</option>
<option id='Pegassi FCR 1000 Custom'>Pegassi FCR 1000 Custom</option>
<option id='Pegassi Infernus'>Pegassi Infernus</option>
<option id='Pegassi Infernus Classic'>Pegassi Infernus Classic</option>
<option id='Pegassi Monroe'>Pegassi Monroe</option>
<option id='Pegassi Oppressor'>Pegassi Oppressor</option>
<option id='Pegassi Osiris*'>Pegassi Osiris*</option>
<option id='Pegassi Reaper'>Pegassi Reaper</option>
<option id='Pegassi Ruffian'>Pegassi Ruffian</option>
<option id='Pegassi Speeder'>Pegassi Speeder</option>
<option id='Pegassi Tempesta'>Pegassi Tempesta</option>
<option id='Pegassi Torero'>Pegassi Torero</option>
<option id='Pegassi Vacca'>Pegassi Vacca</option>
<option id='Pegassi Vortex'>Pegassi Vortex</option>
<option id='Pegassi Zentorno'>Pegassi Zentorno</option>
<option id='Pfister 811'>Pfister 811</option>
<option id='Pfister Comet'>Pfister Comet</option>
<option id='Pfister Comet Retro Custom'>Pfister Comet Retro Custom</option>
<option id='Pfister Comet Safari'>Pfister Comet Safari</option>
<option id='Principe Diabolus'>Principe Diabolus</option>
<option id='Principe Diabolus Custom'>Principe Diabolus Custom</option>
<option id='Principe Lectro'>Principe Lectro</option>
<option id='Principe Nemesis'>Principe Nemesis</option>
<option id='Progen GP1'>Progen GP1</option>
<option id='Progen Itali GTB'>Progen Itali GTB</option>
<option id='Progen Itali GTB Custom'>Progen Itali GTB Custom</option>
<option id='Progen T20*'>Progen T20*</option>
<option id='Progen Tyrus'>Progen Tyrus</option>
<option id='Rental Shuttle Bus'>Rental Shuttle Bus</option>
<option id='Rhino Tank'>Rhino Tank</option>
<option id='Ripley'>Ripley</option>
<option id='RM-10 Bombushka'>RM-10 Bombushka</option>
<option id='Rogue'>Rogue</option>
<option id='Savage'>Savage</option>
<option id='Schyster Fusilade'>Schyster Fusilade</option>
<option id='Scorcher'>Scorcher</option>
<option id='Scrap Truck'>Scrap Truck</option>
<option id='Shitzu Defiler'>Shitzu Defiler</option>
<option id='Shitzu Hakuchou'>Shitzu Hakuchou</option>
<option id='Shitzu Hakuchou Drag Bike'>Shitzu Hakuchou Drag Bike</option>
<option id='Shitzu Jetmax'>Shitzu Jetmax</option>
<option id='Shitzu PCJ 600'>Shitzu PCJ 600</option>
<option id='Shitzu Squalo'>Shitzu Squalo</option>
<option id='Shitzu Suntrap'>Shitzu Suntrap</option>
<option id='Shitzu Tropic'>Shitzu Tropic</option>
<option id='Shitzu Vader'>Shitzu Vader</option>
<option id='Speedophile Seashark'>Speedophile Seashark</option>
<option id='Stanley Fieldmaster'>Stanley Fieldmaster</option>
<option id='Taco Van'>Taco Van</option>
<option id='The Liberator'>The Liberator</option>
<option id='Titan'>Titan</option>
<option id='TM-02 Khanjali'>TM-02 Khanjali</option>
<option id='Tri-Cycles Race Bike'>Tri-Cycles Race Bike</option>
<option id='Truffade Adder'>Truffade Adder</option>
<option id='Truffade Nero'>Truffade Nero</option>
<option id='Truffade Nero Custom'>Truffade Nero Custom</option>
<option id='Truffade Z-Type'>Truffade Z-Type</option>
<option id='Tula'>Tula</option>
<option id='Ubermacht Oracle II'>Ubermacht Oracle II</option>
<option id='Ubermacht Oracle XS'>Ubermacht Oracle XS</option>
<option id='Ubermacht SC1'>Ubermacht SC1</option>
<option id='Ubermacht Sentinel'>Ubermacht Sentinel</option>
<option id='Ubermacht Sentinel Classic'>Ubermacht Sentinel Classic</option>
<option id='Ubermacht Sentinel XS'>Ubermacht Sentinel XS</option>
<option id='Ubermacht Zion'>Ubermacht Zion</option>
<option id='Ubermacht Zion Cabrio'>Ubermacht Zion Cabrio</option>
<option id='Utility Truck (storage)'>Utility Truck (storage)</option>
<option id='Utility Truck (w/ crane)'>Utility Truck (w/ crane)</option>
<option id='Utility Truck/Van (Contender)'>Utility Truck/Van (Contender)</option>
<option id='V-65 Moltok'>V-65 Moltok</option>
<option id='Vapid Benson'>Vapid Benson</option>
<option id='Vapid Blade'>Vapid Blade</option>
<option id='Vapid Bobcat XL'>Vapid Bobcat XL</option>
<option id='Vapid Bullet'>Vapid Bullet</option>
<option id='Vapid Chino'>Vapid Chino</option>
<option id='Vapid Chino Custom'>Vapid Chino Custom</option>
<option id='Vapid Contender'>Vapid Contender</option>
<option id='Vapid Desert Raid'>Vapid Desert Raid</option>
<option id='Vapid Dominator'>Vapid Dominator</option>
<option id='Vapid FMJ'>Vapid FMJ</option>
<option id='Vapid Guardian'>Vapid Guardian</option>
<option id='Vapid Hotknife'>Vapid Hotknife</option>
<option id='Vapid Minivan'>Vapid Minivan</option>
<option id='Vapid Minivan Custom'>Vapid Minivan Custom</option>
<option id='Vapid Peyote'>Vapid Peyote</option>
<option id='Vapid Peyote'>Vapid Peyote</option>
<option id='Vapid Pisswasser Dominator'>Vapid Pisswasser Dominator</option>
<option id='Vapid Radius'>Vapid Radius</option>
<option id='Vapid Retinue'>Vapid Retinue</option>
<option id='Vapid Riata'>Vapid Riata</option>
<option id='Vapid Sadler'>Vapid Sadler</option>
<option id='Vapid Sandking SWB'>Vapid Sandking SWB</option>
<option id='Vapid Sandking XL'>Vapid Sandking XL</option>
<option id='Vapid Slamvan'>Vapid Slamvan</option>
<option id='Vapid Slamvan Custom'>Vapid Slamvan Custom</option>
<option id='Vapid Speedo'>Vapid Speedo</option>
<option id='Vapid Stanier'>Vapid Stanier</option>
<option id='Vapid Trophy Truck'>Vapid Trophy Truck</option>
<option id='Volatol'>Volatol</option>
<option id='Vulcan Ingot'>Vulcan Ingot</option>
<option id='Vulcar Warrener'>Vulcar Warrener</option>
<option id='Weeny Issi'>Weeny Issi</option>
<option id='Western Annihilator'>Western Annihilator</option>
<option id='Western Bagger'>Western Bagger</option>
<option id='Western Besra'>Western Besra</option>
<option id='Western Cargobob'>Western Cargobob</option>
<option id='Western Cargobob Jetsam'>Western Cargobob Jetsam</option>
<option id='Western Cliffhanger'>Western Cliffhanger</option>
<option id='Western Cuban 800'>Western Cuban 800</option>
<option id='Western Daemon'>Western Daemon</option>
<option id='Western Daemon Custom'>Western Daemon Custom</option>
<option id='Western Duster'>Western Duster</option>
<option id='Western Gargoyle'>Western Gargoyle</option>
<option id='Western Mallard'>Western Mallard</option>
<option id='Western Nightblade'>Western Nightblade</option>
<option id='Western Rat Bike'>Western Rat Bike</option>
<option id='Western Seabreeze'>Western Seabreeze</option>
<option id='Western Sovereign'>Western Sovereign</option>
<option id='Western Wolfsbane'>Western Wolfsbane</option>
<option id='Western Zombie Bobber'>Western Zombie Bobber</option>
<option id='Western Zombie Chopper'>Western Zombie Chopper</option>
<option id='Whippet Race Bike'>Whippet Race Bike</option>
<option id='Willard Faction'>Willard Faction</option>
<option id='Willard Faction Custom '>Willard Faction Custom </option>
<option id='Willard Faction Custom Donk '>Willard Faction Custom Donk </option>
<option id='Zirconium Journey'>Zirconium Journey</option>
<option id='Zirconium Stratum'>Zirconium Stratum</option>
<option id='-' disabled>------------ EMERGENCY VEHICLES ------------</option>
<option id='2020 Ford FPUI'>2020 Ford FPUI</option>
<option id='2018 Dodge Charger'>2018 Dodge Charger</option>
<option id='2011 CVPI'>2011 CVPI</option>
<option id='2016 Tahoe'>2016 Tahoe</option>
<option id='2019 Dodge Charger Hellcat SRT'>2019 Dodge Charger Hellcat SRT</option>
<option id='2014 Ford Raptor'>2014 Ford Raptor</option>
<option id='2020 Ford FPIS'>2020 Ford FPIS</option>
<option id='2016 Ford Explorer'>2016 Ford Explorer</option>
	   </select>
	   <label for="colour">Colour</label>
  <input type="text" name="colour" id="colour" class="form-control" placeholder="Enter the vehicles colour">
	   <label for="plate">License Plate</label>
  <input type="text" name="plate" id="plate" class="form-control" placeholder="Enter the vehicles license plate">
  <label for="reg">Registration</label>
  <select name="reg" id="reg" class="form-control">
	<option value="0" selected>Please select the vehicles registration</option>
    <option value="1">Valid</option>
    <option value="2">Expired</option>
	<option value="3">Not Registered</option>
  </select>
  <label for="insurance">Insurance</label>
  <select name="insurance" id="insurance" class="form-control">
	<option value="0" selected>Please select the vehicles insurance</option>
    <option value="1">Insured</option>
    <option value="2">Expired</option>
	<option value="3">Not Insured</option>
  </select>
  <label for="owner">Owner</label>
  <select name="owner" id="owner" class="form-control">
	<option value="0" selected>Please select the vehicles owner</option>
	<?php
	$getChars = $link->query("SELECT * FROM characters WHERE steamid=".$steamprofile['steamid']);
				while($char = $getChars->fetch_assoc()) {
					echo '<option value="'.$char['id'].'">'.$char['firstname'].' '.$char['lastname'].'</option>';
				}
	?>
  </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" name="newveh" id="newveh" value="Save Changes">
		</form>
      </div>
    </div>
  </div>
</div>

<!-- CALL 911 -->
 <div class="modal fade" id="call911" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Call 911</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <p>Thank you for calling 911, please use the below to describe the call with as much detail as you can.</p>
	  <form name="call911" method="post" action="<?php echo $config['systemurl']; ?>/index.php">
	  <label for="caller">Caller</label>
  <select name="caller" id="caller" class="form-control">
	<option value="0" selected>Anonymous Caller</option>
	<?php
	$getChars = $link->query("SELECT * FROM characters WHERE steamid=".$steamprofile['steamid']);
				while($char = $getChars->fetch_assoc()) {
					echo '<option value="'.$char['id'].'">'.$char['firstname'].' '.$char['lastname'].'</option>';
				}
	?>
  </select>
  <label for="location">Location</label>
       <input type="text" name="location" id="location" class="form-control" placeholder="Enter the location of the crime">
	   <label for="desc">Description</label>
	   <textarea name="desc" id="desc" cols="45" rows="5" class="form-control" placeholder="Please describe the crime in as much details as possible."></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" name="call911" id="call911" value="Send Call">
		</form>
      </div>
    </div>
  </div>
</div>

<!-- SETTINGS -->
 <div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Manage Settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form name="settings" method="post" action="<?php echo $config['systemurl']; ?>/index.php">
	  <?php
	$getUser = $link->query("SELECT * FROM users WHERE steamid=".$steamprofile['steamid']);
				while($user = $getUser->fetch_assoc()) {
					$email = $user['email'];
					$callsign = $user['callsign'];
				}
	?>
	<label for="email">Email Address</label>
	<input name="email" type="text" id="email" class="form-control" value="<?php echo $email; ?>">
	<label for="callsign">Callsign</label>
	<input name="callsign" type="text" id="callsign" class="form-control" value="<?php echo $callsign; ?>">
<input name="steamid" type="hidden" id="steamid" value="<?php echo $steamprofile['steamid']; ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" name="settings" id="settings" value="Save Changes">
		</form>
      </div>
    </div>
  </div>
</div>

<!-- PERSONS BOLO -->
 <div class="modal fade bd-example-modal-xl" id="personsbolo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Persons of Interest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <table class="table table-hover table-dark">
  <thead>
  <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
	<th scope="col">Date of Birth</th>
    <th scope="col">Gender</th>
    <th scope="col">Address</th>
	<th scope="col">Notes</th>
    <th scope="col">&nbsp;</th>
  </tr>
  </thead>
  <tbody>
	  <?php
	$getPBOLOS = $link->query("SELECT * FROM characters WHERE boloed=1");
				while($char = $getPBOLOS->fetch_assoc()) {
					if($char['sex'] == 1) {
					$sex = 'Male';
				} elseif($char['sex'] == 2) {
					$sex = 'Female';
				} elseif($char['sex'] == 3) {
					$sex = 'No Gender Set';
				}
					echo '<tr>
    <td>'.$char['firstname'].'</td>
    <td>'.$char['lastname'].'</td>
	<td>'.$char['dob'].'</td>
    <td>'.$sex.'</td>
    <td>'.$char['address'].'</td>
	<td>'.$char['bolonotes'].'</td>
    <td align="right"><a style="color: red;" href="'.$config['systemurl'].'/index.php?removepbolo='.$char['id'].'" role="button"><i class="fas fa-trash"></i></a></td>
  </tr>';
				}
	?>
	</tbody>
</table>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- VEHICLES BOLO -->
 <div class="modal fade bd-example-modal-xl" id="vehiclesbolo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vehicles of Interest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <table class="table table-hover table-dark">
  <thead>
  <tr>
    <th scope="col">Make/Model</th>
	<th scope="col">Colour</th>
    <th scope="col">License Plate</th>
	<th scope="col">Notes</th>
    <th scope="col">&nbsp;</th>
  </tr>
  </thead>
  <tbody>
	  <?php
	$getVBOLOS = $link->query("SELECT * FROM vehicles WHERE boloed=1");
				while($veh = $getVBOLOS->fetch_assoc()) {
					$getOwner = $link->query("SELECT * FROM characters WHERE id=".$veh['owner']);
					while($owner = $getOwner->fetch_assoc()) {
						$firstname = $owner['firstname'];
						$lastname = $owner['lastname'];
						$ownerid = $owner['id'];
					}
				echo '<tr>
    <td>'.$veh['make'].'</td>
	<td>'.$veh['colour'].'</td>
    <td>'.$veh['plate'].'</td>
	<td>'.$veh['bolonotes'].'</td>
    <td align="right"><a style="color: red;" href="'.$config['systemurl'].'/index.php?removevbolo='.$veh['id'].'" role="button"><i class="fas fa-trash"></i></a></td>
  </tr>';
				}
	?>
	</tbody>
</table>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- REQUEST ACCESS -->
 <div class="modal fade" id="beCop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Access</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <p>Anyone can be a law enforcement officer on our FivePD server, whether it be part of the LSPD or BCSO using the builtin FivePD features, however if you wish to deal with real civillian players you will need to request access to the Dispatch & Bolo features of this system.</p>
	  <p class="text-info">Simply click the button below, and you will automatically be given access. <b><i>Any abuse using this system, will result in a permanant ban from our servers!</i></b></p>
	  <form name="becop" method="post" action="<?php echo $config['systemurl']; ?>/index.php">
<input name="steamid" type="hidden" id="steamid" value="<?php echo $steamprofile['steamid']; ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" name="becop" id="becop" value="Request Access">
		</form>
      </div>
    </div>
  </div>
</div>

 <!-- CIVILLIAN LOOKUP -->
 <div class="modal fade" id="civlookup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Civillian Lookup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form name="civlookup" method="post" action="<?php echo $config['systemurl']; ?>/index.php?page=civ-lookup">
	  <label for="firstname">First Name</label>
       <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter the civillians first name">
	   <label for="lastname">Last Name</label>
  <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter the civillians last name">
  <label for="dob">Date of Birth</label>
  <input type="text" name="dob" id="dob" class="form-control" placeholder="Enter the civillians date of birth in format of DD/MM/YYYY">
  <p class="text-info"><em>PLEASE USE THE FORMAT AS DD/MM/YYYY</em></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" name="civlookup" id="civlookup" value="Civillian Lookup">
		</form>
      </div>
    </div>
  </div>
</div>

 <!-- VEHICLE LOOKUP -->
 <div class="modal fade" id="vehlookup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vehicle Lookup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form name="vehlookup" method="post" action="<?php echo $config['systemurl']; ?>/index.php?page=veh-lookup">
	  <label for="plate">License Plate</label>
       <input type="text" name="plate" id="plate" class="form-control" placeholder="Enter the vehicles license plate">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" name="vehlookup" id="vehlookup" value="Vehicle Lookup">
		</form>
      </div>
    </div>
  </div>
</div>


 <?php } ?>