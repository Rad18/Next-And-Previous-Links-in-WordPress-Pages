            <div class="project-nav">
                <div class="project-nav__row">
                    <?php
                        $pagelist = get_pages( [
                            'child_of'      => 10,
                            'post_type'     => 'page',
                            'sort_column'   => 'post_date',
                            'sort_order'    => 'desc'
                        ] );

                        $pages = array();
                        foreach ($pagelist as $page) {
                            $pages[] += $page->ID;
                        }

                        $current = array_search($post->ID, $pages);
                        $prevID = $pages[$current-1];
                        $nextID = $pages[$current+1];
                        ?>

                        <div class="project-nav__prev">
                            <?php if (!empty($prevID)) { ?>
                                <div class="project-nav__label">Предыдущий проект</div>
                                <div class="project-nav__link"><a href="<?php echo get_permalink($prevID); ?>" rel="prev"><?php echo get_the_title($prevID); ?></a></div> 
                                <div class="project-nav__arrow">
                                    <img src="../img/arrow-left-green.svg" alt="">
                                </div>
                            <?php } ?>
                        </div>

                        <div class="project-nav__next">
                            <?if (!empty($nextID)) { ?>
                                <div class="project-nav__label">Следующий проект</div>
                                <div class="project-nav__link"> <a href="<?php echo get_permalink($nextID); ?>" rel="next"><?php echo get_the_title($nextID); ?></a></div>
                                <div class="project-nav__arrow">
                                    <img src="../img/arrow-right-green.svg" alt="">
                                </div>
                            <?php } ?>
                        </div>
                       
                </div>
            </div>