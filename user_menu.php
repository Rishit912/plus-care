<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item" id="m_nav_item_1"> <a href="index.php" class="menu__link"> Home </a></li>
						<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="about.php" class="menu__link"> About Us </a> </li>		
						<li class="m_nav_item menu__item" id="moble_nav_item_4"> <a href="appointment.php" class="menu__link">Appointment  </a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_5"> <a href="Departments.php" class="menu__link">Departments</a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="contact.php" class="menu__link"> Contact </a> </li>
						<?php
                        if(isset($_SESSION['email'])){
                        ?>

                        <li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="myapp.php" class="menu__link"> MY Appointment </a> </li>
                        <li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="logout.php" class="menu__link"> Logout </a> </li>
                        <?php } ?>
                        
					</ul>
				</nav>
