<div class="flex-container">
    <div class="skills" id="skillpage">
        <!-- progress bar -->
        <div class="skills-item progress-bar">
            <!-- front end -->
            <div class="frontEnd">
                <h3> front-end </h3>
                
                <?php
                $skill = new Skill($connection);
                $res = $skill->getSkillsByType('frontEnd');

                foreach ($res as $r) {
                    ?>

                    <div class="skill">
                        <div class="skill-title">
                            <?= $r['skillName'] ?>
                        </div>
                        <div class="bar">
                            <div class="bar-color" style=" width:<?= $r['persentage'] ?>%;">

                            </div>
                        </div>
                    </div>

                <?php
            }
            ?>

            </div>
            <!-- /front end -->


            <!-- back end -->
            <div class="backEnd">
                <h3> back-end </h3>
                <?php
                $skill = new Skill($connection);
                $res = $skill->getSkillsByType('backEnd');

                foreach ($res as $r) {
                    ?>

                    <div class="skill">
                        <div class="skill-title">
                            <?= $r['skillName'] ?>
                        </div>
                        <div class="bar">
                            <div class="bar-color" style=" width:<?= $r['persentage'] ?>%;">

                            </div>
                        </div>
                    </div>

                <?php
            }
            ?>
            </div>
            <!-- /back end -->

        </div>
        <!-- /progress bar -->


        <!-- more skills -->
        <div class="skills-item more-skills">
            <!-- more to know -->
            <div>
                <h4><?= $lang[$_SESSION['lang']]['more skills'] ?></h4>
                <p>
                    Flexbox, Grid, Wordpress, Seo (On-Page), Website speed optimization
                </p>
            </div>
            <!-- /more to know -->


            <!-- more to know -->
            <div>
                <h4>Tools for communication and project management</h4>
                <p>Skype, Discord, Trello</p>
            </div>
            <!-- /more to know -->
        </div>
        <!-- /more skills -->


        <!-- workflow & stuff -->
        <div class="skills-item workflow">
            <!-- more to know -->
            <div>
                <!-- fsdmjfsdmfjds -->
            </div>
            <!-- /more to know -->


            <!-- more to know -->
            <div>
                <!-- djsfkjlskd -->
            </div>
            <!-- /more to know -->
        </div>
        <!-- /workflow & stuff -->
    </div>
</div>

<script>
    jQuery("document").ready(function() {
        jQuery(".bar-color").css({
            "background": "#2196F3",
            "width": "95%"
        });
        jQuery(".skills:nth-of-type(2) .bar-color").css({
            "width": "80%"
        });
        jQuery(".skills:nth-of-type(3) .bar-color").css({
            "width": "70%"
        });
        jQuery(".skills:nth-of-type(4) .bar-color").css({
            "width": "55%"
        });
    });
</script>