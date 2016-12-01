<div class="overlay" id="popupAction">
		<div class="wrapper">
			<div class="close-popup" id="closePopupAction">
				<button class="btn-close">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/></svg>
				</button>
			</div>
			<div class="contents">
				<section id="createLink">
					<form name="createLink">
						<label for="CL_LINK">Masukkan URL Tujuan</label><br>
						<input type="text" name="CL_LINK" class="text-input" value="http://" id="CL_LINK" autocomplete="off"><br>
						<button class="btn-submit" type="submit">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M1.9 9c0-1.16.94-2.1 2.1-2.1h4V5H4C1.79 5 0 6.79 0 9s1.79 4 4 4h4v-1.9H4c-1.16 0-2.1-.94-2.1-2.1zM14 5h-4v1.9h4c1.16 0 2.1.94 2.1 2.1 0 1.16-.94 2.1-2.1 2.1h-4V13h4c2.21 0 4-1.79 4-4s-1.79-4-4-4zm-8 5h6V8H6v2z"/></svg>
							<span>Insert</span>
						</button>
						<div class="clearfix"></div>
					</form>
				</section>
				<section id="createImage">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque non sapiente dolor, accusantium cupiditate autem qui mollitia ducimus quam nisi iste omnis quos, maxime quasi, sequi possimus sed porro aspernatur!
				</section>
			</div>
		</div>
	</div>
	<div id="editor">
		<div class="wrapper">
			<div class="action-wrapper">
				<div class="group-action" name="format">
					<ul class="menu-action">
						<li class="downlist" data-over="Heading" data-collapse="#menuHeading">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 4v3h5.5v12h3V7H19V4z"/></svg>
							</span>
							<ul class="sub-menu-action" id="menuHeading">
								<li action="formatBlock" custom="h1" data-over="H1">
									<h1>H1</h1>
								</li>
								<li action="formatBlock" custom="h2" data-over="H2">
									<h2>H2</h2>
								</li>
								<li action="formatBlock" custom="h3" data-over="H3">
									<h3>H3</h3>
								</li>
								<li action="formatBlock" custom="h4" data-over="H4">
									<h4>H4</h4>
								</li>
								<li action="formatBlock" custom="h5" data-over="H5">
									<h5>H5</h5>
								</li>
								<li action="formatBlock" custom="h6" data-over="H6">
									<h6>H6</h6>
								</li>
							</ul>
						</li>

						<li action="bold" data-over="Bold Text">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M15.6 10.79c.97-.67 1.65-1.77 1.65-2.79 0-2.26-1.75-4-4-4H7v14h7.04c2.09 0 3.71-1.7 3.71-3.79 0-1.52-.86-2.82-2.15-3.42zM10 6.5h3c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-3v-3zm3.5 9H10v-3h3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5z"/></svg>
						</li>
						<li action="underline" data-over="Underline Text">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M12 17c3.31 0 6-2.69 6-6V3h-2.5v8c0 1.93-1.57 3.5-3.5 3.5S8.5 12.93 8.5 11V3H6v8c0 3.31 2.69 6 6 6zm-7 2v2h14v-2H5z"/></svg>
						</li>
						<li action="italic" data-over="Italic Text">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M10 4v3h2.21l-3.42 8H6v3h8v-3h-2.21l3.42-8H18V4z"/></svg>
						</li>
						<li class="downlist" data-over="Text align" data-collapse="#menuTextAlign">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M2 16h10v-2H2v2zM12 6H2v2h10V6zM2 2v2h14V2H2zm0 10h14v-2H2v2z"/></svg>
							</span>
							<ul class="sub-menu-action" id="menuTextAlign">
								<li action="justifyLeft" data-over="Text align Left">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
									    <path d="M15 15H3v2h12v-2zm0-8H3v2h12V7zM3 13h18v-2H3v2zm0 8h18v-2H3v2zM3 3v2h18V3H3z"/>
									    <path d="M0 0h24v24H0z" fill="none"/>
									</svg>
								</li>
								<li action="justifyCenter" data-over="Text align Center">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M4 14v2h10v-2H4zm0-8v2h10V6H4zm-2 6h14v-2H2v2zM2 2v2h14V2H2z"/></svg>
								</li>
								<li action="justifyFull" data-over="Text align Justify">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M2 16h14v-2H2v2zm0-4h14v-2H2v2zM2 2v2h14V2H2zm0 6h14V6H2v2z"/></svg>
								</li>
								<li action="justifyRight" data-over="Text align Right">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M6 16h10v-2H6v2zm-4-4h14v-2H2v2zM2 2v2h14V2H2zm4 6h10V6H6v2z"/></svg>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="group-action" name="insert">
					<ul class="menu-action">
						<li action="createLink" custom="true" data-over="Insert Link">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
							    <path d="M0 0h24v24H0z" fill="none"/>
							    <path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/>
							</svg>
						</li>
						<li action="image" custom="oke" data-over="Insert Image">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="textareas">
				<textarea name="textarea" id="textarea" style="display:none;"></textarea>
				<iframe name="frameEditor" id="frameEditor" style="height:400px; "></iframe>
			</div>
		</div>
	</div>