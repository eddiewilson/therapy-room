<?php $json = json_decode(file_get_contents("https://gothic-depth-602.firebaseio.com/CMS.json?print=pretty", true)); ?>

<section class="team p-top_ms2">
    <div class="content-wrapper">
     <h2 class="col-11 clr_persian-green m-bottom_ms0 font-size_ms7 font_display m-bottom_ms4 p-top_ms2 offset-md-1">Meet Our <br> Team of Therapists</h2>
        <div class="d-flex flex-column no-gutters">
    <?php
        $i = 1;
        foreach($json as $objects => $user) { 
             ?>
             <article class="row col-12 col-md-11 offset-md-1 m-bottom_ms4" style="background-color: <?= $user->Colour; ?>">
                <span class="col-md-1 m-right_ms1 m-top_ms0">
                    <span class="d-flex text_hoop align-items-center justify-content-center">
                        <i class="font_display clr_teal font-size_ms-1"><?= $i++?></i>
                    </span>
                </span>
                <div class="col-md-4">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <h3 class="p-top_ms-2 clr_text-dark m-right_ms-2 text-left font_display text_dark"><?= $user->Name; ?></h3>
                        </div>
                
                    <?php
                        echo '<div class="qualifications">';
                        if(!empty($user->Qualifications)){
                            echo '<p class="clr_text-light font-size_ms-2 text-left no-margin">' . $user->Qualifications . '</p>';
                        } 
                        echo '</div>';
                    ?>
               
                
                    <?php 
                        echo '<div class="therapies m-bottom_ms2">';
                        if(!empty($user->Therapies)){
                            echo  '<p class="p-top_ms-3 clr_text text-uppercase letterspacing font-size_ms-1 line-height_ms0 text-left">' . $user->Therapies . '</p>'; 
                        }
                        echo '</div>';
                    ?>
                    </div>
                </div>
                <?php
               
                    // Split up the contents into an array of strings, separated by double line breaks.
    	            $pees = preg_split('/\n\s*\n/', $user->Bio, -1, PREG_SPLIT_NO_EMPTY);
                        
    	            // Reset $pee prior to rebuilding.
    	            $pee = '';
                        
    	            // Rebuild the content as a string, wrapping every bit with a <p>.
    	            foreach ( $pees as $tinkle ) {
    	                $pee .= '<p>' . trim($tinkle, "\n") . "</p>\n";
                    }
        
                ?>
                <div class="col-md-6">
                    <div class="description m-bottom_ms2 clr_text"><?= $pee; ?></div>
                    <div class="excerpt"></div>
                
                <?php 
                    echo '<ul>'; 
                    if(!empty($user->Links) || (!empty($user->Link_Name))){
                        foreach($user->Links as $index => $link){
                            echo  '<li><a href="' . $link  . '">' . $user->Link_Name[$index] . '</a></li>';   
                        } 
                    } 
                    echo '</ul>';
                ?>
                </div>
            </article>
            <?php 
        }   
    ?>   
        </div>
    </div>
</section>