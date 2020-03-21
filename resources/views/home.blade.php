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
			@media(max-width:500px){.container{padding:8px;overflow-x:hidden;}pre{max-width:100%;overflow-x:auto;}}
			.py {padding-top:5%;padding-bottom:5%;}
			hr {margin:4em auto;border:0;}
			a {color:#B38184;}
			a:hover {color:#F0B49E;}
			pre {margin:2em auto;padding:12px;background:#F7E4BE;color:#413E4A;font-size:14px;border-radius:6px;}
			p>code{background:#F7E4BE;border-radius:3px;font-weight:bold;margin-left:-4px;padding:4px;border-radius:3px;color:#413E4A;}
			p {line-height:1.5;}
			p+p {margin-top:2em;}
			footer {padding:10%;text-align:center;background:#73626E;color:#F7E4BE;}
		</style>
	</head>
    <body>
        <section class="container py">
        	<h1>Arkansas COVID-19 Data API</h1>
        	<p>A JSON API for accessing COVID-19 data on the <a href="https://www.healthy.arkansas.gov/programs-services/topics/novel-coronavirus">Arkansas Department of Health's website</a>.</p>

        	<hr>

        	<h2>Data URL (returns JSON):</h2>
        	<a href="https://arcovid.xyz/data">https://arcovid.xyz/data</a>

        	<hr>

        	<h2>Example response</h2>
        	<pre><code>{
  last_updated: "March 20, 2020, 5:21pm",
  total_confirmed_cases: "100",
  adh_pos_test_results: "62",
  comlabs_pos_test_results: "38",
  persons_under_investigation: "176",
  persons_being_monitored: "494",
  past_puis_with_neg_results: "441",
  adh_neg_test_results: "295",
  comlabs_neg_test_results: "146"
}</code></pre>

			<hr>

        	<h2>Explanation of keys</h2>
        	<p><code>last_updated</code><br>The last time the ADH website was updated.</p>
        	<p><code>total_confirmed_cases</code><br>Confirmed Cases of COVID-19 in Arkansas</p>
        	<p><code>adh_pos_test_results</code><br>Arkansas Department of Health Lab positive test results</p>
        	<p><code>comlabs_pos_test_results</code><br>Commercial lab positive test results</p>
        	<p><code>persons_under_investigation</code><br>Persons Under Investigation (PUI)</p>
        	<p><code>persons_being_monitored</code><br>Persons being monitored by ADH with daily check-in and guidance because of an identified risk</p>
        	<p><code>past_puis_with_neg_results</code><br>Past PUIs with negative test results</p>
        	<p><code>adh_neg_test_results</code><br>Arkansas Department of Health Lab negative test results</p>
        	<p><code>comlabs_neg_test_results</code><br>Commercial Lab negative test results</p>

        	<hr>

        	<h2>Disclaimer</h2>
        	<p>This is an API written by someone who's never written an API. I do not recommend using this for mission-critical purposes as it relies on the tenuous placement of HTML on the Arkansas Department of Health's website and it could in theory break at any moment if they updated it. If you receive a null value for any key, consider it an error (I haven't built in much error checking).</p>


        </section>

        <footer>Built by a quarantined Jordan Little</footer>
    </body>
</html>