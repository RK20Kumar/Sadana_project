{{-- nav header code here --}}
<div class="nav-header">
             <a href="{{ route('admin.dashboard') }}" class="brand-logo">
				<svg class="logo-abbr"  width="40" height="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 13.52 9"><defs><style>.cls-1{fill:#eae6e8;}.cls-2{fill:#bbbdc2;}.cls-3{fill:url(#linear-gradient);}.cls-4{fill:url(#linear-gradient-2);}</style><linearGradient id="linear-gradient" x1="8.12" x2="8.12" y2="9" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#01aaee"/><stop offset="1" stop-color="#124799"/></linearGradient><linearGradient id="linear-gradient-2" x1="0" y1="4.5" x2="6.65" y2="4.5" xlink:href="#linear-gradient"/></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="3.97 0 10.51 0 12.27 2.63 13.52 4.5 12.15 6.72 10.74 9 3.97 9 7.32 4.5 3.97 0"/><polygon class="cls-2" points="13.52 4.5 7.32 4.5 3.97 9 10.74 9 13.52 4.5"/><polygon class="cls-3" points="12.15 6.72 10.74 9 3.97 9 7.32 4.5 3.97 0 10.51 0 12.27 2.63 10.44 2.56 9.88 1.45 6.65 1.45 8.97 4.5 6.65 7.8 9.66 7.8 10.44 6.68 12.15 6.72"/><polygon class="cls-4" points="6.65 4.5 3.33 8.96 0 4.5 3.33 0.04 6.65 4.5"/></g></g></svg>
				<div class="brand-title">
                    <svg width="160" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.34 6.37"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M4.76,2h1V1.34s0-.9-.73-.9h-4S0,.44,0,1.32V3s.15.82.88.82H4.7V5.27H1.55A.53.53,0,0,1,1,4.69H0v.72a.87.87,0,0,0,.88.89H4.81a1,1,0,0,0,.9-1V3.75s0-1-.88-1H1V1.46H4.25S4.83,1.46,4.76,2Z"/><path class="cls-1" d="M10.51,1.61H6.59v1H10a.27.27,0,0,1,.24.3v.54H6.59v2s.07.83.76.83h4V2.44S11.2,1.61,10.51,1.61ZM10.3,5.2H7.76V4.39H10.3Z"/><path class="cls-1" d="M27.35,1.46H23.43v1h3.42a.27.27,0,0,1,.24.3v.55H23.43v2s.07.83.77.83h4V2.29S28.05,1.46,27.35,1.46Zm-.21,3.6H24.6V4.25h2.54Z"/><path class="cls-1" d="M38.48,1.61H34.56v1H38a.27.27,0,0,1,.24.3v.54H34.56v2s.07.83.77.83h4V2.44S39.18,1.61,38.48,1.61ZM38.27,5.2H35.73V4.39h2.54Z"/><rect class="cls-1" x="7.03" width="3.72" height="0.74"/><path class="cls-1" d="M15.89,0V1.54l-3,.07c-.53.07-.63.82-.63.82V5.49c0,.59.88.88.88.88L17,6.3V0Zm-.05,5.15H13.33V2.64h2.51Z"/><path class="cls-1" d="M18.89,0h-1V6.15h1V2.64h2.64l0,3.51h1.08V2.46s0-1-.91-1H18.89Z"/><path class="cls-1" d="M29,1.46V6.15h1.12V2.54l2.18,0s.44,0,.44.3V6.3h1.1l-.07-3.74s0-1-.87-1.1Z"/></g></g></svg>
				</div>
            </a>


            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
					</svg>
                </div>
            </div>
        </div>
		{{-- nav header end --}}


		{{-- chat box start --}}

		{{-- chat box end --}}


	{{-- Header start --}}

<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                            {{--  display currunt route
                            <div class="dashboard_bar">
                                {{ Request::path() }}
                            </div>  --}}

							<div class="dashboard_bar">
								{{ basename(Request::path()) }}
							</div>

                        </div>
                        <ul class="navbar-nav header-right">
						<li class="nav-item dropdown notification_dropdown all">
							<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
								<svg height="24" class="svg-main-icon" viewBox="0 0 32 32" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><clipPath id="clip_1"><path id="artboard_1" clip-rule="evenodd" d="m0 0h32v32h-32z"/></clipPath><g id="select" clip-path="url(#clip_1)"><path id="Vector" d="m4.70222 7.16834-.12871-.2574c-.0593-.11861-.13904-.22136-.23922-.30824-.10018-.08689-.21317-.1513-.33898-.19323-.1258-.04194-.25484-.0582-.38711-.0488-.13228.0094-.25772.04375-.37633.10306-.24699.12349-.41414.31622-.50147.5782-.08732.26197-.06923.51645.05426.76344l1.32093 2.64183c.0593.1186.13904.2214.23922.3083.10018.0868.21317.1512.33898.1932.1258.0419.25484.0582.38711.0488.13228-.0094.25772-.0438.37633-.1031.01854-.0092.03678-.0191.05471-.0295s.03552-.0214.05277-.0329l5.99999-3.99995c.1104-.07356.2024-.16543.2762-.27561s.1237-.23029.1497-.36032c.026-.13004.0261-.2601.0004-.39019-.0257-.13008-.0754-.25029-.1489-.36063-.1532-.22977-.3652-.37173-.636-.42588-.2707-.05416-.521-.00465-.7508.14853l-1.94316 1.29545-3.1143 2.07619zm11.29778-1.16834c-.2761 0-.5118.09763-.7071.29289s-.2929.43097-.2929.70711.0976.51184.2929.70711c.1953.19526.431.29289.7071.29289h14c.2761 0 .5118-.09763.7071-.29289.1953-.19527.2929-.43097.2929-.70711s-.0976-.51185-.2929-.70711-.431-.29289-.7071-.29289zm-11.27691 9.1683-.12871-.2574c-.12349-.2469-.31622-.4141-.5782-.5014-.26197-.0874-.51645-.0693-.76344.0542-.11861.0593-.22135.1391-.30824.2393-.08688.1001-.15129.2131-.19323.3389-.04193.1258-.0582.2549-.0488.3871.0094.1323.04376.2578.10306.3764l1.32092 2.6418c.1235.247.31623.4142.5782.5015.26198.0873.51646.0692.76345-.0543.01854-.0092.03678-.0191.05471-.0295s.03552-.0214.05277-.0329l6.00002-3.9999c.2298-.1532.3717-.3652.4259-.636.0541-.2708.0046-.521-.1486-.7508-.1531-.2298-.3651-.3717-.6359-.4259-.2708-.0541-.521-.0046-.7508.1485l-5.05749 3.3717zm11.27691-.1683c-.2761 0-.5118.0976-.7071.2929s-.2929.431-.2929.7071.0976.5118.2929.7071.431.2929.7071.2929h14c.2761 0 .5118-.0976.7071-.2929s.2929-.431.2929-.7071-.0976-.5118-.2929-.7071-.431-.2929-.7071-.2929zm-11.27691 8.1683-.12871-.2574c-.12349-.247-.31622-.4141-.5782-.5014-.26197-.0874-.51645-.0693-.76344.0542-.11861.0593-.22135.1391-.30824.2393-.08688.1001-.15129.2131-.19323.3389-.04193.1258-.0582.2549-.0488.3871.0094.1323.04376.2578.10306.3764l1.32092 2.6418c.1235.247.31623.4142.5782.5015.26198.0873.51646.0692.76345-.0543.01854-.0092.03678-.0191.05471-.0295s.03552-.0214.05277-.0329l6.00002-4c.1103-.0735.2024-.1654.2762-.2756.0738-.1101.1237-.2303.1497-.3603s.0261-.2601.0004-.3902c-.0258-.1301-.0754-.2503-.149-.3606-.1531-.2298-.3651-.3717-.6359-.4259-.2708-.0541-.521-.0046-.7508.1485l-1.94319 1.2955-3.1143 2.0762zm11.27691.8317c-.2761 0-.5118.0976-.7071.2929s-.2929.431-.2929.7071.0976.5118.2929.7071.431.2929.7071.2929h14c.2761 0 .5118-.0976.7071-.2929s.2929-.431.2929-.7071-.0976-.5118-.2929-.7071-.431-.2929-.7071-.2929z" fill-rule="evenodd"/></g></svg>
							</a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="card mb-0">
										<div class="card-header border-0 d-block h-auto">
											<ul class="d-flex align-items-center justify-content-around">
												<li class="nav-item dropdown notification_dropdown">
												  <a class="nav-link  menu-wallet" href="javascript:void(0);">
															<svg id="Layer_1" enable-background="new 0 0 512 512" height="18" viewBox="0 0 512 512" width="18" xmlns="http://www.w3.org/2000/svg"><g><path d="m174 240h-108c-36.393 0-66-29.607-66-66v-108c0-36.393 29.607-66 66-66h108c36.393 0 66 29.607 66 66v108c0 36.393-29.607 66-66 66zm-108-208c-18.748 0-34 15.252-34 34v108c0 18.748 15.252 34 34 34h108c18.748 0 34-15.252 34-34v-108c0-18.748-15.252-34-34-34z"/><path d="m446 240h-108c-36.393 0-66-29.607-66-66v-108c0-36.393 29.607-66 66-66h108c36.393 0 66 29.607 66 66v108c0 36.393-29.607 66-66 66zm-108-208c-18.748 0-34 15.252-34 34v108c0 18.748 15.252 34 34 34h108c18.748 0 34-15.252 34-34v-108c0-18.748-15.252-34-34-34z"/><path d="m392 512c-66.168 0-120-53.832-120-120s53.832-120 120-120 120 53.832 120 120-53.832 120-120 120zm0-208c-48.523 0-88 39.477-88 88s39.477 88 88 88 88-39.477 88-88-39.477-88-88-88z"/><path d="m174 512h-108c-36.393 0-66-29.607-66-66v-108c0-36.393 29.607-66 66-66h108c36.393 0 66 29.607 66 66v108c0 36.393-29.607 66-66 66zm-108-208c-18.748 0-34 15.252-34 34v108c0 18.748 15.252 34 34 34h108c18.748 0 34-15.252 34-34v-108c0-18.748-15.252-34-34-34z"/></g></svg>
												  </a>
												</li>
												<li class="nav-item dropdown notification_dropdown">
												  <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
															<svg id="icon-light" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
													<svg id="icon-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
												  </a>
												</li>
												<li class="nav-item dropdown notification_dropdown">
												  <a class="nav-link bell dz-fullscreen"  href="javascript:void(0);">
													 <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
													 <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="A098AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
												  </a>
												</li>

											</ul>
										</div>
									</div>

								</div>
						</li>
							<li class="nav-item dropdown notification_dropdown search-area-header">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M27.6 25.8L22 20.2C23.3 18.5 24.1 16.4 24.1 14.1C24.1 8.60001 19.6 4.10001 14.1 4.10001C8.6 4.10001 4 8.60001 4 14.1C4 19.6 8.5 24.1 14 24.1C16.3 24.1 18.5 23.3 20.2 21.9L25.8 27.5C26 27.7 26.4 27.9 26.7 27.9C27 27.9 27.3 27.8 27.6 27.5C28.1 27.1 28.1 26.3 27.6 25.8ZM6.5 14.1C6.5 10 9.9 6.60001 14 6.60001C18.1 6.60001 21.5 10 21.5 14.1C21.5 18.2 18.1 21.6 14 21.6C9.9 21.6 6.5 18.3 6.5 14.1Z" fill="#A098AE"/>
									</svg>

								</a>
								<div class="dropdown-menu dropdown-menu-end p-0 rounded">
									<div class="card mb-0">
										<div class="card-body px-0">
											<div class="px-3">
												<div class="input-group search-area w-100">
													<input type="text" class="form-control" placeholder="Search here...">
													<span class="input-group-text"><a href="javascript:void(0)">
														<svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z" fill="#01A3FF"></path>
														</svg>
													</a></span>
												</div>
													<h6 class="my-2 mt-3">Recently Searched:</h6>
											</div>
											<div class="dlab-scroll px-3 mt-3 height300">
												<ul class="d-flex align-items-center mb-3">
													<li>
														<img src="../images/avatar/1.jpg" class="avatar avatar-sm" alt="">
														<a href="javascript:void(0);" class="ms-2">Benjamin</a>

													</li>
													<li class="ms-auto"><i class="fa-solid fa-trash"></i></li>
												</ul>
												<ul class="d-flex align-items-center mb-3">
													<li>
														<img src="../images/avatar/2.jpg" class="avatar avatar-sm" alt="">
														<a href="javascript:void(0);" class="ms-2">Oliver</a>
													</li>
													<li class="ms-auto"><i class="fa-solid fa-trash"></i></li>
												</ul>
												<ul class="d-flex align-items-center mb-3">
													<li>
														<img src="../images/avatar/1.jpg" class="avatar avatar-sm" alt="">
														<a href="javascript:void(0);" class="ms-2">Lucas</a>

													</li>
													<li class="ms-auto"><i class="fa-solid fa-trash"></i></li>
												</ul>
												<ul class="d-flex align-items-center mb-3">
													<li>
														<img src="../images/avatar/2.jpg" class="avatar avatar-sm" alt="">
														<a href="javascript:void(0);" class="ms-2">Benjamin</a>

													</li>
													<li class="ms-auto"><i class="fa-solid fa-trash"></i></li>
												</ul>
												<ul class="d-flex align-items-center mb-3">
													<li>
														<img src="../images/avatar/4.jpg" class="avatar avatar-sm" alt="">
														<a href="javascript:void(0);" class="ms-2">Benjamin</a>

													</li>
													<li class="ms-auto"><i class="fa-solid fa-trash"></i></li>
												</ul>
												<ul class="d-flex align-items-center mb-3">
													<li>
														<img src="../images/avatar/3.jpg" class="avatar avatar-sm" alt="">
														<a href="javascript:void(0);" class="ms-2">Benjamin</a>

													</li>
													<li class="ms-auto"><i class="fa-solid fa-trash"></i></li>
												</ul>
												<ul class="d-flex align-items-center mb-3">
													<li>
														<img src="../images/avatar/2.jpg" class="avatar avatar-sm" alt="">
														<a href="javascript:void(0);" class="ms-2">Benjamin</a>

													</li>
													<li class="ms-auto"><i class="fa-solid fa-trash"></i></li>
												</ul>
												<ul class="d-flex align-items-center mb-3">
													<li>
														<img src="../images/avatar/1.jpg" class="avatar avatar-sm" alt="">
														<a href="javascript:void(0);" class="ms-2">Benjamin</a>

													</li>
													<li class="ms-auto"><i class="fa-solid fa-trash"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
									<i id="icon-light-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg></i>
                                    <i id="icon-dark-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></i>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-fullscreen"  href="javascript:void(0);">
                                    <svg id="icon-full-1" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                    <svg id="icon-minimize-1" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="A098AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                </a>
							</li>


							<li class="nav-item bell-icon blink dropdown notification_dropdown">
                                <a class="nav-link  " href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<svg width="20" height="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M25.3677 18.9391V9.86768C25.3677 4.70215 21.1655 0.5 16 0.5C10.8345 0.5 6.63232 4.70215 6.63232 9.86768V18.9397C4.96704 19.4224 3.73828 20.9544 3.73828 22.8374C3.73828 25.0386 5.5293 26.8296 7.73096 26.8296H11.377V26.877C11.377 29.4263 13.4507 31.5 16 31.5C18.5493 31.5 20.6231 29.4263 20.6231 26.8769V26.8296H24.2691C26.4707 26.8296 28.2617 25.0386 28.2617 22.7583C28.2617 20.9406 27.033 19.4198 25.3677 18.9391ZM9.63232 9.86768C9.63232 6.35645 12.4888 3.5 16 3.5C19.5112 3.5 22.3677 6.35645 22.3677 9.86768V18.7661H9.63232V9.86768ZM17.6231 26.8769C17.6231 27.772 16.895 28.5 16 28.5C15.105 28.5 14.377 27.772 14.377 26.8769V26.8296H17.623V26.8769H17.6231ZM24.269 23.8296H7.73096C7.1836 23.8296 6.73828 23.3843 6.73828 22.7583C6.73828 22.2114 7.18359 21.7661 7.73096 21.7661H24.2691C24.8164 21.7661 25.2617 22.2114 25.2617 22.8374C25.2617 23.3843 24.8164 23.8296 24.269 23.8296Z" fill="#A098AE"/>
								</svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end of-visible">
									<div class="dropdown-header">
										<h4 class="title mb-0">Announcement</h4>
										<a href="javascript:void(0);" class="d-none"><i class="flaticon-381-settings-6"></i></a>
									</div>
                                    <div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3" style="height:380px;">
										<ul class="timeline">
											{{-- show announcement notification --}}
											<li>
                                                @foreach ($announcements->reverse() as $announcement)
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" wideth="50" src="{{ asset('images/avatar/speaker.png') }}">
													</div>
													<div class="media-body">
														{{-- <h6 class="mb-1">Dr sultads Send you Photo</h6> --}}
                                                        <h6 class="mb-1">Title : <strong class="text-primary">{{ $announcement->title }}</strong></h6>
														<small class="d-block">{{ $announcement->created_at }}</small>
                                                        <div><br></div>
													</div>
												</div>
                                                @endforeach
											</li>

										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                                </div>
                            </li>

							<li class="nav-item">
								<div class="dropdown header-profile2">
									<a class="nav-link ms-0" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="header-info2 d-flex align-items-center">
											<div class="d-flex align-items-center sidebar-info">

											</div>
											{{--  <img src="{{asset('images/user.jpg')}}" class="ms-0" alt="">  --}}
											@if (Auth::user()->user_profile_photo)
												<img src="{{ asset('user_profile_photos/' . Auth::user()->user_profile_photo) }}" alt="Profile Picture">
											@else
												<img src="{{ asset('images/user.jpg') }}" alt="Profile Picture">
											@endif
											{{--  {{ Auth::user()->name }} <span class="caret"></span>  --}}

											{{--  <img src="{{ asset('user_profile_photos/' . Auth::user()->user_profile_photo) }}" alt="">  --}}
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end pb-0" style="">
										<div class="card mb-0">
											<div class="card-header p-3">
												<ul class="d-flex align-items-center">
													<li>
														{{--  <img src="{{asset('images/user.jpg')}}" class="ms-0" alt="">  --}}
														@if (Auth::user()->user_profile_photo)
															<img src="{{ asset('user_profile_photos/' . Auth::user()->user_profile_photo) }}" alt="Profile Picture">
														@else
															<img src="{{ asset('images/user.jpg') }}" alt="Profile Picture">
														@endif
														{{--  {{ Auth::user()->name }} <span class="caret"></span>  --}}
													</li>
													<li class="ms-2">
														<h4 class="mb-0">{{ Auth::user()->name }} <span class="caret"></span></h4>

														<span>{{-- show currunt login person-admin/manager/operator --}}
															@if (auth()->check())
																<span>Hi, {{ auth()->user()->name }}</span>
															@endif
														</span>

													</li>
												</ul>

											</div>

											{{-- {{ route('profile.show') }}   --}}
											<div class="card-body p-3">
												<a href="{{ route('dashboard.user.profile.show') }}" class="dropdown-item ai-icon ">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24"/>
															<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="var(--primary)" fill-rule="nonzero"/>
														</g>
													</svg>
													<span class="ms-2">Profile </span>
												</a>

												<a href="{{ route('dashboard.announcement.home') }}" class="dropdown-item ai-icon ">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
															<circle fill="var(--primary)" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
														</g>
													</svg>
													<span class="ms-2">Announcement </span>
												</a>
												{{--  <a href="javascript:void(0);" class="dropdown-item ai-icon ">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
														</g>
													</svg>
													<span class="ms-2">Settings </span>
												</a>  --}}

											</div>
											<div class="card-footer text-center p-3">


													{{-- Logout button code here --}}
													<form method="POST" action="{{ route('logout') }}" style="display: inline;">
														@csrf
														<button type="submit" class="dropdown-item ai-icon btn btn-primary light" onclick="event.preventDefault(); this.closest('form').submit();">
															{{ __('Log Out') }}
														</button>
													</form>




												</a>

											</div>
										</div>
									</div>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>

		</div>

		{{-- Header end --}}
