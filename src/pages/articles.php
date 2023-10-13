<?php
$page_title = "Articles";
include($_ENV["source_root"].'layouts/header.php');
?>
<main id="articles">
    <div class="page-container flex-column gap-m">
        <h1>Top Articles</h1>
        <div class="articles flex-container flex-grow flex-wrap gap-s">
            <div class="article grid-container gap-s flex-grow">
                <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                <div class="title">Building a website 101</div>
                <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit... <a href="">read more</a></div>
            </div>
            <div class="article grid-container gap-s flex-grow">
                <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                <div class="title">Building a website 101</div>
                <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dol... <a href="">read more</a></div>
            </div>
            <div class="article grid-container gap-s flex-grow">
                <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                <div class="title">Building a website 101</div>
                <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolore ducimus ea esse exercitationem... <a href="">read more</a></div>
            </div>
            <div class="article grid-container gap-s flex-grow">
                <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                <div class="title">Building a website 101</div>
                <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolore... <a href="">read more</a></div>
            </div>
            <div class="article grid-container gap-s flex-grow">
                <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                <div class="title">Building a website 101</div>
                <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolor... <a href="">read more</a></div>
            </div>
            <div class="article grid-container gap-s flex-grow">
                <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                <div class="title">Building a website 101</div>
                <div class="preview">Lorem ipsum dolor sit amet, consecte... <a href="">read more</a></div>
            </div>
            <div class="article grid-container gap-s flex-grow">
                <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                <div class="title">Building a website 101</div>
                <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolore ducimus e... <a href="">read more</a></div>
            </div>
            <div class="article grid-container gap-s flex-grow">
                <div class="image"><img src="/images/article.jpg" alt="101: Building a website"></div>
                <div class="title">Building a website 101</div>
                <div class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolore ducimus ea esse exercitati... <a href="">read more</a></div>
            </div>
        </div>
    </div>
</main>
<?php
include($_ENV["source_root"].'layouts/footer.php');
