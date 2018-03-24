<?php
	class questionView {
	
		public function render($args = '') {
?>
	<h1 class="wordstripe"><span class="one">unflunk</span><span class="two">me</span></h1>
	<div id="main">
		<div id="question">
			<h1>How do I differentiate x^x?</h1>
			<div>
				<div class="rating">
					<span class="uparrow">v</span>
					3
					<span class="downarrow">v</span>
				</div>
				<p class="description">I understand how derivatives work in general for x^n and n^x, but can
				someone explain to me how to do x^x?</p>
			</div>
			<ul id="answers">
				<li>
					<div class="rating">
						<span class="uparrow">v</span>
						11
						<span class="downarrow">v</span>
					</div>
					<p class="description">
					You need logarithmic differentiation to solve this expression. If you take the natural log of the expression, you get:
					
						ln y = ln (x^x)
					
					which results in
					
						ln y = x ln x
						
					Now, we can differentiate both sides to get:
					
					    1/y * y' = x * (1/x) + ln x
					    
					    y' = y * ( 1 + ln x )  (reduce x * 1/x and multiply both sides by y)
					    
					We know from our first expression (y = x^x) that the following is then true:
					
					    y' = x^x * ( 1 + ln x ) (replace y with x^x)
					    
					We can thus state that the derivative of x^x is
					
					    x^x * ( 1 + ln x )
					
					&block;
					
					This result is interesting because we infer from it that the rate at which it is increasing is faster than the equation itself.
					
					If we calculate the slope of y = x^x between the points x = 2.99 and x = 3, we get:
					
					( 27 - 26.4397 ) / ( 3 - 2.99 ) = 56.0280
					
					But the value of y at 2.99 is only:
					
					2.99 ^ 2.99 = 26.4397
					
					And the value of x^x * ( 1 + ln x )--what we'd anticipate to be the instantaneous slope at 2.99--is:
					
					2.99 ^ 2.99 * ( 1 + ln ( 2.99 ) ) = 55.3984
					
					</p>
				</li>
				<li>
					<div class="rating">
						<span class="uparrow">v</span>
						3
						<span class="downarrow">v</span>
					</div>
					<p class="description">
						Take the logarithmic derivative of both sides. Try this:
						    
						    ln y = ln x^x
						    
						And take the derivative of both sides.
					</p>
				</li>
				<li>
					<div class="rating">
						<span class="uparrow">v</span>
						-1
						<span class="downarrow">v</span>
					</div>
					<p class="description">
						Split it up like this:
						
						    y = x * x^(x-1)
						    
						And then use the product rule. 
					</p>
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