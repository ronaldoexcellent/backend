<?php require_once('includes/registration_login.php') ?>
<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<!-- config.php should be here as the first include  -->

<?php require_once('includes/public_functions.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
<?php require_once('includes/head_section.php') ?>
        <title>LifeBlog | Home </title>
</head>
<body>
        <!-- container - wraps whole page -->
        <div class="container">
                <!-- navbar -->
                <?php include('includes/navbar.php') ?>
                <!-- // navbar -->

                <!-- banner -->
                <?php include('includes/banner.php') ?>
                <!-- // banner -->

                <!-- Page content -->
                <div class="content">
                        <h2 class="content-title">Recent Articles</h2>
                        <hr>
                        <!-- more content still to come here ... -->
                        
                        <!-- Add this ... -->
                        <?php foreach ($posts as $post): ?>
                                <div class="post" style="margin-left: 0px;">
                                        <img src="<?php echo '/static/images/' . $post['image']; ?>" class="post_image" alt="">
                                        <!-- Added this if statement... -->
                                <?php if (isset($post['topic']['name'])): ?>
                                        <a href="<?php echo 'filtered_posts.php?topic=' . $post['topic']['id'] ?>" class="btn category">
                                                <?php echo $post['topic']['name'] ?>
                                        </a>
                                <?php endif ?>

                                        <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                                                <div class="post_info">
                                                        <h3><?php echo $post['title'] ?></h3>
                                                        <div class="info">
                                                                <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                                                                <span class="read_more">Read more...</span>
                                                        </div>
                                                </div>
                                        </a>
                                </div>
                        <?php endforeach ?>
                </div>
                <!-- // Page content -->

                <!-- footer -->
                <?php include('includes/footer.php') ?>
                <!-- // footer -->