<template>
	<div>
		<NavComponent></NavComponent>

    	<SidebarComponent></SidebarComponent>

		<div class="content-wrapper" style="min-height: 1135.8px;">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1>
			User Profile
		  </h1>
		</section>

		<!-- Main content -->
		<section class="content">

		  <div class="row">
			<div class="col-md-3">

			  <!-- Profile Image -->
			  <div class="box box-primary">
				<div class="box-body box-profile">

				<a href="#test-popup" class="open-popup-link">
					<img class="profile-user-img img-responsive img-circle" :src="'storage/' + this.$store.state.currentUser.avatar" alt="User profile picture">
				</a>

				  <h3 class="profile-username text-center">{{this.$store.state.currentUser.name}}</h3>

				  <p class="text-muted text-center">{{this.$store.state.currentUser.email}}</p>

				  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-9">
			  <div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
				  <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
				  <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
				  <li><a href="#settings" data-toggle="tab">Settings</a></li>
				</ul>
				<div class="tab-content">
				  <div class="active tab-pane" id="activity">
					<!-- Post -->
					<div class="post">
					  <div class="user-block">
						
							<span class="username">
							  <a href="#">Jonathan Burke Jr.</a>
							  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
							</span>
						<span class="description">Shared publicly - 7:30 PM today</span>
					  </div>
					  <!-- /.user-block -->
					  <p>
						Lorem ipsum represents a long-held tradition for designers,
						typographers and the like. Some people hate it and argue for
						its demise, but others ignore the hate as they create awesome
						tools to help create filler text for everyone from bacon lovers
						to Charlie Sheen fans.
					  </p>
					  <ul class="list-inline">
						<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
						<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
						</li>
						<li class="pull-right">
						  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
							(5)</a></li>
					  </ul>

					  <input class="form-control input-sm" type="text" placeholder="Type a comment">
					</div>
					<!-- /.post -->

					<!-- Post -->
				  </div>
				  <!-- /.tab-pane -->
				  <div class="tab-pane" id="timeline">
					<!-- The timeline -->
					<ul class="timeline timeline-inverse">
					  <!-- timeline time label -->
					  <li class="time-label">
							<span class="bg-red">
							  10 Feb. 2014
							</span>
					  </li>
					  <!-- /.timeline-label -->
					  <!-- timeline item -->
					  <li>
						<i class="fa fa-envelope bg-blue"></i>

						<div class="timeline-item">
						  <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

						  <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

						  <div class="timeline-body">
							Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
							weebly ning heekya handango imeem plugg dopplr jibjab, movity
							jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
							quora plaxo ideeli hulu weebly balihoo...
						  </div>
						  <div class="timeline-footer">
							<a class="btn btn-primary btn-xs">Read more</a>
							<a class="btn btn-danger btn-xs">Delete</a>
						  </div>
						</div>
					  </li>
					  <!-- END timeline item -->
					  <!-- timeline item -->
					 
					  <!-- END timeline item -->
					  <!-- timeline item -->
					  <li>
						<i class="fa fa-comments bg-yellow"></i>

						<div class="timeline-item">
						  <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

						  <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

						  <div class="timeline-body">
							Take me to your leader!
							Switzerland is small and neutral!
							We are more like Germany, ambitious and misunderstood!
						  </div>
						  <div class="timeline-footer">
							<a class="btn btn-warning btn-flat btn-xs">View comment</a>
						  </div>
						</div>
					  </li>
					  <!-- END timeline item -->
					  <!-- timeline time label -->
					  <li class="time-label">
							<span class="bg-green">
							  3 Jan. 2014
							</span>
					  </li>
					  <!-- /.timeline-label -->
					  <!-- timeline item -->
					  <li>
						<i class="fa fa-camera bg-purple"></i>

						<div class="timeline-item">
						  <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

						  <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

						  <div class="timeline-body">
							<img src="http://placehold.it/150x100" alt="..." class="margin">
							<img src="http://placehold.it/150x100" alt="..." class="margin">
							<img src="http://placehold.it/150x100" alt="..." class="margin">
							<img src="http://placehold.it/150x100" alt="..." class="margin">
						  </div>
						</div>
					  </li>
					  <!-- END timeline item -->
					  <li>
						<i class="fa fa-clock-o bg-gray"></i>
					  </li>
					</ul>
				  </div>
				  <!-- /.tab-pane -->

				  <div class="tab-pane" id="settings">
					<form class="form-horizontal">
					  <div class="form-group">
						<label for="inputName" class="col-sm-2 control-label">Name</label>

						<div class="col-sm-10">
						  <input type="email" class="form-control" id="inputName" placeholder="Name">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputEmail" class="col-sm-2 control-label">Email</label>

						<div class="col-sm-10">
						  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputExperience" class="col-sm-2 control-label">Experience</label>

						<div class="col-sm-10">
						  <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputSkills" class="col-sm-2 control-label">Skills</label>

						<div class="col-sm-10">
						  <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label>
							  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
							</label>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" class="btn btn-danger">Submit</button>
						</div>
					  </div>
					</form>
				  </div>
				  <!-- /.tab-pane -->
				</div>
				<!-- /.tab-content -->
			  </div>
			  <!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>

	  	<div id="test-popup" class="white-popup mfp-hide">
	  		<section class="content">
	  		<div class="row">
	  		<div class="col-md-6 white-popup__content">
		  		<div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Quick Example</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            <form v-on:submit.prevent role="form" method="POST" enctype="multipart/form-data">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="exampleInputFile">File input</label>
	                  <input type="file" ref="file" id="exampleInputFile">

	                  <p class="help-block">Example block-level help text here.</p>
	                </div>
	              </div>
	              <!-- /.box-body -->

	              <div class="box-footer">
	                <button @click="this.uploadFile" type="submit" class="btn btn-primary">Submit</button>
	              </div>
	            </form>
	          </div>
	          </div>
	        </div><!-- row -->
      		</section>
		</div><!-- white-popup -->
	</div>
