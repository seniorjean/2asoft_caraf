<style>
	.perfecscollbar-wrapper{
		position: absolute;
		top:0px;
		bottom:0px;
		left:0px;
		right:0px;
		overflow: scroll;
	}
	.navigation .nav-header > ul > li > ul , .navigation .nav-header > ul > li > ul > li > ul {
		width: 210px !important;
	}
	.row{margin-right: 0px !important;margin-left: 0px !important;}

	p strong {
		color: #666;
		font-weight: 400;
	}

	.clear {
		clear: both;
	}

	.button {
		display: inline-block;
		font-size: 18px;
		font-weight: 300;
		text-transform: uppercase;
		color: #fff;
		background: #000;
		padding: 18px;
		line-height: 18px;
		text-decoration: none;
	}

	.row.black {
		background: #363636;
	}

	.row.purple {
		background: #865ed6;
	}

	.row.light p,
	.row.light i {
		color: rgba(255,255,255,.75);
	}

	.row.light h2 {
		color: #fff;
	}

	.footer {
		border-top: 1px solid #ddd;
		padding-top: 50px;
		padding-bottom: 30px;
	}

	.footer p {
		font-size: 12px;
		text-transform: uppercase;
	}



	.header {
		max-height: 900px;
		position: relative;
		background: #ffffff fixed top center no-repeat;
	}




	.header ul.colors li {
		margin: 0;
		padding: 0;
		list-style: none;
		display: inline-block;
	}

	.header ul.colors li a {
		width: 20px;
		display: inline-block;
		height: 20px;
		background: #A18674;
		margin: 10px 10px 10px 10px;
		border-radius: 40px;
		opacity: .5;
		-webkit-transition: all .1s;
		-moz-transition: all .1s;
		-o-transition: all .1s;
		-ms-transition: all .1s;
		transition: all .1s;
		/*box-shadow: 0 0 0 2px rgba(255,255,255,.5);*/
	}

	.header ul.colors li a:hover,
	.header ul.colors li.active a {
		width: 40px;
		height: 40px;
		margin: 0 10px 0 10px;
		opacity: 1;
	}

	.header .features {
		height: 120px;
		background: rgba(233,233,233,.5);
	}

	.header .features:after {
		content: ".";
		display: block;
		height: 0;
		clear: both;
		visibility: hidden;
	}

	.header .features a {
		color: #fff;
		font-size: 14px;
		text-transform: uppercase;
		display: block;
		width: 16.6666%;
		float: left;
		position: relative;
		text-align: center;
		text-decoration: none;
		height: 120px;
		font-weight: 300;
		outline: none;
	}

	.header .features a i {
		display: block;
		margin: 20px 0 12px 0;
		font-size: 30px;
	}

	.header .features a span {
		display: block;
		/*width: 120px;*/
		margin: 0 auto;
	}



	.container .left,
	.container .right {
		float: left;
		width: 50%;
		position: relative;
	}

	.container .container-icon {
		text-align: center;
		margin-top: 120px;
		font-size: 136px;
		color: #969491;
		/*width: 100%;*/
	}

	.container .container-icon i {

	}

	.player{
		background: none !important;
		height: auto !important;
	}
	.pl , .title_radio, .artist , .cover , .volume, .ui-slider-handle,.tracker{
		display: none !important;
	}

	.controls{
		left: <?=($mobile==TRUE)?'23px':'94px';?> !important;
		top: <?=($mobile==TRUE)?'0px':'0px';?> !important;
	}



</style>
