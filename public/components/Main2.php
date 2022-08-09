<?php

    require_once("imports/base-css.php");
    BaseCss();
    echo '
        <!-- Modernizr -->
        <script src="../js/modernizr.js"></script>

        <!-- SPECIFIC SCRIPTS -->
        <script src="../js/video_header.js"></script>
    ';

    function Main2(){
        echo '
            <div class="header-video">
                <div id="hero_video">
                    <div class="content">
                        <h3>Find a Doctor!</h3>
                        <p>
                            Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
                        </p>
                        <form method="get" action="/doctors">
                            <div id="custom-search-input">
                                <div class="input-group">
                                    <input type="text" class=" search-query" name="search" placeholder="Ex. Name, Specialization ....">
                                    <input type="submit" class="btn_search" value="Search">
                                </div>
                                <ul>
                                    <li>
                                        <input type="radio" id="all" name="type" value="all" checked>
                                        <label for="all">All</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="doctor" name="radio_search" value="doctor">
                                        <label for="doctor">Doctor</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="clinic" name="radio_search" value="clinic">
                                        <label for="clinic">Clinic</label>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <img src="../img/video_fix.png" alt="" class="header-video--media" data-video-src="../video/intro" data-teaser-source="../video/intro" data-provider="" data-video-width="1920" data-video-height="750">
            </div>
        ';
    }

    #Main2();

?>