<?php 
use App\Models\Menu; 	
$menus = new Menu();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
				<?php foreach($menus->main_menu() as $menu){?>
					<?php $sub = $menus->sub_menu($menu['id']);?>
					<?php if($sub){ ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
						<?=$menu['title']?>
						</a>
						<div class="dropdown-menu">
						<?php foreach($sub as $item){?>
							<a class="dropdown-item" href="<?= base_url($item['link']) ?>"><?=$item['title']?></a>
						<?php } ?>
						</div>
					</li>
					<?php }else{?>
						<li class="nav-item">
						<a class="nav-link" href="<?= base_url($menu['link']) ?>"><?=$menu['title']?></a>
					</li>
					<?php } ?>
				<?php } ?>
				</ul>
			</div>
		</div>
	</nav>