</template>

<script>
	import axios from 'axios';
	import $ from 'jquery';
	import magnificPopup from 'magnific-popup';
	import NavComponent from './NavComponent.vue';
    import SidebarComponent from './SidebarComponent.vue';

	export default {
		data () {
				return {
					userName: '',
					users: [],
					file: '',
					formData: new FormData(),
					user: ''
			}
		},
		mounted: function () {
		    $('.open-popup-link').magnificPopup({
			  type:'inline',
			  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
			});
		},
		methods: {
        	uploadFile: function(){

				this.file = this.$refs.file.files[0];
				
				this.formData.append('file', this.file);

				this.formData.append('test', 'dsadasd');

				this.formData.append('_method', 'PATCH');

				axios({
					method: 'post',
					url: 'update-user/image',
					data: this.formData
				}).then((response) =>{
					this.user = response.data.user;
					this.$store.dispatch('getCurrentUser');
				});

			}, 
        },
		components: {
            NavComponent,
            SidebarComponent
        }
	}
</script>

<style type="text/css">
.white-popup { 
	max-width: 40%; 
	margin: 0 auto; 
	background-color: #f8f9fa; 
}

.white-popup .row {
	padding: 30px;
}

.white-popup .white-popup__content {
	max-width: 100%;
	width: 100%;
	margin: 0;
}


	/* Magnific Popup CSS */

.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1042;
  overflow: hidden;
  position: fixed;
  background: #0b0b0b;
  opacity: 0.8; }

.mfp-wrap {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1043;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden; }

.mfp-container {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 8px;
  box-sizing: border-box; }

.mfp-container:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle; }

.mfp-align-top .mfp-container:before {
  display: none; }

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 1045; }

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
  width: 100%;
  cursor: auto; }

.mfp-ajax-cur {
  cursor: progress; }

.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
  cursor: -moz-zoom-out;
  cursor: -webkit-zoom-out;
  cursor: zoom-out; }

.mfp-zoom {
  cursor: pointer;
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.mfp-auto-cursor .mfp-content {
  cursor: auto; }

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none; }

.mfp-loading.mfp-figure {
  display: none; }

.mfp-hide {
  display: none !important; }

