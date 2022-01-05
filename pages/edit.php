<?php
require_once 'functionality/information_user.php';
global $up;
?>
<div class="wrapper">
    <form id="formedit" action="../functionality/edit.php" method="post" enctype="multipart/form-data">
        <aside class="sidebar">
            <div class="sidebar__wrapper">
                <div class="photos" alt="your">
                    <img src="<?= $up['photo'] ?>" alt="">
                    <input class="photo" id="ifile" name="photo" type="file"
                           accept=".jpg, .jpeg, .png, .svg" <?= $up['photo'] ?> ><br>
                    <label class="co" for="ifile"></label>
                    <label class="in" for="ifile">File input here</label>
                </div>
                <section class="contact">
                    <h3>Contact</h3>
                    <input class="mask-phone input" name="phone" type="tell" placeholder="  +380"
                           value="<?= $up['phone'] ?>"><br>
                    <input class="input" name="email" type="email" placeholder="  test@gmail.com"
                           value="<?= $up['email'] ?>"><br>
                    <input class="input" name="adress" type="text" placeholder="  Country, City, District"
                           value="<?= $up['adress'] ?>"><br>
                    <input class="input" name="links" type="text" placeholder="  instagram.com/username"
                           value="<?= $up['links'] ?>"><br>
                </section>
                <section class="educations">
                    <h3>Education</h3>

                    <textarea class="textarea" name="education" type="text"
                              wrap="soft"><?= $up['education'] ?></textarea>

                </section>
                <section class="skills">
                    <h3>Skills</h3>
                    <textarea class="textarea" name="skills" wrap="soft"><?= $up['skills'] ?>
                        </textarea>
                </section>
            </div>
        </aside>
        <div class="main">
            <div class="conteiner">
                <div class="conteiner__wrapper">
                    <input class="input" name="name" type="text" placeholder=" Your Name"
                           value="<?= $up['name'] ?>"><br>
                    <h3>web developer</h3>
                    <button name="edit_form">Сохранить изменения</button>
                    <br>
                </div>

            </div>
            <section class="p">
                <h3 class="hist">Profile</h3>
                <textarea class="textarea" name="profile"
                          placeholder="Dedicated Web Developer experienced in [top skills.&#10;Developed a [major web development accomplishment or project]. &#10;Enthusiastic about [web development interests]."><?= $up['profile'] ?>
                    </textarea>
            </section>
            <section class="p">
                <h3 class="hist">Professional experiance</h3>
                <textarea class="textarea" name="proexp"
                          placeholder="Job title, Company Month, Year – Month, Year
    [Action word] [skill/task] [result/impact]
    [Action word] [skill/task] [result/impact]
    [Action word] [skill/task] [result/impact]
                        "><?= $up['proexp'] ?>
                    </textarea>
            </section>
        </div>
    </form>
</div>