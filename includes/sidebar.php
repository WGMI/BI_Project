<div class="mobile-menu-left-overlay"></div>
<nav class="side-menu" style="background-color:#474B57;">
    <ul class="side-menu-list">

        <?php
		if(logged_in()){
		?>
				<li id="menu-dashboard" class="white">
						<a href="index.php">
							<i class="fa fa-dashboard"></i>
							<span class="lbl">Dashboard</span>
						</a>
				</li>
				<?php
			if($user_data['access_type'] == 9){
				?>
				
				<li id="menu-organizations" class="white">
					<a href="organizations.php">
						<i class="fa fa-bank"></i>
						<span class="lbl">Organizations</span>
					</a>
				</li>



				<li id="menu-accounts" class="white">
					<a href="accounts.php">
						<i class="fa fa-key"></i>
						<span class="lbl">Access Accounts</span>
					</a>
				</li>

				<li id="menu-datasets" class="white">
					<a href="pbireports.php">
						<i class="fa fa-cubes"></i>
						<span class="lbl">PowerBI Reports</span>
					</a>
				</li>

				<!--<li id="menu-login_logs" class="white">
					<a href="https://pi-bi.io/pwi/login_logs">
						<i class="fa fa-list-ul"></i>
						<span class="lbl">Login Logs</span>
					</a>
				</li>-->

				<li title="Advanced Tools" id="advanced_tools_menu" class="purple">
					<a href="tools.php">
						<i class="fa fa-wrench"></i>
						<span class="lbl">Advanced Tools</span>
					</a>
				</li>

				
				<?php
			} else{
				?>
				<li id="category_0" class="blue">
                <a href="uncategorised.php">
                    <i class="fa fa-clone"></i>
                    <span class="lbl">Uncategorised Reports</span>
                </a>
            </li>
				<?php
			}
			?>
			<li title="Manage Account Settings" style="margin-top:32px;" id="account_menu" class="purple">
					<a href="settings.php">
						<i class="fa fa-cogs"></i>

						<span class="lbl">Account Settings</span>
					</a>
				</li>
				
				<li title="Signing out" id="logout_menu" class="purple">
					<a href="logout.php">
						<i class="fa fa-power-off"></i>

						<span class="lbl">Logout</span>
					</a>
				</li>
			<?php
			
		} else{
			?>
			<li title="Signing in" id="login_menu" class="purple">
				<a href="login.html">
					<i class="fa fa-sign-in"></i>

					<span class="lbl">Login</span>
				</a>
			</li>
			<?php
		}
		
		?>
		
		
		
</nav><!--.side-menu-->