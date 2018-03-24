<?php
	class searchView {
		public function render($args = '') {
?>
	<h1 class="wordstripe"><span class="one">unflunk</span><span class="two">me</span></h1>
	<div id="main">
		<div id="searchresults">
			<div id="search" style="text-align: center; margin-top: 30px">
				<form id="searchForm" method="get">
					<input id="query" size="60" name="q"/>
					<input name="type" type="hidden" value="instant"/>
					<div id="dosearch" class="button" onclick="document.getElementsByName('type')[0].value = 'search'; searchForm.submit()">Search</div>
				</form>
			</div>	
			<ul>
				<li class="header">
					1-3 of 3 results
				</li>
				<li>
					<div class="stats">
						<div class="answers">
							<span class="count">3</span> answers
						</div>
						<div class="comments">
							<span class="count">4</span> comments
						</div>
					</div>
					<p><a href="/index.php/question/1234">How do I differentiate x<sup>x</sup>?</a></p>
					<p>I understand the basic rules of differentiation as well as the chain rule, but I can't
					seem to...</p>
				</li>
				<li>
					<div class="stats">
						<div class="answers">
							<span class="count">3</span> answers
						</div>
						<div class="comments">
							<span class="count">4</span> comments
						</div>
					</div>			
					<p><a href="/index.php/question/1235">How do I differentiate x<sup>2</sup>?</a></p>
					<p>I understand the basic rules of differentiation as well as the chain rule, but I can't
					seem to...</p>
				</li>
				<li>
					<div class="stats">
						<div class="answers">
							<span class="count">3</span> answers
						</div>
						<div class="comments">
							<span class="count">4</span> comments
						</div>
					</div>			
					<p><a href="/index.php/question/1236">How do I differentiate? Show work.</a></p>
					<p>I understand the basic rules of differentiation as well as the chain rule, but I can't
					seem to...</p>
				</li>
			</ul>
		</div>
		<ul id="menu">
			<li>
				<ul class="menuitem">
					<li class="first">Trending Tags</li>
					<li><a href="/index.php/search?tag=calculus" class="tag">calculus</a></li>
					<li><a href="/index.php/search?tag=algebra" class="tag">algebra</a></li>
					<li><a href="/index.php/search?tag=fractions" class="tag">fractions</a></li>
					<li><a href="/index.php/search?tag=pdes" class="tag">pdes</a></li>
				</ul>
			</li>
			<li>
				<ul class="menuitem">
					<li class="first">Top Contributors</li>
					<li><a href="/index.php/search?c=jzheaux" class="tag">jzheaux</a></li>
					<li><a href="/index.php/search?c=kristi" class="tag">kristi</a></li>
					<li><a href="/index.php/search?c=paul" class="tag">paul</a></li>
					<li><a href="/index.php/search?c=karen" class="tag">karen</a></li>
				</ul>
			</li>
			<li>
				<ul class="menuitem">
					<li class="first">Top Questions</li>
					<li><a href="/index.php/question/1234" class="tag">Prove that the square root of 2 is irrational.</a></li>
					<li><a href="/index.php/question/2345" class="tag">Name real-world applications for fractions.</a></li>
					<li><a href="/index.php/question/3456" class="tag">How to derive the solution for a cubic equation.</a></li>
					<li><a href="/index.php/question/4567" class="tag">What is the best algorithm for calculating digits of pi?</a></li>
				</ul>
			</li>
			
		</ul>
	</div>
<?php
		}
	}
?>