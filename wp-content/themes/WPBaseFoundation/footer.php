<?php wp_footer(); ?>
<div class="footer-upper">
	<div class="row">
		<div class="large-12 columns">
			<h3 class="footer-upper-action">I am currently accepting new work. <span class="project-inquiry-container">Tell me about your project</span></h3>
		</div>
			<div class="footer-upper-contact">
				<div class="project-inquiry">
					<?php echo do_shortcode('[contact-form-7 id="66" title="Project Inquiry"]'); ?>
					<div class="project-inquiry-container right"><span class="icon-cross"></span> Close</div>
				</div>
			</div>
	</div>
</div>
<footer class="footer">
	<div class="footer-social">
		<ul>
			<li>
				<a href="https://twitter.com/chrispaulallen" class="icon-twitter" target="_blank">
					<span class="hide-text">Twitter</span>
				</a>
			</li>
			<li>
				<a href="https://www.linkedin.com/in/chrispaulallen/" class="icon-linkedin" target="_blank">
					<span class="hide-text">LinkedIn</span>
				</a>
			</li>
			<li>
				<a href="https://github.com/Christopherallen" class="icon-github" target="_blank">
					<span class="hide-text">Github</span>
				</a>
			</li>
			<li>
				<a href="mailto:chris@cpallen.com" class="icon-mail" target="_blank">
					<span class="hide-text">Email Me</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="footer-copy">
		<p class="copywrite"><?php echo date('Y');?> &copy; Chris Allen All Rights Reserved | <a href="site-map">Site Map <?php if( get_field('resume', 'options') ): ?> | <a href="<?php the_field('resume', 'options'); ?>" target="_blank">Resume</a><?php endif; ?></p>
	</div>
</footer>
<script type="text/javascript">
    $(document).foundation();
</script>

</body>

</html>
