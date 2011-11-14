<?php
/**
 * @package WordPress
 * @subpackage Beach
 */
?>
		<div id="sidebar" class="widget-area" role="complementary">
			<div id="accordion">
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
					<ul>
						<?php wp_register(); ?>
						<aside><?php wp_loginout(); ?></aside>
						<?php wp_meta(); ?>
					</ul>
			</div>

		</div><!-- #secondary .widget-area -->