.mfp-preloader {
  color: #CCC;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 1044; }
  .mfp-preloader a {
    color: #CCC; }
    .mfp-preloader a:hover {
      color: #FFF; }

.mfp-s-ready .mfp-preloader {
  display: none; }

.mfp-s-error .mfp-content {
  display: none; }

button.mfp-close,
button.mfp-arrow {
  overflow: visible;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
  display: block;
  outline: none;
  padding: 0;
  z-index: 1046;
  box-shadow: none;
  touch-action: manipulation; }

button::-moz-focus-inner {
  padding: 0;
  border: 0; }

.mfp-close {
  width: 44px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  right: 0;
  top: 0;
  text-decoration: none;
  text-align: center;
  opacity: 0.65;
  padding: 0 0 18px 10px;
  color: #FFF;
  font-style: normal;
  font-size: 28px;
  font-family: Arial, Baskerville, monospace; }
  .mfp-close:hover,
  .mfp-close:focus {
    opacity: 1; }
  .mfp-close:active {
    top: 1px; }

.mfp-close-btn-in .mfp-close {
  color: #333; }

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
  color: #FFF;
  right: -6px;
  text-align: right;
  padding-right: 6px;
  width: 100%; }

.mfp-counter {
  position: absolute;
  top: 0;
  right: 0;
  color: #CCC;
  font-size: 12px;
  line-height: 18px;
  white-space: nowrap; }

.mfp-arrow {
  position: absolute;
  opacity: 0.65;
  margin: 0;
  top: 50%;
  margin-top: -55px;
  padding: 0;
  width: 90px;
  height: 110px;
  -webkit-tap-highlight-color: transparent; }
  .mfp-arrow:active {
    margin-top: -54px; }
  .mfp-arrow:hover,
  .mfp-arrow:focus {
    opacity: 1; }
  .mfp-arrow:before,
  .mfp-arrow:after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: medium inset transparent; }
  .mfp-arrow:after {
    border-top-width: 13px;
    border-bottom-width: 13px;
    top: 8px; }
  .mfp-arrow:before {
    border-top-width: 21px;
    border-bottom-width: 21px;
    opacity: 0.7; }

.mfp-arrow-left {
  left: 0; }
  .mfp-arrow-left:after {
    border-right: 17px solid #FFF;
    margin-left: 31px; }
  .mfp-arrow-left:before {
    margin-left: 25px;
    border-right: 27px solid #3F3F3F; }

.mfp-arrow-right {
  right: 0; }
  .mfp-arrow-right:after {
    border-left: 17px solid #FFF;
    margin-left: 39px; }
  .mfp-arrow-right:before {
    border-left: 27px solid #3F3F3F; }

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px; }
  .mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px; }
  .mfp-iframe-holder .mfp-close {
    top: -40px; }

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%; }
  .mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #000; }

/* Main image in popup */
img.mfp-img {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  box-sizing: border-box;
  padding: 40px 0 40px;
  margin: 0 auto; }

/* The shadow behind the image */
.mfp-figure {
  line-height: 0; }
  .mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #444; }
  .mfp-figure small {
    color: #BDBDBD;
    display: block;
    font-size: 12px;
    line-height: 14px; }
  .mfp-figure figure {
    margin: 0; }

.mfp-bottom-bar {
  margin-top: -36px;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  cursor: auto; }

.mfp-title {
  text-align: left;
  line-height: 18px;
  color: #F3F3F3;
  word-wrap: break-word;
  padding-right: 36px; }

.mfp-image-holder .mfp-content {
  max-width: 100%; }

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer; }

@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  /**
       * Remove all paddings around the image on small screen
       */
  .mfp-img-mobile .mfp-image-holder {
    padding-left: 0;
    padding-right: 0; }
  .mfp-img-mobile img.mfp-img {
    padding: 0; }
  .mfp-img-mobile .mfp-figure:after {
    top: 0;
    bottom: 0; }
  .mfp-img-mobile .mfp-figure small {
    display: inline;
    margin-left: 5px; }
  .mfp-img-mobile .mfp-bottom-bar {
    background: rgba(0, 0, 0, 0.6);
    bottom: 0;
    margin: 0;
    top: auto;
    padding: 3px 5px;
    position: fixed;
    box-sizing: border-box; }
    .mfp-img-mobile .mfp-bottom-bar:empty {
      padding: 0; }
  .mfp-img-mobile .mfp-counter {
    right: 5px;
    top: 3px; }
  .mfp-img-mobile .mfp-close {
    top: 0;
    right: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: rgba(0, 0, 0, 0.6);
    position: fixed;
    text-align: center;
    padding: 0; } }

@media all and (max-width: 900px) {
  .mfp-arrow {
    -webkit-transform: scale(0.75);
    transform: scale(0.75); }
  .mfp-arrow-left {
    -webkit-transform-origin: 0;
    transform-origin: 0; }
  .mfp-arrow-right {
    -webkit-transform-origin: 100%;
    transform-origin: 100%; }
  .mfp-container {
    padding-left: 6px;
    padding-right: 6px; } }
</style>