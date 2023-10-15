<?php
include($_ENV["source_root"].'layouts/header.php');
?>
<main id="homepage">
    <section class="hero">
        <div class="image">
            <div class="imgmask"><img src="/images/cloud1080.png" alt="Cloud Computer"></div>
        </div>
        <div class="calltoaction">
            <div class="title">Write, Share, Learn, &amp; Inspire</div>
            <div class="text">
                <p>
                    Tell a story, write an article, build a how-to and share it with the world.
                    Everyone has something to say and here is a great place to express yourself.
                </p>
            </div>
            <div class="link">
                <a href="#register" class="button">Share Your Stories</a>
            </div>
        </div>
    </section>
    <div class="page-container">
        <div class="flex-container gap-m main-content flex-column">
            <div class="content flex-container gap-m">
                <div class="flex-container flex-column gap-m">
                    <h1 class="title">Welcome to xPressxd</h1>
                    <p>
                        This is a place for all of us to gather and share our stories,
                        knowledge, and just about anything else you would like to.
                        Together we can create a community of knowledge and intricate worlds.
                    </p>
                </div>
                <div class="content">
                    <img src="/images/coffe-paper.png" width="100%"/>
                </div>
            </div>
            <div class="content flex-container flex-column flex-center gap-m">
                <h3>Website demonstration</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/B9xd-8D3VCw?si=ZL3_WrIFZHSysrJK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</main>
<?php
include($_ENV["source_root"].'layouts/footer.php');
