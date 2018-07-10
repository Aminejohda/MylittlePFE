     <?php    $compt= 0;
                          if ($res['nom'] == NULL ) {
                      
               $compt = $compt +1 ;}
                   if ($res['prenom'] == NULL ) {
                      
               $compt = $compt +1 ;}
          
               if ( $res['pwd'] == NULL) {
                 $compt = $compt +1 ;
               }
               if ($res['adresse'] == NULL) {
                 $compt = $compt +1 ;
               }
               if ( $res['email'] == NULL) {
                 $compt = $compt +1 ;
               }
            
               if ( $res['civilite'] == NULL) {
                 $compt = $compt +1 ;
               } 

             
               if ($res['image'] == NULL) {
                 $compt = $compt +1 ;
               }
             
               if ($res['telephone'] == NULL) {
                 $compt = $compt +1 ;
               }
        
                 

               if ($res['lat'] == NULL ) {
                      
               $compt = $compt +1 ;}
               if ($res['lon'] == NULL ) {
                      
               $compt = $compt +1 ;}
               if ($res['gsm'] == NULL ) {
                      
               $compt = $compt +1 ;}
               if ($res['dernier_cnx'] == NULL ) {
                      
               $compt = $compt +1 ;}
                    
             $xxx = ($compt / count($res)) * 100;
             
             
             $tt= number_format($xxx,0);  
             $cor = 100 - $tt;
                 