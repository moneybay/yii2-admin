<?php 
use yii\helpers\Html;
use yii\widgets\Menu;
?>
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner ">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<?= Html::a('<img class="logo-default" src="'.$this->theme->getUrl('img/logo.png').'" />', ['/site/index']) ?>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		<div class="page-actions hide">
			<div class="btn-group">
				<button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<span class="hidden-sm hidden-xs">Actions&nbsp;</span>
					<i class="fa fa-angle-down"></i>
				</button>
				<?php 
				echo Menu::widget([
				'options' => ['class' => 'dropdown-menu', 'role'=>'menu'],
				'encodeLabels' => false,
				'items' => [
						['label' => '<i class="icon-docs"></i> New Post', 'url' => '#'],
						['label' => '<i class="icon-tag"></i> New Comment', 'url' => '#'],						
						['label' => '<i class="icon-share"></i> Share', 'url' => '#'],						
						['label' => '<i class="icon-flag"></i> Comments	<span class="badge badge-success">4</span>', 'url' => '#'],						
						['label' => '<i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>', 'url' => '#'],						
					],
				]);
				?>				
			</div>
		</div>
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form hide" action="#" method="GET">
				<div class="input-group">
					<input type="text" class="form-control input-sm" placeholder="Search..." name="query">
					<span class="input-group-btn">
						<a href="javascript:;" class="btn submit">
							<i class="icon-magnifier"></i>
						</a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<?php 
				echo Menu::widget([
				'options' => ['class' => 'nav navbar-nav pull-right'],
				'encodeLabels' => false,
				'items' => [
						['label' => '', 'url' => '#', 'options'=> ['class'=>'separator hide']],
						// [
							// 'label' => '<i class="icon-bell"></i><span class="badge badge-success"> 7 </span>', 
							// 'url' => 'javascript:;', 
							// 'options'=> ['class'=>'dropdown dropdown-extended dropdown-notification dropdown-dark'],							
							// 'template' => '<a href="{url}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">{label}</a>',
							// 'submenuTemplate' => "\n<ul class=\"dropdown-menu\">\n{items}\n</ul>\n",
							// 'items' => [
								// ['label' => '<h3><span class="bold">12 pending</span> notifications</h3> <a href="page_user_profile_1.html">view all</a>', 'options'=> ['class'=>'external']],
								// [									
									// 'submenuTemplate' => "\n<ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">\n{items}\n</ul>\n",
									// 'items' => [
										// ['label' => '<span class="time">just now</span><span class="details"><span class="label label-sm label-icon label-success">	<i class="fa fa-plus"></i></span> New user registered. </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="time">3 mins</span><span class="details"><span class="label label-sm label-icon label-danger"><i class="fa fa-bolt"></i></span> Server #12 overloaded. </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="time">10 mins</span><span class="details"><span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span> Server #2 not responding. </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="time">2 days</span><span class="details"><span class="label label-sm label-icon label-danger"><i class="fa fa-bolt"></i></span> Database overloaded 68%. </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="time">3 days</span><span class="details"><span class="label label-sm label-icon label-danger"><i class="fa fa-bolt"></i></span> A user IP blocked. </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="time">4 days</span><span class="details"><span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span> Storage Server #4 not responding dfdfdfd. </span>', 'url' => 'javascript:;'],
									// ],
								// ],	
							// ],
						// ],
						// ['options'=> ['class'=>'separator hide']],
						// [
							// 'label' => '<i class="icon-envelope-open"></i><span class="badge badge-danger"> 4 </span>', 
							// 'url' => 'javascript:;', 
							// 'options'=> ['class'=>'dropdown dropdown-extended dropdown-inbox dropdown-dark', 'id'=>'header_inbox_bar'],							
							// 'template' => '<a href="{url}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">{label}</a>',
							// 'submenuTemplate' => "\n<ul class=\"dropdown-menu\">\n{items}\n</ul>\n",
							// 'items' => [
								// ['label' => '<h3>You have<span class="bold">7 New</span> Messages</h3><a href="#">view all</a>', 'options'=> ['class'=>'external']],
								// [									
									// 'submenuTemplate' => "\n<ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">\n{items}\n</ul>\n",
									// 'items' => [
										// ['label' => '<span class="photo"><img src="'.$this->theme->getUrl('layout/img/avatar2.jpg').'" class="img-circle" alt=""> </span>
											// <span class="subject">
												// <span class="from"> Lisa Wong </span>
												// <span class="time">Just Now </span>
											// </span>
											// <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="photo"><img src="'.$this->theme->getUrl('layout/img/avatar2.jpg').'" class="img-circle" alt=""> </span>
											// <span class="subject">
												// <span class="from"> Lisa Wong </span>
												// <span class="time">16 mins </span>
											// </span>
											// <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="photo"><img src="'.$this->theme->getUrl('layout/img/avatar2.jpg').'" class="img-circle" alt=""> </span>
											// <span class="subject">
												// <span class="from"> Lisa Wong </span>
												// <span class="time">40 mins </span>
											// </span>
											// <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="photo"><img src="'.$this->theme->getUrl('layout/img/avatar2.jpg').'" class="img-circle" alt=""> </span>
											// <span class="subject">
												// <span class="from"> Lisa Wong </span>
												// <span class="time">2 hrs </span>
											// </span>
											// <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>', 'url' => 'javascript:;'],
										
									// ],
								// ],	
							// ],
						// ],
						
						// ['options'=> ['class'=>'separator hide']],
						// [
							// 'label' => '<i class="icon-calendar"></i><span class="badge badge-primary"> 3 </span>', 
							// 'url' => 'javascript:;', 
							// 'options'=> ['class'=>'dropdown dropdown-extended dropdown-tasks dropdown-dark', 'id'=>'header_task_bar'],							
							// 'template' => '<a href="{url}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">{label}</a>',
							// 'submenuTemplate' => "\n<ul class=\"dropdown-menu extended tasks\">\n{items}\n</ul>\n",
							// 'items' => [
								// ['label' => '<h3>You have<span class="bold">12 pending</span> tasks</h3><a href="#">view all</a>', 'options'=> ['class'=>'external']],
								// [									
									// 'submenuTemplate' => "\n<ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">\n{items}\n</ul>\n",
									// 'items' => [
										// ['label' => '<span class="task">
												// <span class="desc">New release v1.2 </span>
												// <span class="percent">30%</span>
											// </span>
											// <span class="progress">
												// <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
													// <span class="sr-only">40% Complete</span>
												// </span>
											// </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="task">
												// <span class="desc">Application deployment</span>
												// <span class="percent">65%</span>
											// </span>
											// <span class="progress">
												// <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
													// <span class="sr-only">65% Complete</span>
												// </span>
											// </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="task">
												// <span class="desc">Mobile app release</span>
												// <span class="percent">98%</span>
											// </span>
											// <span class="progress">
												// <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
													// <span class="sr-only">98% Complete</span>
												// </span>
											// </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="task">
												// <span class="desc">Database migration</span>
												// <span class="percent">10%</span>
											// </span>
											// <span class="progress">
												// <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
													// <span class="sr-only">10% Complete</span>
												// </span>
											// </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="task">
												// <span class="desc">Web server upgrade</span>
												// <span class="percent">58%</span>
											// </span>
											// <span class="progress">
												// <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
													// <span class="sr-only">58% Complete</span>
												// </span>
											// </span>', 'url' => 'javascript:;'],
										// ['label' => '<span class="task">
												// <span class="desc">Mobile development</span>
												// <span class="percent">85%</span>
											// </span>
											// <span class="progress">
												// <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
													// <span class="sr-only">85% Complete</span>
												// </span>
											// </span>', 'url' => 'javascript:;'],
									// ],
								// ],	
							// ],
						// ],
						[
							'label' => '<span class="username username-hide-on-mobile"> '.Yii::$app->user->identity->username.' </span><img alt="" class="img-circle" src="'.$this->theme->getUrl('layout/img/avatar9.jpg').'" /> </a>', 
							'url' => 'javascript:;', 
							'options'=> ['class'=>'dropdown dropdown-user dropdown-dark'],							
							'template' => '<a href="{url}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">{label}</a>',
							'submenuTemplate' => "\n<ul class=\"dropdown-menu dropdown-menu-default\">\n{items}\n</ul>\n",
							'items' => [
								['label' => '<i class="icon-user"></i> My Profile', 'url'=>'#'],
								['label' => '<i class="icon-calendar"></i> My Calendar', 'url'=>'#'],
								['label' => '<i class="icon-envelope-open"></i> My Inbox<span class="badge badge-danger"> 3 </span>', 'url'=>'#'],
								['label' => '<i class="icon-rocket"></i> My Tasks<span class="badge badge-success"> 7 </span>', 'url'=>'#'],
								['options'=> ['class'=>'divider']],
								['label' => '<i class="icon-lock"></i> Lock Screen', 'url'=>'#'],
								//['label' => '<i class="icon-key"></i> Log Out </a>', 'url'=>['/site/logout']],
								['label' => Html::beginForm(['/site/logout'], 'post')
											.Html::submitButton('<i class="icon-key"></i> Log Out',	['class' => 'btn btn-link', 'style'=>'padding:0; color:#d4dadf'])
											.Html::endForm(), 'url'=>'#'],
							],
						],	
						[
							'label' => '<span class="sr-only">Toggle Quick Sidebar</span><i class="icon-logout"></i>',							
							'options'=> ['class'=>'dropdown dropdown-extended quick-sidebar-toggler'],							
							
						],						
					],
				]);
				
				
				?>					
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>