<?php if (isset($_SESSION['loggedin'])) { ?>
<div id="divNavMenu" >
	<div id="divTabs">
		<ul id="listMainTabs">
			<li><a href="#" title="Home Page" class="parent">Home Page</a>
				<ul class="listInner">
					<li><a href="?controller=home&action=viewtop">Edit Home Page Header</a></li>
					<li><a href="?controller=home&action=viewbody">Edit Home Page</a></li>
					<li><a href="?controller=home&action=viewbottom">Edit Home Page Footer</a></li>
				</ul>
			</li>
			<li><a href="#" title="Chu-bops" class="parent">Chu-Bops</a>
				<ul class="listInner">
					<li><a href="?controller=chubops&action=viewtop">Edit Chubops Header</a></li>
					<li><a href="?controller=chubops&action=chubops_list">List Chubops</a></li>
					<li><a href="?controller=chubops&action=viewbottom">Edit Chubops Footer</a></li>
				</ul>
			</li>
			<li><a href="#" title="Hit-pops" class="parent">Hit-Pops</a>
			<ul class="listInner">
					<li><a href="?controller=hitpops&action=viewtop">Edit Hitpops Header</a></li>
					<li><a href="?controller=hitpops&action=hitpops_list">List Hitpops</a></li>
					<li><a href="?controller=hitpops&action=viewbottom">Edit Hitpops Footer</a></li>
				</ul>
			</li>
			<li><a href="#" title="List" class="parent">List</a>
				<ul class="listInner">
					 <li><a href="?controller=list&action=viewtop">Edit List Header</a></li>
					 <li><a href="?controller=list&action=viewbottom">Edit List Footer</a></li>
				 </ul>
			</li>
			<li><a href="#" title="Boxed Sets" class="parent">Boxed Sets</a>
				<ul class="listInner">
					<li><a href="?controller=boxed&action=boxed_list">List Boxed Sets</a></li>
					<li><a href="?controller=boxed&action=view_new">Add Boxed Set</a></li>
					<li><a href="?controller=boxed&action=viewtop">Edit Boxed Sets Header</a></li>
					<li><a href="?controller=boxed&action=viewbody">Edit Boxed Sets Page</a></li>
					<li><a href="?controller=boxed&action=viewbottom">Edit Boxed Sets Footer</a></li>
				</ul>
			</li>
			<li><a href="#" title="Artists" class="parent">Artists</a>
				<ul class="listInner">
					<li><a href="#">Elvis</a>
						<ul class="inner">
							<li><a href="?controller=elvis&action=view_elvis_top">Edit Elvis Header</a></li>
							<li><a href="?controller=elvis&action=view_elvis_bottom">Edit Elvis Footer</a></li>
						</ul>
					</li>
					<li><a href="#">Beatles</a>
						<ul class="inner">
							<li><a href="?controller=beatles&action=view_beatles_top">Edit Beatles Header</a></li>
							<li><a href="?controller=beatles&action=view_beatles_bottom">Edit Beatles Footer</a></li>
						</ul>
					</li>
					<li><a href="#">Stones</a>
						<ul class="inner">
							<li><a href="?controller=stones&action=view_stones_top">Edit Stones Header</a></li>
							<li><a href="?controller=stones&action=view_stones_bottom">Edit Stones Footer</a></li>
						</ul>
					</li>
					<li><a href="#">Superstar</a>
						<ul class="inner">
							<li><a href="?controller=superstar&action=view_superstar_top">Edit Superstar Header</a></li>
							<li><a href="?controller=superstar&action=view_superstar_bottom">Edit Superstar Footer</a></li>
						</ul>
					</li>
					<li><a href="#">Collectables</a>
						<ul class="inner">
							<li><a href="?controller=collectables&action=view_collectables_top">Edit Collectables Header</a></li>
							<li><a href="?controller=collectables&action=view_collectables_bottom">Edit Collectables Footer</a></li>
						</ul>
					</li>
					<li><a href="#">Chubop</a>
						<ul class="inner">
							<li><a href="?controller=chubop&action=view_chubop_top">Edit Chubop Header</a></li>
							<li><a href="?controller=chubop&action=view_chubop_bottom">Edit Chubop Footer</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#" title="Shop" class="parent">Shop</a>
				<ul class="listInner">
					 <li><a href="?controller=shopping&action=viewtop">Edit Shop Header</a></li>
					 <li><a href="?controller=shopping&action=viewbottom">Edit Shop Footer</a></li>
				</ul>
			</li>
			<li><a href="#" title="Shop" class="parent">Shipping/Terms</a>
				<ul class="listInner">
					<li><a href="?controller=shipping&action=viewtop">Edit Terms Header</a></li>
					<li><a href="?controller=shipping&action=viewbody">Edit Terms</a></li>
					<li><a href="?controller=shipping&action=viewbottom">Edit Terms Footer</a></li>
				</ul>
			</li>
			<li><a href="#" title="eBay" class="parent">eBay</a>
				<ul class="listInner">
					<li><a href="?controller=ebay&action=viewtop">eBay Header</a></li>
					<li><a href="?controller=ebay&action=viewbottom">eBay Footer</a></li>
					<li><a href="?controller=ebay&action=list">List Ebay Pics</a></li>
					<li><a href="?controller=ebay&action=new">Add eBay Pic</a></li>
					 <li><a href="?controller=ebay&action=listtemplates">List Templates</a></li>
				</ul>
			</li>
			<li><a href="#" title="Utilities" class="parent">Utilities</a>
				<ul class="listInner">
					<li><a href="?controller=utilities&action=view" class="underline">Change Username/Password</a></li>
					<li><a href="?controller=utilities&action=logout" class="underline">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<p align="center"><img src="images/chu-bops.png" width="180"></p>
<?php } ?>