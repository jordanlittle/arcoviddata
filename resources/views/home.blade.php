<html>
	<head>

		<meta name="robots" content="nofollow">

		<!-- COMMON TAGS -->
		<meta charset="utf-8">
		<title>Arkansas COVID-19 Data API</title>
		<!-- Search Engine -->
		<meta name="description" content="A simple API for accessing the data regarding coronavirus from the Arkansas Department of Health's website.">
		<meta name="image" content="https://arcovid.xyz/share.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Schema.org for Google -->
		<meta itemprop="name" content="Arkansas Coronavirus Data API">
		<meta itemprop="description" content="A simple API for accessing the data regarding coronavirus from the Arkansas Department of Health's website.">
		<meta itemprop="image" content="https://arcovid.xyz/share.png">
		<!-- Twitter -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="Arkansas Coronavirus Data API">
		<meta name="twitter:description" content="A simple API for accessing the data regarding coronavirus from the Arkansas Department of Health's website.">
		<meta name="twitter:site" content="@iamjordanlittle">
		<meta name="twitter:creator" content="@iamjordanlittle">
		<meta name="twitter:image:src" content="https://arcovid.xyz/share.png">
		<!-- Open Graph general (Facebook, Pinterest & Google+) -->
		<meta name="og:title" content="Arkansas Coronavirus Data API">
		<meta name="og:description" content="A simple API for accessing the data regarding coronavirus from the Arkansas Department of Health's website.">
		<meta name="og:image" content="https://arcovid.xyz/share.png">
		<meta name="og:url" content="https://arcovid.xyz">
		<meta name="og:site_name" content="Arkansas Coronavirus Data API">
		<meta name="og:type" content="website">

		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">

		<style>
			body {background:#fff;color:#413E4A;border:10px solid #73626E;}
			.container {width:calc(100%-24px);max-width:600px;margin:0 auto 100px;}
			.py {padding-top:5%;padding-bottom:5%;}
			hr {margin:4em auto;border:0;}
			a {color:#B38184;}
			a:hover {color:#F0B49E;}
			pre {margin:2em auto;padding:12px;background:#F7E4BE;color:#413E4A;font-size:14px;border-radius:6px;}
			pre code {min-height:3em;}
			p>code,li>code{background:#F7E4BE;border-radius:3px;font-weight:bold;padding:4px;border-radius:3px;color:#413E4A;}
			p>code {margin-left:-4px;}
			li>code {font-size:90%;}
			p {line-height:1.5;}
			ol li {margin-bottom:.5em;line-height:1.35;}
			p span.count {font-size:32px;font-weight:200;display:block;}
			p+p {margin-top:2em;}
			.github {position:fixed;top:0;right:0;width:52px;height:52px;background:#73626E;color:#fff;text-align:center;display:flex;justify-content:center;align-items:center;}
			footer {padding:10%;text-align:center;background:#73626E;color:#F7E4BE;line-height:1.5;}
			footer a {color:#F7E4BE;text-decoration:none;border-bottom:1px solid #f7e4be;}

			@media(max-width:500px){.container{padding:20px;overflow-x:hidden;}pre{max-width:100%;overflow-x:auto;}p span.count{font-size:24px;line-height:1;margin-bottom:8px;}}
		</style>
	</head>
    <body>
    	<a href="https://github.com/jordanlittle/arcoviddata" class="github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></a>
        <section class="container py">
        	<h1>Arkansas COVID-19 Data API</h1>
        	<p>A JSON API for accessing COVID-19 data on the <a href="https://www.healthy.arkansas.gov/programs-services/topics/novel-coronavirus">Arkansas Department of Health's website</a>.</p>

        	<hr>

        	<h2>Data URL (returns JSON):</h2>
        	<a href="https://arcovid.xyz/data">https://arcovid.xyz/data</a>

        	<hr>

        	<h2>Example response (live data)</h2>
        	<pre><code></code></pre>

			<hr>

			<h2>Working locally</h2>
			<p>This project is a glorified web scraper built with <a href="https://github.com/FriendsOfPHP/Goutte">Goutte</a> and <a href="https://lumen.laravel.com/docs/6.x">Laravel Lumen</a>. To work on it locally, you'll need to:</p>
			<p>
				<ol>
					<li>Clone this repo into a fresh directory on a machine with PHP 7.3+.</li>
					<li>Ensure you have <a href="https://getcomposer.org/">Composer</a> installed.</li>
					<li>Run <code>composer install</code> from within the directory.</li>
					<li>Serve (on Mac at least) with <code>php -S localhost:8000</code> from within the directory.</li>
				</ol>
			</p>

			<hr>

        	<h2>Available fields (live data)</h2>
        	<p><span class="count">0</span><code>last_updated</code><br>The last time the ADH website was updated.</p>
        	<p><span class="count">0</span><code>total_confirmed_cases</code><br>Confirmed Cases of COVID-19 in Arkansas</p>
        	<p><span class="count">0</span><code>adh_pos_test_results</code><br>Arkansas Department of Health Lab positive test results</p>
        	<p><span class="count">0</span><code>comlabs_pos_test_results</code><br>Commercial lab positive test results</p>
        	<p><span class="count">0</span><code>persons_under_investigation</code><br>Persons Under Investigation (PUI)</p>
        	<p><span class="count">0</span><code>persons_being_monitored</code><br>Persons being monitored by ADH with daily check-in and guidance because of an identified risk</p>
        	<p><span class="count">0</span><code>past_puis_with_neg_results</code><br>Past PUIs with negative test results</p>
        	<p><span class="count">0</span><code>adh_neg_test_results</code><br>Arkansas Department of Health Lab negative test results</p>
        	<p><span class="count">0</span><code>comlabs_neg_test_results</code><br>Commercial Lab negative test results</p>

        	<hr>

        	<h2>Disclaimer</h2>
        	<p>This is an API written by someone who's never written an API. I do not recommend using this for mission-critical purposes as it relies on the tenuous placement of HTML on the Arkansas Department of Health's website and it could in theory break at any moment if they updated it. If you receive a null value for any key, consider it an error (I haven't built in much error checking).</p>


        </section>

        <footer><a href="https://github.com/jordanlittle/arcoviddata">Github</a> <br />Built by a quarantined Jordan Little.</footer>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
			document.addEventListener('DOMContentLoaded', function(event) { 
				axios.get('/data')
					.then(function (response) {
						$responseData = response.data;
						Object.keys($responseData).forEach(function(el){
							var xpath = "//code[text()='"+el+"']";
							var matchingElement = document.evaluate(xpath, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
							var counter = matchingElement.previousSibling;
							counter.textContent = $responseData[el];
						});
						document.querySelectorAll('pre code')[0].textContent = JSON.stringify(response.data, undefined, 2);
					})
					.catch(function (error) {
						console.log(error);
					})
					.then(function () {
						// always executed
					});
			});
        </script>
    </body>
</html>