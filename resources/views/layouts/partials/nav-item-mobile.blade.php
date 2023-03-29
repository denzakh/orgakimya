<div class="pt-2 pb-3 space-y-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" >        
	<a :href="LaravelLocalization::localizeUrl($item['url'])" >
	    {{ __($item['title']) }}
	</a>
</div>