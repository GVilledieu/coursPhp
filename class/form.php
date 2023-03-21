<?php

    class form{
        public function Input($size, $label, $nom, $type, $placeholder) {
            $un =  '
            <div class="col mt-'.$size.'">
                     <label for="'.$label.'"class="form-label text-light"></label>
                     </div>';

            $deux= '';

            $trois= '<input type="'.$type.'" name="'.$nom.'" class="form-control" id="'.$nom.'" placeholder="'.$placeholder.'"/></input>';

            if($type != "submit"){
                $deux='<label for="'.$nom.'" class="form-label">'.$label.'</label>';
            }

            return $un.$deux.$trois;
        }
    }
