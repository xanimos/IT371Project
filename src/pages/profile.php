<?php

use xpressxd\User;
User::pageGuard();

$page_title = "Profile";
include($_ENV["source_root"].'layouts/header.php');

$data = User::getUserData();

?>
<main id="profile">
    <div class="page-container">
        <div class="grid-container gap-xs">
            <div class="profile-image"><img src="<?=$data['profile_image']?>" alt="<?=$data['display_name']?>' Profile Picture"></div>
            <div class="public-name"><?=$data['display_name']?></div>
            <div class="tagline"><?=$data['tagline']?></div>
            <div class="description">
                <h4>About Me:</h4>
                <?=$data['description']?>
            </div>
            <div class="articles flex-container flex-column gap-s">
                <h3><?=$data['display_name']?>'s Articles</h3>
                <div class="flex-container gap-s">
                    <div class="article flex-container flex-column gap-s">
                        <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                        <div class="title">Building a website 101</div>
                        <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloremque
                            ducimus...
                        </div>
                    </div>
                    <div class="article flex-container flex-column gap-s">
                        <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                        <div class="title">Building a website 101</div>
                        <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloremque
                            ducimus...
                        </div>
                    </div>
                    <div class="article flex-container flex-column gap-s">
                        <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                        <div class="title">Building a website 101</div>
                        <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloremque
                            ducimus...
                        </div>
                    </div>
                    <div class="article flex-container flex-column gap-s">
                        <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                        <div class="title">Building a website 101</div>
                        <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloremque
                            ducimus...
                        </div>
                    </div>
                    <div class="article flex-container flex-column gap-s">
                        <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                        <div class="title">Building a website 101</div>
                        <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloremque
                            ducimus...
                        </div>
                    </div>
                    <div class="article flex-container flex-column gap-s">
                        <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                        <div class="title">Building a website 101</div>
                        <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloremque
                            ducimus...
                        </div>
                    </div>
                    <div class="article flex-container flex-column gap-s">
                        <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                        <div class="title">Building a website 101</div>
                        <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloremque
                            ducimus...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include($_ENV["source_root"].'layouts/footer.php');
