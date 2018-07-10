     <?php   
      $compt= 0;
                          if ($res['description'] == NULL ) {
                      
               $compt = $compt +1 ;}
                   if ($res['image'] == NULL ) {
                      
               $compt = $compt +1 ;}
               if ($res['nom_commerciale'] == NULL) {
                 $compt = $compt +1 ;
               }
             if ($res['site_web'] == NULL) {
                 $compt = $compt +1 ;
               }
              if ($res['moyen_paiement'] == NULL) {
                 $compt = $compt +1 ;
               }
               if ($res['telephone'] == NULL) {
                 $compt = $compt +1 ;
               }
               if ($res['fax_ent'] == NULL) {
                 $compt = $compt +1 ;
               }
               if ($res['gsm_ent'] == NULL) {
                 $compt = $compt +1 ;
               }
        
               if ( $res['password'] == NULL) {
                 $compt = $compt +1 ;
               }
               if ($res['adresse_ent'] == NULL) {
                 $compt = $compt +1 ;
               }
               if ( $res['email_ent'] == NULL) {
                 $compt = $compt +1 ;
               }
               if ( $res['prenom_dir'] == NULL) {
                 $compt = $compt +1 ;
               }
               if ( $res['nom_dir'] == NULL) {
                 $compt = $compt +1 ;
               }
               if ( $res['civilite_dir'] == NULL) {
                 $compt = $compt +1 ;
               } 
                
                 
               if ( $res['lon'] == 0) {
                 $compt = $compt +1 ;
               }      
             if ( $res['lat'] == 0) {
                 $compt = $compt +1 ;
               }   
               if ( $res['id_cat'] == 0) {
                 $compt = $compt +1 ;
               }     
              
             if ( $res['reponse_demande'] == NULL) {
                 $compt = $compt +1 ;
               }      
                    
             $xxx = ($compt / count($res)) * 100;
             
             
             $tt= number_format($xxx,0);  
             $cor = 100 - $tt;
                 