<div id="pageWrapper" class="wrapper">

<header id="top" class="topHeader">
	<div class="topHeaderRapper">
	<div id="logo" class="logo">
	<?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print drupal_is_front_page() ? '#' : $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print drupal_is_front_page() ? '#' : $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
    <?php endif; ?>
	</div>
	<div class="mainMenu">
		<ul>
			<li><a href="">about open charity</a></li>
			<li><a href="">the blog</a></li>
			<li class="menuJoin"><a class="last" href="">join us</a></li>
		</ul>
	</div>
	<nav class="navigation"> 
		<?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
        <?php endif; ?>
	</nav>
</div>
</header>

<div id="banner" class="banner">
	<div class="bannerWrapper">
	<h1 class="bannerHeading">sharing idea for charities</h1>
    </div>
    <div class="bannerText">Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</div>
    <div class="bannerText">By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</div>
    <div class="bannerText">Together we can make a bigger difference.</div>
</div>

    <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>

    <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

		<div class="section1 dateSection">
			<div class="dateSectionWrapper">
				<div class="HextEventSection">
					<div class="HextEventSectionDate">
						<span class="nextEvent">Next Event:</span>
						<span class="EventSectionDate">June 23rd 2016  </span>
						<span class="EventSectionTime">18:30 - 21:00 </span>
					</div>
					<div class="HextEventSectionStreet">
						<p>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p>
					</div>
				</div>
				<div class="registerSection">
					<button class="registerBtn">REGISTER</button>
				</div>
			</div>
		</div>

		<div class="section2 getInvolvedSection">
			<div class="getInvolvedSectionWrapper">
				<div class="headingTitlegetInvolved">
					<h2>get involved</h2>
				</div>
				<div class="groupSection">
					    <div class="groupSectionInRapper">
						    <div class="meetupSection sectionWthStyle">
								<div class="meetupLogo"></div>
								<div class="contentMeetup GetInvolvedConent">
									<h2>We Do Meetings</h2>
									<p>We organise our mettings through the OpenCharity MeetUp group</p>
								</div>
								<div class="ButtonMeetup">
									<a href="" class="getInvolvedSectionBtn">meetup group</a>
								</div>
							</div>
						</div>
						<div class="groupSectionInRapper">
						    <div class="slackSection sectionWthStyle">
								<div class="slackLogo"></div>
								<div class="slackMeetup GetInvolvedConent">
									<h2>We Communication</h2>
									<p>OpenCharity have a slack group for daily communication</p>
								</div>
								<div class="ButtonMeetup">
									<a href="" class="getInvolvedSectionBtn">slack group</a>
								</div>
							</div>
						</div>
						<div class="groupSectionInRapper">
						    <div class="wikiSection sectionWthStyle">
								<div class="wikiLogo"></div>
								<div class="wikiMeetup GetInvolvedConent">
									<h2>We Collaboration</h2>
									<p>we have a wiki group set up to share tools and documents</p>
								</div>
								<div class="ButtonMeetup">
									<a href="" class="getInvolvedSectionBtn">wiki group</a>
								</div>
						    </div>
						</div>			
				</div>
			</div>
		</div>

		<div class="section3 missionMember">
			<div class="missionMemberRapper">
				<div class="ourMission">
					<div class="headingTitlegetInvolved">
					<h2>our mission</h2>
					<p>Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space</p>
					<p class="MissionStrong">if you are a charity or a suppier, we are ready to welcome you.</p>
				</div>
				</div>
				<div class="ourMissionSection">
					<div class="MissionRapper">
						<div class="ourMissionSection1 missionSec">
							<div class="missionCircle">
									<div class="missionCircleInner">
										<div class="missionCircleInnerImage1"></div>
									</div>
								</div>
							<div class="missiondiv">
								<div class="missionSecContentTitle">
									<p>We help charities</p>
								</div>
								<div class="missionSecContent">
									<p>share knowledge and working pratice to make the best technology choices.</p>
								</div>
							</div>
						</div>
						<div class="ourMissionSection2 missionSec">
							<div class="missionCircle">
									<div class="missionCircleInner">
										<div class="missionCircleInnerImage2"></div>
									</div>
								</div>
							<div class="missiondiv">
								<div class="missionSecContentTitle">
									<p>We bring together</p>
								</div>
								<div class="missionSecContent">
									<p>charities and suppliers to the charity sector to share the practices.</p>
								</div>
							</div>
						</div>
						<div class="ourMissionSection3 missionSec">
							<div class="missionCircle">
									<div class="missionCircleInner">
										<div class="missionCircleInnerImage3"></div>
									</div>
								</div>
							<div class="missiondiv">
								<div class="missionSecContentTitle">
									<p>We encourage</p>
								</div>
								<div class="missionSecContent">
									<p>collaboration and innovation for the good of the charity sector.</p>
								</div>
							</div>
							</div>
						</div>
					</div>
			</div>	

			<div class="ourMember">
					<div class="ourMemberRapper">
						<div class="headingTitlegetInvolved">
						<h2> our members </h2>
					    </div>
					    <div class="ourMemberLogo">
					    	<div class="MemberLogo">
					    		<div class="logoCancerResearch"></div>
					    	</div>
					    </div>
					    <div class="ourMemberLogo">
					    	<div class="MemberLogo">
					    		<div class="logoCompuporp"></div>
					    	</div>
					    </div>
					    <div class="ourMemberLogo">
					    	<div class="MemberLogo">
					    		<div class="logoKop"></div>
					    	</div>
					    </div>
					    <div class="ourMemberLogo">
					    	<div class="MemberLogo">
					    		<div class="logoZing"></div>
					    	</div>
					    </div>
					    <div class="ourMemberLogo">
					    	<div class="MemberLogo">
					    		<div class="logoComicRelief"></div>
					    	</div>
					    </div>
					</div>
		    </div>
	</div>


