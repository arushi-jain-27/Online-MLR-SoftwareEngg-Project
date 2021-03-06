html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0;padding:0;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
body {
	background-color: #f6f6f6;
	font-family: Arial, Geneva,Helvetica, sans-serif;
	font-size: 100%;
}
.wrap{
	margin:0 auto;
	width:80%;
}
.btm_border{
	border-bottom: 4px solid  rgba(12, 12, 12, 0.1);
}
.h_bg{
	background-color: #f6f6f6;
	border-bottom: 6px solid #FC2B5F;	
}
.header{
	padding:2% 4%;
}
.logo{
	float: left;
}
.contact-info1{
	font-weight: normal;
	color: #BBB;
}
h1 {
    font-size: 3em;
    text-align: center;
    color: #000;
    font-weight: 400;
    margin-bottom: 1em;
    letter-spacing: 5px;
    text-transform: uppercase;
}
/*h_btm*/
.h_btm{
	padding: 0 4%;
}
/*menu*/
.cssmenu {
	float: left;
}
.cssmenu > ul > li {
	display:inline-block;
	position: relative;
}
.cssmenu > ul > li.active a{
	color:#ffffff;
	background-color: #e1184a;
	background-image: -moz-linear-gradient(top, #cf0c3c, #fc2b5f);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#cf0c3c), to(#fc2b5f));
	background-image: -webkit-linear-gradient(top, #cf0c3c, #fc2b5f);
	background-image: -o-linear-gradient(top, #cf0c3c, #fc2b5f);
	background-image: linear-gradient(to bottom, #cf0c3c, #fc2b5f);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffcf0c3c', endColorstr='#fffc2b5f', GradientType=0);
	border-color: #fc2b5f #fc2b5f #d70338;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.cssmenu > ul > li span img {
	vertical-align: middle;
}
.cssmenu > ul > li > a {
	font-family: 'Quattrocento Sans', sans-serif;
	color: #ffffff;
	display: block;
	font-size: 16px;
	line-height: 1.8em;
	padding: 12px 28px;
	background: rgba(12, 12, 12, 0.1);
	color: #555555;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	-webkit-border-top-left-radius: 10px;
	-webkit-border-top-right-radius: 10px;
	-moz-border-top-left-radius: 10px;
	-moz-border-top-right-radius: 10px;
	-o-border-top-left-radius: 10px;
	-o-border-top-right-radius: 10px;
}
.cssmenu > ul > li > a:hover {
	-webkit-transition: 0.9s;
	-moz-transition: 0.9s;
	-o-transition: 0.9s;
	transition: 0.9s;
	background: #999999;
	color: #ffffff;
}
/*search*/
.search{
	float: right;
	width: 28%;
	border: 1px solid rgb(226, 226, 226);
	background: #FFFFFF;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	position: relative;
}
.search input[type="text"]{
	padding:8px 16px;
	outline: none;
	color: #202020;
	background:none;
	border: none;
	width: 78.33%;
	line-height: 1.5em;
}
.search input[type="submit"]{
	background: url('../images/search.png') no-repeat 2px 6px;
	padding: 4px 8px;
	border: none;
	cursor: pointer;
	width: 10.33%;
	line-height: 1.5em;
	position: absolute;
	right: 10px;
}
.search input[type="submit"]:hover {
	background:url('../images/search_h.png') no-repeat 2px 6px;
	-webkit-transition: .2s all linear;
	-moz-transition: .2s all linear;
	-o-transition: .2s all linear;
	transition: .2s all linear;
}
.search:hover{
	-webkit-transition: .2s all linear;
	-moz-transition: .2s all linear;
	-o-transition: .2s all linear;
	transition: .2s all linear;
	box-shadow: inset 0px -1px 4px #E4E4E4;
	-webkit-box-shadow: inset 0px -1px 4px #E4E4E4;
	-moz-box-shadow: inset 0px -1px 4px #E4E4E4;
	-o-box-shadow: inset 0px -1px 4px #E4E4E4;
}
/*main*/
.main_bg{
	background: #e8e8e8;
}
.main{
	padding: 4%;
}
.content h2{
	letter-spacing: -1px;
	text-transform: uppercase;
	font-size: 2em;
	color: #575757;
	font-family: 'Quattrocento Sans', sans-serif;
	text-shadow: 0 1px 0 white;
}
.content h3{
	text-transform: uppercase;
	font-size: 1.2em;
	color: #e1184a;
	font-family: 'Quattrocento Sans', sans-serif;
	text-shadow: 0 1px 0 white;
	line-height: 1.8em;
	margin: 0.8em 0;
}
.content p{
	color: #575757;
	line-height: 1.8em;
	font-size: 0.8925em;
	
}
.content p a img{
	float: left;
	margin-right:4%;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	padding: 6px;
	background: #D5D5D5;
}
.main {
    padding: 3em 0 0;
    text-align: center;
}
.main-w3lsrow {
    margin: 0 auto;
	background: #fff;
	max-width: 400px;
    padding: 3em 2em 2em;
    text-align: center;
    -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
}
.login-form input[type="text"], .login-form input[type="password"] {
    outline: none;
    font-size: .9em;
    letter-spacing: 1px;
    color: #666;
    padding: 1em 1em;
    margin: 0;
    width: 100%;
	margin-bottom: 1em;
    -webkit-appearance: none;
    display: block;
    border: 1px solid #dde0df;
    background: #e4eae7;
	font-family: 'Raleway', sans-serif;
}
.login-form p {
    font-size: 0.9em;
    color: #fff;
    margin: 1.5em 0 .8em;
    font-weight: 200;
    letter-spacing: 6px;
    text-align: left;
}
.login-form input[type="submit"] {
    font-size: 1em;
    color: #ffffff;
    background: #0f9d58;
    border: 1px solid #0f9d58;
    outline: none;
    cursor: pointer;
    padding: .8em 1em;
    letter-spacing: 1px;
    -webkit-appearance: none;
	text-transform: uppercase;
    width: 100%;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    -ms-border-radius: 0px;
    -o-border-radius: 0px;
    border-radius: 0px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
	font-family: 'Raleway', sans-serif;
}
.login-form input[type="submit"]:hover {
    background: #333;
    color: #fff; 
    border: 1px solid #333;  
} 
.login-agileits-bottom {
    margin-top:1.6em;
    text-align: center; 
}
.login-agileits-bottom1 {
    margin-top: 1.6em;
    text-align: center;
}
.login-agileits-bottom1 h3 {
    color: #fff;
    font-size: 1em;
    letter-spacing: 4px;
}
.login-agileits-bottom h6 {
    font-size: 1em;
    letter-spacing: 2px;
}
.login-agileits-bottom h6 a {
    color: #333;
    transition: 0.5s all ;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
.login-agileits-bottom h6 a:hover{
    color: #0f9d58; 
}
/*footer*/
.footer-bg{
	background: #e8e8e8;
}
.footer{
	padding:4%;
}
.box1{
	float:right;
	width: 30.33%;
	margin-right: 4%;
}
.box1:nth-child(3){
	margin-right: 0;
}
.box1 h4{
	letter-spacing: -1px;
	text-transform: uppercase;
	font-size: 2em;
	color: #575757;
	font-family: 'Quattrocento Sans', sans-serif;
	text-shadow: 0 1px 0 white;
}
.btm{
	margin-bottom: 4%;
}
.box1 nav ul li img{
	margin-top: 10px;	
}
.box1 nav ul li{
	display: inline-block;
}
.box1 nav ul li a{
	color: #575757;
	line-height: 1.8em;
	font-size: 0.8925em;
}
.box1 nav ul li a:hover{
	text-decoration:none;
	color: #e1184a;
}
.box1 p{
	color: #575757;
	line-height: 1.8em;
	font-size: 0.8925em;
}
.box1_address p a{
	cursor: pointer;
	color: #e1184a;
}
.box1_address p a:hover{
	color: #575757;
}
/***** Media Quries *****/

@media only screen and (max-width: 1280px) {
	.wrap{
		width:95%;
	}
}
@media(max-width:1080px){
	
}
@media(max-width:1050px){
	
}
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}
	.images_1_of_3 h3 {
		font-size: 1.5em;
	}
	.gallery {
		width: 68%;
	}
}
@media(max-width:991px){
	
}
@media(max-width:900px){
	
}
@media only screen and (max-width: 800px) {
	.wrap{
		width:95%;
	}
	.cssmenu > ul > li > a {
		font-size: 16px;
		line-height: 1.8em;
		padding: 8px 12px;
	}
	.search input[type="submit"] {
		width: 14.33%;
	}
}
@media(max-width:768px){
	.images_1_of_3 {
		width: 100%;
	}
	.gallery {
		width: 100%;
	}
	.terminals {
		float: right;
		width: 100%;
	}	
	.box1 {
		width: 100%;
		margin: 0;
		padding: 0;
	}
	.special-grid {
		width: 100%;
	}
	.services-grid {
		width: 100%;
		margin: 0;
		padding: 0;
	}
	.contact_info {
		float: right;
		width: 100%;
	}
	.company_address {
		width: 100%;
	}
}
@media(max-width:667px){
	
}
@media only screen and (max-width: 640px){
	.wrap{
		width:95%;
	}
	.gallery {
		width:100%;
	}
	.terminals {
		float: left;
		width: 100%;
	}
	.logo {
		width: 30%;
	}
	.search input[type="text"] {
		width: 66.33%;
	}
	.search input[type="submit"] {
		width: 20.33%;
	}
}
@media(max-width:568px){
	.social-icons {
		padding: 1px;
	}
	.search {
		width: 23%;
	}
	.search input[type="text"] {
		padding: 11px 16px;
	}
}
@media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.logo{
		margin-top: 2%;
	}
	.search {
		width: 32%;
	}
	.search input[type="text"] {
		padding: 6px 6px;
	}
	.social-icons {
		float: right;
		padding: 0px;
		margin-top: 1%;
	}
	.images_1_of_3 {
		width: 99.333%;
	}
	.gallery {
		width: 100%;
		margin-right: 0%;
	}
	.terminals {
		float: none;
		width: 100%;
	}
	.box1 {
		float:none;
		width: 100%;
		margin-right: 0%;
	}
	.services-grid {
		width: 100%;
		margin-left: 0%;
		margin-right: 2%;
	}
	.company_address {
		float: none;
		margin-right: 0%;
		width: 100%;
	}
	.contact_info {
		float: none;
		width: 100%;
	}
	.cssmenu > ul > li > a {
		font-size: 13px;
		line-height: 1.5em;
		padding: 8px 6px;
	}
}
@media(max-width:414px){
	.search {
		width: 29%;
	}
	.h_btm {
		padding: 0 0%;
	}
}
@media(max-width:384px){
	.logo {
		width: 50%;
	}
	.social-icons {
		float: left;
		padding: 0px;
		margin-top: 1%;
	}
	.cssmenu > ul > li > a {
		font-size: 16px;
		padding: 8px 10px;
	}
	.search {
		width: 100%;
		margin:10px 0;
	}
	.search input[type="submit"] {
		width: 10%;
		margin: 0;
	}
}
@media(max-width:375px){
	.cssmenu > ul > li > a {
		font-size: 15px;
		padding: 8px 9px;
	}
}
@media only screen and (max-width: 320px) {
	.wrap{
		width:95%;
	}
	.logo{
		float: none;
		width: 100%;
		text-align:center;
	}
	.services-grid {
		width: 100%;
		margin-left: 0%;
		margin-right: 0%;
	}
	.special-grid {
		float: none;
		width: 100%;
		margin-right: 0%;
	}
	.cssmenu > ul > li > a {
		font-size: 11px;
		padding: 8px 11px;
	}
}