		</div>
	</main>
	<div id="footer-top-area">
		<div class="<?php B::value('container_class'); ?>">
			<footer class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<p>&nbsp;</p>
					</div>
				</div>
				<div class="col-md-2">

				</div>
				<div class="col-md-4">
					<div class="footer-widget">

					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget float-end">

					</div>
				</div>
			</footer>
		</div>
	</div>
	<div id="footer-area">
		<div class="<?php B::value('container_class'); ?>">
			<footer class="row pt-3 pb-1">
				<div class="col-sm-12 text-center">
					<p>&copy; <?php echo date('Y'); ?></p>
				</div>
			</footer>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/js/bootstrap.bundle.min.js"></script>

<?php if (B::value('parallax', 0) == 'yes') { ?>
	<script src="https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js"></script>
<?php } ?>
	<script>
		<?php B::js(); ?>

	</script>
	<?php if (B::value('wp_footer', false) == 'yes') wp_footer(); ?>
</body>
</html>