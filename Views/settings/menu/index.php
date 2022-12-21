<?= $this->extend('layout/layout_admin') ?>
<?= $this->section('content') ?>
	<div class="container">
		<div class="row my-3 mt-3">
			<div class="col-10">
			<h2 class="h2">List Menu</h5>
			</div>
			<div class="col-2 align-self-end">
				<p class="text-md-right">
					<a class="btn btn-outline-primary" href="#" role="button">Add Menu</a>
				</p>
			</div>
	</div>
	<div class="row card">
	<?php foreach($menus as $menu){?>
			<div class="col-12 card">
				<div class="row mt-3">
					<div class="col-10">
					<h5 class="h5"><?=$menu['title']?></h5>
					</div>
					<div class="col-2">
						<p class="text-md-right">
							<a class="btn btn-outline-warning" href="#" role="button">Edit</a>
							<a class="btn btn-outline-danger" href="#" role="button">Delete</a>
						</p>
					</div>
				</div>
			</div>
			<?php if($menu['sub']){ ?>
			<?php foreach($menu['sub'] as $sub){?>
				<div class="col-11 card align-self-end">
					<div class="row mt-3">
						<div class="col-10">
						<h5 class="h5"><?=$sub['title']?></h5>
						</div>
						<div class="col-2">
							<p class="text-md-right">
								<a class="btn btn-outline-warning" href="#" role="button">Edit</a>
								<a class="btn btn-outline-danger" href="#" role="button">Delete</a>
							</p>
						</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
		</div>
	</div>

<?= $this->endSection() ?>