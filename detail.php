<?php include 'components/head.php' ?>

<!-- Tulis Konten Disini ! -->

<?php 

$accessKey = 'enter key here';
$endpoint = 'https://api.cognitive.microsoft.com/bing/v7.0/search';
$term = 'Microsoft Cognitive Services';

function BingWebSearch ($url, $key, $query) {
    $headers = "Ocp-Apim-Subscription-Key: $key\r\n";
    $options = array ('http' => array (
                          'header' => $headers,
                           'method' => 'GET'));
    $context = stream_context_create($options);
    $result = file_get_contents($url . "?q=" . urlencode($query), false, $context);
    $headers = array();
    foreach ($http_response_header as $k => $v) {
        $h = explode(":", $v, 2);
        if (isset($h[1]))
            if (preg_match("/^BingAPIs-/", $h[0]) || preg_match("/^X-MSEdge-/", $h[0]))
                $headers[trim($h[0])] = trim($h[1]);
    }
    return array($headers, $result);
}

if (strlen($accessKey) == 32) {
    print "Searching the Web for: " . $term . "\n";
    list($headers, $json) = BingWebSearch($endpoint, $accessKey, $term);
    print "\nRelevant Headers:\n\n";
    foreach ($headers as $k => $v) {
        print $k . ": " . $v . "\n";
    }
    print "\nJSON Response:\n\n";
    echo json_encode(json_decode($json), JSON_PRETTY_PRINT);

} else {
    // print("Invalid Bing Search API subscription key!\n");
    // print("Please paste yours into the source code.\n");
}

 ?>

<div class="container mt-3">
	<div class="row">
		<div class="col-md-7">
			<?php for ($i=1;$i <= 6 ; $i++): ?>
			
			<div class="row mb-3">
				<div class="card" style="width: 100%;">
					<div class="card-body">
						<h5 class="m-0"><strong>Facebook - Login atau mendaftar</strong></h5>
						<p class="m-0 text-primary">https://facebook.com</p>
						<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dol</p>
					</div>
				</div>
			</div>
			
			<?php endfor; ?>
		</div>

		<div class="col-md-5">
			<div class="card">
				<div class="card-body">
					<img width="100%" src="https://timedotcom.files.wordpress.com/2016/09/googles-18th-birthday-5661535679545344-hp2x.gif">
					<h5 class="m-0 text-center"><strong>[iklan] Google Anniversary</strong></h5>
					<p class="m-0 text-primary text-center ">https://google.com</p>
					<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dol</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- akhir konten -->


<?php include 'components/foot.php' ?>

