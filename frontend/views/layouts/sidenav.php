<?php 
use yii\helpers\Url;

?>
<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li ><a href="<?= Url::to(['dashboard/panel'])?>"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li><a href="<?= Url::to(['dashboard/message'])?>"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span></a></li>
				<li><a href="<?= Url::to(['dashboard/booking'])?>"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
				<li><a href="<?= Url::to(['dashboard/wallet'])?>"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
			</ul>
			
			<ul data-submenu-title="Listings">
				<li><a><i class="sl sl-icon-layers"></i> My Listings</a>
					<ul>
						<li><a href="<?= Url::to(['dashboard/listing'])?>">Active <span class="nav-tag green">6</span></a></li>
						<li><a href="<?= Url::to(['dashboard/listing'])?>">Pending <span class="nav-tag yellow">1</span></a></li>
						<li><a href="<?= Url::to(['dashboard/listing'])?>">Expired <span class="nav-tag red">2</span></a></li>
					</ul>	
				</li>
				<li><a href="<?= Url::to(['dashboard/review'])?>"><i class="sl sl-icon-star"></i> Reviews</a></li>
				<li><a href="<?= Url::to(['dashboard/bookmark'])?>"><i class="sl sl-icon-heart"></i> Bookmarks</a></li>
				<li><a href="<?= Url::to(['dashboard/add-listing'])?>"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
			</ul>	

			<ul data-submenu-title="Account">
				<li><a href="<?= Url::to(['dashboard/profile'])?>"><i class="sl sl-icon-user"></i> My Profile</a></li>
				<li><a href="<?= Url::to(['site/index'])?>"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->