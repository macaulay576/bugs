<footer style="text-align: center;">
	<small class="bugs-version-number">Bugs version: <?php echo  Config::get('tinyissue.version') ?></small>
</footer>
			</div>

		</div> <!-- end content -->
	</div>
</div>

	<a href="javascript:void(0);" class="global-notice <?php echo Session::has('notice-error')? 'global-error' : ''; ?>"><?php echo Session::get('notice', Session::get('notice-error')); ?></a>
	<a href="javascript: void(0);" class="global-saving"><span><?php echo __('tinyissue.saving');?></span></a>

</body>
</html>