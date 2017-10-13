<?php 
use yii\helpers\Html;
use yii\widgets\Menu;
?>
<div class="page-sidebar-wrapper">
	<!-- BEGIN SIDEBAR -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
		<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
		<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
		<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<?php 
			echo Menu::widget([
			'options' => ['class' => 'page-sidebar-menu', 'data-keep-expanded'=>'false', 'data-auto-scroll'=>'true', 'data-slide-speed'=>'200'],
			'encodeLabels' => false,
			'itemOptions' =>  ['class'=>'nav-item'],
			'items' => [
					['label' => '<i class="icon-home"></i><span class="title">Dashboard</span>', 'url' => ['/site/index']],
					['label' => '<h3 class="uppercase">Features</h3>', 'options'=> ['class'=>'heading']],
					[
						'label' => '<i class="icon-user"></i><span class="title">User</span><span class="arrow"></span>', 
						'url' => 'javascript:;',
						'template' => '<a href="{url}" class="nav-link nav-toggle">{label}</a>',
						'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
						'items' => [
							//['label' => '<i class="icon-user"></i><span class="title"> My Profile</span>', 'url' => 'javascript:;'],
							['label' => '<i class="icon-users"></i><span class="title"> Manage Users</span>', 'url' => 'javascript:;'],
							[
								'label' => '<i class="icon-key"></i><span class="title"> ACL</span><span class="arrow"></span>', 
								'url' => 'javascript:;',
								'template' => '<a href="{url}" class="nav-link nav-toggle">{label}</a>',
								'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
								'items' => [
									['label' => '<i class="icon-key"></i><span class="title"> Role</span>', 'url' => ['admin/role']],
									['label' => '<i class="icon-key"></i><span class="title"> Route</span>', 'url' => ['admin/route']],
									['label' => '<i class="icon-key"></i><span class="title"> Assign</span>', 'url' => ['admin/assignment']],
								],
							],
						],
					],
					[
						'label' => '<i class="icon-credit-card"></i><span class="title"> Currency</span><span class="arrow"></span>',
						'url' => 'javascript:;',
						'template' => '<a href="{url}" class="nav-link nav-toggle">{label}</a>',
						'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
						'items' => [
								['label' => '<i class="icon-tag"></i><span class="title"> Currency Unit</span>', 'url' => ['currency/index']],
						]
					],
					[
						'label' => '<i class="icon-briefcase"></i><span class="title">Branch</span><span class="arrow"></span>', 
						'url' => 'javascript:;',
						'template' => '<a href="{url}" class="nav-link nav-toggle">{label}</a>',
						'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
						'items' => [							
							['label' => '<i class="icon-users"></i><span class="title"> Manage Branch</span>', 'url' => 'javascript:;'],							
						],
					],
					[
						'label' => '<i class="fa fa-file-o"></i><span class="title">Article</span><span class="arrow"></span>', 
						'url' => 'javascript:;',
						'template' => '<a href="{url}" class="nav-link nav-toggle">{label}</a>',
						'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
						'items' => [
							['label' => '<i class="fa fa-pencil-square-o"></i><span class="title"> New Article</span>', 'url' => ['article/create']],
							['label' => '<i class="fa fa-files-o"></i><span class="title"> All Articles</span>', 'url' => ['article/view']],
						],
					],					
					// ['label' => '<h3 class="uppercase">Reports</h3>', 'options'=> ['class'=>'heading']],
					// [
						// 'label' => '<i class="icon-bar-chart"></i><span class="title">Report</span><span class="arrow"></span>', 
						// 'url' => 'javascript:;',
						// 'template' => '<a href="{url}" class="nav-link nav-toggle">{label}</a>',
						// 'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
						// 'items' => [
							// ['label' => '<i class="icon-user"></i><span class="title"> Sub-report 1</span>', 'url' => 'javascript:;'],
							// ['label' => '<i class="icon-user"></i><span class="title"> Sub-report 2</span>', 'url' => 'javascript:;'],
						// ],
					// ],
					// ['label' => '<h3 class="uppercase">Settings</h3>', 'options'=> ['class'=>'heading']],
					// ['label' => '<i class="icon-social-dribbble"></i><span class="title">General</span>', 'url' => '#'],
					// [
						// 'label' => '<i class="icon-settings"></i><span class="title">System</span><span class="arrow"></span>', 
						// 'url' => 'javascript:;',
						// 'template' => '<a href="{url}" class="nav-link nav-toggle">{label}</a>',
						// 'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
						// 'items' => [
							// ['label' => '<i class="icon-user"></i><span class="title"> Setting 1</span>', 'url' => 'javascript:;'],
							// ['label' => '<i class="icon-user"></i><span class="title"> Setting 2</span>', 'url' => 'javascript:;'],
						// ],
					// ],
				],
			]); 
		?>	
		<!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
</div>