<!DOCTYPE html>
<html lang="en">

<?php

require_once('contents.php');
$contents = new Contents();

?>

<head>
    <meta charset="utf-8">
    <title>MERGE-it 2023</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="merge-it, conferenza, opensource, freesoftware, software libero, libertà, libertà digitali, cultura libera">
    <meta name="description" content="MERGE-it, dove la community si incontra. 12/13 maggio 2023, Verona">

    <link href="img/favicon.ico" rel="icon">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="MERGE-it 2023">
	<meta name="twitter:description" content="La community si incontra. 12/13 maggio 2023, Verona">
	<meta name="twitter:creator" content="@MERGE_it">
	<meta name="twitter:image" content="https://merge-it.net/img/fb.png">

	<meta property="og:title" content="MERGE-it 2023" />
	<meta property="og:site_name" content="La community si incontra. 12/13 maggio 2023, Verona" />
	<meta property="og:url" content="https://merge-it.net/" />
	<meta property="og:image" content="https://merge-it.net/img/fb.png" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="it" />

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fa.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-12 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>info@merge-it.net</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+39 348 7254214</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">MERGE-it</h1>
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://twitter.com/merge_it" title="MERGE-it su Twitter">
                        <small class="fab fa-twitter text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://mastodon.uno/@Merge_IT" title="MERGE-it su Mastodon">
                        <small class="fab fa-mastodon text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 d-none d-md-block" src="img/carousel-1.png" alt="">
                    <img class="w-100 d-block d-md-none" src="img/carousel-1-mobile.png" alt="">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">Verona - 12/13 maggio 2023</p>
                                    <h2 class="display-1 mb-4 animated slideInDown">la community<br>si incontra</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-center mb-4">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">About Us</p>
                    <p class="mb-5">In Italia esistono tante realtà che si occupano di libertà digitali, sotto molti aspetti ed in molti modi: associazioni, gruppi informali, aziende, professionisti e pubbliche amministrazioni.<br>
                        Scopo di <strong>MERGE-it</strong> è riunirle insieme, per conoscersi e farsi conoscere, discutere e dibattere, confrontarsi e misurarsi.<br><br>
                        L'evento è aperto a tutti, la partecipazione gratuita, e non è richiesta registrazione (ma, per permetterci di regolarci con il catering, ti invitiamo a compilare <a href="https://servizi.linux.it/shared/vbjWMLwd-W5IWsYg6rQDzb6YXfdaN3KrvUnnKn-D6xF">questo form</a>).</p>
                    <p>
                        <small>
                            La prima edizione si è svolta a marzo 2018, a Torino, si è articolata in otto aule tematiche e ha accolto partecipanti da tutta Italia.<br>
                            La seconda edizione si è svolta a maggio 2021, esclusivamente online - causa pandemia COVID-19 -, ed ha ospitato sei tavole rotonde tematiche di confronto.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Dove e Quando</p>
                    <h1 class="display-5 mb-4">Verona, 12/13 maggio</h1>
                    <p class="mb-4">MERGE-it 2023 si svolge presso gli spazi del 311 Verona, in Lungadige Galtarossa 21.</p>
                    <ul>
                        <li>In treno: la stazione di Verona Porta Nuova è raggiungibile in 20 minuti a piedi. Verona è collegata con treni diretti Freccia Rossa e Italo da buona parte delle maggiori città italiane.</li>
                        <li>In aereo: l'aeroporto Valerio Catullo è connesso con voli (anche low-cost) da tutta Italia. Da qui, una navetta che passa ogni 20 minuti vi porta alla stazione ferroviaria di Verona Porta Nuova.</li>
                        <li>In auto: Verona si trova nell'intersezione tra le autostrade A22 per chi viaggia sulla direttrice nord/sud, e A4 per chi arriva da est o ovest. Nei pressi del 311, davanti al Cimitero Monumentale, si trova il Parcheggio Centro.</li>
                    </ul>

                    <ul>
                        <li>Dove dormire: Verona è una città estremamente frequentata dal turismo internazionale, si raccomanda di prenotare la propria stanza con ampio anticipo per trovare posto a buon prezzo. <a href="#" class="text-decoration-underline" data-bs-toggle="modal" data-bs-target="#alberghi">Clicca qui per consultare l'elenco di strutture convenzionate.</a></li>
                        <li>Dove mangiare: il 12 e 13 maggio il pranzo sarà organizzato in loco con servizio catering.<br><a class="btn w-100 mt-2 btn-success" target="_blank" href="https://servizi.linux.it/shared/vbjWMLwd-W5IWsYg6rQDzb6YXfdaN3KrvUnnKn-D6xF">Compila il form per non restare senza pranzo!</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <iframe width="100%" height="100%" style="min-height: 350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=10.981585979461672%2C45.42378695906098%2C11.017420291900637%2C45.437640666457426&amp;layer=mapnik&amp;marker=45.430714237818165%2C10.999503135681152" style="border: 1px solid black"></iframe>
                </div>
            </div>
        </div>
    </div>

	<div class="modal fade" id="alberghi" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Strutture Convenzionate</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Best Western San Giovanni Lupatoto</h5>
							<p>
								Verrà riservato fino al 12% di sconto sulle offerte flessibili e prepagate con colazione. Lo sconto verrà applicato solamente per le prenotazioni effettuate direttamente con la struttura. Il cliente dovrà sempre specificare di essere un partecipante dell'evento INFOPOINT 311 in fase di prenotazione, per poter beneficiare delle agevolazioni a loro riservate.
							</p>
							<ul>
								<li>Carta di credito a garanzia della prenotazione al momento da comunicare al momento della conferma</li>
								<li>Saldo diretto in hotel al check - out da parte di ogni partecipante</li>
								<li>L’hotel potrebbe effettuare una pre autorizzazione sulla carta di credito comunicata per verificarne la validità.</li>
								<li>Cancellazione gratuita possibile entro 5 giorni dalla data di arrivo, dopo tale scadenza verrà applicata una penale del 100%.</li>
							</ul>
							<hr>
							<ul>
								<li>Tel: +39 0458754111</li>
								<li>Fax: +39 0458754120</li>
								<li>e-mail: info@ctchotelverona.com </li>
							</ul>
						</div>
					</div>
					<div class="card mt-2">
						<div class="card-body">
							<h5 class="card-title">Hotel Leonardo Verona</h5>
							<p>
								<a href="https://www.leonardo-hotels.com/booking?hotel=leonardo-hotel-verona&from=2023-05-12T00:00:00&to=2023-05-14T00:00:00&stay=leisure&redeemPoints=false&paxesConfig=adults,1,children,0,infants,0&promoCode=infopoint">Clicca qui</a> per prenotare la tua stanza a prezzo agevolato.
							</p>
							<hr>
							<ul>
								<li>Tel: +39 045903600</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Chiudi</button>
				</div>
			</div>
		</div>
	</div>

    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Programma</p>
            </div>
            <div class="row g-4 wow fadeInUp justify-content-center" data-wow-delay="0.3s">
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="/img/planimetria.png">
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
        					<div class="col-12 col-md-6">
                                <p class="text-center mt-2"><i class="fa fa-solid fa-arrow-down fa-3x"></i></p>
                                Nelle aule Academy e FabSchool (al piano terra, davanti all'ingresso) si tengono i talk ed i workshop, nei quali esperti di ogni specifico ambito raccontano il proprio progetto o la propria esperienza.<br>
                                Ciascuno dura 30 minuti, e sono benvenute le domande!
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="text-center mt-2"><i class="fa fa-solid fa-arrow-down fa-3x"></i></p>
                                In aula UX Lab (al primo piano: le scale sono a destra dell'ingresso) si tengono le tavole rotonde. Per ciascuna sono previsti alcuni panelist, ma l'intento è quello di coinvolgere direttamente tutti coloro che hanno qualcosa da dire sul tema in oggetto, una esperienza, una posizione o una considerazione.
                            </div>
                        </div>
                    </div>
                </div>

				<h2 class="display-5 mb-1 mt-5 text-center">Giovedi 11 Maggio</h2>
				<div class="row justify-content-center">
					<div class="col-12 col-lg-7">
						<p class="text-center">
							<strong>Serata di benvenuto</strong>: dalle ore 19:00 e a oltranza, ci vediamo al <a href="https://www.birreriaverona.it/">Kulmbacher Bier-Haus</a> in <a href="https://www.openstreetmap.org/#map=19/45.43551/10.98528">Via Guglielmo Marconi 72</a> per salutarci, accogliere chi arriva da fuori Verona, e mangiare e bere qualcosa insieme.
						</p>
					</div>
				</div>

				<h2 class="display-5 mb-1 mt-5 text-center">Venerdi 12 Maggio</h2>
				<div class="table-responsive">
					<table class="table table-borderless schedule">
						<thead>
							<tr>
								<th width="8%">&nbsp;</th>
								<th width="23%">Academy</th>
                                <th width="23%">Fab School</th>
								<th width="23%">Playground</th>
								<th width="23%">UX Lab</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="hour">10:00</th>
								<td>
									<div class="cell"><?php echo $contents->printCell('welcome') ?></div>
								</td>
                                <td>
                                    &nbsp;
                                </td>
								<td rowspan="3">
									<div class="cell">Spazio Espositivo</div>
								</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th class="hour">11:00</th>
								<td>
                                    <div class="cell half"><?php echo $contents->printCell('vvvv') ?></div>
                                    <div class="cell half"><?php echo $contents->printCell('cittadella') ?></div>
								</td>
                                <td>
                                    <div class="cell half bg-white">&nbsp;</div>
                                    <div class="cell half"><?php echo $contents->printCell('opendataverona') ?></div>
                                </td>
								<td rowspan="2">
									<div class="cell"><?php echo $contents->printCell('fri-roundtable-1') ?></div>
								</td>
							</tr>
							<tr>
								<th class="hour">12:00</th>
								<td>
									<div class="cell half"><?php echo $contents->printCell('qgis') ?></div>
                                    <div class="cell half"><?php echo $contents->printCell('osa') ?></div>
								</td>
                                <td>
                                    <div class="cell half"><?php echo $contents->printCell('zorin') ?></div>
                                    <div class="cell half"><?php echo $contents->printCell('fuss') ?></div>
                                </td>
							</tr>
							<tr>
								<th class="hour">13:00</th>
								<td colspan="4" rowspan="2">
									<div class="cell">Pausa Pranzo & Networking<br>(catering in sede)</div>
								</td>
							</tr>
							<tr>
								<th class="hour">14:00</th>
							</tr>
							<tr>
								<th class="hour">15:00</th>
								<td>
                                    <div class="cell half"><?php echo $contents->printCell('openstamanager') ?></div>
                                    <div class="cell half"><?php echo $contents->printCell('bomb') ?></div>
								</td>
                                <td rowspan="4">
                                    &nbsp;
                                </td>
								<td rowspan="4">
									<div class="cell">Spazio Espositivo</div>
								</td>
								<td rowspan="2">
									<div class="cell"><?php echo $contents->printCell('fri-roundtable-2') ?></div>
								</td>
							</tr>
							<tr>
								<th class="hour">16:00</th>
								<td>
                                    <div class="cell half"><?php echo $contents->printCell('transport') ?></div>
                                    <div class="cell half"><?php echo $contents->printCell('nethesis') ?></div>
								</td>
							</tr>
							<tr>
								<th class="hour">17:00</th>
								<td>
									<div class="cell half"><?php echo $contents->printCell('openhospital') ?></div>
                                    <div class="cell half"><?php echo $contents->printCell('ondata') ?></div>
								</td>
								<td rowspan="2">
									<div class="cell"><?php echo $contents->printCell('fri-roundtable-3') ?></div>
								</td>
							</tr>
							<tr>
								<th class="hour">18:00</th>
								<td>
									<div class="cell half"><?php echo $contents->printCell('inps') ?></div>
                                    <div class="cell half"><?php echo $contents->printCell('geopa') ?></div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h2 class="display-5 mb-1 mt-5 text-center">Sabato 13 Maggio</h2>
				<div class="table-responsive">
					<table class="table table-borderless schedule">
						<thead>
							<tr>
								<th width="8%">&nbsp;</th>
								<th width="24%">Academy</th>
								<th width="24%">Playground</th>
								<th width="24%">UX Lab</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th class="hour">11:00</th>
								<td>
                                    <div class="cell half"><?php echo $contents->printCell('gameshell') ?></div>
                                    <div class="cell half"><?php echo $contents->printCell('fsfe') ?></div>
								</td>
								<td rowspan="2">
									<div class="cell">Spazio Espositivo</div>
								</td>
								<td rowspan="2">
									<div class="cell"><?php echo $contents->printCell('sat-roundtable-1') ?></div>
								</td>
							</tr>
							<tr>
								<th class="hour">12:00</th>
								<td>
                                    <div class="cell half"><?php echo $contents->printCell('wikitext') ?></div>
									<div class="cell half"><?php echo $contents->printCell('fediverse') ?></div>
								</td>
							</tr>
							<tr>
								<th class="hour">13:00</th>
								<td colspan="4" rowspan="2">
									<div class="cell">Pausa Pranzo & Networking<br>(catering in sede)</div>
								</td>
							</tr>
							<tr>
								<th class="hour">14:00</th>
							</tr>
							<tr>
								<th class="hour">15:00</th>
								<td>
									<div class="cell half"><?php echo $contents->printCell('servizi-ils') ?></div>
									<div class="cell half"><?php echo $contents->printCell('apache') ?></div>
								</td>
								<td rowspan="4">
									<div class="cell">Spazio Espositivo</div>
								</td>
								<td rowspan="2">
									<div class="cell"><?php echo $contents->printCell('sat-roundtable-3') ?></div>
								</td>
							</tr>
							<tr>
								<th class="hour">16:00</th>
								<td>
									<div class="cell half"><?php echo $contents->printCell('trash') ?></div>
									<div class="cell half"><?php echo $contents->printCell('sparql') ?></div>
								</td>
							</tr>
							<tr>
								<th class="hour">17:00</th>
								<td>
									<div class="cell half"><?php echo $contents->printCell('minetest') ?></div>
                                    <div class="cell half"><?php echo $contents->printCell('wikiphoto') ?></div>
								</td>
								<td rowspan="2">
									<div class="cell"><?php echo $contents->printCell('sat-roundtable-2') ?></div>
								</td>
							</tr>
							<tr>
								<th class="hour">18:00</th>
								<td>
									<div class="cell">Saluti Finali</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h2 class="display-5 mb-1 mt-5 text-center">Domenica 14 Maggio</h2>
				<div class="row justify-content-center">
					<div class="col">
						<p class="text-center">
							Per chi si ferma in città per un altro giorno... Mapping Party + Hackathon!
						</p>
                        <p class="text-center">
                            <a href="https://wiki.openstreetmap.org/wiki/Italy/Events/Mapping_Party_OSM_a_MERGE-it_2023">Clicca qui</a> per maggiori informazioni sul Mapping Party e <a href="https://survey.wikimedia.it/index.php/716727?lang=it">clicca qua</a> per la registrazione (non obbligatoria, ma assai gradita!).<br>
                        </p>
					</div>
				</div>
            </div>
        </div>
    </div>

	<?php foreach($contents->getAll() as $identifier => $meta): ?>
		<div class="modal fade" id="<?php echo $identifier ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel"><?php echo $meta->title ?></h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<?php foreach($meta->contents as $row): ?>
							<p>
								<?php echo $row ?>
							</p>
						<?php endforeach ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>

    <div class="container-fluid callback my-5 pt-5">
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
            <div class="project-item pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/logos/ils.png" alt="">
                    <a href="https://www.ils.org/"><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Italian Linux Society</h4>
                </div>
            </div>
			<div class="project-item pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/logos/wikimedia.png" alt="">
                    <a href="https://www.wikimedia.it/"><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Wikimedia Italia</h4>
                </div>
            </div>
			<div class="project-item pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/logos/gfoss.png" alt="">
                    <a href="https://gfoss.it/"><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">GFOSS.it</h4>
                </div>
            </div>
			<div class="project-item pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/logos/ondata.png" alt="">
                    <a href="https://www.ondata.it/"><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">onData</h4>
                </div>
            </div>
            <div class="project-item pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/logos/itpug.png" alt="">
                    <a href="https://www.itpug.org/"><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">ITPUG</h4>
                </div>
            </div>
			<div class="project-item pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/logos/fsfe.png" alt="">
                    <a href="https://fsfe.org/"><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">FSFE</h4>
                </div>
            </div>
			<div class="project-item pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/logos/devol.png" alt="">
                    <a href="https://devol.it/"><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">Devol</h4>
                </div>
            </div>
			<div class="project-item pb-5">
                <div class="project-img mb-3">
                    <img class="img-fluid rounded" src="img/logos/libreitalia.png" alt="">
                    <a href="https://www.libreitalia.org/"><i class="fa fa-link fa-3x text-primary"></i></a>
                </div>
                <div class="project-title">
                    <h4 class="mb-0">LibreItalia</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">In Collaborazione Con</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="https://www.fondazioneedulife.org/"><img src="img/partners/edulife.png" class="img-fluid d-block mx-auto" alt="Fondazione Edulife"></a>
                </div>
                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="https://311verona.org/"><img src="img/partners/311_verona.png" class="img-fluid d-block mx-auto" alt="311 Verona"></a>
                </div>
                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="https://www.olos311.org/"><img src="img/partners/olos.png" class="img-fluid d-block mx-auto" alt="OLOS"></a>
                </div>
				<div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="#"><img src="img/partners/last.png" class="img-fluid d-block mx-auto" alt="LAST"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Con il Patrocinio di</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="img/partners/regioneveneto.png" class="img-fluid d-block mx-auto" alt="Regione Veneto">
                </div>
                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="img/partners/comuneverona.png" class="img-fluid d-block mx-auto" alt="Comune di Verona">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Contatti</h4>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+39 348 7254214</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@merge-it.net</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://twitter.com/merge_it"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://mastodon.uno/@Merge_IT"><i class="fab fa-mastodon"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Edizioni</h4>
                    <span class="btn btn-link no-cursor">2018 - Torino</span>
                    <span class="btn btn-link no-cursor">2021 - Online</span>
                    <span class="btn btn-link no-cursor">2023 - Verona</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                   <p>&copy Alcuni diritti riservati community <a class="border-bottom" href="#">MERGE-it</a> 2023
                      <br /><a href="https://creativecommons.org/licenses/by-sa/4.0/" rel="license">CC BY-SA 4.0</a><br />
                      <small>salvo dove diversamente indicato</small>
                   </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" title="Torna in cima"><i class="fas fa-arrow-up"></i></a>

    <script src="lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="lib/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>

	<script type="text/javascript">
		var _paq = window._paq = window._paq || [];
		_paq.push(["setCookieDomain", "*.www.merge-it.net"]);
		_paq.push(["setDomains", ["*.www.merge-it.net","*.www.merge-it.net"]]);
		_paq.push(["setDoNotTrack", true]);
		_paq.push(["disableCookies"]);
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
			var u="//stats.madbob.org/";
			_paq.push(['setTrackerUrl', u+'matomo.php']);
			_paq.push(['setSiteId', '7']);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
		})();
	</script>
	<noscript><p><img src="//stats.madbob.org/matomo.php?idsite=7&amp;rec=1" style="border:0;" alt="" /></p></noscript>
</body>

</html>
