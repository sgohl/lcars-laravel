<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>{{ config('app.name') }}</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="date=no">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" type="text/css" href="lcars-classic.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@400;700&display=swap" rel="stylesheet">

@vite(['resources/css/app.css', 'resources/js/app.js'])
@vite(['resources/css/lcars/classic.css', 'resources/js/lcars.js'])

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
<div class="wrap">
	<div class="scroll-top">
		<a id="scroll-top" href=""><span class="hop">screen</span> top</a>
	</div>
	<div class="left-frame-top">
		<div class="panel-1"><a href="">{{ Auth::user()->name }}</a></div>
		
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="panel-2" onclick="event.preventDefault(); this.closest('form').submit();">
                <a href="route('logout')">{{ __('Logout') }}</a>
            </div>
        </form>

	</div>
	<div class="right-frame-top">
		<div class="banner">
			LCARS &#149; Online
		</div>
				<div class="data-cascade-button-group">
				<div class="cascade-wrapper">
					<div class="data-cascade">
						<div class="row-1"><div class="dc1">101</div><div class="dc2">7109</div><div class="dc3">1966</div><div class="dc4">1222</div><div class="dc5">2020</div><div class="dc6">1444</div><div class="dc7">102</div><div class="dc8">1103</div><div class="dc9">1935</div><div class="dc10">1940</div><div class="dc11">708</div><div class="dc12">M113</div><div class="dc13">1956</div><div class="dc14">1209</div></div><div class="row-2"><div class="dc1">102</div><div class="dc2">8102</div><div class="dc3">1987</div><div class="dc4">044</div><div class="dc5">0051</div><div class="dc6">607</div><div class="dc7">1976</div><div class="dc8">1031</div><div class="dc9">1984</div><div class="dc10">1954</div><div class="dc11">1103</div><div class="dc12">415</div><div class="dc13">1045</div><div class="dc14">1864</div></div><div class="row-3"><div class="dc1">103</div><div class="dc2">714</div><div class="dc3">1993</div><div class="dc4">0222</div><div class="dc5">052</div><div class="dc6">1968</div><div class="dc7">2450</div><div class="dc8">746</div><div class="dc9">56</div><div class="dc10">47</div><div class="dc11">716</div><div class="dc12">8719</div><div class="dc13">417</div><div class="dc14">602</div></div><div class="row-4"><div class="dc1">104</div><div class="dc2">6104</div><div class="dc3">1995</div><div class="dc4">322</div><div class="dc5">90</div><div class="dc6">1931</div><div class="dc7">1701</div><div class="dc8">51</div><div class="dc9">29</div><div class="dc10">218</div><div class="dc11">908</div><div class="dc12">2114</div><div class="dc13">85</div><div class="dc14">3504</div></div><div class="row-5"><div class="dc1">105</div><div class="dc2">08</div><div class="dc3">2001</div><div class="dc4">713</div><div class="dc5">079</div><div class="dc6">1940</div><div class="dc7">LV</div><div class="dc8">426</div><div class="dc9">105</div><div class="dc10">10</div><div class="dc11">1206</div><div class="dc12">1979</div><div class="dc13">402</div><div class="dc14">795</div></div><div class="row-6"><div class="dc1">106</div><div class="dc2">31</div><div class="dc3">2017</div><div class="dc4">429</div><div class="dc5">65</div><div class="dc6">871</div><div class="dc7">1031</div><div class="dc8">541</div><div class="dc9">656</div><div class="dc10">764</div><div class="dc11">88</div><div class="dc12">001</div><div class="dc13">27</div><div class="dc14">05</div></div>
					</div> 
				</div> <!-- /cascade-wrapper -->
				<div class="button-col">
					<div class="button" id="top-left"><a href="">01</a></div>
					<div class="button" id="bottom-left"><a href="">02</a></div>
				</div>
				<div class="button-col">
					<div class="button" id="top-right"><a href="">03</a></div>
					<div class="button" id="bottom-right"><a href="">04</a></div>
				</div>
			</div> <!-- /data-cascade-button-group -->
		<div class="top-corner-bg">
			<div class="top-corner"></div>
		</div>
		<div class="bar-panel">
		<div class="bar-1"></div>
		<div class="bar-2"></div>
		<div class="bar-3"></div>
		<div class="bar-4"></div>
		<div class="bar-5"></div>
		</div>
	</div> <!-- /left-frame-top -->
</div> <!-- /wrap -->
<div class="wrap" id="gap">
	<div class="left-frame">
		<div>
			<div class="panel-3">03<span class="hop">-111968</span></div>
			<div class="panel-4">04<span class="hop">-041969</span></div>
			<div class="panel-5">05<span class="hop">-1701D</span></div>
			<div class="panel-6">06<span class="hop">-071984</span></div>
			<div class="panel-7">07<span class="hop">-081940</span></div>
			<div class="panel-8">08<span class="hop">-47148</span></div>
			<div class="panel-9">09<span class="hop">-081966</span></div>
		</div>
		<div>
			<div class="panel-10">10<span class="hop">-31</span></div>
		</div>
	</div>
	<div class="right-frame">
		<div class="bar-panel">
		<div class="bar-6"></div>
		<div class="bar-7"></div>
		<div class="bar-8"></div>
		<div class="bar-9"></div>
		<div class="bar-10"></div>
		</div>
		<div class="corner-bg">
			<div class="corner"></div>
		</div>
		<div class="content">

			<!-- Start your content here. -->

			<h1>Hello {{ Auth::user()->name }}</h1>
			
			{{ $slot }}
			
			 <!-- End content area. -->

			<footer>
				<div class="footer-inside">
					<div class="footer-text">
						<p><!-- Your copyright information is only a suggestion. You can also choose to delete this paragraph. But please keep my information as required by the EULA. --> Content Copyright &#169; 2022 Your Name or Website Name or URL</p>
						<p>LCARS Inspired Website Template designed &amp; developed by Jim Robertus <a href="https://www.thelcars.com">www.TheLCARS.com</a>.</p>
					</div>
				</div>
				<div class="footer-panel">
					<span class="hop">22</span>47
				</div>
			</footer>			
		</div>
	</div>
</div>
<script type="text/javascript" src="lcars.js"></script>
</body>
</html>