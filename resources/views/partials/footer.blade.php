<footer class="site-footer">

	<div class="grid-container">

		<div class="grid-x grid-margin-x">

			<div class="cell small-11 medium-4">

				<p><img src="{{ App\asset_path('images/logo.png') }}" alt="" class="footer-logo"></p>
				
				@if ($footer_summary = get_field('footer_summary', 'options'))
					{!! $footer_summary !!}
				@endif
			
			</div>	
	
		</div>
	
	</div>

	<div class="bottom">
		<div class="grid-container">
			<div class="grid-x grid-margin-x align-justify align-center">

				@if ( $copyright = get_field('copyright', 'options') )
					
					<div class="cell shrink">
						{!! $copyright !!}
					</div>
				
				@endif

				<div class="cell shrink">
					
					<div class="socials">
						
						<ul>
							
							@if ( $facebook = get_field('facebook', 'options') )
								<li><a target="_blank" class="facebook" href="{{ $facebook }}"></a></li>
							@endif
							
							@if ( $twitter = get_field('twitter', 'options') )
								<li><a target="_blank" class="twitter" href="{{ $twitter }}"></a></li>
							@endif
							
							@if ( $instagram = get_field('instagram', 'options') )
								<li><a target="_blank" class="instagram" href="{{ $instagram }}"><i class="fab fa-instagram"></i></a></li>
							@endif

						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>

</footer>