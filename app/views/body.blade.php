<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>
	    @yield('titulo')
	</title>
	

	<link rel="stylesheet" href="{{URL::to('/')}}/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/bootstrap.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/neon-core.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/neon-theme.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/neon-forms.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/custom.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/skins/white.css">

	<script src="{{URL::to('/')}}/assets/js/jquery-1.11.0.min.js"></script>

	<!--[if lt IE 9]><script src="{{URL::to('/')}}/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body skin-white" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img src="{{URL::to('/')}}/assets/images/logo-light@2x.png" width="120" alt="" />
				</a>
			</div>
			
						<!-- logo collapse icon -->
						
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
									
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
				
		
		
				<div class="sidebar-user-info">
			
			<div class="sui-normal">
				<a href="#" class="user-link">
					<img src="{{URL::to('/')}}/assets/images/thumb-1.png" alt="" class="img-circle" />
					
					<span>Welcome,</span>
					<strong>Art Ramadani</strong>
				</a>
			</div>
			
			<div class="sui-hover inline-links animate-in"><!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->				
				<a href="#">
					<i class="entypo-pencil"></i>
					New Page
				</a>
				
				<a href="mailbox.html">
					<i class="entypo-mail"></i>
					Inbox
				</a>
				
				<a href="extra-lockscreen.html">
					<i class="entypo-lock"></i>
					Log Off
				</a>
				
				<span class="close-sui-popup">&times;</span><!-- this is mandatory -->			</div>
		</div>
					
				
		
				
		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li id="search">
				<form method="get" action="">
					<input type="text" name="q" class="search-input" placeholder="Search something..."/>
					<button type="submit">
						<i class="entypo-search"></i>
					</button>
				</form>
			</li>

            <li>
                <a href="{{URL::to('/users')}}">
                    <i class="entypo-monitor"></i>
                    <span>Gestion de usuarios</span>
                </a>
            </li>

		</ul>
				
	</div>	
	<div class="main-content">
		
<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
	</div>

	<!-- Raw Links -->

    @if(Auth::user())
        	<div class="col-md-6 col-sm-4 clearfix hidden-xs">

        		<ul class="list-inline links-list pull-right">

        			<!-- Language Selector -->			<li class="dropdown language-selector">

        				Language: &nbsp;
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
        					<img src="{{URL::to('/')}}/assets/images/flag-uk.png" />
        				</a>

        				<ul class="dropdown-menu pull-right">
        					<li>
        						<a href="#">
        							<img src="{{URL::to('/')}}/assets/images/flag-de.png" />
        							<span>Deutsch</span>
        						</a>
        					</li>
        					<li class="active">
        						<a href="#">
        							<img src="{{URL::to('/')}}/assets/images/flag-uk.png" />
        							<span>English</span>
        						</a>
        					</li>
        					<li>
        						<a href="#">
        							<img src="{{URL::to('/')}}/assets/images/flag-fr.png" />
        							<span>François</span>
        						</a>
        					</li>
        					<li>
        						<a href="#">
        							<img src="{{URL::to('/')}}/assets/images/flag-al.png" />
        							<span>Shqip</span>
        						</a>
        					</li>
        					<li>
        						<a href="#">
        							<img src="{{URL::to('/')}}/assets/images/flag-es.png" />
        							<span>Español</span>
        						</a>
        					</li>
        				</ul>

        			</li>

        			<li class="sep"></li>


        			<li>
        				<a href="#" data-toggle="chat" data-animate="1" data-collapse-sidebar="1">
        					<i class="entypo-chat"></i>
        					Chat

        					<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
        				</a>
        			</li>

        			<li class="sep"></li>

        			<li>
        				<a href="extra-login.html">
        					Log Out <i class="entypo-logout right"></i>
        				</a>
        			</li>
        		</ul>

        	</div>
    <hr />
    @else
            <div class="col-md-6 col-sm-4 clearfix hidden-xs"> </div>
    @endif
	
</div>

    @yield('contenido')

<!-- Footer -->
<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	</div>
	
	
<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
	<div class="chat-inner">
	
		
		<h2 class="chat-header">
			<a href="#" class="chat-close" data-animate="1"><i class="entypo-cancel"></i></a>
			
			<i class="entypo-users"></i>
			Chat
			<span class="badge badge-success is-hidden">0</span>
		</h2>
		
		
		<div class="chat-group" id="group-1">
			<strong>Favorites</strong>
			
			<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
			<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
		</div>
		
		
		<div class="chat-group" id="group-2">
			<strong>Work</strong>
			
			<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
			<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
		</div>
		
		
		<div class="chat-group" id="group-3">
			<strong>Social</strong>
			
			<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
		</div>
	
	</div>
	
	<!-- conversation template -->
	<div class="chat-conversation">
		
		<div class="conversation-header">
			<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
			
			<span class="user-status"></span>
			<span class="display-name"></span> 
			<small></small>
		</div>
		
		<ul class="conversation-body">	
		</ul>
		
		<div class="chat-textarea">
			<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
		</div>
		
	</div>
	
</div>


<!-- Chat Histories -->
<ul class="chat-history" id="sample_history">
	<li>
		<span class="user">Art Ramadani</span>
		<p>Are you here?</p>
		<span class="time">09:00</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>This message is pre-queued.</p>
		<span class="time">09:25</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>Whohoo!</p>
		<span class="time">09:26</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Catherine J. Watkins</span>
		<p>Do you like it?</p>
		<span class="time">09:27</span>
	</li>
</ul>




<!-- Chat Histories -->
<ul class="chat-history" id="sample_history_2">
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>I am going out.</p>
		<span class="time">08:21</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>Call me when you see this message.</p>
		<span class="time">08:27</span>
	</li>
</ul>	
	</div>

<!-- Sample Modal (Default skin) -->
<div class="modal fade" id="sample-modal-dialog-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Default Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- Sample Modal (Skin inverted) -->
<div class="modal invert fade" id="sample-modal-dialog-2">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- Sample Modal (Skin gray) -->
<div class="modal gray fade" id="sample-modal-dialog-3">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

	<link rel="stylesheet" href="{{URL::to('/')}}/assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom Scripts -->
	<script src="{{URL::to('/')}}/assets/js/gsap/main-gsap.js"></script>
	<script src="{{URL::to('/')}}/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="{{URL::to('/')}}/assets/js/bootstrap.js"></script>
	<script src="{{URL::to('/')}}/assets/js/joinable.js"></script>
	<script src="{{URL::to('/')}}/assets/js/resizeable.js"></script>
	<script src="{{URL::to('/')}}/assets/js/neon-api.js"></script>
	<script src="{{URL::to('/')}}/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="{{URL::to('/')}}/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="{{URL::to('/')}}/assets/js/jquery.sparkline.min.js"></script>
	<script src="{{URL::to('/')}}/assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="{{URL::to('/')}}/assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="{{URL::to('/')}}/assets/js/raphael-min.js"></script>
	<script src="{{URL::to('/')}}/assets/js/morris.min.js"></script>
	<script src="{{URL::to('/')}}/assets/js/toastr.js"></script>
	<script src="{{URL::to('/')}}/assets/js/neon-chat.js"></script>
	<script src="{{URL::to('/')}}/assets/js/neon-custom.js"></script>
	<script src="{{URL::to('/')}}/assets/js/neon-demo.js"></script>

</body>
</html>