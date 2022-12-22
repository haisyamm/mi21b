<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<div class="container">
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>	
			<form>
			<div class="modal-body">
				<div class="form-group">
					<label for="menuid">Menu ID</label>
					<input type="text" class="form-control" id="menuid">
				</div>
				<div class="form-group">
					<label for="menu_name">Nama Menu</label>
					<input type="text" class="form-control" id="menu_name">
				</div>
				<div class="form-group">
					<label for="menu_level">Menu Level</label>
					<select class="form-control" id="menu_level">
						<option value="">Pilih..</option>
						<option value="0">Main Menu</option>
						<option value="1">Sub Menu</option>
						<option value="2">Sub Sub Menu</option>
					</select>
				</div>
				<div class="form-group">
					<label for="menu_level">Group Menu</label>
					<select class="form-control" id="menu_level">
						<option value="">Pilih..</option>
						<option value="0">Main Menu</option>
					</select>
				</div>
				<div class="form-group form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
					<label class="form-check-label" for="exampleRadios1">
						Yes
					</label> 
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					<label class="form-check-label" for="exampleRadios2">
						No
					</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			</form>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="row my-3 mt-3">
		<div class="col-10">
			<h2 class="h2">List Menu</h5>
		</div>
		<div class="col-2 align-self-end">
			<p class="text-md-right">
				<a class="btn btn-outline-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal">Add Menu</a>
			</p>
		</div>
	</div>
	<div class="row card">
	<?php foreach($menus as $menu){?>
		<div class="modal fade" id="exampleModal<?=$menu['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>	
				<form>
				<div class="modal-body">
					<div class="form-group">
						<label for="menuid">Menu ID</label>
						<input type="text" class="form-control" id="menuid">
					</div>
					<div class="form-group">
						<label for="menu_name">Nama Menu</label>
						<input type="text" class="form-control" id="menu_name">
					</div>
					<div class="form-group">
						<label for="menu_level">Menu Level</label>
						<select class="form-control" id="menu_level">
							<option value="">Pilih..</option>
							<option value="0">Main Menu</option>
							<option value="1">Sub Menu</option>
							<option value="2">Sub Sub Menu</option>
						</select>
					</div>
					<div class="form-group">
						<label for="menu_level">Group Menu</label>
						<select class="form-control" id="menu_level">
							<option value="">Pilih..</option>
							<option value="0">Main Menu</option>
						</select>
					</div>
					<div class="form-group form-check">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
						<label class="form-check-label" for="exampleRadios1">
							Yes
						</label> 
						&nbsp;&nbsp;&nbsp;&nbsp;
						<input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						<label class="form-check-label" for="exampleRadios2">
							No
						</label>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				</form>
				</div>
			</div>
		</div>
			<div class="col-12 card">
				<div class="row mt-3">
					<div class="col-10">
					<h5 class="h5"><?=$menu['title']?></h5>
					</div>
					<div class="col-2">
						<p class="text-md-right">
							<a class="btn btn-outline-warning" href="#" role="button" data-toggle="modal" data-target="#exampleModal<?=$menu['id']?>">Edit</a>
							<a class="btn btn-outline-danger" href="#" role="button">Delete</a>
						</p>
					</div>
				</div>
			</div>
			<?php if($menu['sub']){ ?>
			<?php foreach($menu['sub'] as $sub){?>
				<div class="modal fade" id="exampleModal<?=$sub['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>	
						<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="menuid">Menu ID</label>
								<input type="text" class="form-control" id="menuid">
							</div>
							<div class="form-group">
								<label for="menu_name">Nama Menu</label>
								<input type="text" class="form-control" id="menu_name">
							</div>
							<div class="form-group">
								<label for="menu_level">Menu Level</label>
								<select class="form-control" id="menu_level">
									<option value="">Pilih..</option>
									<option value="0">Main Menu</option>
									<option value="1">Sub Menu</option>
									<option value="2">Sub Sub Menu</option>
								</select>
							</div>
							<div class="form-group">
								<label for="menu_level">Group Menu</label>
								<select class="form-control" id="menu_level">
									<option value="">Pilih..</option>
									<option value="0">Main Menu</option>
								</select>
							</div>
							<div class="form-group form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="exampleRadios1">
									Yes
								</label> 
								&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
								<label class="form-check-label" for="exampleRadios2">
									No
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
						</form>
						</div>
					</div>
				</div>
				<div class="col-11 card align-self-end">
					<div class="row mt-3">
						<div class="col-10">
						<h5 class="h5"><?=$sub['title']?></h5>
						</div>
						<div class="col-2">
							<p class="text-md-right">
								<a class="btn btn-outline-warning" href="#" role="button" data-toggle="modal" data-target="#exampleModal<?=$sub['id']?>">Edit</a>
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