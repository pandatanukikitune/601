<?php get_header(); ?>

 
 
 <main>
<div class="sky"></div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sky.jpg" alt="空の画像"></div>
<div class="insta">    
    <div class="insta-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Instagram_Glyph_Gradient.png" alt="インスタ"></div>
    <a href="https://www.instagram.com/zooo.ol.zq?igsh=MWt4bm91NnY0ZnQwZg%3D%3D&utm_source=qr?ref=badge" target="_blank">
     <div class="follow">Follow Me </div>
    </a>
</div>

    <div class="about" id="about">
        <h2>About</h2>
           <div class="jikosyoukai">
              <div class="face"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/face.jpg" alt="顔"></div>
              <div class="yuuma-left">
                <p class="yuuma">大方悠真</p>
                <ul>
                    <li>24歳　広島県広島市出身</li>
                    <li>広島大学院で「子どもの成績を上げる勉強法・指導法」の開発をしている</li>
                    <li>趣味は旅行・空手・スノーボード・料理・ギターなど</li>
                  
                </ul>
              </div>
           </div>

    <div class="works" id="works">
        <h2>Works</h2>

        <div class="works-content">
            <div class="works-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/student.jpg" alt="子どもの画像"></div>
            <div class="works-left">
                <h3>文章の意味が分からない児童に対して図表活用を促す支援</h3>
                <ul>
                    <li>対象：小学5年生女子</li>
                    <li>期間：2023年4月～2023年８月</li>
                    <li>指導した方略：図表活用方略</li>
                    <li>成果１：文章問題の正答率が向上した</li>
                    <li>成果２：算数に対する自己肯定感の向上</li>                    
                </ul>
            </div>
        </div>


    
        <div>
            <div class="kennkyuu">
                <div class="kennkyuu-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kennkyuu.jpg" alt="研究"></div>
                <div class="kennkyuu-left">
                    <h3>研究計画</h3>
                    <ul>
                        <li>題目：生徒の教訓の質を高める調査研究-ケアレスミスに着目して</li>
                        <li>対象：中学生</li>
                        <li>介入：ケアレスミスの再確認と誤答分析の活動</li>
                        <li>仮説：ケアレスミスの定義づけにより，教訓の質が向上する</li>
                        <li>教訓帰納について<a href="https://www.jstage.jst.go.jp/article/jjep/71/3/71_237/_pdf/-char/ja" target="_blank" class="kotira">こちら</a></li>
                    </ul>
                </div>
        </div>

            </div>
        </div>


    <div class="hobby" id="hobby">
        <h2>Hobby</h2>

        <div class="hobby-content">
           <div>
              <div class="hobby-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fireworks.jpg" alt="旅行"></div>
              <p class="hobby-pad">クリスマスにハウステンボスに行った時の写真。</p>
            </div>  
            
            <div>
                <div class="hobby-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/karate.jpg" alt="空手"></div>
                <p class="hobby-pad">広島大学空手道部の集合写真。</p>
            </div>

            <div>
                <div class="hobby-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snow.jpg" alt="スノボ"></div>
                <p class="hobby-pad">スノーボードに行った時の写真。この時はジャンプ台に行きました。</p>
              </div>

              <div>
                <div class="hobby-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lunch.jpg" alt="料理"></div>
                <p class="hobby-pad">僕はぷーさんのキャラ弁を作りました。</p>
              </div>

              <div>
                <div class="hobby-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/guiter.jpg" alt="ギター"></div>
                <p class="hobby-pad">まだまだ初心者です。音を美しくし，一定のリズムで演奏することが課題です。</p>
                <p class="hobby-pad">演奏は<a href="images/music.mp4" class="music" target="_blank">こちら</a>（森山直太朗：さくら）</p>
              </div>
        </div>

        <div class="access">
            <h2>Access</h2>
            <h3>m235209@hiroshima-u.ac.jp</h3>
        </div>

        <div class="note" id="note">
            <h2>Note</h2>
            <h3>4月18日より日記を付けることにしました。</h3>
            <div class="btn"><a href="<?php echo esc_url(home_url(`/blog`)); ?>" target="_blank">日記</a></div>
        </div>


    </div>



    </div>

 </main>
 <?php get_footer();
