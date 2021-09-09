<style type="text/css">
	html{
		scroll-behavior: smooth;
	}
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Mulish', sans-serif;
	}
     .nav_style{
     	background-color: #a29bfe!important;

     }
     .nav_style a{
     	color: white;
     }

     /*main header*/
     .main-header{
     	height: 450px;
     	width: 100%;
     }
     .rightside h1{
     	font-size: 3rem;
     }
     .ani img{
     	animation: gocorona 3s linear infinite;
     }
     @keyframes gocorona{
     	0%{transform: rotate(0);}
     	100%{transform: rotate(360deg);}
     }
     .leftside img{
     	animation: heartbeat 5s linear infinite;
     }
     @keyframes heartbeat{
     	0%{
     		transform: scale(0.75);
     	}
     	20%{
     		transform: scale(1);
     	}
     	40%{
     		transform: scale(0.75);
     	}
     	60%{
     		transform: scale(1);
     	}
     	80%{
     		transform: scale(0.75);
     	}
     	100%{
     		transform: scale(1);
     	}
     }
     /*corona update*/
     .corona_update{
     	margin: 0 0 30px 0;

     }
     .corona_update h3{
     	color: #ff7675;

     }
     .corona_update h1{
     	font-size: 2rem; text-align: center;
     }

     /*sub section*/
     .sub_section{
     	background-color: pink;
     }
     /* footer*/
     .footer_style{
     	background-color: #a29bfe !important;
     }
     .footer_style p{
     	margin-bottom: 0 !important;
     }
     
   

</style>