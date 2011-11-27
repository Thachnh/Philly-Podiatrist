<?php
/**
 * @package WordPress
 * @subpackage Beach
 */
?>
		<div id="sidebar" class="widget-area" role="complementary">
			<div id="accordion" style="display: none">
				<h1 class="widget-title"><a href="#">Section 1</a></h1>
				<div>
					<ul>
						<li>List item one</li>
						<li>List item two</li>
						<li>List item three</li>
					</ul>
				</div>
				<h1 class="widget-title"><a href="#">Section 2</a></h1>
				<div>
					<ul>
						<li>List item one</li>
						<li>List item two</li>
						<li>List item three</li>
					</ul>
				</div>
				<h1 class="widget-title"><a href="#">Section 3</a></h1>
				<div>
					<ul>
						<li>List item one</li>
						<li>List item two</li>
						<li>List item three</li>
					</ul>
				</div>
			</div>  
			<?php wp_nav_menu( array( 'container_class' => 'sidebar-wrapper', 'theme_location' => 'secondary' ) ); ?>
		</div><!-- #secondary .widget-area -->
