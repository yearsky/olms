<?php
$status_wise_courses = $this->crud_model->get_status_wise_courses();
?>
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu left-side-menu-detached">
	<div class="leftbar-user">
		<a href="javascript: void(0);">
			<img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>" alt="user-image" height="42" class="rounded-circle shadow-sm">
			<?php
			$admin_details = $this->user_model->get_all_user($this->session->userdata('user_id'))->row_array();
			?>
			<span class="leftbar-user-name"><?php echo $admin_details['first_name'] . ' ' . $admin_details['last_name']; ?></span>
		</a>
	</div>

	<!--- Sidemenu -->
	<ul class="metismenu side-nav side-nav-light">

		<li class="side-nav-title side-nav-item"><?php echo get_phrase('navigation'); ?></li>

		<li class="side-nav-item <?php if ($page_name == 'dashboard') echo 'active'; ?>">
			<a href="<?php echo site_url('admin/dashboard'); ?>" class="side-nav-link">
				<i class="dripicons-view-apps"></i>
				<span><?php echo get_phrase('dashboard'); ?></span>
			</a>
		</li>

		<li class="side-nav-item <?php if ($page_name == 'categories' || $page_name == 'category_add' || $page_name == 'category_edit') : ?> active <?php endif; ?>">
			<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'categories' || $page_name == 'category_add' || $page_name == 'category_edit') : ?> active <?php endif; ?>">
				<i class="dripicons-network-1"></i>
				<span> <?php echo get_phrase('categories'); ?> </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class="<?php if ($page_name == 'categories' || $page_name == 'category_edit') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/categories'); ?>"><?php echo get_phrase('categories'); ?></a>
				</li>

				<li class="<?php if ($page_name == 'category_add') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/category_form/add_category'); ?>"><?php echo get_phrase('add_new_category'); ?></a>
				</li>
			</ul>
		</li>
		<li class="side-nav-item <?php if ($page_name == 'class' || $page_name == 'class_add' || $page_name == 'class_edit') : ?> active <?php endif; ?>">
			<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'class' || $page_name == 'class_add' || $page_name == 'class_edit') : ?> active <?php endif; ?>">
				<i class="dripicons-home"></i>
				<span> <?php echo get_phrase('Class'); ?> </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class="<?php if ($page_name == 'class' || $page_name == 'class_edit') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/class'); ?>"><?php echo get_phrase('class'); ?></a>
				</li>

				<li class="<?php if ($page_name == 'class_add') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/class_form/add_class'); ?>"><?php echo get_phrase('add_new_class'); ?></a>
				</li>
			</ul>
		</li>

		<li class="side-nav-item">
			<a href="<?php echo site_url('admin/courses'); ?>" class="side-nav-link <?php if ($page_name == 'courses' || $page_name == 'course_add' || $page_name == 'course_edit') echo 'active'; ?>">
				<i class="dripicons-archive"></i>
				<span><?php echo get_phrase('courses'); ?></span>
			</a>
		</li>
		<li class="side-nav-item">
			<a href="<?php echo site_url('admin/absensi'); ?>" class="side-nav-link <?php if ($page_name == 'absensi' || $page_name == 'absensi_add' || $page_name == 'absensi_edit') echo 'active'; ?>">
				<i class="dripicons-checklist"></i>
				<span><?php echo get_phrase('absensi'); ?></span>
			</a>
		</li>

		<li class="side-nav-item <?php if ($page_name == 'students' || $page_name == 'student_add' || $page_name == 'teacher') : ?> active <?php endif; ?>">
			<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'students' || $page_name == 'student_add' || $page_name == 'teacher') : ?> active <?php endif; ?>">
				<i class="dripicons-user-group"></i>
				<span> <?php echo get_phrase('Users Management'); ?> </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class="<?php if ($page_name == 'student' || $page_name == 'student_add' || $page_name == 'student_edit') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/students'); ?>"><?php echo get_phrase('Students'); ?></a>
				</li>

				<li class="<?php if ($page_name == 'teachers') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/teachers'); ?>"><?php echo get_phrase('Teachers'); ?></a>
				</li>
			</ul>
		</li>

		<li class="side-nav-item <?php if ($page_name == 'layouts' || $page_name == 'layouts_add' || $page_name == 'layouts_edit') : ?> active <?php endif; ?>">
			<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'layouts' || $page_name == 'layouts_add' || $page_name == 'layouts_edit') : ?> active <?php endif; ?>">
				<i class="dripicons-browser"></i>
				<span> <?php echo get_phrase('Layouts'); ?> </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class="<?php if ($page_name == 'sliders' || $page_name == 'sliders_add' || $page_name == 'sliders_edit') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/sliders'); ?>"><?php echo get_phrase('Sliders'); ?></a>
				</li>

				<li class="<?php if ($page_name == 'gallery' || $page_name == 'gallery_add' || $page_name == 'gallery_edit') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/gallery'); ?>"><?php echo get_phrase('Gallery'); ?></a>
				</li>
				<li class="<?php if ($page_name == 'blog' || $page_name == 'blog_add' || $page_name == 'blog_edit') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/blog'); ?>"><?php echo get_phrase('Blog'); ?></a>
				</li>
				<li class="<?php if ($page_name == 'prestasi' || $page_name == 'prestasi_add' || $page_name == 'prestasi_edit') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/prestasi'); ?>"><?php echo get_phrase('Prestasi'); ?></a>
				</li>

			</ul>
		</li>




		<li class="side-nav-item">
			<a href="<?php echo site_url('admin/message'); ?>" class="side-nav-link <?php if ($page_name == 'message' || $page_name == 'message_new' || $page_name == 'message_read') echo 'active'; ?>">
				<i class="dripicons-message"></i>
				<span><?php echo get_phrase('message'); ?></span>
			</a>
		</li>

		<li class="side-nav-item">
			<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'system_settings' || $page_name == 'frontend_settings' || $page_name == 'payment_settings' || $page_name == 'instructor_settings' || $page_name == 'smtp_settings' || $page_name == 'manage_language' || $page_name == 'about' || $page_name == 'themes' || $page_name == 'mobile_app') : ?> active <?php endif; ?>">
				<i class="dripicons-toggles"></i>
				<span> <?php echo get_phrase('settings'); ?> </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class="<?php if ($page_name == 'system_settings') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/system_settings'); ?>"><?php echo get_phrase('system_settings'); ?></a>
				</li>
				<li class="<?php if ($page_name == 'frontend_settings') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/frontend_settings'); ?>"><?php echo get_phrase('website_settings'); ?></a>
				</li>

				<li class="<?php if ($page_name == 'instructor_settings') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/instructor_settings'); ?>"><?php echo get_phrase('instructor_settings'); ?></a>
				</li>
				<!-- <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/manage_language'); ?>"><?php echo get_phrase('language_settings'); ?></a>
				</li>
				<li class="<?php if ($page_name == 'smtp_settings') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/smtp_settings'); ?>"><?php echo get_phrase('smtp_settings'); ?></a>
				</li> -->


			</ul>
		</li>
	</ul>
</div>