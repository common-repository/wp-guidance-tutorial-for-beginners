<?php
/*
Plugin Name: WP Guidance - Guideline/Tutorial for WordPress Beginners
Plugin URI: https://wordpress.org/plugins/wp-guidance-tutorial-for-beginners/
Description: This plugin will show you Guideline/Tutorial/Definition related to each of the WordPress Dashboard Screen. For Example, If a user goes to "Themes" tab, they will see a guideline related to "What is Theme" on top of the screen along with other relevant information.
Author: Themefic
Version: 1.1
Author URI: https://themefic.com/
*/
    
function wp_guidance_admin_messages(){
    global $post_type;
    global $pagenow;
    global $taxonomy;
    if (  $pagenow == 'index.php' ) {
         echo '<div class="notice notice-info">
             <p>From the Dashboard Screen, you can quickly access your site’s content and get glimpses into other areas of the WordPress community. The Dashboard screen presents information in blocks called <strong>widgets</strong>. By default, WordPress delivers five widgets on this page: <a href="https://wordpress.org/support/article/dashboard-screen/#at-a-glance" target="_blank">At a Glance</a>, <a href="https://wordpress.org/support/article/dashboard-screen/#activity" target="_blank">Activity</a>, <a href="https://wordpress.org/support/article/dashboard-screen/#quickdraft" target="_blank">Quick Draft</a>, <a href="https://wordpress.org/support/article/dashboard-screen/#wordpress-events-and-news" target="_blank">WordPress Events and News</a>, and <a href="https://wordpress.org/support/article/dashboard-screen/#welcome" target="_blank">Welcome</a>. Learn more: <a href="https://wordpress.org/support/article/dashboard-screen/" target="_blank">WordPress.org Documentation</a>, <a href="https://kinsta.com/knowledgebase/wordpress-admin/" target="_blank">WordPress Admin Dashboard</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'update-core.php' ) {
         echo '<div class="notice notice-info">
             <p>The Dashboard Updates Screen provides the links necessary to install a ‘core’ WordPress upgrade automatically, or to download the file necessary to complete a manual upgrade. In addition to the ‘core’ update process, this Screen provides the ability to upgrade all plugins and themes, active or inactive, that have available updates. Learn more: <a href="https://wordpress.org/support/article/dashboard-updates-screen/" target="_blank">WordPress.org Documentation</a>, <a href="https://wordpress.org/support/article/updating-wordpress/" target="_blank">Updating WordPress</a>, <a href="https://www.wpbeginner.com/beginners-guide/ultimate-guide-to-upgrade-wordpress-for-beginners-infograph/" target="_blank">How to Safely Update WordPress</a>, <a href="https://www.sitepoint.com/a-guide-to-updating-wordpress/" target="_blank">A Guide to Updating WordPress, Plugins and Themes</a>.</p>
         </div>';
    }
    
    elseif ($pagenow == 'edit.php' && $post_type == 'post') {
         echo '<div class="notice notice-info">
             <p>Posts are entries that display in reverse order on your home page and/or blog page. Posts usually have comment fields beneath them and are included in your site’s RSS feed. Learn more: <a href="https://wordpress.org/support/article/writing-posts/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.dreamhost.com/wordpress/guide-to-wp-posts-page/" target="_blank">Beginners Guide to the WordPress Posts Page</a>, <a href="https://www.wpbeginner.com/beginners-guide/what-is-the-difference-between-posts-vs-pages-in-wordpress/" target="_blank">Difference Between Posts vs. Pages in WordPress</a>.</p>
         </div>';
    }
    
    elseif ( $pagenow == 'post-new.php' && $post_type == 'post' ) {
         echo '<div class="notice notice-info">
             <p>This screen helps you to write new post for your website (specially blog). Fill up the information below  as needed, when you are ready, click Publish. Learn more: <a href="https://wordpress.org/support/article/writing-posts/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.wpbeginner.com/beginners-guide/how-to-add-a-new-post-in-wordpress-and-utilize-all-the-features/" target="_blank">How to Add a New Post in WordPress</a>, <a href="https://www.wpbeginner.com/beginners-guide/what-is-the-difference-between-posts-vs-pages-in-wordpress/" target="_blank">Difference Between Posts vs. Pages in WordPress</a>.</p>
         </div>';
    }
    
    elseif ( $pagenow == 'edit-tags.php' && $taxonomy == 'category' ) {
         echo '<div class="notice notice-info">
             <p>Categories provide a helpful way to group related posts together. For example, a news website might have categories for their articles filed under News, Opinion, Weather, and Sports. Depending on the theme and widgets you have activated, categories can be used: a) On your menu to organize your posts, b) On specific pages using the Blog Posts block, c) In the available sidebars or widget areas, d) To create category pages where posts assigned to that category are displayed. Learn More: Learn more: <a href="https://wordpress.com/support/posts/categories/" target="_blank">WordPress.com Documentation</a>, <a href="https://www.wpbeginner.com/glossary/category/" target="_blank">What is: Category</a>, <a href="https://www.siteground.com/tutorials/wordpress/use-categories/" target="_blank">How to Use WordPress Categories</a>.</p>
         </div>';
    }
    
    elseif ( $pagenow == 'edit-tags.php' && $taxonomy == 'post_tag' ) {
         echo '<div class="notice notice-info">
             <p>Tags provide a useful way to group related posts together and to quickly tell readers what a post is about. Tags also make it easier for people to find your content. While a category may cover a broad range of topics, tags are smaller in scope and focused to specific topics. Think of them as keywords used for topics discussed in a particular post. Learn more: <a href="https://wordpress.com/support/posts/tags/" target="_blank">WordPress.com Documentation</a>, <a href="https://www.wpbeginner.com/glossary/tag/" target="_blank">What is: Tag</a>, <a href="https://www.wpbeginner.com/beginners-guide/categories-vs-tags-seo-best-practices-which-one-is-better/" target="_blank">Categories vs Tags</a>.</p>
         </div>';
    }
    
    elseif ( $pagenow == 'edit.php' && $post_type == 'page' ) {
         echo '<div class="notice notice-info">
             <p>Pages live outside of the normal blog chronology, and are often used to present timeless information about yourself or your site — information that is always relevant. You can use Pages to organize and manage the structure of your website content. In addition to the common “About” and “Contact” pages, other examples include “Copyright”, “Disclosure”, “Legal Information”, “Reprint Permissions”, “Company Information” or “Accessibility Statement”. Learn more: <a href="https://wordpress.org/support/article/pages/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.dreamhost.com/wordpress/guide-to-wp-posts-page/" target="_blank">Beginners Guide to the WordPress Posts Page</a>, <a href="https://www.wpbeginner.com/beginners-guide/what-is-the-difference-between-posts-vs-pages-in-wordpress/" target="_blank">Difference Between Posts vs. Pages in WordPress</a>.</p>
         </div>';
    }
    
    elseif ( $pagenow == 'post-new.php' && $post_type == 'page' ) {
         echo '<div class="notice notice-info">
             <p>This Screen allows you to add new Pages. Fill up the information below  as needed, when you are ready, click Publish. Learn more: <a href="https://wordpress.org/support/article/pages-add-new-screen/" target="_blank">WordPress.org Documentation</a>, <a href="https://harnessyourwebsite.com/wordpress/create-wordpress-page-add-menu/" target="_blank">How to Create A WordPress Page and Add It to the Menu</a>, <a href="https://www.wpbeginner.com/beginners-guide/what-is-the-difference-between-posts-vs-pages-in-wordpress/" target="_blank">Difference Between Posts vs. Pages in WordPress</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'upload.php' ) {
         echo '<div class="notice notice-info">
             <p>Media consists of the images, video, recordings, and files that you upload and use in your blog. Media is typically uploaded and inserted into the content when writing a Post or writing a Page. Learn more: <a href="https://wordpress.org/support/article/media-library-screen/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.wpbeginner.com/glossary/media/" target="_blank">What is: Media</a>, <a href="https://ithemes.com/tutorials/using-the-wordpress-media-library/" target="_blank">Using the WordPress Media Library</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'media-new.php' ) {
         echo '<div class="notice notice-info">
             <p>This screen allows you to upload Media (Images, video, files, etc.) for later use in your posts and pages. This screen allows you to both add single items as well as perform bulk uploads, if you wish to add more than one media item to your Media Library.  Learn more: <a href="https://wordpress.org/support/article/media-add-new-screen/" target="_blank">WordPress.org Documentation</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'edit-comments.php' ) {
         echo '<div class="notice notice-info">
             <p>Comments allow your website’s visitors to have a discussion with you and each other. When you activate comments on a Page or post, WordPress inserts several text boxes after your content where users can submit their comments. Once you approve a comment, it appears underneath your content. Learn more: <a href="https://wordpress.org/support/article/comments-in-wordpress/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.wpbeginner.com/glossary/comment/" target="_blank">What is: Comments</a>, <a href="https://www.siteground.com/tutorials/wordpress/comments/" target="_blank">WordPress Comments Tutorial</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'themes.php' ) {
         echo '<div class="notice notice-info">
             <p>A WordPress theme changes the design of your website, often including its layout. Changing your theme changes how your site looks on the front-end, i.e. what a visitor sees when they browse to your site on the web. Themes take the content and data stored by WordPress and display it in the browser. When you create a WordPress theme, you decide how that content looks and is displayed. There are thousands of free WordPress themes in the <a href="https://wordpress.org/themes/" target="_blank">WordPress.org Theme Directory</a>, though many WordPress sites use custom themes. You can also buy Premium WordPress Themes from <a href="https://themefuse.com/where-to-buy-wordpress-themes/" target="_blank">various marketplaces</a>. Learn more: <a href="https://developer.wordpress.org/themes/getting-started/what-is-a-theme/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.wpbeginner.com/glossary/theme/" target="_blank">What is: Theme</a>, <a href="https://www.siteground.com/tutorials/wordpress/install-themes/" target="_blank">How to Install WordPress Themes Tutorial</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'widgets.php' ) {
         echo '<div class="notice notice-info">
             <p>WordPress Widgets add content and features to your <a href="https://codex.wordpress.org/Sidebars" target="_blank" rel="noopener">Sidebars</a>. Widgets were originally designed to provide a simple and easy-to-use way of giving design and structure control of the WordPress Theme to the user, which is now available on properly “widgetized” WordPress Themes to include the header, footer, and elsewhere in the WordPress design and structure. Widgets require no code experience or expertise. They can be added, removed, and rearranged on the <strong>Theme Customizer</strong> or <strong>Appearance &gt; Widgets</strong> in the WordPress Administration Screens. Learn more: <a href="https://wordpress.org/support/article/wordpress-widgets/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.wpbeginner.com/glossary/widgets/" target="_blank">What is: Widgets</a>, <a href="https://kinsta.com/blog/wordpress-widgets/" target="_blank">Complete Guide to WordPress Widgets</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'nav-menus.php' ) {
         echo '<div class="notice notice-info">
             <p>Navigation Menus, or simply Menus, are a WordPress theme feature which allows users to create navigation menus by using built-in Menu Editor which you can find below. Most menus are used as a method for building navigation within a WordPress site. Learn more: <a href="https://codex.wordpress.org/WordPress_Menu_User_Guide" target="_blank">WordPress.org Documentation</a>, <a href="https://www.wpbeginner.com/glossary/navigation-menus/" target="_blank">What is: Navigation Menus</a>, <a href="https://www.greengeeks.com/tutorials/article/what-are-menus-and-how-to-use-them-in-wordpress/" target="_blank">What Are Menus and How to Use Them in WordPress</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'theme-editor.php' ) {
         echo '<div class="notice notice-info">
             <p>There are times when you will need to edit WordPress files, especially if you want to make changes in your WordPress Theme. The following built-in editor allows you to edit files online, using any internet browser. You can also edit files copied or stored on your computer, and then upload them to your site using an FTP client. Learn more: <a href="https://wordpress.org/support/article/editing-files/" target="_blank">WordPress.org Documentation</a>. Now, this may sound really helpful, but it can also lead to issues such as breaking your site and potential security issues when combined with other vulnerabilities. Here is a guide on <a href="https://www.wpbeginner.com/wp-tutorials/how-to-disable-theme-and-plugin-editors-from-wordpress-admin-panel/" target="_blank">How to Disable Theme and Plugin Editors from WordPress Admin Panel</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'plugins.php' ) {
         echo '<div class="notice notice-info">
             <p>A plugin is a piece of software containing a group of functions that can be added to a WordPress website. They can extend functionality or add new features to your WordPress websites. In technical terms, WordPress Plugins are PHP scripts that extend the functionality of WordPress. They enhance the features of WordPress, or add entirely new features to your site. Currently, there are 55000+ Free WordPress Plugins on <a href="https://wordpress.org/plugins/" target="_blank">WordPress Plugin Directory</a>. In addition, you can buy premium plugins from different marketplaces. Learn more: <a href="https://wordpress.org/support/article/managing-plugins/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.wpbeginner.com/glossary/plugin/" target="_blank">What is: Plugin</a>, <a href="https://kinsta.com/knowledgebase/wordpress-plugin/" target="_blank">How Does a Plugin Work?</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'plugin-install.php' ) {
         echo '<div class="notice notice-info">
             <p>From here, you can upload and install your Plugins (Free or Premium). If you want to install a Free Plugin from <a href="https://wordpress.org/plugins/" target="_blank">WordPress Plugin Directory</a>, you can use the "Search bar" below to search and install your plugin. For Premium, you need to use the "Upload Plugin" button available above. Learn more: <a href="https://www.wpbeginner.com/beginners-guide/step-by-step-guide-to-install-a-wordpress-plugin-for-beginners/" target="_blank">How to Install a WordPress Plugin – Step by Step for Beginners</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'plugin-editor.php' ) {
         echo '<div class="notice notice-info">
             <p>Among the many user-editable files in a standard WordPress installation are the Plugins files. Though it should be rare that you need to change a Plugin code, this Plugins Editor Screen allows you to edit those Plugin files.  Learn more: <a href="https://wordpress.org/support/article/plugins-editor-screen/" target="_blank">WordPress.org Documentation</a>. Now, this may sound really helpful, but it can also lead to issues such as breaking your site and potential security issues when combined with other vulnerabilities. Here is a guide on <a href="https://www.wpbeginner.com/wp-tutorials/how-to-disable-theme-and-plugin-editors-from-wordpress-admin-panel/" target="_blank">How to Disable Theme and Plugin Editors from WordPress Admin Panel</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'users.php' ) {
         echo '<div class="notice notice-info">
             <p>WordPress comes with a comprehensive user role management system which defines what each specific user can and cannot do on your website. This covers everything from administrative to content related tasks. Setting your site users up properly will give you a strong grip on your WordPress website; this is essential for a site seeing rapid growth. In this page, you can see all existing Users of this website. Learn More: <a href="https://wordpress.org/support/article/roles-and-capabilities/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.wpbeginner.com/beginners-guide/wordpress-user-roles-and-permissions/" target="_blank">Beginner’s Guide to WordPress User Roles and Permissions</a>, <a href="https://www.namecheap.com/wordpress/wordpress-user-accounts/" target="_blank">A Quick Guide To WordPress User Roles</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'user-new.php' ) {
         echo '<div class="notice notice-info">
             <p>WordPress has six pre-defined roles: <a href="https://wordpress.org/support/article/roles-and-capabilities/#super-admin" target="_blank" rel="noopener">Super Admin</a>, <a href="https://wordpress.org/support/article/roles-and-capabilities/#administrator" target="_blank" rel="noopener">Administrator</a>, <a href="https://wordpress.org/support/article/roles-and-capabilities/#editor" target="_blank" rel="noopener">Editor</a>, <a href="https://wordpress.org/support/article/roles-and-capabilities/#author" target="_blank" rel="noopener">Author</a>, <a href="https://wordpress.org/support/article/roles-and-capabilities/#contributor" target="_blank" rel="noopener">Contributor</a> and <a href="https://wordpress.org/support/article/roles-and-capabilities/#subscriber" target="_blank" rel="noopener">Subscriber</a>. Each role is allowed to perform a set of tasks called <a href="https://wordpress.org/support/article/glossary/#capabilities" target="_blank" rel="noopener">Capabilities</a>. There are many capabilities including “<a href="https://wordpress.org/support/article/roles-and-capabilities/#publish_posts" target="_blank" rel="noopener">publish_posts</a>“, “<a href="https://wordpress.org/support/article/roles-and-capabilities/#moderate_comments" target="_blank" rel="noopener">moderate_comments</a>“, and “<a href="https://wordpress.org/support/article/roles-and-capabilities/#edit_users" target="_blank" rel="noopener">edit_users</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'profile.php' ) {
         echo '<div class="notice notice-info">
             <p>As a User, you can edit your profiles from here. Although the only pieces of information that WordPress requires is an email address and nick name, users can also provide additional information about themselves which can then be used by theme developers to display their bio and links on the front-end of the website. Users can also change their passwords from the Profile screen. Learn More: <a href="https://www.wpbeginner.com/glossary/profile/" target="_blank">What is: Profile</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'tools.php' ) {
         echo '<div class="notice notice-info">
             <p>Tools is a menu tab in the WordPress admin sidebar. It contains tools to perform some non-routine management tasks. Learn More: <a href="https://www.wpbeginner.com/glossary/tools/" target="_blank">What is: Tools</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'import.php' ) {
         echo '<div class="notice notice-info">
             <p>You can import content to your site from another WordPress site and from many other kinds of platforms, including Wix, Medium, Blogger, GoDaddy Go Central, Israblog, Movable Type, Squarespace, Tumblr, Typepad, Xanga, and more. Learn More: <a href="https://wordpress.com/support/import/" target="_blank">What is: Import</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'export.php' ) {
         echo '<div class="notice notice-info">
             <p>You can use the Export tool to back up all of your content or move your content to a new WordPress.com site or to a new self-hosted WordPress site. Learn More: <a href="https://wordpress.com/support/export/" target="_blank">What is: Export</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'site-health.php' ) {
         echo '<div class="notice notice-info">
             <p>WordPress site health tool checks your website health status and shows information about the site configuration. It detects what’s going wrong and what measures you should take to address them. WordPress site health tool shows warnings, recommendations, and passed tests by explaining what they are doing to your site. Learn More: <a href="https://www.themeum.com/what-is-wordpress-site-health-tool-how-to-use-it/" target="_blank">What is WordPress Site Health Tool & How to Use it?</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'export-personal-data.php' ) {
         echo '<div class="notice notice-info">
             <p>WordPress 4.9.6 included a feature to archive user data for export. Export Personal Data tool can generate a (.zip format) file containing the personal data which exists about a user within your WordPress site. Learn More: <a href="https://wordpress.org/support/article/tools-export-personal-data-screen/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.inmotionhosting.com/support/edu/wordpress/wp-export-personal-data/" target="_blank">How to Use the Export Personal Data Option in WordPress</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'erase-personal-data.php' ) {
         echo '<div class="notice notice-info">
             <p>WordPress 4.9.6 included a feature to delete a user’s personal data upon verified request. Deleted data is permanently removed from the database. Erasure requests cannot be reversed after they have been confirmed. Learn More: <a href="https://wordpress.org/support/article/tools-erase-personal-data-screen/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.inmotionhosting.com/support/edu/wordpress/wp-erase-data/" target="_blank">How to Erase Personal Data in WordPress</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'options-general.php' ) {
         echo '<div class="notice notice-info">
             <p>This is the default Screen in the Settings Administration Screen and controls some of the most basic configuration settings for your site: your site’s title and location, who may register an account at your site, and how dates and times are calculated and displayed. Learn More: <a href="https://wordpress.org/support/article/settings-general-screen/" target="_blank">WordPress.org Documentation</a>, <a href="https://www.wpbeginner.com/glossary/settings/" target="_blank">What is: Settings</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'options-writing.php' ) {
         echo '<div class="notice notice-info">
             <p>This Screen helps to control the interface you use when writing new posts. These settings control WordPress’s features in the adding and editing posts, Pages, and Post Types, as well as the optional functions like Remote Publishing, Post via e-mail, and Update Services. Learn More: <a href="https://wordpress.org/support/article/settings-writing-screen/" target="_blank">WordPress.org Documentation</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'options-reading.php' ) {
         echo '<div class="notice notice-info">
             <p>The options here are few in number, but still important. You can decide if you want posts or a “static” Page displayed as your blog’s front (main) page. You can also adjust how many posts are displayed on that main page. In addition, you can adjust syndication feed features to determine how the information from your site is sent to a reader’s web browser or other applications. Learn More: <a href="https://wordpress.org/support/article/settings-reading-screen/" target="_blank">WordPress.org Documentation</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'options-discussion.php' ) {
         echo '<div class="notice notice-info">
             <p>This screen allows you to set the options concerning comments (also called discussion). It is here the administrator decides if comments are allowed, if pingbacks and trackbacks are acceptable, and what constitutes Comment Spam. On this Screen you also control the circumstances under which your blog sends you e-mail notification of certain events at your site. Learn More: <a href="https://wordpress.org/support/article/settings-discussion-screen/" target="_blank">WordPress.org Documentation</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'options-media.php' ) {
         echo '<div class="notice notice-info">
             <p>This screen controls the various settings related to images and other media that are used in writing posts and pages.  Learn More: <a href="https://wordpress.org/support/article/settings-media-screen/" target="_blank">WordPress.org Documentation</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'options-permalink.php' ) {
         echo '<div class="notice notice-info">
             <p>Permalinks are the permanent URLs of your individual blog posts, pages, and other archive pages on your WordPress site. The URL to each post should be permanent, and never change — hence permalink. Learn More: <a href="https://wordpress.org/support/article/using-permalinks/" target="_blank">WordPress.org Documentation</a>, <a href="https://themeisle.com/blog/permalinks-in-wordpress/" target="_blank">What Are Permalinks in WordPress? How to Set Them and Why</a>.</p>
         </div>';
    }
    
    elseif (  $pagenow == 'options-privacy.php' ) {
         echo '<div class="notice notice-info">
             <p>WordPress 4.9.6 included a Privacy Settings tool. Administrator can create new page or specify existing one as Privacy Policy page of the site.  Learn More: <a href="https://wordpress.org/support/article/settings-privacy-screen/" target="_blank">WordPress.org Documentation</a>.</p>
         </div>';
    }
}
add_action('admin_notices', 'wp_guidance_admin_messages');