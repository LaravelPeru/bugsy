<nav class="side-bar" ui-side-menu mb-scrollbar="scrollbarConfig">
	<a class="brand" href ui-sref="app.admin.dashboard" title="Bosch">
		<img src="{{ asset('assets/img/LogoBosch.png') }}" alt="Bosch" class="large">
		<img src="{{ asset('assets/img/LogoBoschSmall.png') }}" alt="Bosch" class="small">
	</a>
	<ul class="nav-menu">
		<li data-state="close">
			<a href ui-sref="app.admin.dashboard" ui-sref-active="active" class="icon-monitor" genie-wish="Home / Dashboard"><span>Dashboard</span></a>
		</li>
		<li data-state="close">
			<a href ui-sref="app.admin.registrovisitas" ui-sref-active="active" class="icon-paper-plane" genie-wish="Home / Registro de Visitas y Canje"><span>Registro de Visitas y Canje</span></a>
		</li>
		<!--<li data-state="close">
			<a href ui-sref="app.admin.registrocanje" ui-sref-active="active" class="icon-gift" genie-wish="Home / Registro de Canje"><span>Registro de Canjes</span></a>
		</li>-->
		<li data-state="close">
			<a href ui-sref="app.admin.listadogrupo" ui-sref-active="active" class="icon-apps" genie-wish="Home / Listado de Grupos"><span>Listado de Grupos</span></a>
		</li>
		<li data-state="close">
			<a href ui-sref="app.admin.listadotaller" ui-sref-active="active" class="icon-store" genie-wish="Home / Listado de Talleres"><span>Listado de Talleres</span></a>
		</li>
		<li data-state="close">
			<a href ui-sref="app.admin.fotosvideos" ui-sref-active="active" class="icon-camera" genie-wish="Home / Fotos y Videos"><span>Fotos y Videos</span></a>
		</li>
		<li data-state="close">
			<a href ui-sref="app.admin.programacion" ui-sref-active="active" class="icon-clipboard" genie-wish="Home / Listado Programacion"><span>Programación de Visitas</span></a>
		</li>
		@if( Auth::user()->esAdmin() )
		<li data-state="close">
			<a href ui-sref="app.admin.usuario" ui-sref-active="active" class="icon-user-list" genie-wish="Home / Usuarios"><span>Usuarios</span></a>
		</li>
		@endif
		<!--
		<li data-state="close">
			<a href class="icon-calc">
				<span>UI Elements</span>
				<small class="badge pull-right">13</small>
			</a>
			<ul>
				<li class="title">UI Elements</li>
				<li><a href ui-sref="app.admin.ui.typography" ui-sref-active="active" genie-wish="UI Elements / Typography">Typography</a></li>
				<li><a href ui-sref="app.admin.ui.tables" ui-sref-active="active" genie-wish="UI Elements / Tables">Tables</a></li>
				<li><a href ui-sref="app.admin.ui.panels" ui-sref-active="active" genie-wish="UI Elements / Panels">Panels</a></li>
				<li><a href ui-sref="app.admin.ui.forms" ui-sref-active="active" genie-wish="UI Elements / Forms">Forms</a></li>
				<li><a href ui-sref="app.admin.ui.buttons" ui-sref-active="active" genie-wish="UI Elements / Buttons">Buttons</a></li>
				<li><a href ui-sref="app.admin.ui.grids" ui-sref-active="active" genie-wish="UI Elements / Grid">Grid</a></li>
				<li><a href ui-sref="app.admin.ui.components" ui-sref-active="active" genie-wish="UI Elements / Components">Components</a></li>
				<li><a href ui-sref="app.admin.ui.icons" ui-sref-active="active" genie-wish="UI Elements / Icons">Icons</a></li>
				<li><a href ui-sref="app.admin.ui.editors" ui-sref-active="active" genie-wish="UI Elements / Editors">Editors</a></li>
			</ul>
		</li>
		<li data-state="close">
			<a href class="icon-globe">
				<span>Extras</span>
				<small class="badge pull-right">5</small>
			</a>
			<ul>
				<li class="title">Extras</li>
				<li><a href ui-sref="app.admin.extras.sortable" ui-sref-active="active" genie-wish="UI Elements / Sortable">Sortable</a></li>
				<li><a href ui-sref="app.admin.extras.invoice" ui-sref-active="active" genie-wish="UI Elements / Invoice">Invoice</a></li>
				<li><a href ui-sref="app.admin.extras.wizard" ui-sref-active="active" genie-wish="UI Elements / Wizard">Wizard</a></li>
				<li><a href ui-sref="app.admin.extras.timeline" ui-sref-active="active" genie-wish="UI Elements / Timeline">Timeline</a></li>
			</ul>
		</li>
		<li data-state="close" ui-sref-active="active">
			<a href ui-sref="app.admin.widgets" class="icon-apps" genie-wish="Widgets"><span>Widgets</span></a>
		</li>
		<li data-state="close">
			<a href class="icon-chart"><span>Charts</span></a>
			<ul>
				<li class="title">Charts</li>
				<li><a href ui-sref="app.admin.charts.nvd3" ui-sref-active="active" genie-wish="Charts / NvD3">NvD3 Charts</a></li>
				<li><a href ui-sref="app.admin.charts.c3" ui-sref-active="active" genie-wish="Charts / C3">C3 Charts</a></li>
			</ul>
		</li>
		<li data-state="close">
			<a href class="icon-map"><span>Maps</span></a>
			<ul>
				<li class="title">Maps</li>
				<li><a href ui-sref="app.admin.maps.gmaps" ui-sref-active="active" genie-wish="Maps / Google Maps">Google Maps</a></li>
			</ul>
		</li>
		<li data-state="close">
			<a href ui-sref="app.admin.tasks" class="icon-sheet" genie-wish="Tasks / ToDos"><span>Tasks</span></a>
		</li>
		<li data-state="close">
			<a href class="icon-cross"><span>Pages</span></a>
			<ul>
				<li class="title">Pages</li>
				<li><a href ui-sref="app.page.lock" genie-wish="Pages / Lock Screen">Lock Screen</a></li>
				<li><a href ui-sref="app.page.login" genie-wish="Pages / Login">Login</a></li>
				<li><a href ui-sref="app.page.register" genie-wish="Pages / Registration">Registration</a></li>
				<li><a href ui-sref="app.page.loading" genie-wish="Pages / Loading page">Loading page</a></li>
				<li><a href ui-sref="app.page.404" genie-wish="Pages / 404">404</a></li>
				<li><a href ui-sref="app.page.500" genie-wish="Pages / 500">500</a></li>
				<li><a href ui-sref="app.page.blank" genie-wish="Pages / Blank page">Blank page</a></li>
			</ul>
		</li>
		<li data-state="close">
			<a href class="icon-paper-plane"><span>Mail</span></a>
			<ul>
				<li class="title">Mail</li>
				<li><a href ui-sref="app.mail.inbox" genie-wish="Mail / Inbox">Inbox</a></li>
				<li><a href ui-sref="app.mail.new" genie-wish="Mail / Componser">Componser</a></li>
				<li><a href ui-sref="app.mail.inbox.read({ id: 1 })" genie-wish="Mail / Read mail">Read mail</a></li>
			</ul>
		</li>
		<li data-state="close">
			<a href ui-chat-toggle class="icon-chat"><span>Chat</span></a>
		</li>
	-->
	</ul>
	<!--
	<div class="mini-charts">
		<div ui-mini-chart="miniChartDemo1"></div>
		<p>Server uptime</p>
		<small class="text-danger">12 123 days</small>
	</div>
	<div class="mini-charts">
		<div ui-mini-chart="miniChartDemo2"></div>
		<p>Disk usage</p>
		<small class="text-primary">82.32%</small>
	</div>
	-->
</nav>