<div class="section4 blogSection">

		<div class="BlogsectionWrapper">
			<div class="headingTitlegetInvolved">
					<h2>Blog</h2>
				</div>

			<div class="blogPost">
				<div class="blogPostWrapper">
					<div class="InnerblogPostWrapper">
						<p class="indexBlogPostTitle"><a href="">Online Donation special....</a></p>
						
						<p class="indexBlogPostContent">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
						</p>
						
						<p class="indexBlogPostDate">
							14 Nov 2014
						</p>
					</div>
			    </div>
			</div>

			<div class="blogPost">
				<div class="blogPostWrapper">
					<div class="InnerblogPostWrapper">
						<p class="indexBlogPostTitle"><a href="">Online Donation special....</a></p>
						
						<p class="indexBlogPostContent">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
						</p>
						
						<p class="indexBlogPostDate">
							14 Nov 2014
						</p>
					</div>
			    </div>
			</div>

			<div class="blogPost">
				<div class="blogPostWrapper">
					<div class="InnerblogPostWrapper">
						<p class="indexBlogPostTitle"><a href="">Online Donation special....</a></p>
						
						<p class="indexBlogPostContent">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
						</p>
						
						<p class="indexBlogPostDate">
							14 Nov 2014
						</p>
					</div>
			    </div>
			</div>

			<div class="blogPost">
				<div class="blogPostWrapper">
					<div class="InnerblogPostWrapper">
						<p class="indexBlogPostTitle"><a href="">Online Donation special....</a></p>
						
						<p class="indexBlogPostContent">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
						</p>
						
						<p class="indexBlogPostDate">
							14 Nov 2014
						</p>
					</div>
			    </div>
			</div>
		</div>
	</div>


	<?php if(!$is_front){ ?>
		<article>
				<?php print render($page['content']); ?>
		</article>
	 <?php } ?>

<footer>
	<div class="footerSection">
		<div class="footerWrapper">
			<div class="socialIcon">
				<div class="socialIconWrapper">
					<div class="facebookIcon socialIconlist"><a href="facebook.com">
					</a>
				</div>
					<div class="twitterIcon socialIconlist"><a href=""></a></div>
					<div class="googleplusIcon socialIconlist"><a href=""></a></div>
				</div>
			</div>
			
			<div class="copyrightInfo">
				<p>This site was build as s collaboration between <a href="">Manifesto Digital</a> and<a href=""> Compucorp</a></p>
			</div>
		</div>
	</div>
</footer>
</div>