<?php
require 'functionality/information_user.php';
global $up;
?>
<div class="wrapper">
    <aside class="sidebar">
        <div class="sidebar__wrapper">
            <div class="photos" alt="your">
                <img src="<?= $up['photo'] ?>" width="150px" alt="">

                <h3 class="your"></h3>
            </div>
            <section class="contact">
                <h3>Contact</h3>
                <p><?= $up['phone'] ?></p>
                <p><?= $up['email'] ?></p>
                <p><?= $up['adress'] ?></p>
               <?php
               $url= $up['links'] ;
               $url_get = substr(strrchr($url, "/"), 1);
               ?>
                <p><a href="<?= $up['links'] ?>" title="Insta"><i class="fa fa-instagram" aria-hidden="true"></i><?=$url_get?></a></p>

            </section>
            <section class="education">
                <h3>Education</h3>
                <div class="education">
                    <p><?= $up['education'] ?></p>
                </div>
            </section>
            <section class="skills">
                <h3>Skills</h3>
                <ul class="list">
                    <li><?= $up['skills'] ?></li>
                    <li>html</li>
                    <li>css</li>
                </ul>
            </section>
        </div>
    </aside>
    <div class="main">
        <div class="conteiner">
            <div class="conteiner__wrapper">
                <h1><?= $up['name'] ?></h1>
                <h3>web developer</h3>
            </div>
        </div>
        <section class="profile">
            <h3 class="hist">Profile</h3>
            <p><?= $up['profile'] ?></p>
        </section>
        <section class="proexp">
            <h3 class="hist">Professional experiance</h3>
            <p><?= $up['proexp'] ?></p>
        </section>
    </div>
</div>
