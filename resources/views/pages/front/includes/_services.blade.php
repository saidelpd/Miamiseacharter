<!--Main Home page area starts -->
<div id="thumbnails" class="pt-page  pt-page-current">
    <div class="scalediv">
        <div class="row no-gutter" data-id="one">
            @if(count($services))
                @foreach($services as $key=>$service)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="{{$key+1}}" style="background-image:url('/images/services/dinner.jpg');"
                                data-property="border-width" data-from="{{$key}}" data-to="35px">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>{{$service->name}}</h2>
                                    <div class="comment-count">27 Comments <i class="fa fa-comments-o"></i></div>
                                    <div class="excerpt">{{str_limit($service->description,150)}} </div>
                                    <div class="postinfo">LIFESTYLE <span>March 15, 2015</span></div>
                                </div>
                            </div>
                        </figure>
                    </div>
                @endforeach
            @endif
            <div class="clear"></div>
        </div>
    </div>
    <!-- Posts page area starts -->
    <div class="posts"><a class="back">Back</a>
        <aside><a class="previous">Previous</a>

            <div class="postimagearea">
                <div class="postimage"
                     style="background-image: URL(https://placeholdit.imgix.net/~text?txtsize=50&bg=bbbbbb&txt=1642%C3%971095&w=1642&h=1095);"></div>
                <div class="postimage"
                     style="background-image: URL(https://placeholdit.imgix.net/~text?txtsize=50&bg=dddddd&txt=1642%C3%971095&w=1642&h=1095);"></div>
                <div class="postimage"
                     style="background-image: URL(https://placeholdit.imgix.net/~text?txtsize=50&bg=dddddd&txt=1642%C3%971095&w=1642&h=1095);"></div>
                <div class="postimage"
                     style="background-image: URL(https://placeholdit.imgix.net/~text?txtsize=50&bg=bbbbbb&txt=1642%C3%971095&w=1642&h=1095);"></div>
                <div class="postimage"
                     style="background-image: URL(https://placeholdit.imgix.net/~text?txtsize=50&bg=bbbbbb&txt=1642%C3%971095&w=1642&h=1095);"></div>
                <div class="postimage"
                     style="background-image: URL(https://placeholdit.imgix.net/~text?txtsize=50&bg=dddddd&txt=1642%C3%971095&w=1642&h=1095);"></div>
                <div class="postimage"
                     style="background-image: URL(https://placeholdit.imgix.net/~text?txtsize=50&bg=dddddd&txt=1642%C3%971095&w=1642&h=1095);"></div>
                <div class="postimage"
                     style="background-image: URL(https://placeholdit.imgix.net/~text?txtsize=50&bg=bbbbbb&txt=1642%C3%971095&w=1642&h=1095);"></div>
            </div>
        </aside>
        <section><a class="next">Next</a>

            <div class="contentRight">
                <div class="postcontentarea">
                    <div class="post">
                        <div class="content-r-inner">
                            <div class="blogheader">
                                <h2 class="blogtitle">Preparing new dinner menu</h2>

                                <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April
                                    30, 2014 <span class="infodivider">/</span> UI, UX, Graphics
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="col-md-6">
                                <div class="blogdata"><span class="firstcharacter">M</span>eh synth Schlitz, tempor duis
                                    single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo
                                    booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil,
                                    flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life
                                    reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br>

                                    <div class="blog-short-info"> The wedding day was something
                                        <br> to behold. It was the most
                                        <br> beautiful experience that I
                                        <br> have ever encountered and the guest
                                        <br> were all there and enjoying the
                                        <br> moment with me. I am so
                                        <br> excited to start my new life with my
                                        <br> beautiful husband.
                                    </div>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                    ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3
                                    wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party
                                    deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                <div class="comment featured-cmt">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span></div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <br>
                                <h4>Comments (2)</h4>
                                <br>

                                <div class="comment main-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment-last">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="comment-form">
                                    <br>

                                    <div class="col-xs-12">
                                        <h4>Leave a Reply</h4>
                                        <br>
                                        <br></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>NAME*</label><span><br><input type="text"></span></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>EMAIL*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>WEBSITE*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <label>YOUR COMMENT*</label>
                                        <br>
                                        <textarea rows="4" cols="8" name="comments"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <input type="submit" value="POST COMMENT" class="submit-button"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="post">
                        <div class="content-r-inner">
                            <div class="blogheader">
                                <h2 class="blogtitle">At the beach in winter</h2>

                                <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April
                                    30, 2014 <span class="infodivider">/</span> UI, UX, Graphics
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="col-md-6">
                                <div class="blogdata"><span class="firstcharacter">M</span>eh synth Schlitz, tempor duis
                                    single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo
                                    booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil,
                                    flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life
                                    reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br>

                                    <div class="blog-short-info"> The wedding day was something
                                        <br> to behold. It was the most
                                        <br> beautiful experience that I
                                        <br> have ever encountered and the guest
                                        <br> were all there and enjoying the
                                        <br> moment with me. I am so
                                        <br> excited to start my new life with my
                                        <br> beautiful husband.
                                    </div>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                    ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3
                                    wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party
                                    deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                <div class="comment featured-cmt">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span></div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <br>
                                <h4>Comments (2)</h4>
                                <br>

                                <div class="comment main-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment-last">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="comment-form">
                                    <br>

                                    <div class="col-xs-12">
                                        <h4>Leave a Reply</h4>
                                        <br>
                                        <br></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>NAME*</label><span><br><input type="text"></span></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>EMAIL*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>WEBSITE*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <label>YOUR COMMENT*</label>
                                        <br>
                                        <textarea rows="4" cols="8" name="comments"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <input type="submit" value="POST COMMENT" class="submit-button"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="post">
                        <div class="content-r-inner">
                            <div class="blogheader">
                                <h2 class="blogtitle">The Edge of Nothing Lake</h2>

                                <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April
                                    30, 2014 <span class="infodivider">/</span> UI, UX, Graphics
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="col-md-6">
                                <div class="blogdata"><span class="firstcharacter">M</span>eh synth Schlitz, tempor duis
                                    single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo
                                    booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil,
                                    flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life
                                    reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br>

                                    <div class="blog-short-info"> The wedding day was something
                                        <br> to behold. It was the most
                                        <br> beautiful experience that I
                                        <br> have ever encountered and the guest
                                        <br> were all there and enjoying the
                                        <br> moment with me. I am so
                                        <br> excited to start my new life with my
                                        <br> beautiful husband.
                                    </div>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                    ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3
                                    wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party
                                    deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                <div class="comment featured-cmt">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span></div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <br>
                                <h4>Comments (2)</h4>
                                <br>

                                <div class="comment main-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment-last">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="comment-form">
                                    <br>

                                    <div class="col-xs-12">
                                        <h4>Leave a Reply</h4>
                                        <br>
                                        <br></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>NAME*</label><span><br><input type="text"></span></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>EMAIL*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>WEBSITE*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <label>YOUR COMMENT*</label>
                                        <br>
                                        <textarea rows="4" cols="8" name="comments"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <input type="submit" value="POST COMMENT" class="submit-button"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="post">
                        <div class="content-r-inner">
                            <div class="blogheader">
                                <h2 class="blogtitle">The waves are high & beautiful</h2>

                                <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April
                                    30, 2014 <span class="infodivider">/</span> UI, UX, Graphics
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="col-md-6">
                                <div class="blogdata"><span class="firstcharacter">M</span>eh synth Schlitz, tempor duis
                                    single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo
                                    booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil,
                                    flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life
                                    reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br>

                                    <div class="blog-short-info"> The wedding day was something
                                        <br> to behold. It was the most
                                        <br> beautiful experience that I
                                        <br> have ever encountered and the guest
                                        <br> were all there and enjoying the
                                        <br> moment with me. I am so
                                        <br> excited to start my new life with my
                                        <br> beautiful husband.
                                    </div>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                    ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3
                                    wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party
                                    deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                <div class="comment featured-cmt">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span></div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <br>
                                <h4>Comments (2)</h4>
                                <br>

                                <div class="comment main-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment-last">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="comment-form">
                                    <br>

                                    <div class="col-xs-12">
                                        <h4>Leave a Reply</h4>
                                        <br>
                                        <br></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>NAME*</label><span><br><input type="text"></span></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>EMAIL*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>WEBSITE*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <label>YOUR COMMENT*</label>
                                        <br>
                                        <textarea rows="4" cols="8" name="comments"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <input type="submit" value="POST COMMENT" class="submit-button"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="post">
                        <div class="content-r-inner">
                            <div class="blogheader">
                                <h2 class="blogtitle">Oh girl’s now come on!</h2>

                                <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April
                                    30, 2014 <span class="infodivider">/</span> UI, UX, Graphics
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="col-md-6">
                                <div class="blogdata"><span class="firstcharacter">M</span>eh synth Schlitz, tempor duis
                                    single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo
                                    booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil,
                                    flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life
                                    reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br>

                                    <div class="blog-short-info"> The wedding day was something
                                        <br> to behold. It was the most
                                        <br> beautiful experience that I
                                        <br> have ever encountered and the guest
                                        <br> were all there and enjoying the
                                        <br> moment with me. I am so
                                        <br> excited to start my new life with my
                                        <br> beautiful husband.
                                    </div>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                    ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3
                                    wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party
                                    deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                <div class="comment featured-cmt">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span></div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <br>
                                <h4>Comments (2)</h4>
                                <br>

                                <div class="comment main-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment-last">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="comment-form">
                                    <br>

                                    <div class="col-xs-12">
                                        <h4>Leave a Reply</h4>
                                        <br>
                                        <br></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>NAME*</label><span><br><input type="text"></span></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>EMAIL*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>WEBSITE*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <label>YOUR COMMENT*</label>
                                        <br>
                                        <textarea rows="4" cols="8" name="comments"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <input type="submit" value="POST COMMENT" class="submit-button"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="post">
                        <div class="content-r-inner">
                            <div class="blogheader">
                                <h2 class="blogtitle">GQ at the new yacht club</h2>

                                <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April
                                    30, 2014 <span class="infodivider">/</span> UI, UX, Graphics
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="col-md-6">
                                <div class="blogdata"><span class="firstcharacter">M</span>eh synth Schlitz, tempor duis
                                    single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo
                                    booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil,
                                    flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life
                                    reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br>

                                    <div class="blog-short-info"> The wedding day was something
                                        <br> to behold. It was the most
                                        <br> beautiful experience that I
                                        <br> have ever encountered and the guest
                                        <br> were all there and enjoying the
                                        <br> moment with me. I am so
                                        <br> excited to start my new life with my
                                        <br> beautiful husband.
                                    </div>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                    ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3
                                    wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party
                                    deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                <div class="comment featured-cmt">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span></div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <br>
                                <h4>Comments (2)</h4>
                                <br>

                                <div class="comment main-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment-last">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="comment-form">
                                    <br>

                                    <div class="col-xs-12">
                                        <h4>Leave a Reply</h4>
                                        <br>
                                        <br></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>NAME*</label><span><br><input type="text"></span></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>EMAIL*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>WEBSITE*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <label>YOUR COMMENT*</label>
                                        <br>
                                        <textarea rows="4" cols="8" name="comments"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <input type="submit" value="POST COMMENT" class="submit-button"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="post">
                        <div class="content-r-inner">
                            <div class="blogheader">
                                <h2 class="blogtitle">Coffee in the morning is the absolute best</h2>

                                <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April
                                    30, 2014 <span class="infodivider">/</span> UI, UX, Graphics
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="col-md-6">
                                <div class="blogdata"><span class="firstcharacter">M</span>eh synth Schlitz, tempor duis
                                    single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo
                                    booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil,
                                    flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life
                                    reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br>

                                    <div class="blog-short-info"> The wedding day was something
                                        <br> to behold. It was the most
                                        <br> beautiful experience that I
                                        <br> have ever encountered and the guest
                                        <br> were all there and enjoying the
                                        <br> moment with me. I am so
                                        <br> excited to start my new life with my
                                        <br> beautiful husband.
                                    </div>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                    ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3
                                    wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party
                                    deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                <div class="comment featured-cmt">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span></div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <br>
                                <h4>Comments (2)</h4>
                                <br>

                                <div class="comment main-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment-last">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="comment-form">
                                    <br>

                                    <div class="col-xs-12">
                                        <h4>Leave a Reply</h4>
                                        <br>
                                        <br></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>NAME*</label><span><br><input type="text"></span></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>EMAIL*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>WEBSITE*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <label>YOUR COMMENT*</label>
                                        <br>
                                        <textarea rows="4" cols="8" name="comments"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <input type="submit" value="POST COMMENT" class="submit-button"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="post">
                        <div class="content-r-inner">
                            <div class="blogheader">
                                <h2 class="blogtitle">This is one beautiful car & photo</h2>

                                <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April
                                    30, 2014 <span class="infodivider">/</span> UI, UX, Graphics
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="col-md-6">
                                <div class="blogdata"><span class="firstcharacter">M</span>eh synth Schlitz, tempor duis
                                    single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo
                                    booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil,
                                    flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life
                                    reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br>

                                    <div class="blog-short-info"> The wedding day was something
                                        <br> to behold. It was the most
                                        <br> beautiful experience that I
                                        <br> have ever encountered and the guest
                                        <br> were all there and enjoying the
                                        <br> moment with me. I am so
                                        <br> excited to start my new life with my
                                        <br> beautiful husband.
                                    </div>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level
                                    ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3
                                    wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party
                                    deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                    cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                    <br>
                                    <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon
                                    beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v
                                    chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                <div class="comment featured-cmt">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span></div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <br>
                                <h4>Comments (2)</h4>
                                <br>

                                <div class="comment main-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment sub-comment-last">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comt-pic"><img src="images/comt-pic.png" alt=""></div>
                                    <div class="comt-author">
                                        <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>

                                        <div class="reply-button">/ <a href="#"> Reply</a></div>
                                    </div>
                                    <div class="comt-txt">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam </p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="comment-form">
                                    <br>

                                    <div class="col-xs-12">
                                        <h4>Leave a Reply</h4>
                                        <br>
                                        <br></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>NAME*</label><span><br><input type="text"></span></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>EMAIL*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <label>WEBSITE*</label>
                                        <br>
                                        <input type="text"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <label>YOUR COMMENT*</label>
                                        <br>
                                        <textarea rows="4" cols="8" name="comments"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <br>
                                        <input type="submit" value="POST COMMENT" class="submit-button"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Posts page area ends -->
</div>
<!--Main Home page area ends -->